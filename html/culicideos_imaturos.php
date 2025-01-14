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
                    <a href="#">Culicídeos Imaturos</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Culicídeos Imaturos</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    Identificação taxonômica através de microscopia óptica.
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Larvas de culicídeos imaturos (mosquitos).
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    Até 8 larvas de culicídeos imaturos por tubito.
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    Demanda espontânea, a critério do município.
                </p>
                <h3>Orientações para a coleta de amostra em cães:</h3>
                <p>
                    Seguir as orientações do MANUAL DE NORMAS TÉCNICAS – DENGUE – INSTRUÇÕES PARA PESSOAL DE COMBATE AO VETOR – VIGILÂNCIA EPIDEMIOLÓGICA – MINISTÉRIO DA SAÚDE – FUNASA.    
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    As amostras devem ser acondicionadas no tubito com álcool a 70% em temperatura ambiente.
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    As larvas devem se acondicionadas em tubitos com álcool a 70%, os tubitos devem ser envolvidos em papel e acondicionados em caixa de papelão com a finalidade de proteger e evitar a quebra dos tubitos.
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                    Formulário Nº 583 – anexo A – 00POP17417.
                </p>
                <h3>Informações complementares:</h3>
                <p>
                    As amostras devem ser enviadas ao LACEN – PE, através de oficio;<br>
                    Chave dicotônica: Principais Mosquitos de Importância Sanitária no Brasil – Rotraut A. G. B. Consoli, Ricardo Lourenço de Oliveira.
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>