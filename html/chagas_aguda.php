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
                    <a href="#">Doença de Chagas Aguda (DCA)</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Doença de Chagas Aguda (DCA)</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    Gota espessa;<br>
                    Esfregaço;<br>
                    À Seco.
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Sangue total.
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    2 a 4 ml de sangue.
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    Após apresentar os primeiro sintomas, deve-se considerar a forma de transmissão, a seguir:     
                    Transmissão vetorial (4 a 15 dias);<br>
                    Transfusional (30 a 40 dias);<br>
                    Vertical (pode ser transmitida em qualquer período da gestação ou durante o parto);<br>
                    Oral (3 a 22 dias);<br>
                    Acidental (até aproximadamente 20 dias). 

                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Para a realização dos três métodos, deve-se coletar 2 a 4 ml de sangue venoso, acondicionado em tubo com anticoagulante EDTA (tampa roxa).
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    A amostra deverá ser conservada em geladeira (2 a 8ºC), não devendo ser congelada. O envio deverá ser realizado preferencialmente no mesmo dia ou no prazo máximo de 24 horas, mantendo a temperatura de conservação durante todo o trajeto.
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                    Ficha de notificação para Doença de Chagas Aguda.
                </p>
                <h3>Informações complementares:</h3>
                <p>
                    As amostras deverão ser cadastradas no GAL.
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>