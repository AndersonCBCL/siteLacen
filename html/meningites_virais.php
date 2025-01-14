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
                    <a href="#">Meningites Virais</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Meningites Virais</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    Isolamento viral em cultura de células;<br>
                    Técnicas de Biologia molecular.
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    LCR.
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    1,5ml a 2ml de LCR.
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    No ato do atendimento ao paciente (fase aguda da doença).
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Punção realizada por equipe médica especializada (Neurologista).
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Tubo de polipropileno com tampa rosqueada, tipo <i>Eppendorf</i> ou em tubos tipo hemólise estéreis. Conservar a amostra imediatamente em gelo ou a –20ºC até o envio ao LACEN-PE.
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    Caixas isotérmicas com gelo reciclável suﬁciente para manter as amostras de líquor congeladas e sinalizadas com símbolo de risco biológico;<br>
                    As amostras devem ser embaladas individualmente em sacos plásticos a ﬁm de evitar contaminação cruzada, estar devidamente identiﬁcadas e acompanhadas da ﬁcha de investigação especiﬁca do exame;<br>
                    Usar suporte (estante) para conter derramamento ou vazamento durante o transporte e forrar com papel absorvente.
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                    Entregar as amostras na Recepção de Amostras Biológicas do LACEN-PE, já cadastradas no sistema GAL.
                </p>
                <h3>Informações complementares:</h3>
                <p>
                    As amostras devem ser encaminhadas ao LACEN após o cadastramento no Sistema de Gerenciamento do Ambiente Laboratorial (GAL). Para visualizar os resultados, a unidade solicitante deverá consultar o GAL.
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>