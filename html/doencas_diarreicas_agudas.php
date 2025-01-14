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
                    <a href="Index.php"> Informa&ccedil;&otilde;es </a>
                </li>
                <span class="dir">></span> 
                <li>
                    <a href="exames_ofertados.php"> Exames Ofertados </a>
                </li>
                <span class="dir">></span> 
                <li>
                    <a href="#">Doen&ccedil;as Diarr&eacute;icas Agudas</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Doen&ccedil;as Diarr&eacute;icas Agudas</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    Cultura em meios adequados
                </p>    
                <h3>Amostra biol&oacute;gica:</h3>
                <p>
                    Swab Fecal e Swab Retal.
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    N&atilde;o se aplica.
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    No início da diarr&eacute;ia e antes do uso de antibi&oacute;ticos.
                </p>
                <h3>Orienta&ccedil;&otilde;es para a coleta de amostra:</h3>
                <p>
                    Swab retal: Introduzir o swab na ampola retal, comprimindo-o, em movimentos rotatórios suaves, em toda a extens&atilde;o da ampola; inocular no meio de transporte Cary-Blair;<br>
                    Swab fecal: Recolher parte das fezes com o auxílio de um swab; introduzir o swab no meio de transporte Cary-Blair.
                </p>
                <h3>Conserva&ccedil;&atilde;o da amostra at&eacute; o envio:</h3>
                <p>
                    Material colhido nos coletores, enviar imediatamente ao LACEN/PE ou manter sob refrigera&ccedil;&atilde;o 2 a 8º C at&eacute; 24 hs.
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    Coletores com Fezes, enviar com baterias de gelo recicl&aacute;vel, os swabs na temperatura ambiente.
                </p>
                <h3>Formul&aacute;rios requeridos:</h3>
                <p>
                    Obrigatório o cadastro no Gerenciador de Ambiente Laboratorial (GAL) e Formul&aacute;rio de Notifica&ccedil;&atilde;o de DDA.
                </p>
                <h3>Informa&ccedil;&otilde;es complementares:</h3>
                <p>
                    As amostras devem ser encaminhadas ao LACEN, após o cadastramento no Sistema de Gerenciamento do Ambiente Laboratorial (GAL). Para visualizar os resultados, a unidade solicitante deverá consultar o GAL.
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>
