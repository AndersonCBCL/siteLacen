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
                    <a href="#">Esquistossomose Manssônica e Geo-Helmintíases</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Esquistossomose Manssônica e Geo-Helmintíases</h1>

            <section class="conteudo">

                <p> 
                    Esquistossomose Mansônica: Infecção provocada por vermes do gênero Shistosoma mansoni, que pode evoluir desde formas assintomáticas até formas clínica extremamente graves. Tem como hospedeiro intermediário os caramujos de água doce.<br>
                    Geo-helmintíases: São parasitoses causadas por nematódeos que necessitam obrigatoriamente de um estágio no solo para completar o seu ciclo evolutivo. São exemplos desse tipo: ascaridíase, tricuríase, ancylostomíases, entre outros.
                </p>
                <h3>Metodologia:</h3>
                <p>
                    Parasitológico: Pesquisa de ovos de helmintos por meio do método Kato-Katz;<br>
                    Sorologia IgG e IgM.
                </p>    
                <h3>Amostra biológica/Volume ideal:</h3>
                <p>
                    Parasitológico: Fezes, um (01) grama;<br>
                    Sorologia: Soro >1 ml.
                </p>    
                <h3>Período ideal de coleta:</h3>
                <p>
                    A partir da solicitação médica e/ou inquéritos coproscópicos e/ou critérios epidemiológicos.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    <u>Fezes</u>:
                    <ul>
                        Evacuar sobre papel higiênico;<br>
                        Tomar cuidado para não contaminar as fezes com urina ou água do vaso sanitário; <br>
                        Evitar o uso de óleo mineral; <br>
                        Usando a pazinha do pote coletor, retirar uma quantidade de fezes equivalente à metade do tamanho do coletor universal (três porções: começo, meio e fim); <br>
                        Caso as fezes estiverem diarréicas, colher preferencialmente no período da manhã; <br>
                        Não é necessário estar em jejum para realização do exame.
                    </ul>
                    <u>Soro</u>:
                    <ul>
                        Identificar os tubos de soro, de modo que a identificação não seja prejudicada durante o transporte; <br>
                        Acondicionar as amostras em caixa isotérmica, devidamente identificada, contendo gelo reciclável (bateria) para manter a temperatura entre 2Cº a 8Cº; <br>
                        Entregar as amostras na Recepção do LACEN-PE, já cadastradas no sistema GAL, acompanhadas da requisição médica do exame, Ficha de Investigação de Agravos de Notificação SINAN, devidamente preenchida.
                    </ul>
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Lâmina lapidada para microscopia; <br>
                    Conservar a amostra protegida, acondicionada em caixas porta lâminas, em temperatura de aproximadamente 37Cº; <br>
                    Tubo seco sem anticoagulante; <br>
                    Armazenar em geladeira (2Cº a 8Cº) para envio no dia seguinte ou Congelar a 20Cº até no máximo 15 dias após a coleta, e encaminhar ao LACEN-PE.

                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    Em caixas apropriadas para transporte de lâminas, devidamente identificadas; <br>
                    Entregar as amostras na Recepção do LACEN-PE, acompanhadas de planilha específica para o Controle da Qualidade totalmente preenchida; <br>
                    No caso de amostras de primeiro exame, entregar na Recepção do LACEN-PE, já cadastradas no sistema GAL ou Ficha de Investigação de Agravos de Notificação SINAN, devidamente preenchida, juntamente com a requisição médica do exame; <br>
                    Soro: Congelar a 20Cº até no máximo 15 dias após a coleta, e encaminhar ao LACEN-PE em caixas isotérmicas com bateria.
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                    Planilha de resultados para o CQ. <br>
                    Espelho do GAL e Ficha de Investigação de Agravos de Notificação SINAN quando se tratar de soro.
                </p>
                <h3>Informações complementares:</h3>
                <p>
                    O diagnostico sorológico é encaminhado para realização no laboratório de Referencia – IAL (Instituto Adolfo Lutz).
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>
