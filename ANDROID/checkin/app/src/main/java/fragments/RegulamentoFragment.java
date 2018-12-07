package fragments;


import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import br.com.alphasolutions.checkin.R;


/**
 * A simple {@link Fragment} subclass.
 */
public class RegulamentoFragment extends Fragment {

    private TextView regulamento;

    public RegulamentoFragment() {
        // Required empty public constructor
    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        View view = inflater.inflate(R.layout.fragment_regulamento, container, false);

        regulamento = (TextView) view.findViewById(R.id.textViewRegulamentoID);


        regulamento.setText("REGULAMENTO\n" +
                "\n" +
                "“PROMOÇÃO SHOW DE PRÊMIOS”\n" +
                "\n" +
                "CERTIFICADO DE AUTORIZAÇÃO CAIXA N º 4-1319/2017\n" +
                "\n" +
                "1. Empresa Requerente. MONDELEZ BRASIL NORTE NORDESTE LTDA.,  doravante denominada simplesmente “PROMOTORA”, inscrita no CNPJ/MF nº. 10.144.076/0001-44, com sede na Rodovia Luiz Gonzaga, S/N, BR 232, Km 51, CEP 55.600-000, Vitória de Santo Antão/PE, Brasil.\n" +
                "\n" +
                "2. Modalidade da Distribuição Gratuita de Prêmios. A distribuição gratuita de prêmios realizar-se-á na modalidade assemelhada a sorteio.\n" +
                "\n" +
                "3. Área de Execução.  A presente promoção será válida, única e exclusivamente, para consumidores pessoas físicas - com idade igual ou superior aos dezesseis (16) anos completos na data do cadastro, residentes e domiciliadas no território nacional.\n" +
                "\n" +
                "4. Produtos (objetos da promoção comercial).  Participam dessa promoção os produtos (Preparados Sólidos para Refresco) das marcas participantes Tang (Tang e Tang Chá, Nosso Mix e Laranja Citrus/Docinha), Clight e Fresh (“Produtos das marcas participantes”).\n" +
                "\n" +
                "4.1.  Não participarão da promoção as embalagens promocionais das marcas participantes existentes no mercado ou que venham a ser comercializadas, durante a vigência da promoção.\n" +
                "\n" +
                "5. Prazo de Execução.\n" +
                "\n" +
                "5.1.  A promoção iniciar-se-á no dia 15/09/2017 e encerrar-se-á no dia 20/12/2017 (data final de apuração dos resultados).\n" +
                "\n" +
                "5.1.1.  Para fins dessa promoção serão consideradas as compras de produtos participantes realizadas, no período de 01/09/2017 a 15/12/2017, ressaltando-se que a participação na promoção se iniciará no dia 15/09/2017, conforme item anterior.\n" +
                "\n" +
                "5.2. Período de participação:  A partir das 00h00m do dia 15/09/2017 até as 23h59m (horário de Brasília) do dia 15/12/2017.\n" +
                "\n" +
                "6. Descrição da Mecânica.\n" +
                "\n" +
                "6.1.  Essa promoção realizar-se-á na modalidade sorteio e será executada, de forma conjunta, com outra modalidade de distribuição gratuita de prêmios: assemelhada a vale-brinde, desta forma, as participações nas duas modalidades estão diretamente ligadas.\n" +
                "\n" +
                "6.1.1. Os termos de participação da modalidade vale-brinde estão descritos em REGULAMENTO próprio.\n" +
                "\n" +
                "6.2. Condição de participação.  Durante o período válido de participação, na compra de dez [10] unidades e seus múltiplos de bebidas das marcas Tang [Tang e Tang Chá], Clight e Fresh, numa única Nota Fiscal ou único Cupom Fiscal [não será aceito documento fiscal emitido, de forma manual, nem a somatória de produtos participantes em Notas ou Cupons Fiscais distintos], o consumidor (pessoa física - com idade igual ou superior aos dezesseis anos de idade, residente e domiciliado no território nacional) poderá participar da promoção para concorrer ao sorteio dos prêmios prometidos, conforme descrito nesse REGULAMENTO.\n" +
                "\n" +
                "6.2.1.  Os consumidores interessados com idade entre dezesseis (16) a dezoito (18) anos completos na data de cadastro estarão autorizados a participar e a receber eventual prêmio desta promoção, desde que assistidos por seus pais ou responsáveis legais (item 9.1.3.1)e atendidos os demais requisitos desse REGULAMENTO.\n" +
                "\n" +
                "6.2.2.  Cumprida a condição de compra acima (6.2), o consumidor poderá se cadastrar na promoção para concorrer ao sorteio dos prêmios prometidos.\n" +
                "\n" +
                "6.2.3.  Cada nota fiscal ou cupom fiscal emitido nos termos do item 6.2 poderá ser cadastrado uma única vez.\n" +
                "\n" +
                "6.2.4.  Durante toda a promoção, cada participante estará restrito ao limite de 10 participações por mês (cada participação tem 10 produtos), no total de 100 produtos por mês.\n" +
                "\n" +
                "6.2.4.1.  O controle do limite de participação será realizado pelo sistema da promoção que armazenará as informações inseridas no cadastro por CPF, as eventuais tentativas de cadastros que não estejam de acordo com o disposto no item anterior serão bloqueadas.\n" +
                "\n" +
                "6.2.4.2.  O cadastro realizado deve sempre ser referente à embalagem identificada a Nota ou Cupom Fiscal. No caso da compra de embalagem do tipo display ou caixa (que possui mais de uma unidade embalada individualmente em seu interior), deve-se cadastrar a unidade individual que compõe a caixa. Respeitando o limite de 10 unidades para uma participação.\n" +
                "\n" +
                "6.2.4.2.1.  A ausência da apresentação da nota fiscal, em 5 (cinco) dias de sua solicitação pela PROMOTORA, ensejará a desclassificação do participante, a qualquer tempo.\n" +
                "\n" +
                "6.2.4.2.2.  A simples apresentação da nota fiscal não garante a regularidade de participação, que será comprovada pelo atendimento a todos os itens deste Regulamento.\n" +
                "\n" +
                "6.2.4.2.3.  A nota fiscal deverá estar emitida para o participante inscrito; na hipótese da nota fiscal estar nome de outra pessoa, ainda que pessoa jurídica, a Promotora avaliará a participação, decidindo por sua regularidade ou exclusão.\n" +
                "\n" +
                "6.2.5. Condição para entrega do prêmio.  Como condição para entrega do prêmio, a PROMOTORA poderá exigir do contemplado a apresentação de todas as notas/cupons fiscais de compra dos produtos participantes cadastrados na promoção, sob pena de perda do direito ao prêmio.\n" +
                "\n" +
                "6.3. Forma de participação.\n" +
                "\n" +
                "6.3.1. CADASTRO (CADASTRO SITE):  O consumidor deverá estar conectado à internet para acessar o site www.casadepremiostang.com.br e realizar o seu cadastro/inscrição, preenchendo a tela do formulário de participação com as informações obrigatórias abaixo solicitadas:\n" +
                "\n" +
                "- DADOS DA COMPRA:\n" +
                "\n" +
                "Data de compra do(s) produto(s) participante(s)*;\n" +
                "· Número do comprovante fiscal de compra emitido durante o período válido de participação*, conforme especificado abaixo:\n" +
                "\n" +
                "i) Para os participantes que adquirirem produtos objetos da promoção, mediante a emissão de Cupom Fiscal, o número do seu comprovante fiscal é o COO;\n" +
                "\n" +
                "ii) Para os participantes que adquirirem produtos objetos da promoção, mediante a emissão de Cupom Fiscal eletrônico – SAT, o número do seu comprovante fiscal é o número do Extrato;\n" +
                "\n" +
                "iii) Para os consumidores que adquirirem os produtos participantes, mediante a emissão de Nota fiscal, o número do seu comprovante fiscal é o número da Nota fiscal;\n" +
                "\n" +
                "iv) Para os participantes que adquirirem produtos objetos da promoção, mediante a emissão de Nota Fiscal - DANFE, o número do seu comprovante fiscal é o número do DANFE e;\n" +
                "\n" +
                "v) Para os participantes que adquirirem produtos objetos da promoção, mediante a emissão de Nota Fiscal de Consumidor Eletrônica – NFC-e, o número do seu comprovante fiscal é o número da NFC-e.\n" +
                "\n" +
                "ü Cada comprovante fiscal de compra dos produtos participantes poderá ser cadastrado uma única vez na Promoção.\n" +
                "\n" +
                "Selecionar quantidade e produtos participantes adquiridos*;\n" +
                "CNPJ/MF da loja emissora da nota fiscal*;\n" +
                "- DADOS PESSOAIS:\n" +
                "\n" +
                "- Nome completo*\n" +
                "\n" +
                "- CPF*\n" +
                "\n" +
                "- Senha*\n" +
                "\n" +
                "- Confirme sua senha*\n" +
                "\n" +
                "- Data de nascimento* (dia/mês/ano)\n" +
                "\n" +
                "- E-mail*\n" +
                "\n" +
                "- Confirme seu e-mail*\n" +
                "\n" +
                "- CEP*\n" +
                "\n" +
                "- Endereço*\n" +
                "\n" +
                "- Número*\n" +
                "\n" +
                "- Complemento*\n" +
                "\n" +
                "- Bairro*\n" +
                "\n" +
                "- Cidade*\n" +
                "\n" +
                "- UF*\n" +
                "\n" +
                "- DDD/telefone fixo de contato ou recado*\n" +
                "\n" +
                "- DDD/telefone móvel celular*\n" +
                "\n" +
                "- Código de Segurança* (Captcha)\n" +
                "\n" +
                "- Assinalar a opção “Li e concordo com os termos do Regulamento desta promoção”*\n" +
                "\n" +
                "-  Assinalar a opção “Gostaria de receber informações de promoções”.\n" +
                "\n" +
                "*Campos de preenchimento obrigatório\n" +
                "\n" +
                "6.3.1.1.  Será permitida, ainda, a inscrição do interessado pelo aplicativo Promo de Bolso, que poderá ser baixado, de forma gratuita, na App Store ou no Google Play ou através do site www.promodebolso.com.br.\n" +
                "\n" +
                "6.3.1.1.1.  Cumpre esclarecer que App Store e Google Play acima referidos são meramente os locais em que o aplicativo pode ser localizado, não havendo qualquer envolvimento das marcas Apple e Google nessa promoção.\n" +
                "\n" +
                "6.3.1.2.  Ainda, o interessado em participar que possua uma conta válida na rede social Facebook poderá se inscrever na promoção através doFacebook Connect ou através do ChatBot pela fan page do Facebook.\n" +
                "\n" +
                "6.3.1.2.1.  Esta promoção não é de nenhuma forma implementada com patrocínio, administração ou associação do Facebook, sendo promovido pela PROMOTORA que desenvolveu a promoção, de forma autônoma e independente, sendo a única responsável pela manutenção e desenvolvimento da mesma.\n" +
                "\n" +
                "6.3.1.2.2.  A PROMOTORA declara ser responsável em seguir os termos de uso das mídias sociais utilizadas.\n" +
                "\n" +
                "6.3.1.2.3. A PROMOTORA garante a integridade e disponibilidade dos dados cadastrais dos participantes, com segurança, fora do ambiente do Facebook.\n" +
                "\n" +
                "6.3.1.2.4.  A PROMOTORA garante contingência eficaz que assegure a continuidade da promoção até seu término, sem prejuízos aos participantes, por qualquer motivo.\n" +
                "\n" +
                "6.3.2.  Realizado o cadastro/inscrição nos termos acima citados, o usuário deverá clicar na opção “Enviar Cadastro”.\n" +
                "\n" +
                "6.3.3.  Dessa forma, a cada 10 produtos participantes + o número do cupom fiscal de compra cadastrado (item 6.3.1 e seus subitens), o participante terá direito ao recebimento um Números da Sorte (item 6.2.4).\n" +
                "\n" +
                "6.3.3.1.  Os participantes que já tiverem participado da Promoção Sirva-se de Prêmios TANG [Certificado de Autorização CAIXA n° 2-1599/2016, Certificado de Autorização CAIXA n° 1-1452/2016 e Certificado de Autorização CAIXA n° 1-2038/2016] e da Promoção Desafio Oreo [Certificado de Autorização CAIXA n° 4-0455/2017 e Certificado de Autorização CAIXA n° 3-0599/2017] terão direito a 1 (um) Número da Sorte adicional para concorrer ao sorteio dos prêmios. Esses participantes serão reconhecidos pelo sistema, em razão do número de seu CPF, sendo-lhes atribuído o Número da Sorte adicional no momento do primeiro registro no site desta promoção.\n" +
                "\n" +
                "O Número da Sorte adicional será atribuído apenas para a primeira participação nessa promoção.\n" +
                "\n" +
                "6.3.3.2.  O participante já inscrito na promoção, de acordo com os itens anteriores, deverá acessar o site da promoção ou utilizar uma das outras opções para se conectar à promoção e se logar, realizar o cadastro de outro(s) Cupom(ns) Fiscal(is), preenchendo os dados de sua(s) compra(s) e depois deverá clicar na opção “Enviar Cadastro”.\n" +
                "\n" +
                "6.3.4.  Para saber se a sua participação foi concluída com sucesso, após o preenchimento do cadastro, o participante visualizará a tela de confirmação de sua participação contendo um (1) ou mais Números da Sorte, com o(s) qual(is) concorrerá aos prêmios prometidos.\n" +
                "\n" +
                "6.3.5.  Caso o cadastro não seja concluído, o participante visualizará a tela de erro, informando o motivo do seu insucesso.\n" +
                "\n" +
                "6.3.6.  Cumprida à condição de participação, o cadastro do participante será aceito pela PROMOTORA, desde que respeitado o período e o horário de participação, tendo como referência o horário de Brasília, bem como será considerado o horário registrado no sistema e não o indicado no computador, e/ou dispositivo móvel (tablet ou aparelho celular) do participante, uma vez que podem existir atrasos sistêmicos no tráfego e recepção de dados.\n" +
                "\n" +
                "6.4. “DOS NÚMEROS DA SORTE”.  Para facilitar o entendimento, cada elemento sorteável que será distribuído ao participante para concorrer ao sorteio dos prêmios será denominado simplesmente “Número da Sorte”, conforme abaixo:\n" +
                "\n" +
                "ü Identificação da série ( Duas letras + um número) + Número de ordem com cinco algarismos (numerados de 00.000 a 99.999), exemplo: SA9 00.098.\n" +
                "\n" +
                "6.4.1.  Para essa promoção, a PROMOTORA distribuirá trinta séries, cem mil (100.000) Números de Ordem, cada, no total de três milhões (3.000.000) Números da Sorte que serão atribuídos aos participantes, de forma aleatória, de acordo com o recebimento dos cadastros no site www.casadepremiostang.com.br, vide Quadro abaixo:\n" +
                "\n" +
                "PRÊMIO SORTEIO\n" +
                "\n" +
                " \n" +
                "\n" +
                "DATAS DE\n" +
                "\n" +
                "APURAÇÃO\n" +
                "\n" +
                " \n" +
                "\n" +
                "Período\n" +
                "\n" +
                "de Participação\n" +
                "\n" +
                "QUANTIDADE\n" +
                "\n" +
                "DE SÉRIE\n" +
                "\n" +
                "IDENTIFICAÇÃO DAS SÉRIES\n" +
                "\n" +
                "QUANTIDADE\n" +
                "\n" +
                "DE NÚMEROS POR SÉRIE\n" +
                "\n" +
                "NUMERACÃO\n" +
                "\n" +
                "DE CADA SÉRIE\n" +
                "\n" +
                "QUANTIDADE\n" +
                "\n" +
                "DE CONTEMPLADOS\n" +
                "\n" +
                "1°Sorteio\n" +
                "\n" +
                "18/10/2017\n" +
                "\n" +
                "(Quarta-feira)\n" +
                "\n" +
                "Cadastros realizados das 00h00 do dia 15/09/2017 até as 23h59 do dia 14/10/2017\n" +
                "\n" +
                "Dez (10)\n" +
                "\n" +
                "SA numeradas de 0 a 9\n" +
                "\n" +
                "100.000 (CEM MIL NÚMEROS), CADA\n" +
                "\n" +
                "DE 00.000\n" +
                "\n" +
                "ATÉ 99.999\n" +
                "\n" +
                "UM (1) CONTEMPLADO\n" +
                "\n" +
                "2°Sorteio 18/11/2017\n" +
                "\n" +
                "(Sábado)\n" +
                "\n" +
                "Cadastros realizados das 00h00 do dia 15/10/2017 até as 23h59 do dia 14/11/2017\n" +
                "\n" +
                "Dez (10)\n" +
                "\n" +
                "SB numeradas de O a 9\n" +
                "\n" +
                "100.000 (CEM MIL NÚMEROS), CADA\n" +
                "\n" +
                "DE 00.000\n" +
                "\n" +
                "ATÉ 99.999\n" +
                "\n" +
                "DOIS (2) CONTEMPLADOS\n" +
                "\n" +
                "3°Sorteio 20/12/2017\n" +
                "\n" +
                "(Quarta-feira)\n" +
                "\n" +
                "Cadastros realizados das 00h00 do dia 15/11/2017 até as 23h59 do dia 15/12/2017\n" +
                "\n" +
                "Dez (10)\n" +
                "\n" +
                "SC numeradas de O a 9\n" +
                "\n" +
                "100.000 (CEM MIL NÚMEROS), CADA\n" +
                "\n" +
                "DE 00.000\n" +
                "\n" +
                "ATÉ 99.999\n" +
                "\n" +
                "DOIS (2) CONTEMPLADOS\n" +
                "\n" +
                "6.4.2.  Fica assegurada a participação no sorteio, a partir da data de inscrição (cadastro válido) do participante na promoção, observada a correlação entre os períodos e as datas dos sorteios, conforme estabelecido acima.\n" +
                "\n" +
                "6.4.2.1.  O horário inicial do período de participação se dará às 00h00min do dia de início e o horário final de participação às 23h59min do dia de término de participação, considerando sempre o horário de Brasília.\n" +
                "\n" +
                "6.4.2.2.  Será considerado o horário de registro nos servidores da PROMOTORA, e não o indicado nos computadores e/ou dispositivos móveis (tablets e/ou aparelhos celulares) dos participantes, uma vez que podem existir atrasos sistêmicos na recepção dos dados.\n" +
                "\n" +
                "6.4.3. Os participantes poderão consultar seus números da sorte e tirar dúvidas no site www.casadepremiostang.com.br.\n" +
                "\n" +
                "6.5. Todos os cadastros serão armazenados num banco de dados único da promoção.\n" +
                "\n" +
                "6.6 . Os números da sorte serão utilizados, para efeito da apuração dos participantes contemplados, de acordo com a forma de apuração estabelecida neste REGULAMENTO.\n" +
                "\n" +
                "6.7. DA VERIFICAÇÃO DA REGULARIDADE DAS PARTICIPAÇÕES.\n" +
                "\n" +
                "6.7.1.  A participação nesta promoção pressupõe a inclusão de consumidores regulares, pessoas físicas que adquirem os produtos para seu consumo próprio ou familiar; não estando previsto o abrigo, nas regras aqui previstas; i) de compras realizadas em distribuidores por pessoas jurídicas ou por pessoas físicas destinadas a revenda; ii) compras de grupos de pessoas, visando apenas concentrar participações, na ilusão de aumento de chances nos sorteios; iii) estabelecimentos que não estejam abertos ao público e cujas notas se destinam apenas a participação na promoção (vendas fictícias); iv) qualquer tipo de tentativa de burla ao objetivo da presente promoção, embora não citados aqui.\n" +
                "\n" +
                "6.7.2.  Visando a comprovação de regularidade, o consumidor deverá guardar consigo todas as notas/cupons fiscais dos produtos promocionados cadastrados. O consumidor sorteado poderá perder, a critério da Promotora, o direito ao prêmio se deixar de apresentar todas as notas/cupons fiscais sob seu CPF durante o período da promoção, inclusive aquelas que não corresponderem ao Número da Sorte sorteado.\n" +
                "\n" +
                "6.7.3.  Da mesma forma, não se admitirá, em hipótese nenhuma, participação advinda de Notas/Cupons Fiscais emitidos manualmente ou cujo horário de emissão seja anterior ou posterior ao horário de funcionamento do estabelecimento ou, ainda, cujos dados não possam ser confirmados mediante a consulta aos órgãos governamentais.\n" +
                "\n" +
                "6.7.4.  Fica, ainda, esclarecido que não serão aceitas notas de estabelecimentos que não tenham operação comercial no endereço indicado no cupom fiscal; presumindo a Promotora que, vez que o estabelecimento está fechado no endereço indicado, esta venda é fictícia. Ao participante ficará o ônus de comprovação da validade da compra cadastrada.\n" +
                "\n" +
                "6.7.5.  Da mesma forma, não serão aceitas notas de estabelecimentos que não tem operação comercial destinada ao consumidor final, incluindo, mas não se limitando a, distribuidores de venda exclusiva a pessoas jurídicas.\n" +
                "\n" +
                "6.7.6.  Presume, ainda, a Promotora que as participações devam ser originadas de endereços (físicos ou lógicos) diferentes para consumidores diferentes; e a aglutinação de participações oriundas de endereços iguais presume a formação de alguma associação para participação, que eventualmente, possa estar vedada por este Regulamento e que, portanto, será investigada com mais rigor, para definir sua adesão a estas regras.\n" +
                "\n" +
                "6.7.7.  Fica, ainda, determinado que os documentos a serem apresentados pelos clientes, caso venham a ser solicitados pela Promotora, como, mas não se limitando a: documentação de identificação, comprovação de endereço, nota(s)/cupom(ns) fiscal(is), serão prioritariamente enviados por meio eletrônico, por imagem; mas que em caso de necessidade, serão coletados fisicamente pela Promotora. A recusa em apresentar documentos, ou a apresentação de documentos com sinais claros de adulteração ou sem condições de leitura ou verificação, ensejará a desclassificação do participante.\n" +
                "\n" +
                "6.7.8.  Os participantes serão excluídos automaticamente, ainda, da promoção, em caso de fraude comprovada, participação pela obtenção de benefício/vantagem de forma ilícita ou não cumprimento de quaisquer das condições deste Regulamento. Para efeito desse item, considera-se fraude a participação pelo cadastramento de informações incorretas e/ou falsas; a participação de pessoas não elegíveis, conforme critérios aqui estabelecidos; e as participações que tenham sido efetuadas por método robótico, automático, repetitivo, programado ou similar.\n" +
                "\n" +
                "6.7.9.  As participações que não preencherem as condições básicas da promoção, previstas neste REGULAMENTO, não terão nenhuma validade e os participantes serão automaticamente desclassificados.\n" +
                "\n" +
                "6.8.  Será desclassificado o participante que:\n" +
                "\n" +
                "A) No caso de solicitação da PROMOTORA, apresentar nota/cupom fiscal de loja não condizente com os produtos cadastrados;\n" +
                "\n" +
                "B) Tiver obtido nota/cupom fiscal por meio fraudulento ou sem observação do disposto no neste REGULAMENTO;\n" +
                "\n" +
                "C) Apresentar nota/cupom fiscal remendado ou com dúvidas por impressão defeituosa, superposição, falta ou excesso de letras ou números que configurem a premiação e outros defeitos ou vícios que prejudiquem a verificação de sua autenticidade ou do direito ao prêmio;\n" +
                "\n" +
                "C) Informar dados falsos, incorretos ou incompletos à PROMOTORA;\n" +
                "\n" +
                "D) Não observar corretamente as condições gerais de participação e premiação previstas neste REGULAMENTO.\n" +
                "\n" +
                "Nos casos de desclassificação, o participante perderá o direito ao prêmio e a PROMOTORA aplicará a regra de aproximação prevista no item 7.5 para identificar outro ganhador.\n" +
                "\n" +
                "6.9.  Fraudes: Sem exclusão das penalidades cabíveis e como forma de garantir a integridade do banco de dados e a lisura da promoção, serão sumariamente excluídos os participantes que cometerem qualquer tipo de fraude comprovada ou, de qualquer forma, utilizarem meios mecânicos, robóticos ou fraudulentos que possam interferir no resultado da promoção ou cujas informações cadastrais armazenadas no banco de dados sejam identificadas e verificadas como inconsistentes pela auditoria independente contratada pela PROMOTORA ou cujas participações tenham sido objeto de denúncia por irregularidade e que tenham sido averiguadas e constatadas pela PROMOTORA.\n" +
                "\n" +
                "7. APURAÇÃO DOS RESULTADOS.\n" +
                "\n" +
                "7.1. Forma de Apuração dos resultados para distribuição do prêmio prometido.  Todos os Números da Ordem das Séries atribuídos concorrerão à apuração por correlação com os resultados da Extração da Loteria Federal das datas previstas para os sorteios. .\n" +
                "\n" +
                "7.1.1.  Caso a Extração da Loteria Federal não ocorra nas datas previstas, será utilizada para efeitos de apuração dos resultados, a extração da Loteria Federal imediatamente subsequente àquela que não foi realizada.\n" +
                "\n" +
                "7.1.2.  Para fins de identificação dos Números, a PROMOTORA determina que o número anterior ao 00.000 seja o número 99.999, e o número posterior ao número 99.999 seja o 00.000.\n" +
                "\n" +
                "7 .2.  No primeiro sorteio, serão aplicadas as regras de apuração abaixo:\n" +
                "\n" +
                "7.2.1. Para identificação da primeira série contemplada (dentre as 10 séries, identificadas pelas letras SA e numeradas de 0 a 9) será utilizado o algarismos da dezena simples do 1º prêmio.\n" +
                "\n" +
                "7.2.1.1. Obtenção do Número de Ordem contemplado: Para obtenção do número da sorte, identificador do participante contemplado na série apurada, conforme regra acima, serão utilizados os algarismos das unidades simples dos cinco (05) primeiros prêmios do resultado da Extração da Loteria Federal, lidos de cima para baixo e a composição destes números resultará na obtenção do número vencedor identificador do participante contemplado.\n" +
                "\n" +
                "Exemplo:\n" +
                "\n" +
                "Resultados da Extração da Loteria Federal:\n" +
                "\n" +
                "1º prêmio: 20. 5 0 1\n" +
                "\n" +
                "2º prêmio: 40. 3 4 0\n" +
                "\n" +
                "3º prêmio: 10. 5 3 4\n" +
                "\n" +
                "4º prêmio: 27. 8 5 8\n" +
                "\n" +
                "5º prêmio: 38. 1 3 4\n" +
                "\n" +
                "Número de Série contemplada: 0\n" +
                "\n" +
                "Número de ordem identificado (participante contemplado na série apurada): 10.484.\n" +
                "\n" +
                "7.2.1.2.  De acordo com o exemplo acima, a Série Contemplada seria a 0 e o Número de ordem (número de base) apurado da série SA0 corresponderia a 10.484 que teria direito ao prêmio descrito no item 8.1.\n" +
                "\n" +
                "7 .3.  No segundo sorteio, serão aplicadas as regras de apuração abaixo:\n" +
                "\n" +
                "7.3.1. Para identificação da primeira série contemplada (dentre as 10 séries, identificadas pelas letras SB e numeradas de 0 a 9) será utilizado o algarismos da dezena simples do 2º prêmio.\n" +
                "\n" +
                "7.3.1.1. Obtenção dos Números de Ordem dos contemplados: Para obtenção do número da sorte, identificador do primeiro participante contemplado na série apurada, conforme regra acima, serão utilizados os algarismos das unidades simples dos cinco (05) primeiros prêmios do resultado da Extração da Loteria Federal, lidos de cima para baixo e a composição destes números resultará na obtenção do número vencedor identificador do primeiro participante contemplado e o segundo participante apurado será o número imediatamente subsequente ao primeiro identificado dentro da série.\n" +
                "\n" +
                "Exemplo:\n" +
                "\n" +
                "Resultados da Extração da Loteria Federal:\n" +
                "\n" +
                "1º prêmio: 20. 5 0 1\n" +
                "\n" +
                "2º prêmio: 40. 3 4 0\n" +
                "\n" +
                "3º prêmio: 10. 5 3 4\n" +
                "\n" +
                "4º prêmio: 27. 8 5 8\n" +
                "\n" +
                "5º prêmio: 38. 1 3 4\n" +
                "\n" +
                "Número de Série contemplada: 4\n" +
                "\n" +
                "Número de ordem identificado (primeiro participante contemplado na série apurada): 10.484.\n" +
                "\n" +
                "Número de ordem identificado (segundo participante contemplado na série apurada): 10.485.\n" +
                "\n" +
                "7.3.1.2.  De acordo com o exemplo acima, a Série Contemplada seria a 4 e os Números de ordem apurados da série SB4 corresponderiam a 10.484 e 10.485 que teriam direito aos prêmios descritos no item 8.1.\n" +
                "\n" +
                "7 .4.  No terceiro sorteio, serão aplicadas as regras de apuração abaixo:\n" +
                "\n" +
                "7.4.1. Para identificação da primeira série contemplada (dentre as 10 séries, identificadas pelas letras SC e numeradas de 0 a 9) será utilizado o algarismos da dezena simples do 3º prêmio.\n" +
                "\n" +
                "7.4.1.1. Obtenção dos Números de Ordem dos contemplados: Para obtenção do número da sorte, identificador do primeiro participante contemplado na série apurada, conforme regra acima, serão utilizados os algarismos das unidades simples dos cinco (05) primeiros prêmios do resultado da Extração da Loteria Federal, lidos de cima para baixo e a composição destes números resultará na obtenção do número vencedor identificador do primeiro participante contemplado e o segundo apurados serão os números imediatamente subsequentes ao primeiro identificado dentro da série.\n" +
                "\n" +
                "Exemplo:\n" +
                "\n" +
                "Resultados da Extração da Loteria Federal:\n" +
                "\n" +
                "1º prêmio: 20. 5 0 1\n" +
                "\n" +
                "2º prêmio: 40. 3 4 0\n" +
                "\n" +
                "3º prêmio: 10. 5 3 4\n" +
                "\n" +
                "4º prêmio: 27. 8 5 8\n" +
                "\n" +
                "5º prêmio: 38. 1 3 4\n" +
                "\n" +
                "Número de Série contemplada: 3\n" +
                "\n" +
                "Número de ordem identificado (primeiro participante contemplado na série apurada): 10.484.\n" +
                "\n" +
                "Número de ordem identificado (segundo participante contemplado na série apurada): 10.485.\n" +
                "\n" +
                "7.3.1.2.  De acordo com o exemplo acima, a Série Contemplada seria a 4 e os Números de ordem apurados da série SC3 corresponderiam a 10.484 e 10.485 que teriam direito aos prêmios descritos no item 8.1.\n" +
                "\n" +
                "7.5. DA REGRA DE APROXIMAÇÃO. Caso o número da sorte sorteado não corresponda a um número de ordem distribuído, ou esteja vinculado a um participante cuja participação se enquadre em uma das hipóteses dos itens 6.7 e 6.8, o prêmio caberá ao portador do número imediatamente superior ao apurado, ou, na falta deste, ao número imediatamente inferior, dentro da série apurada, até que se encontre um correspondente ganhador.\n" +
                "\n" +
                "7.6.  A apuração dos resultados será realizada por empresa de auditoria independente contratada para assegurar a veracidade das informações cadastradas e armazenadas no banco de dados da promoção.\n" +
                "\n" +
                "8. Prêmios (Descrição e Quantidade).\n" +
                "\n" +
                "8.1.  01 (um) Certificado em barras de ouro no valor líquido de R$ 200.000,00 (Duzentos mil reais) , no total de cinco (5) prêmios que serão distribuídos, conforme abaixo:\n" +
                "\n" +
                "- 1° sorteio: será contemplado um participante que terá direito a um Certificado em barras de ouro no valor líquido de R$ 200.000,00;\n" +
                "\n" +
                "- 2° sorteio: serão contemplados dois participantes que terão direito a um Certificado em barras de ouro, no valor líquido de R$ 200.000,00, cada;\n" +
                "\n" +
                "-3° sorteio: serão contemplados dois participantes que terão direito a um Certificado em barras de ouro, no valor líquido de R$ 200.000,00, cada;\n" +
                "\n" +
                "8.1.1.  Os prêmios serão entregues em Certificados de barras de ouro nos valores líquidos acima descritos e a utilização do prêmio (Certificado de barras de ouro) para a aquisição de qualquer outro bem/produto será de inteira responsabilidade do ganhador e não será custeada e/ou intermediada pela empresa PROMOTORA.\n" +
                "\n" +
                "8.2. QUANTIDADE TOTAL DE PRÊMIO(S): Cinco [5] prêmios.\n" +
                "\n" +
                "8.3. VALOR TOTAL DO(S) PRÊMIO(S):  R$ 1.000.000,00 (Um milhão de reais).\n" +
                "\n" +
                "8.4. Local de exibição do prêmio: Em razão de sua natureza, os prêmios não poderão ser exibidos. A PROMOTORA utilizará fotos meramente ilustrativas de sugestão de utilização dos prêmios nos materiais promocionais e no site www.casadepremiostang.com.br.\n" +
                "\n" +
                "8.5.  A PROMOTORA comprovará a propriedade do prêmio pela juntada de cópia de Nota Fiscal e/ou Fatura, em até 08 (oito) dias antes da data de apuração dos resultados.\n" +
                "\n" +
                "9. Entrega dos prêmios.\n" +
                "\n" +
                "9.1.  O resultado da apuração com o nome do contemplado será divulgado no site www.casadepremiostang.com.br, em até 15 (quinze) dias corridos, a contar da data do sorteio.\n" +
                "\n" +
                "9.1.1.  Após a divulgação do resultado, a PROMOTORA entrará em contato com o contemplado, por e-mail e/ou contato telefônico, com a finalidade de entrega do prêmio.\n" +
                "\n" +
                "9.1.2. No momento do contato, caso haja necessidade, o contemplado deverá obrigatoriamente informar dados complementares, ainda, nos termos do item 6.2.5, o prêmio será entregue ao consumidor contemplado mediante a apresentação de todas as notas/cupons fiscais de compra dos produtos participantes cadastrados na promoção, cópias de seu CPF, RG e comprovante de residência, visando à realização da entrega do prêmio.\n" +
                "\n" +
                "9.1.3. Após as verificações previstas no item acima, a PROMOTORA efetuará a entrega do prêmio no domicílio do consumidor contemplado, no prazo máximo de 30 (trinta) dias, após o recebimento da documentação do contemplado.\n" +
                "\n" +
                "9.1.3.1.  Caso o contemplado tenha entre 16 (dezesseis) e 18 (dezoito) anos ou incapaz, nos termos da lei, deverá estar acompanhado de seu representante legal/responsável, devidamente munido com a documentação original comprovadora de sua condição, para o recebimento do prêmio e assinatura do recibo, conforme item 9.2.\n" +
                "\n" +
                "9.2.  Nessa ocasião, o contemplado deverá a assinar o recibo de entrega do prêmio, pelo qual dará ampla e irrestrita quitação a PROMOTORA.\n" +
                "\n" +
                "9.2.1.  Caso o contemplado se recuse a apresentar os documentos alencados nos itens 9.1.2 e 9.2 ou os apresente de forma divergente do cadastro, ele será automaticamente desclassificado e o prêmio correspondente será destinado a outro participante de acordo com a regra prevista no item 7.3.\n" +
                "\n" +
                "9.2.2.  A empresa PROMOTORA, iniciando em 7 (sete) dias corridos da data da apuração do resultado, tentará o contato com os contemplados por 5 (cinco) dias úteis; considerando os dados informados na sua inscrição, por telefone, e-mail e telegrama (não obrigatoriamente nesta ordem), com intervalos de 1 dia entre uma e outra tentativa.\n" +
                "\n" +
                "9.2.2.1.  Transcorrido o prazo de 07 (sete) dias úteis da última tentativa de contato, e não havendo resposta do consumidor, presumir-se-á a sua não localização; sendo, em decorrência, desclassificado da promoção.\n" +
                "\n" +
                "9.2.2.2.  Havendo retorno do contemplado no prazo acima e sucesso no contato com o mesmo, a PROMOTORA solicitará os documentos citados no item 9.1.2 acima; tendo o contemplado o prazo de 03 (três) dias úteis para remeter esta documentação, sob pena de desclassificação, prazo prorrogável a critério exclusivo da PROMOTORA.\n" +
                "\n" +
                "9.3.  O prêmio a ser distribuído destina-se ao consumidor contemplado e será entregue em seu nome, sendo vedada sua transferência antes da entrega.\n" +
                "\n" +
                "9.4.  Na eventualidade do participante contemplado vir a falecer, o prêmio será entregue ao seu inventariante, que deverá comprovar tal condição.\n" +
                "\n" +
                "9.5. O prêmio é individual e intransferível, bem como não poderá ser convertido, total ou parcialmente, em dinheiro.\n" +
                "\n" +
                "9.6.  Todas as despesas necessárias à entrega do prêmio, inclusive pagamento de taxas, impostos, contribuições previdenciárias e/ou emolumentos serão custeados pela PROMOTORA.\n" +
                "\n" +
                "10. Prescrição do direito aos prêmios. Caso a PROMOTORA não logre êxito em contatar o contemplado, na forma do item 9 acima, ou na hipótese de o prêmio ganho na promoção não ser reclamado pelo contemplado no prazo de cento e oitenta (180) dias, contados do término da promoção, caducará o direito de o respectivo titular e o valor correspondente será recolhido, pela Promotora, ao Tesouro Nacional, no prazo de 10 (dez) dias da data da extinção do direito, nos termos dos artigos 6º da Lei 5.768/71 e do Dec. 70.951/72.\n" +
                "\n" +
                "11. Canais e formas de divulgação institucional pela mídia.  A divulgação da promoção, para o conhecimento de suas condições, pelos participantes, poderá ser realizada através de Mídia On line e Mídia Off (TV, Rádio e mídia impressa).\n" +
                "\n" +
                "11.1.  O regulamento completo estará disponível no site www.casadepremiostang.com.br.\n" +
                "\n" +
                "11.2.  O número do Certificado de Autorização CAIXA será divulgado no site www.casadepremiostang.com.br e poderá constar nos materiais de divulgação da promoção.\n" +
                "\n" +
                "12. Esclarecimentos sobre a promoção. As dúvidas dos participantes sobre a presente promoção poderão ser esclarecidas através do SAC da Promoção, telefone n° 0800 291 0533, horário de atendimento: de segunda à sexta-feira, das 08h00 às 20h00.\n" +
                "\n" +
                "13. Comissão de julgamento. As dúvidas e controvérsias oriundas dos consumidores participantes da promoção comercial serão, primeiramente, dirimidas por seus respectivos organizadores, persistindo-as, estas serão submetidas à REPCO/CAIXA, e no silêncio injustificado, os participantes poderão a qualquer momento, durante o período da promoção, fazer reclamação, desde que fundamentadas, aos órgãos de defesa dos direitos do consumidor de sua cidade ou Estado.\n" +
                "\n" +
                "14. Cláusulas de Exclusão de Responsabilidade.  O provimento de condições apropriadas de acesso à rede de Internet é de responsabilidade da prestadora de serviços contratada pelo participante para tal finalidade (provedor), sendo de responsabilidade da PROMOTORA apenas a manutenção e disponibilização do site da promoção.\n" +
                "\n" +
                "14.1.  A PROMOTORA não será responsável por problemas técnicos que impeçam, retardem ou prejudiquem o envio ou recebimento das informações enviadas para o mencionado endereço eletrônico.\n" +
                "\n" +
                "14.2.  Em caso de perda de conexão à rede de Internet, no momento da realização do cadastro ou no envio das informações, não será devida qualquer indenização por parte da PROMOTORA, tendo o participante que aceitar a implicação da eventual falha.\n" +
                "\n" +
                "14.3. Hipótese excepcional - Suspensão da Promoção.  Havendo interrupção da promoção ou na publicação do site da promoção por problemas de acesso à rede de Internet, intervenção dehackers, vírus, manutenção, queda de energia, falha de software ou hardware, bem como por caso fortuito ou força maior, não será devida qualquer indenização, devendo a PROMOTORA, entretanto, dar prosseguimento aos serviços tão logo haja a regularização do sistema, nos moldes originalmente propostos, ou seja, sem prorrogação de datas.\n" +
                "\n" +
                "14.4.  A PROMOTORA não poderá ser responsabilizada por eventuais danos ocasionados pela aceitação ou utilização do prêmio.\n" +
                "\n" +
                "15. Cessão provisória dos direitos de personalidade do ganhador em relação à promoção.  O ganhador desta promoção autorizará, sem quaisquer ônus, a PROMOTORA a utilizar suas imagens, nomes e/ou vozes, em fotos, cartazes, filmes, bem como em qualquer tipo de mídia e peças promocionais para a divulgação da conquista do prêmio, no prazo de até um (1) ano após o término da promoção.\n" +
                "\n" +
                "15.1.  As autorizações descritas acima não implicam em qualquer obrigação de divulgação ou de pagamento de qualquer quantia por parte da PROMOTORA ao ganhador.\n" +
                "\n" +
                "15.2.  À empresa regularmente autorizada nos termos da Lei 5.768/71, é deferida a formação de cadastro e/ou banco de dados com as informações coletadas em promoção comercial, sendo expressamente vedada a comercialização ou a cessão, ainda que a título gratuito, desses dados.\n" +
                "\n" +
                "16. Impedidos de participarem da promoção. Ficará vetada a participação de menores de dezesseis anos de idade, diretores, administradores e funcionários da PROMOTORA, da Agência 96 Comunicação Ltda., da ENC, do escritório de assessoria jurídica Patrícia Nakano Sociedade Individual de Advocacia, das empresas envolvidas na operação da Promoção e na distribuição de produtos Mondelez, bem como dos colaboradores envolvidos diretamente na promoção.\n" +
                "\n" +
                "17. Reconhecimento de cláusulas e aceitação das regras do REGULAMENTO.  A simples participação na presente promoção implicará no total e integral reconhecimento das condições e aceitação irrestrita deste REGULAMENTO, bem como, presumir-se-á a condição de que o participante ganhador não possui impedimentos fiscal, legal ou outro que o impeça de receber e/ou usufruir o prêmio ganho.\n ");

        return view;
    }

}
