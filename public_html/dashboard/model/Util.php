<?php

class Util {

    public static function getLatitudeLongitude($address) {
        $request_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=" . $address . "&sensor=true";
        $xml = simplexml_load_file($request_url) or die("url nao carregada");
        $status = $xml->status;
        $latitude = '';
        $longitude = '';
        if ($status == "OK") {
            $latitude = $xml->result->geometry->location->lat;
            $longitude = $xml->result->geometry->location->lng;
        }

        return array(
            'latitude' => (string) $latitude,
            'longitude' => (string) $longitude
        );
    }

    public static function getRash() {
        $chars = 'abcdefghijklmnopqrstuvxywz';
        $chars .= 'ABCDEFGHIJKLMNOPQRSTUVXYWZ';
        $chars .= '0123456789!@$*.,;:';
        $max = strlen($chars) - 1;
        $act_code = "sec_";
        for ($i = 0; $i < 28; $i++) {
            $act_code .= $chars{mt_rand(0, $max)};
        }

        return $act_code;
    }

    public static function buscaCep($cep) {
        $resultado_busca = static::act_cep($cep);
        $rua = '';
        $bairro = '';
        $cidade = '';
        $estado = '';
        $msg = '';
        switch ($resultado_busca['resultado']) {
            case '2':
                // Cidade com logradouro único
                $cidade = utf8_encode($resultado_busca['cidade']);
                $estado = $resultado_busca['uf'];
                break;
            case '1':
                // {cliente_tipo_logradouro} = $resultado_busca['tipo_logradouro'];
                $rua = utf8_encode($resultado_busca['logradouro']);
                $bairro = utf8_encode($resultado_busca['bairro']);
                $cidade = utf8_encode($resultado_busca['cidade']);
                $estado = $resultado_busca['uf'];
                break;
            default:
                $msg = "CEP " . $cep . " não encontrado";
                break;
        }

        return array(
            'rua' => $rua,
            'bairro' => $bairro,
            'cidade' => $cidade,
            'estado' => $estado,
            'msg' => $msg
        );
    }

    private static function act_cep($cep) {
        $retorno = array();
        $resultado = @file_get_contents('http://republicavirtual.com.br/web_cep.php?cep=' . urlencode($cep) . '&formato=query_string');
        if (!$resultado) {
            $resultado = "&resultado=0&resultado_txt=erro+ao+buscar+cep";
        }
        parse_str($resultado, $retorno);
        return $retorno;
    }

    public static function validaCpfCnpj($doc) {
        switch (strlen($doc)) {
            case 11:
                $valido = self::validaCPF($doc);
                break;
            case 14:
                $valido = self::validaCNPJ($doc);
                break;
            default:
                $valido = false;
                break;
        }

        return $valido;
    }

    // VERIFICA CPF
    private static function validaCPF($cpf) {
        $invalidos = array(
            '00000000000',
            '11111111111',
            '22222222222',
            '33333333333',
            '44444444444',
            '55555555555',
            '66666666666',
            '77777777777',
            '88888888888',
            '99999999999',
        );

        if (strlen($cpf) <> 11 || in_array($cpf, $invalidos))
            return false;

        $soma = 0;

        // Verifica 1º digito      
        for ($i = 0; $i < 9; $i++) {
            $soma += (($i + 1) * $cpf[$i]);
        }

        $d1 = ($soma % 11);

        if ($d1 == 10) {
            $d1 = 0;
        }

        $soma = 0;

        // Verifica 2º digito
        for ($i = 9, $j = 0; $i > 0; $i--, $j++) {
            $soma += ($i * $cpf[$j]);
        }

        $d2 = ($soma % 11);

        if ($d2 == 10) {
            $d2 = 0;
        }

        if ($d1 == $cpf[9] && $d2 == $cpf[10]) {
            return true;
        } else {
            return false;
        }
    }

    // VERFICA CNPJ
    private static function validaCNPJ($cnpj) {
        $invalidos = array(
            '00000000000000',
            '11111111111111',
            '22222222222222',
            '33333333333333',
            '44444444444444',
            '55555555555555',
            '66666666666666',
            '77777777777777',
            '88888888888888',
            '99999999999999',
        );

        if (strlen($cnpj) <> 14 || in_array($cnpj, $invalidos))
            return false;

        $soma = 0;

        $soma += ($cnpj[0] * 5);
        $soma += ($cnpj[1] * 4);
        $soma += ($cnpj[2] * 3);
        $soma += ($cnpj[3] * 2);
        $soma += ($cnpj[4] * 9);
        $soma += ($cnpj[5] * 8);
        $soma += ($cnpj[6] * 7);
        $soma += ($cnpj[7] * 6);
        $soma += ($cnpj[8] * 5);
        $soma += ($cnpj[9] * 4);
        $soma += ($cnpj[10] * 3);
        $soma += ($cnpj[11] * 2);

        $d1 = $soma % 11;
        $d1 = $d1 < 2 ? 0 : 11 - $d1;

        $soma = 0;
        $soma += ($cnpj[0] * 6);
        $soma += ($cnpj[1] * 5);
        $soma += ($cnpj[2] * 4);
        $soma += ($cnpj[3] * 3);
        $soma += ($cnpj[4] * 2);
        $soma += ($cnpj[5] * 9);
        $soma += ($cnpj[6] * 8);
        $soma += ($cnpj[7] * 7);
        $soma += ($cnpj[8] * 6);
        $soma += ($cnpj[9] * 5);
        $soma += ($cnpj[10] * 4);
        $soma += ($cnpj[11] * 3);
        $soma += ($cnpj[12] * 2);


        $d2 = $soma % 11;
        $d2 = $d2 < 2 ? 0 : 11 - $d2;

        if ($cnpj[12] == $d1 && $cnpj[13] == $d2) {
            return true;
        } else {
            return false;
        }
    }

    public static function removerAcentos($string){
        return preg_replace(array(
            "/(á|à|ã|â|ä)/",
            "/(Á|À|Ã|Â|Ä)/",
            "/(é|è|ê|ë)/",
            "/(É|È|Ê|Ë)/",
            "/(í|ì|î|ï)/",
            "/(Í|Ì|Î|Ï)/",
            "/(ó|ò|õ|ô|ö)/",
            "/(Ó|Ò|Õ|Ô|Ö)/",
            "/(ú|ù|û|ü)/",
            "/(Ú|Ù|Û|Ü)/",
            "/(ñ)/",
            "/(Ñ)/",
            "/(ç)/",
            "/(Ç)/"
            ),explode(" ","a A e E i I o O u U n N c C"),$string);
    }
}