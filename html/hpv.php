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
                    <a href="#">HPV - Papilomavírus Humano</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >HPV - Papilomavírus Humano</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    Biologia Molecular: RT-PCR em tempo real.
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Raspado da região endocervical.
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    Não se aplica.
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    Mulheres / pessoas com útero  de acordo com condições clínicas elegíveis para coleta.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Coleta realizada por equipe especializada.
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Meio de transporte contendo fixador a base de metanol para preservação da morfologia celular , DNA e RNA;<br>
                    Após coleta a amostra deve permanecer em temperatura ambiente, livre de umidade e elevado do solo  por até 6 semanas.
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    As amostras coletadas e enviadas ao LACEN-PE  devem ser devidamente identificadas e rotuladas em frasco de meio de transporte acompanhada de Ficha de Requisição do Teste de HPV - Rastreio devidamente preenchidas e assinadas/carimbadas por profissional responsável pela coleta , protegidas de contato direto com as amostras.<br>
                    Utilizar caixas para transporte de material sinalizadas com símbolo de risco biológico;<br>
                    As amostras devem está bem acondicionadas a fim de evitar derramamento ou vazamento das amostras durante o transporte;<br>
                    Não utilizar amostras caso o frasco esteja danificado ou o tampão tenha vazado. Tubos danificados ou com vazamento devem ser descartados de acordo com as normas de biossegurança e nova amostra deverá ser solicitada.
                </p>   
                <h3>Informações complementares:</h3>
                <p>
                    Entregar as amostras no setor de Recepção de Amostras Biológicas do LACEN-PE, já cadastradas no sistema GAL.
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>

