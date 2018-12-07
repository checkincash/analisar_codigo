package modelDB;

/**
 * Created by manoelvieiradasilvaneto on 03/04/2018.
 */

public class mLocais {

    private String fk_usuario;
    private String data_lancamento;
    private String fk_contrato_publicador;
    private String razao;
    private String cnpj;
    private String fachada;
    private String pincash_qtde;
    private String desconto_recebido;
    private String token;
    private String token_validado;
    private String saldopin;


    public String getFk_usuario() {
        return fk_usuario;
    }

    public String getData_lancamento() {
        return data_lancamento;
    }

    public String getFk_contrato_publicador() {
        return fk_contrato_publicador;
    }

    public String getRazao() {
        return razao;
    }

    public String getCnpj() {
        return cnpj;
    }

    public String getFachada() {
        return fachada;
    }

    public String getPincash_qtde() {
        return pincash_qtde;
    }

    public String getDesconto_recebido() {
        return desconto_recebido;
    }

    public String getToken() {
        return token;
    }

    public String getToken_validado() {
        return token_validado;
    }

    public String getSaldopin() {
        return saldopin;
    }

    public mLocais(String fk_usuario, String data_lancamento, String fk_contrato_publicador,
                   String razao, String cnpj, String fachada, String pincash_qtde, String desconto_recebido,
                   String token, String token_validado, String saldopin){

        this.fk_usuario = fk_usuario;
        this.data_lancamento = data_lancamento;
        this. fk_contrato_publicador = fk_contrato_publicador;
        this.razao = razao;
        this.cnpj = cnpj;
        this.fachada = fachada;
        this.pincash_qtde = pincash_qtde;
        this.desconto_recebido = desconto_recebido;
        this.token = token;
        this.token_validado = token_validado;
        this.saldopin = saldopin;

    }

    public String getRetornaTokenFormatado(){

        return "Token: " + token;
    }

    public String getRetornaDescontoFormatado(){

        int desc=Integer.parseInt(desconto_recebido.replaceAll("[\\D]",""));

        desc = desc / 100;

        return "Você Ganhou " + desc + "% de desconto";

    }

    public String getRetornoPinsFormatado()
    {
        return   "" + pincash_qtde + " Pin Cash";
    }

    public String getRetornoDataLanFormatado()
    {
        String[] data = data_lancamento.split("-");
        // String[] hora = data[2].split(" ");
        String txtData = data[2] + "/" + data[1] + "/" + data[0];


        return  txtData;

    }


}
