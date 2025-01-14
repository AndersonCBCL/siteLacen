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
                    <a href="#">Culicídeos Alados</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Culicídeos Alados</h1>

            <section class="conteudo">
 
                <h3>Metodologia:</h3>
                <p>
                    Identificação taxonômica com utilização de chave dicotômica*.
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Culicídeos alados.
                </p>    
                <h3>Quantidade ideal:</h3>
                <p>
                    A partir de um.
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    Definido pela vigilância dos agravos transmitidos por culicídios.
                </p>
                <h3>Orientações para a coleta de amostra em cães:</h3>
                <p>
                    Utilizar armadilha do tipo CDC, método de sucção ou outro método, a critério da vigilância dos agravos transmitidos por culicídios.
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Os culicídeos capturados devem ser acondicionados em tubo plástico com sílica** e algodão***. Os tubos deverão ser acondicionados em caixas resistentes e enviados para o laboratório em temperatura ambiente.
                </p>    
                <h3>Formulários requeridos:</h3>
                <p>
                    Planilha de campo e etiqueta de cada armadilha.
                </p>
                <h3>Informações complementares:</h3>
                <p>
                    *Chave dicotômica de Oswaldo Paulo Forattini.<br>
                    ** Controle da umidade.<br>
                    *** Evitar impacto e conservar a estrutura morfológica dos espécimes.

                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>