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
                    <a href="#">Difteria</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Difteria</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    Cultura em meios adequados.
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Swab Nasal.
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    Não se aplica.
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    Antes da administração de antibióticos.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Coletar 3 swabs descartáveis (1 para o nariz, 1 para a garganta, 1 para lesão, se necessário). Utilizar o mesmo swab para ambas às narinas. Os meios, 3 tubos contendo meio de cultura PAI ou Loefer devem estar à temperatura ambiente na hora da coleta.
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    O material deve ser transportado ao LACEN-PE à temperatura ambiente imediatamente após a coleta. Na impossibilidade de envio imediato, o material deve ser incubado em estufa de 35ºC a 37ºC por um período máximo de 48 horas e encaminhar em seguida à temperatura ambiente.
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    Enviar os swabs na temperatura ambiente.
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                    Obrigatório o cadastro no Gerenciador de Ambiente Laboratorial (GAL)e Ficha do Sistema de Informação de Agravos de Notificação (SINAN).
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
