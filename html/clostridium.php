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
                    <a href="#">Clostridium</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Clostridium</h1>

            <section class="conteudo">
                <h3>Metodologia:</h3>
                <p>
                    Cultura em meios adequados (encaminhado para Laboratório de Referência).
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Fezes frescas.
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    Não se aplica.
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    No início da diarréia e antes do uso de antibióticos.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Coletar fezes em um pote estéril sem nenhum tipo de conservante.
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Material colhido nos coletores, enviar imediatamente ao LACEN/PE ou manter sob congelamento a - 20º C até encaminhar ao LACEN.
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    Coletores com Fezes, enviar com baterias de gelo reciclável.
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                    Obrigatório o cadastro no Gerenciador de Ambiente Laboratorial (GAL) e notificação no SINAN.
                </p>
                <h3>Informações complementares:</h3>
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
