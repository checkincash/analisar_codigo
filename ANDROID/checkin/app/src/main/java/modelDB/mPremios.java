package modelDB;

/**
 * Created by manoelvieiradasilvaneto on 02/04/2018.
 */

public class mPremios {

    public mPremios(String pk_mov_sorteio_mv, String fk_cabe_sorteio, String foto_premiacao,
                    String texto_premiacao, String pincash_premio) {

        this.pk_mov_sorteio_mv = pk_mov_sorteio_mv;
        this.fk_cabe_sorteio = fk_cabe_sorteio;
        this.foto_premiacao = foto_premiacao;
        this.texto_premiacao = texto_premiacao;
        this.pincash_premio = pincash_premio;

   }


    private String pk_mov_sorteio_mv;
    private String fk_cabe_sorteio;

    public String getPk_mov_sorteio_mv() {
        return pk_mov_sorteio_mv;
    }


    public String getFk_cabe_sorteio() {
        return fk_cabe_sorteio;
    }


    public String getFoto_premiacao() {
        return foto_premiacao;
    }


    public String getTexto_premiacao() {
        return texto_premiacao;
    }


    public String getPincash_premio() {
        return pincash_premio;
    }


    private String foto_premiacao;
    private String texto_premiacao;
    private String pincash_premio;


    private String TextoPremiacaoFormatado;
    private String TextoPinsFormatado;


    public String getTextoPremiacaoFormatado() {
        return    " ‟" + texto_premiacao + "〞 ";
    }

    public String getTextoPinsFormatado() {

       return "Concorra a este prêmio com " + pincash_premio + " pin's";
    }

}
