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
                    <a href="#">Herpes Simples 1 e 2</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Herpes Simples 1 e 2</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    RT-PCR em tempo real.   
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Soro;<br>
                    LCR.      
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    3ml em Tubo Seco (tampa vermelha ou amarela).
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    A critério médico.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Soro: Coleta por punção venosa (mínimo de 3ml de sangue) em tubo sem anticoagulante. Após a coleta realizar a centrifugação da amostra para separação do soro;<br>
                    LCR: Punção realizada por equipe médica realizada (Neurologista).
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Soro: tubo de polipropileno estéril com gel separador. Conservar o soro em freezer a –20º C e enviar ao LACEN-PE no prazo máximo de 48 horas em recipiente térmico;<br>
                    Líquor: tubo coletor estéril. Conservar o líquor em freezer a temperatura de -20°C e enviar ao LACEN-PE no prazo máximo de 24 horas em recipiente térmico.
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
                    Utilizar caixas isotérmicas com gelo reciclável sinalizadas com símbolo de risco biológico;<br>
                    Usar suporte (estante), forrada com papel absorvente, para conter derramamento ou vazamento durante o transporte;<br>
                    Entregar as amostras na Recepção de Amostras Biológicas do LACEN-PE, já cadastradas no sistema GAL.
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>