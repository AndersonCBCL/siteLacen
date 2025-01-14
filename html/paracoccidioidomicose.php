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
                    <a href="#">Paracoccidioidomicose</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Paracoccidioidomicose</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    Imunodifusão dupla (ID).
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Soro.
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    &gt;500 µl de soro.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    O espécime clínico (soro) para exame sorológico de micose já deve vir separado do sangue total, identificado e transportado em caixa térmica com gelo.
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Até o momento do envio, as amostras devem ser mantidas sob refrigeração (&lt;12°C) ou congeladas
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    Os tubos deverão ser transportados em posição vertical de maneira a evitar vazamentos. A organização dentro da caixa térmica deverá ser feita em estantes de modo que não permita atrito e colisão entre os tubos durante o transporte;<br>
                    O transporte deverá ser realizado em caixa térmica de paredes rígidas e com trava e utilizando gelo reciclável em quantidade suficiente para manter a temperatura das amostras abaixo de 12°C.
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                    Obrigatório o cadastro no Gerenciador de Ambiente Laboratorial (GAL) e notificação no SINAN.
                </p>
                <h3>Informações complementares:</h3>
                <p>
                    As amostras devem ser encaminhadas ao LACEN, após o cadastramento no Sistema de Gerenciamento do Ambiente Laboratorial (GAL). Para visualizar os resultados, a unidade solicitante deverá consultar o GAL.<br>
                    O LACEN PE encaminha esses para serem realizados no Laboratório de Referência Nacional em Micoses Sistêmicas.<br>
                    Critérios de rejeição de amostra: Amostra sem identificação e/ou Amostra sem refrigeração ideal.
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>