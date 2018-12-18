<?php

/*
	Classe:         Upload
	Função:         Objeto responsavel por realizar upload de arquivos.
	Programada por: Rafael Wendel Pinheiro - Email: rafaelwendel@hotmail.com
        Adaptada por:   Guilherme Pacheco Aparício - Email: guiaparicio@gmail.com
	Data:           21/06/2014
*/

class Upload {

    protected $arquivo;
    protected $extensao;
    protected $pasta;
    protected $pathArquivo;
    protected $nomeArquivo = null;
    protected $extensoesPermitidas = array();
    protected $limiteTamanho = 2;
    protected $sobrescrever = true;
    protected $erros;
    protected $mensagens = array();
    protected $linguagem = 'pt';

    public function __construct($arquivo = '', $pasta = '', $nomeArquivo = '', $linguagem = 'pt'){

        if(!empty($arquivo)){
            $this->setArquivo($arquivo);
        }

        if(!empty($pasta)){
            $this->setPasta($pasta);
        }

        if(!empty($nomeArquivo)){
            $this->setNomeArquivo($nomeArquivo);
        }


        $this->setLinguagem($linguagem);
        $this->setMensagens();
    }

    public function getNomeArquivo($ext = false){
        $nome = $this->nomeArquivo;
        if($ext) {
            $nome .= '.'.$this->extensao;
        }
        return $nome;
    }

    protected function setMensagens(){

        $this->mensagens['en'] = array(
            '1' => 'File is not set',
            '2' => 'Uploads folder is not set or no exists',
            '3' => 'Files of type {{exts}} are not allowed',
            '4' => 'The file size is larger than {{max_size}}MB',
            '5' => 'Error when uploading'
        );

        $this->mensagens['pt'] = array(
            '1' => 'Arquivo não setado',
            '2' => 'Pasta de uploads não definida ou não existe',
            '3' => 'Arquivos do tipo {{exts}} não são permitidos',
            '4' => 'O tamanho do arquivo é maior que {{max_size}}MB',
            '5' => 'Erro ao fazer upload'
        );
    }

    public function setLinguagem($linguagem){
        $this->linguagem = ($linguagem == 'en' || $linguagem == 'pt' ? $linguagem : 'en');
    }

    public function setArquivo($arquivo){
        $this->arquivo = $arquivo;
        $this->setExtensao($arquivo);
    }
    protected function setExtensao($arquivo){
        $this->extensao = strtolower(end(explode('.', $arquivo['name'])));
    }

    public function setPasta($pasta){
        if (substr ($pasta, -1) == '/'){
            $this->pasta = $pasta;
        }
        else{
            $this->pasta = $pasta . '/';
        }
    }

    public function setNomeArquivo($nomeArquivo){
        $this->nomeArquivo = $nomeArquivo;
    }

    public function setLimiteTamanho($limiteTamanho){
        $this->limiteTamanho = $limiteTamanho;
    }

    public function setExtensoesPermitidas($extensoesPermitidas){

        if (is_array($extensoesPermitidas)){
            $this->extensoesPermitidas = $extensoesPermitidas;
        }

        if (is_string($extensoesPermitidas)){
            $this->extensoesPermitidas[] = $extensoesPermitidas;
        }
    }


    public function setSobrescrever($sobrescrever){
        $this->sobrescrever = (bool) $sobrescrever;
    }

    protected function setErros($erro){
        $this->erros = $this->mensagens[$this->linguagem][$erro];
    }

    public function getErros(){
        $this->erros = str_replace('{{exts}}', $this->extensao, $this->erros);
        $this->erros = str_replace('{{max_size}}', $this->limiteTamanho, $this->erros);
        return $this->erros;
    }

    public function getPathArquivo(){
        return $this->pathArquivo;
    }

    protected function nome(){
        $tmp_name = explode('.', $this->arquivo['name']);
        unset($tmp_name[count($tmp_name) - 1]);

        $this->nomeArquivo = implode('.', $tmp_name);
    }

    protected function sobrescrever(){
        if (!$this->sobrescrever){
            $tmp_name = $this->nomeArquivo;
            $x = 1;

            while (file_exists($this->pasta . $this->nomeArquivo . '.' . $this->extensao)){
                $this->nomeArquivo = $tmp_name . '_' . $x;
                $x++;
            }
        }
    }

    protected function validacao(){
        if (empty ($this->arquivo['name'])){
            $this->setErros(1);
            return false;
        }
        if (empty ($this->pasta) || !file_exists($this->pasta)){
            $this->setErros(2);
            return false;
        }
        if (!in_array ($this->extensao, $this->extensoesPermitidas)){
            $this->setErros(3);
            return false;
        }
        if (!$this->validaTamanho()){
            $this->setErros(4);
            return false;
        }
        return true;
    }

    protected function validaTamanho(){
        $file_size = $this->arquivo['size'];
        $file_size = ($file_size / 1024) / 1024;
        if ($file_size > $this->limiteTamanho){
            return false;
        }
        return true;
    }

    public function uploadArquivo(){
        if (!$this->validacao()){
            return false;
        }

        if (!isset ($this->nomeArquivo)){
            $this->nome();
        }

        $this->sobrescrever();

        if (move_uploaded_file ($this->arquivo['tmp_name'], $this->pasta . $this->nomeArquivo . '.' . $this->extensao)){
            $this->pathArquivo = $this->pasta . $this->nomeArquivo . '.' . $this->extensao;
            return true;
        }
        else{
            $this->setErros(5);
            return false;
        }
    }

    public function UploadArquivoRedimensionado($largura, $altura){

        if (!$this->validacao()){
            return false;
        }
        else{
            $this->largura = $largura;
            $this->altura  = $altura;


            if ($this->arquivo['type']=="image/jpeg"){
                $img = imagecreatefromjpeg($this->arquivo['tmp_name']);
            }else if ($this->arquivo['type']=="image/gif"){
                $img = imagecreatefromgif($this->arquivo['tmp_name']);
            }else if ($this->arquivo['type']=="image/png"){
                $img = imagecreatefrompng($this->arquivo['tmp_name']);
            }

            $x   = imagesx($img);
            $y   = imagesy($img);

            $nova = imagecreatetruecolor($this->largura, $this->altura);

            imagecopyresampled($nova, $img, 0, 0, 0, 0, $this->largura, $this->altura, $x, $y);

            if ($this->arquivo['type']=="image/jpeg"){
                $local="$this->pasta/$this->nomeArquivo".".jpg";
                imagejpeg($nova, $local, 100);
            }else if ($this->arquivo['type']=="image/gif"){
                $local="$this->pasta/$this->nomeArquivo".".gif";
                imagejpeg($nova, $local, 100);
            }else if ($this->arquivo['type']=="image/png"){
                $local="$this->pasta/$this->nomeArquivo".".png";
                imagejpeg($nova, $local, 100);
            }

            $this->pathArquivo = $this->pasta . $this->nomeArquivo . '.' . $this->extensao;

            imagedestroy($img);
            imagedestroy($nova);

            return $local;

        }
    }
}