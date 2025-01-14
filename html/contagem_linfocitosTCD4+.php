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
                    <a href="#">Contagem de Linfócitos TCD4+</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Contagem de Linfócitos TCD4+</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    Citometria de Fluxo para contagem de Linfócitos CD3/CD4/CD8/CD45.
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Sangue em EDTA.
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    3 mL em Tubo com EDTA (tampa roxa)
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    As amostras clínicas devem ser coletadas entre o 7º ao 14º dia do início dos sintomas.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Sangue total: Coleta por punção venosa (mínimo de 3ml de sangue) em tubo com EDTA (tampa roxa). Devem chegar ao LACEN até 48h da coleta, em temperatura ambiente.Não colher após ingestão de alimentos gordurosos, nas últimas três horas.
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Sangue em EDTA – temperatura ambiente.
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    Os tubos deverão ser transportados em posição vertical de maneira a evitar vazamentos. A organização dentro da caixa térmica deverá ser feita em estantes de modo que não permita atrito e colisão entre os tubos durante o transporte.<br>
                    As amostras coletadas nas unidades de saúde situadas no Recife ou região metropolitana, cujo transporte até o LACEN-PE ocorra num intervalo inferior a 4 horas, poderão ser acondicionados em caixas isotérmicas apenas com uma bateria reciclável (sem contato).<br>
                    O transporte deverá ser realizado em caixa térmica de paredes rígidas e com trava em quantidade suficiente para manter a temperatura das amostras de 20° a 25°C.
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                    Enviar, para cada amostra, o Laudo Médico BPA-I para Contagem de Linfócitos Ttotalmente preenchido de forma adequada e protegida do contato com as amostras.
                </p>
                <h3>Informações complementares:</h3>
                <p>
                    O recebimento de amostras para realização da contagem de Linfócitos TCD4 é feito de segunda à quinta feira, das 07 até as 14 horas. O LACEN/PE não recebe amostra para esse exame nas sextas-feiras nem véspera de feriados;<br>
                    As amostras devem ser encaminhadas ao LACEN, após o cadastramento no Sistema de Gerenciamento do Ambiente Laboratorial (GAL). Para visualizar os resultados, a unidade solicitante deverá consultar o GAL;<br>
                    São critérios de rejeição: amostras coletadas e encaminhadas ao LACEN após 48h; amostras coaguladas, acondicionamento adequado, volume insuficiente, amostra em temperatura ambiente ou com identificação inadequada.
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>
