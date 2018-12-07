package modelDB;
import android.content.Context;
import java.util.Calendar;
import java.util.Date;
import java.util.GregorianCalendar;



public class mClientes {

    public String getPseg() {
        return pseg;
    }

    public void setPseg(String pseg) {
        this.pseg = pseg;
    }

    public String getPter() {
        return pter;
    }

    public void setPter(String pter) {
        this.pter = pter;
    }

    public String getPqua() {
        return pqua;
    }

    public void setPqua(String pqua) {
        this.pqua = pqua;
    }

    public String getPqui() {
        return pqui;
    }

    public void setPqui(String pqui) {
        this.pqui = pqui;
    }

    public String getPsex() {
        return psex;
    }

    public void setPsex(String psex) {
        this.psex = psex;
    }

    public String getPsab() {
        return psab;
    }

    public void setPsab(String psab) {
        this.psab = psab;
    }

    public String getPdom() {
        return pdom;
    }

    public void setPdom(String pdom) {
        this.pdom = pdom;
    }

    public mClientes(int idpub, String cnpj, String fachada, String fotoservidor, String titulo,
                     String nomeEstabelecimento, String endereco, String endereco2, String categoria,
                     String classificacao1, String classificacao2, int destaque, String pcpa,
                     String ischeckin, String validade, String token, String pseg, String pter,
                     String pqua, String pqui, String psex, String psab, String pdom,
                     String pin1, String pin2, String pin3, String pin4, String pin5, String pin6, String pin7, String idsorteio, String pincash) {
        this.idpub = idpub;
        this.cnpj = cnpj;
        this.fachada = fachada;
        this.fotoservidor = fotoservidor;
        this.nomeEstabelecimento = nomeEstabelecimento;
        this.endereco = endereco;
        this.endereco2 = endereco2;
        this.categoria = categoria;
        this.classificacao1 = classificacao1;
        this.classificacao2 = classificacao2;
        this.destaque = destaque;
        this.titulo = titulo;
        this.pcpa = pcpa;
        this.ischeckin = ischeckin;
        this.pseg = pseg;
        this.pter = pter;
        this.pqua = pqua;
        this.pqui = pqui;
        this.psex = psex;
        this.psab = psab;
        this.pdom = pdom;
        this.pin1 = pin1;
        this.pin2 = pin2;
        this.pin3 = pin3;
        this.pin4 = pin4;
        this.pin5 = pin5;
        this.pin6 = pin6;
        this.pin7 = pin7;
        this.idsorteio = idsorteio;
        this.pincash = pincash;

        this.validade = validade;
        this.token = token;
    }

    private int idpub;
    private int destaque;
    private String cnpj;
    private String fachada;
    private String pincash;

    public String getPincash() {
        return pincash;
    }

    public void setPincash(String pincash) {
        this.pincash = pincash;
    }

    public String getFachada() {
        return fachada;
    }

    public void setFachada(String fachada) {
        this.fachada = fachada;
    }

    private String fotoservidor;
    private String endereco2;

    public String getToken() {
        return token;
    }

    public void setToken(String token) {
        this.token = token;
    }

    private String pcpa;
    private String validade;
    private String token;
    private String pseg;
    private String pter;
    private String pqua;
    private String pqui;
    private String psex;
    private String psab;
    private String pdom;
    private String pin1;
    private String pin2;
    private String idsorteio;

    public String getIdsorteio() {
        return idsorteio;
    }

    public void setIdsorteio(String idsorteio) {
        this.idsorteio = idsorteio;
    }

    public String getPin1() {
        return pin1;
    }

    public void setPin1(String pin1) {
        this.pin1 = pin1;
    }

    public String getPin2() {
        return pin2;
    }

    public void setPin2(String pin2) {
        this.pin2 = pin2;
    }

    public String getPin3() {
        return pin3;
    }

    public void setPin3(String pin3) {
        this.pin3 = pin3;
    }

    public String getPin4() {
        return pin4;
    }

    public void setPin4(String pin4) {
        this.pin4 = pin4;
    }

    public String getPin5() {
        return pin5;
    }

    public void setPin5(String pin5) {
        this.pin5 = pin5;
    }

    public String getPin6() {
        return pin6;
    }

    public void setPin6(String pin6) {
        this.pin6 = pin6;
    }

    public String getPin7() {
        return pin7;
    }

    public void setPin7(String pin7) {
        this.pin7 = pin7;
    }

    private String pin3;
    private String pin4;
    private String pin5;
    private String pin6;
    private String pin7;


    public String getValidade() {
        return validade;
    }

    public void setValidade(String validade) {
        this.validade = validade;
    }

    public String getIscheckin() {
        return ischeckin;
    }

    public void setIscheckin(String ischeckin) {
        this.ischeckin = ischeckin;
    }

    private String ischeckin;

    public String getPcpa() {
        return pcpa;
    }

    public void setPcpa(String pcpa) {
        this.pcpa = pcpa;
    }

    public String getTitulo() {
        return titulo;
    }

    public void setTitulo(String titulo) {
        this.titulo = titulo;
    }

    private String titulo;

    public int getDestaque() {
        return destaque;
    }

    public void setDestaque(int destaque) {
        this.destaque = destaque;
    }

    private String categoria;
    private String classificacao1;
    private String classificacao2;

    public String getClassificacao1() {
        return classificacao1;
    }

    public void setClassificacao1(String classificacao1) {
        this.classificacao1 = classificacao1;
    }

    public String getClassificacao2() {
        return classificacao2;
    }

    public void setClassificacao2(String classificacao2) {
        this.classificacao2 = classificacao2;
    }

    public String getEndereco2() {
        return endereco2;
    }

    public void setEndereco2(String endereco2) {
        this.endereco2 = endereco2;
    }

    public String getCategoria() {
        return categoria;
    }

    public void setCategoria(String categoria) {
        this.categoria = categoria;
    }

    public String getCnpj() {
        return cnpj;
    }

    public void setCnpj(String cnpj) {
        this.cnpj = cnpj;
    }

    public String getFotoservidor() {
        return fotoservidor;
    }

    public void setFotoservidor(String fotoservidor) {
        this.fotoservidor = fotoservidor;
    }

    public int getIdpub() {
        return idpub;
    }

    public void setIdpub(int idpub) {
        this.idpub = idpub;
    }

    public String getNomeEstabelecimento() {
        return nomeEstabelecimento;
    }

    public void setNomeEstabelecimento(String nomeEstabelecimento) {
        this.nomeEstabelecimento = nomeEstabelecimento;
    }

    public String getEndereco() {
        return endereco;
    }

    public void setEndereco(String endereco) {
        this.endereco = endereco;
    }

    private String nomeEstabelecimento;
    private String endereco;

    public String RetornaQtdePIN()
    {
        Date datapos = new Date();

        Calendar cal = Calendar.getInstance();
        cal.setTime(datapos );
        cal.add(Calendar.DATE, 0);
        datapos = cal.getTime();

        //  Date des = new Date();

        Calendar c = new GregorianCalendar();

        c.setTime(datapos);

        int dia = c.get(c.DAY_OF_WEEK);

        String txtvalor = "0";

        switch(dia){
            case Calendar.SUNDAY:
                txtvalor = getPin1(); break;
            case Calendar.MONDAY:
                txtvalor = getPin2(); break;
            case Calendar.TUESDAY:
                txtvalor = getPin3(); break;
            case Calendar.WEDNESDAY:
                txtvalor = getPin4(); break;
            case Calendar.THURSDAY:
                txtvalor = getPin5(); break;
            case Calendar.FRIDAY:
                txtvalor = getPin6(); break;
            case Calendar.SATURDAY:
                txtvalor = getPin7(); break;
            default: txtvalor = "0";break;
        }

        return txtvalor;


    }

    public String RetornaDesconto()
    {
        Date datapos = new Date();

        Calendar cal = Calendar.getInstance();
        cal.setTime(datapos );
        cal.add(Calendar.DATE, 0);
        datapos = cal.getTime();

        //  Date des = new Date();

        Calendar c = new GregorianCalendar();

        c.setTime(datapos);

        int dia = c.get(c.DAY_OF_WEEK);

        String txtvalor = "0";

        switch(dia){
            case Calendar.SUNDAY:
                txtvalor = getPdom(); break;
            case Calendar.MONDAY:
                txtvalor = getPseg(); break;
            case Calendar.TUESDAY:
                txtvalor = getPter(); break;
            case Calendar.WEDNESDAY:
                txtvalor = getPqua(); break;
            case Calendar.THURSDAY:
                txtvalor = getPqui(); break;
            case Calendar.FRIDAY:
                txtvalor = getPsex(); break;
            case Calendar.SATURDAY:
                txtvalor = getPsab(); break;
            default: txtvalor = "0";break;
        }

        return txtvalor;


    }


}
