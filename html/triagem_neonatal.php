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
                    <a href="#">Triagem Neonatal (Teste do pezinho)</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Triagem Neonatal (Teste do pezinho)</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    Fluorimetria por Tempo Resolvido – Fenilcetonúria (PKU), Fibrose Cística (IRT), Deficiência de Biotinidase, Hiperplasia Adrenal Congênita (17-OH), Hipotireoidismo Congênito (TSH), Toxoplasmose Congênita;<br>
                    Cromatografia Líquida de Alta Resolução –  Hemoglobinopatias
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Sangue coletado papel filtro (cartão de coleta padronizado pelo LACEN-PB)
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    Não se aplica.
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    Entre o 3º e o 5º dia de vida do bebê.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                   Posicionar o calcanhar que deve sempre estar abaixo do nível do coração;<br>
                   Realizar a antissepsia com algodão ou gaze levemente umedecida com álcool 70% e aguardar a secagem;<br>
                   Massagear o local para ativar circulação (o calcanhar deve ficar avermelhado);<br>
                   Realizar a punção com a lanceta;<br>
                   Aguardar a formação de uma grande gota de sangue;<br>
                   Retirar com algodão seco ou gaze esterilizada a primeira gota formada;<br>
                   Encostar o verso do papel-filtro na nova gota que se forma na região demarcada para a coleta (círculos);<br>
                   Fazer movimentos circulares com o cartão para preencher todo o círculo;<br>
                   Repetir a mesma operação até que todos os círculos estejam totalmente preenchidos;<br>
                   Pacientes sem clínica de neuroinfecção, mas com alterações no estudo do líquor justificáveis por outras causas;<br>
                   As amostras deverão ser submetidas ao processo de secagem à temperatura ambiente (15° a 20°C) por cerca de 3 horas.<br>
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Caso a amostra não seja encaminhada imediatamente ao laboratório, acondicioná-la em geladeira 2ºC a 8ºC pelo prazo máximo de 3 dias.
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    As amostras em papel filtro devem ser previamente acondicionadas em embalagem plástica para evitar que molhe e acondicionadas em caixa térmica ou isopor com baterias de gelo, para manter a temperatura baixa durante a viagem. 
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>