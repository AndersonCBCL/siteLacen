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
                    <a href="#">Pesquisa Micológica (incluindo <i>C.Auris</i>)</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Pesquisa Micológica (incluindo <i>C.Auris</i>)</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    Exame direto;<br>
                    Cultura.
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Swab nasal, inguinal e axilar;<br>
                    Líquor<br>
                    Fluídos;<br>
                    Tecidos.
                </p>   
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    <b>Swab nasal, inguinal e axilar</b>:<br>
                    Coletar a amostra em swab estéril;<br>
                    Colocar o swab em falcon contendo meio sabouraud com 10% NaCl e antibiótico (meropenem e vancomicina);<br>
                    Identificar o tubo e encaminhar ao laboratório.<br>
                    <b>Líquor (LCR- Líquido Cefalorraquidiano)</b>:<br>
                    Para exame direto com cultura são necessários 2 a 3 mL de líquor;<br>
                    Se for necessário conservar, guardar sob refrigeração (4 a 8 ºC).<br>
                    <b>Fluidos (líquido pleural, ascítico, sinovial, pericárdico, aspirado transtraqueal, lavado gástrico e broncoalveolar)</b>:<br>
                    A coleta deve ser realizada por equipe médica especializada;<br>
                    Realizar antissepsia segundo normas preconizadas para o procedimento de punção;<br>
                    Obter a amostra através de punção percutânea ou cirúrgica. Quanto maior o volume da amostra, maior a probabilidade de isolamento do agente etiológico;<br>
                    O líquido coletado deve ser encaminhado em tubo seco;<br>
                    Encaminhar imediatamente ao laboratório.<br>
                    <b>Biópsias</b>:<br>
                    Devem ser enviadas ao laboratório em salina estéril;<br>
                    Amostras enviadas em formalina devem ser rejeitadas;<br>
                    Não limpar a lesão.
                </p>
                <h3>Transporte:</h3>
                <p>
                    Para os líquidos assépticos, recomenda-se que o material seja enviado imediatamente ao laboratório para que a semeadura seja feita o mais rápido possível obtendo maiores chances de viabilidade do fungo;<br>
                    Ressalvando as emergências, é necessário observar o horário da coleta para que a amostra chegue ao laboratório em horário conveniente para semeadura imediata (preferencialmente pela manhã);<br>
                    No transporte das amostras, devem-se considerar três condições importantes: manter sob-refrigeração, proteger da luz solar e acondicionar de forma adequada para que não haja risco de derramamento;<br>
                    Entregar na recepção do LACEN-PE.
                </p>    
                <h3>Formulários requeridos:</h3>
                <p>
                    Ficha de requisição do GAL.
                </p>
                <h3>Informações complementares:</h3>
                <p>
                    As amostras devem ser encaminhadas ao LACEN, cadastradas no sistema de Gerenciamento do Ambiente Laboratorial (GAL);<br>
                    Os resultados são disponibilizados via GAL;<br>
                    Coletar as amostras preferencialmente antes do uso de antifúngicos.
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>
