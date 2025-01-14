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
                    <a href="#">Raiva Humana</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Raiva Humana</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    Biologia Molecular: RT-PCR em tempo real<br>
                    Imunofluorescência Direta - IFD.
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    LCR;<br>
                    Soro;<br>
                    Folículo piloso 0,5-1cm²;<br>
                    Imprint de córnea (5 lâminas)
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    Soro: ??;<br>
                    LCR: ??
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    Quando há suspeita clínica.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Coleta realizada por equipe especializada.
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    A amostra deve ser conservada a -70ºC logo após a coleta.
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    As amotras devem ser acondicionadas em tubo estéril tipo Eppendorf ou similar.
                </p>   
                <h3>Formulários requeridos:</h3>
                <p>
                    As amostras devem ser acondicionadas logo após a coleta à -70ºC (em gelo seco) e enviadas ao LACEN-PE acompanhadas da Ficha de Investigação de Agravos de Notiﬁcaçãodo SINAN devidamente preenchida e protegida do contato direto com as amostras.
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>

