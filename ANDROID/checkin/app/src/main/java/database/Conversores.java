package database;

/**
 * Created by User on 21/09/2017.
 */

public class Conversores {


    private static byte[] arrayResult;

    public static byte[] converteASCIIparaByteArray(String s, boolean padding){

        //O AES exige que a string seja multipla de 16 bytes, vamos acrescentar um padding
        int tamanho; // padding a ser feito
        if(padding)
        {
            //quanto vai sobarar?
            tamanho = s.length() % 16;  // resto

            //tenho que saber de alguma forma que é multiplo de 16
            if(tamanho==0)
                tamanho=16;
        }
        else
        {
            //se nao tem padding, nada a acrescentar

            tamanho=0;
        }

        arrayResult = new byte[s.length() + tamanho];

        for(int i =0; i <s.length(); i++){
            arrayResult[i] = (byte) s.charAt(i); //temos que fazer o cast para byte

        }

        byte pad = (byte) tamanho; // so para nao fazer o cast dentro do loop for
        for(int i = s.length(); i < s.length()+tamanho;i++){
            arrayResult[i] = pad;
        }

        return arrayResult;
    }

    public static String converteByteArrayToHexString(byte[] a){

        //variavel auxiliar

        char[] hexDig = {'0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F'};


        StringBuffer buf = new StringBuffer();  // para acumularmos as concversoes

        for(int i =0; i<a.length; i++){
            buf.append(hexDig[(a[i] >> 4) & 0x0f]); // 4 bits superiores
            buf.append(hexDig[a[i]  & 0x0f]); // 4 bits inferiores
        }

        return buf.toString();
    }

    public static byte[] converteHexStringToByteArray(String s)
    {

        int tamanho = s.length() /2; //lembre que cada 2 caracteres sao um byte
        byte[] arrayResult = new byte[tamanho];

        for(int i =0; i<tamanho;i++){
            String hex = s.substring(i*2, i*2+2); // queremos dois caracteres
            Integer valor = Integer.parseInt(hex, 16); // transforma usando base 16
            arrayResult[i] = valor.byteValue(); // pegamos o byte
        }

        return arrayResult;
    }
}
