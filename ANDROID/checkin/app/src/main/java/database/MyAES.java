package database;

import java.security.Key;

import javax.crypto.Cipher;
import javax.crypto.spec.IvParameterSpec;
import javax.crypto.spec.SecretKeySpec;

/**
 *·   Principio:
 o    Existe uma matriz com os bits de entrada.
 o    Faz-se substituição por S-box. (Confusão)
 o    ShiftRows: Gera-se deslocamento nas linhas da matriz. Permutação
 o    MixColumns: Combinação das colunas. Permutação
 o    AddRoundKey: Função XOR. Função
 o    São feitos:
 ·  10 passos à Chave 128 bits.
 · 12 passos à Chave 192 bits.
 · 14 passos à Chave 256 bits


 ·  Como funciona o AES:


 ·  O AES é um algoritmo que trabalha byte a byte, porém é considerado uma cifra de bloco preferencialmente. Vejamos como ele opera:
 o    1º - Conversão dos dados em uma matriz.
 §  Pois bem, para começar o AES recebe os dados da de algum algoritmo de cifração e então os organiza em uma matriz de 4x4, de forma que serão acondicionados 16 bytes dentro dessa matriz.
    Não havendo quantidade suficiente, haverá o padding (termo utilizado quando precisamos completar o bloco, por exemplo se não tivermos 16 Bytes, mas sim 12 teremos de completar
    com Zeros até chegarmos em 16 Bytes.).
 o    2º - Primeira rodada
 §  Feita a conversão dos dados na matriz de operação (confusão), então AES irá realizar a primeira rodada de cifração. Uma simples operação XOR com a Chave da primeira rodada.
 o    3º - A Expansão.
 §  De acordo com o tamanho da chave, lembrem-se o AES deriva-se do RINJDAEL, que possui chaves de 128, 160, 192, 224 e 256 bits, que por padrão do Governo americano será de 128, 192 e 256 bits, temos a quantidades de rodadas de cifração. Dessa forma, 128 bits nos trarão 9 rodadas. Para isso precisamos expandir a chave inicial. Sendo assim vejamos:
 ·         1ª fase – Colunas
 o    Para a expansão, então, iremos utilizar a última coluna da última chave utilizada. Por exemplo: se fizermos a segunda chave utilizaremos a última coluna da primeira chave.
 o    Iremos trazer o último byte dessa coluna para a primeira posição.
 o    Feita essa troca, iremos inserir essa coluna em um s-box. Teremos nossa primeira substituição.
 ·         2ª fase – XOR
 o    Feita a s-box, temos agora que realizar uma XOR com uma constante.
 o    Agora de posse dessa nova coluna, temos que realizar mais um XOR agora com a primeira coluna da chave anterior. No nosso exemplo, a primeira coluna.
 o    Temos pronta a primeira coluna da próxima chave.
 ·         3ª fase – Outras colunas
 o    De posse da primeira coluna da próxima chave, agora temos de descobrir as outras colunas.
 o    Faremos da seguinte forma: coluna anterior XOR coluna correspondente na chave anterior. Por exemplo: para definirmos a 3ª coluna, ela será a 2ª coluna XOR 3ª coluna da chave anterior.
 o    4ª – Rodadas
 §  Após definirmos as chaves, iremos a seguir realizar as rodadas necessárias para o tamanho da chave.
 o    5ª – Confusão e difusão.
 §  Após as rodadas iremos agora, de posse do novo texto quase cifrado, aplicar mais uma vez a s-box. Essa ação é necessária para aplicarmos a confusão na nossa cifração.
 §  Feitas as s-box, iremos agora movimentar nossa linhas para aplicar a difusão. Faremos assim, a primeira linha desloca-se um byte para a esquerda e o que sobrar irá par ao final da linha. A segunda irá deslocar-se 2 posições a esquerda e os dois que sobrarem para o final da linha. Faremos assim até a quarta linha, sempre aumentando o numero de bytes que voltam para o final da linha.
 §  Para terminar nossa difusão, iremos misturar as colunas.
 o    6ª – Mais uma chave
 §  Ao final de cada rodada, iremos aplicar a chave da próxima rodada no nosso texto atual.
 o    7ª – só pra terminar
 §  Terminando iremos misturar as colunas mais uma vez para aumentar a segurança. Lembrando que isso não será feito na ultima rodada.
 */

public class MyAES {

    private final String ALGORITIMO = "AES/CTR/NoPadding";
    private String chave = "140b41b22a29beb4061bda66b6747e14";
    private String iv = "1234567890123456";
    private byte[] arrayResult;
    private char[] hexDig;
    private Key chaveAES;
    private IvParameterSpec ivps;



    public MyAES()
    {

        byte[] ivArray = Conversores.converteASCIIparaByteArray(iv, false); // no IV não precisamos de padding
        ivps = new IvParameterSpec(ivArray);

        byte[] chaveArray = Conversores.converteHexStringToByteArray(chave);
        chaveAES = new SecretKeySpec(chaveArray, "AES");

    }

    public String encriptar(String texto) throws Exception
    {

        Cipher c = Cipher.getInstance(ALGORITIMO);
        c.init(Cipher.ENCRYPT_MODE, chaveAES, ivps);

        byte[] textoArray = Conversores.converteHexStringToByteArray(texto);
        byte[] cipherText = c.doFinal(textoArray);


        return Conversores.converteByteArrayToHexString(cipherText);
    }

    public String desencriptar(String texto) throws Exception
    {

        Cipher c = Cipher.getInstance(ALGORITIMO);
        c.init(Cipher.DECRYPT_MODE, chaveAES, ivps);

        byte[] textoArray = Conversores.converteHexStringToByteArray(texto);
        byte[] mensagem = c.doFinal(textoArray);


        return Conversores.converteByteArrayToHexString(mensagem);
    }
}
