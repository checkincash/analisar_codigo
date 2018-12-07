package modelDB;

/**
 * Created by manoelvieiradasilvaneto on 04/04/2018.
 */

public class mSorteio {

    private String id;
    private String foto_premiacao;
    private String pin_necessario;
    private String label;
    private String data_sorteio;
    private String saldo_usuario;


    public String getId() {
        return id;
    }

    public String getFoto_premiacao() {
        return foto_premiacao;
    }

    public String getPin_necessario() {
        return pin_necessario;
    }

    public String getLabel() {
        return label;
    }

    public String getData_sorteio() {
        return data_sorteio;
    }

    public String getSaldo_usuario() {
        return saldo_usuario;
    }

   public mSorteio(String id, String foto_premiacao, String pin_necessario,
                   String label, String data_sorteio, String saldo_usuario){

        this.id = id;
        this.foto_premiacao = foto_premiacao;
        this.pin_necessario = pin_necessario;
        this.label = label;
        this.data_sorteio = data_sorteio;
        this.saldo_usuario = saldo_usuario;

   }

    public String getRetornaSaldoPinsNecessariosFormatado(){

        int qtde_pin_premio=Integer.parseInt(pin_necessario.replaceAll("[\\D]",""));
        int qtde_saldo_user=Integer.parseInt(saldo_usuario.replaceAll("[\\D]",""));

        int calculo = ( qtde_pin_premio - qtde_saldo_user );

        String msg="";

        if (calculo <= 0 )
        {
           msg = "Parabéns!, Você atingiu a meta";
        }
        else
        {
            msg = "Faltam "+ calculo +" pin's para concorrer";
        }
        return msg;

    }

    public String getRetornaPinsPremioFormatado(){
        return "Concorra com " + pin_necessario + " Pin's";
    }

}
