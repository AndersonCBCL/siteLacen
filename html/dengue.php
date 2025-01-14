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
                    <a href="#">Dengue</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Dengue</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    RT-PCR em tempo real;<br>
                    ELISA (Enzimaimunoensaio).
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Soro;<br>
                    Para amostras de SVO, as vísceras devem ser encaminhadas congeladas; não podem, sob hipótese alguma, ser colocadas em formol.
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    3ml em Tubo Seco (tampa vermelha ou amarela).
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    As amostras clínicas devem ser coletadas preferencialmente até o 5° dia de sintoma para RT-PCR, e para IgM a partir do 6° dia de sintoma, não devendo exceder os 30 dias.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Soro: Coleta por punção venosa (mínimo de 3ml de sangue) em tubo sem anticoagulante. Após a coleta realizar a centrifugação da amostra para separação do soro.
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Soro: 2 a 8°C (até 48h); -20°C por até 7 dias; após esse período, manter a -80°C.
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    Os tubos deverão ser transportados em posição vertical de maneira a evitar vazamentos. A organização dentro da caixa térmica deverá ser feita em estantes de modo que não permita atrito e colisão entre os tubos durante o transporte. </br>
                    O transporte deverá ser realizado em caixa térmica de paredes rígidas e com trava e utilizando gelo reciclável em quantidade suficiente para manter a temperatura das amostras de 2° a 8°C.
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                    Obrigatório o cadastro no Gerenciador de Ambiente Laboratorial (GAL) e notificação no SINAN.
                </p>
                <h3>Informações complementares:</h3>
                <p>
                    As amostras devem ser encaminhadas ao LACEN, após o cadastramento no Sistema de Gerenciamento do Ambiente Laboratorial (GAL). Para visualizar os resultados, a unidade solicitante deverá consultar o GAL. </br>
                    São critérios de rejeição: amostras hemolisadas, soros hiperlipêmicos, acondicionamento inadequado, volume insuficiente, amostra em temperatura ambiente ou com identificação inadequada.
                </p>

            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>
