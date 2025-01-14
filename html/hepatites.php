<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LACEN - Exames Ofertados</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
</head>
<body>
    <header>
        <?php
            include "cabecalho.php";
        ?>
    </header>

    <section class="container">

        <nav class="nav_paginas">
            <ul>
                <li>
                    <a href="index.php"> Home</a>
                </li>
                <span class="dir">></span> 
                <li>
                    <a href="Index.php"> Informações </a>
                </li>
                <span class="dir">></span> 
                <li>
                    <a href="exames_ofertados.php"> Exames Ofertados </a>
                </li>
                <span class="dir">></span> 
                <li>
                    <a href="#">Hepatites</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Hepatites</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    <b>Marcadores Sorológicos</b>: pesquisa de antígenos e anticorpos por ensaios de quimioluminescência/ eletroquimioluminescência<br>
                    <u>Hepatite A</u>: Anti-HAV total (infecção aguda ou passada), Anti-HAVIgM (infecção aguda); <br>
                    <u>Hepatite B</u>: Para o acompanhamento da infecção utilizam-se marcadores séricos de imunidade (anti-HBs), a avaliação da presença do antígeno de superfície do HBV (HBsAg), presença do anticorpo de contato com o vírus (anti-HBc). Dependendo do resultado desta primeira triagem sorológica pode ser necessária a pesquisa de marcadores complementares como o antígeno E (HBeAg) e seu anticorpo correspondente o anti-HBe. <br>
                    <u>Hepatite C</u>: A detecção do anti-HCV (presença de anticorpos) é realizada por ensaios imunoenzimáticos. <br>
                </p>
                <p>
                    <b>Marcadores Moleculares</b>: PCR em Tempo Real<br>
                    <u>HBV-DNA</u>: A presença do DNA do HBV é o indicador mais sensível de replicação viral. A eficácia da terapia antiviral específica pode ser monitorada pelo acompanhamento da função hepática, avaliação da presença de marcadores sorológicos e quantificação da carga viral. Suadeterminação previamente ao tratamento, também pode ser útil como prognóstico da resposta à terapia. <br>
                    <u>HCV-RNA</u>: A quantificação da carga viral é imprescindível como avaliação complementar para a clínica e no acompanhamento de pacientes infectados por HCV. Os níveis de RNA do HCV podem refletir o grau de comprometimento histológico da infecção e da resposta do paciente à terapia. <br>
                </p> 
                <h3>Amostra biológica:</h3>
                <p>
                    Soro - Sorologia;<br>
                    Plasma - Biologia Molecular: PCR em tempo real
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    3ml em Tubo Seco (tampa vermelha ou amarela) para análise sorológica;<br>
                    5ml de Sangue com anticoagulante (EDTA) para análise molecular.
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    A critério do médico solicitante ou atendendo aos fluxogramas paradiagnóstico das hepatites.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Soro: Coleta por punção venosa (mínimo de 3ml de sangue) em tubo sem anticoagulante. Após a coleta realizar a centrifugação da amostra para separação do soro;<br>
                    Plasma: Coleta por punção venosa (mínimo de 5ml de sangue) em tubo com anticoagulante EDTA.
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Soro: Conservar o soro em Freezer a –20ºC e enviar ao LACEN-PE no prazo máximo de 24 horas Pode ser conservado em geladeira (2ºC a 8ºC), até 48 horas antes de ser enviado ao LACEN-PE;<br>
                    Plasma: Armazenar em geladeira a (2ºC a 8ºC), até no máximo 48 horas e enviar ao LACEN-PE.
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    Caixas isotérmicas com gelo reciclável sinalizadas com símbolo de risco biológico;<br>
                    Usar suporte (estante) para conter derramamento ou vazamento durante o transporte e forrar a caixa isotérmica com papel absorvente;<br>
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                    Obrigatório o cadastro no Gerenciador de Ambiente Laboratorial (GAL) e notificação no SINAN para sorologia;<br>
                    Para os exames de Biologia Molecular das Hepatites B e C a amostra deverá vir acompanhada do BPA-I especiﬁco;<br>
                    Em suspeitas de surtos por Hepatite A, identiﬁcar na ﬁcha epidemiológica quando encaminhar as amostras para o LACEN-PE.
                </p>
                <h3>Informações complementares:</h3>
                <p>
                    Entregar as amostras na Recepção de Amostras Biológicas do LACEN-PE, já cadastradas no sistema GAL.
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>

