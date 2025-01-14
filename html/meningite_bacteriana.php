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
                    <a href="#">Meningite Bacteriana</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Meningite Bacteriana</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    PCR em tempo real.
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Soro ou LCR.<br>
                    Para amostras de SVO, as vísceras devem ser encaminhadas congeladas; não podem, sob hipótese alguma, ser colocadas em formol.
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    500µLde volume e enviadas, em tubo estéril, refrigeradas entre 2 a 8 °C em até 72h.<br>
                    500µLde volume e enviadas, em tubo estéril, refrigeradas entre 2 a 8 °C em até 72h.
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    As amostras clínicas devem ser coletadas preferencialmente antes da antibioticoterapia.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Soro: Coleta por punção venosa (mínimo de 3ml de sangue) em tubo sem anticoagulante. Após a coleta realizar a centrifugação da amostra para separação do soro. Devem chegar ao LACEN até 48h da coleta;<br>
                    LCR: Punção realizada por equipe médica especializada (Neurologista).
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Soro e LCR: 2 a 8°C por <b>até 48h.</b>
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    Os tubos deverão ser transportados em posição vertical de maneira a evitar vazamentos. A organização dentro da caixa térmica deverá ser feita em estantes de modo que não permita atrito e colisão entre os tubos durante o transporte;<br>
                    O transporte deverá ser realizado em caixas térmicas de paredes rígidas e com trava e utilizando gelo reciclável em quantidade suficiente para manter a temperatura das amostras de 2° a 8°C.
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                    Obrigatório o cadastro no Gerenciador de Ambiente Laboratorial (GAL) e notificação no SINAN.
                </p>
                <h3>Informações complementares:</h3>
                <p>
                    As amostras devem ser encaminhadas ao LACEN após o cadastramento no Sistema de Gerenciamento do Ambiente Laboratorial (GAL), acompanhadas da ficha do SINAN para Meningites Bacterianas. Para visualizar os resultados, a unidade solicitante deverá consultar o GAL.
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>