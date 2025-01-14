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
                    <a href="#">Controle Externo de Qualidade de Tuberculose</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Controle Externo de Qualidade de Tuberculose</h1>

            <section class="conteudo">

                <h3>Agravo:</h3>
                <p>
                    Tuberculose e infecções por outras Micobactérias não causadoras de Tuberculose (MNT).
                </p>    
                <h3>Metodologia:</h3>
                <p>
                    Releitura das lâminas de baciloscopia realizadas nos Laboratório Regionais e Municipais que realizam baciloscopia para Tuberculose.
                </p>    
                <h3>Descrição:</h3>
                <p>
                    Processo que permite que o laboratório de referência avalie os laboratórios locais participantes, observando alguns padrões técnicos, como: concordância dos resultados e do índice bacilar, adequação da coloração e confecção do esfregaço.
                </p>    
                <h3>Amostras:</h3>
                <p>
                    Lâminas de baciloscopia utilizadas no diagnóstico e controle da Tuberculose.
                </p>    
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    As lâminas devem ser transportadas em caixas porta-lâminas de plástico rígido, devendo ser enviado cópia do livro de registro, contendo todos os resultados referentes às lâminas enviadas;<br>
                    As lâminas devem ser enviadas a cada três meses conforme cronograma previamente pactuado.
                </p>
                

          </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>