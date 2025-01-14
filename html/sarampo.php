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
                    <a href="#">Sarampo</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Sarampo</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    RT-PCR em tempo real;<br>
                    ELISA (Enzimaimunoensaio);<br>
                    IgM e IgG   .    
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Soro;<br>
                    Swab;<br>
                    Urina.       
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    5ml a 10ml em Tubo Seco (tampa vermelha ou amarela).
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    Para sorologia até 30 dias do início do exantema (de preferência a partir do 5º dia do exantema ou, no primeiro contato com o paciente). Nos casos suspeitos de Síndrome da Rubéola Congênita (SRC), coletar o sangue logo após a suspeita da Síndrome.<br>
                    Para PCR em tempo real Swabs e Urina: Coletar até o 7º dia do início do exantema.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Soro: Coleta por punção venosa (mínimo de 5ml a 10ml de sangue) em tubo sem anticoagulante. Após a coleta realizar a centrifugação da amostra para separação do soro;<br>
                    Swab combinado de nasofaringe e orofaringe: Coletar 3 swabs, sendo uma amostra de cada narina e uma da garganta, com o uso de fricção para obter as células de mucosa, pois o vírus está estreitamente ligado às células.Colocar os 3 swabs juntos em um tubo contendo 3mL de meio de transporte viral fornecido pelo laboratório;<br>
                    Urina: Coletar jato médio em recipiente estéril (da mesma maneira para a realização de urocultura);<br>
                    Sangue, líquor ou em tecidos do corpo (caso de óbito): Coletar até 24 horas após o óbito.
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Separar o soro em tubo de polipropileno (não congelar o sangue total). As amostras de soro podem ser armazenadas até 48 horas na geladeira (2ºC a 8ºC).Enviar ao LACEN-PE no prazo máximo de 2 dias.Caso não seja possível enviar o soro em até 2 dias, deve colocá-lo no freezer –20ºC até o momento do transporte;<br>
                    Swab combinado de naso/orofaringe: Tubo de polipropileno com meio de cultura estéril e swabs de rayon fornecidos pelo LACEN-PE. Se processar a amostra, congelar a -70°C. Sem processar, refrigerar a 2 a 8°C e enviar ao LACEN-PE o mais rápido possível;<br>
                    Urina: Tubo coletor de urocultura ou frasco com tampa de rosca estéril. Encaminhar imediatamente ao LACEN-PE. Caso isso não seja possível, deixar na parte inferior da geladeira, onde poderão ﬁcar acondicionadas até no máximo, 24 - 48 horas <b>(não congelar a urina!)</b>.
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
