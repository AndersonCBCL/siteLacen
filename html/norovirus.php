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
                    <a href="#">Norovírus</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Norovírus</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    RT-PCR em tempo real.        
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Fezes.        
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    3 a 5 gramas de fezes.
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    Critérios estabelecidos pela Vigilância Epidemiológica.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Coletar 3 a 5 gramas de fezes em coletor universal.
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Conservar a amostra entre 2ºC a 8ºC até 3 dias ou em –20ºC até o envio ao LACEN-PE.
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
