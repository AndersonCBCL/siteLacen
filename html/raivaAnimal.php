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
                    <a href="#">Raiva Animal</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Raiva Animal</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    Biologia Molecular: RT-PCR em tempo real<br>
                    Imunofluorescência Direta - IFD.
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Encéfalo inteiro dos animais ou fragmentos do tecido cerebral de ambos os hemisférios.
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    Soro: ??;<br>
                    LCR: ??
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    Quando da morte do animal e envio ao laboratório.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Coleta realizada por equipe especializada.
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Até 24 horas: Manter o material refrigerado;<br>
                    Mais de 24 horas: Manter o material congelado;<br>
                    Na falta de condições de refrigeração ou congelamento, conservar em solução salina com glicerina a 50%.
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    Acondicionamento em saco duplo vedado hermeticamente, identiﬁcado de forma clara e legível, não permitindo que a identiﬁcação se apague em contato com água e gelo;<br>
                    As amostras devem ser transportadas em caixas isotérmicas com gelo reciclável suﬁciente para a conservação até a chegada ao laboratório;<br>
                    Caixa rotulada, identiﬁcada e fechada evitando vazamento e contaminação, observando rigorosamente os procedimentos de biossegurança, para não colocar em risco as pessoas (direta ou indiretamente) que entrem em contato com o material suspeito;<br>
                    Entregar o material com o Formulário para Requisição do Diagnóstico da Raiva devidamente preenchido no setor de Recepção e coleta do Diagnóstico da Raiva do LACEN-PE.
                </p>   
                <h3>Formulários requeridos:</h3>
                <p>
                    As amostras devem ser acondicionadas logo após a coleta à -70ºC (em gelo seco) e enviadas ao LACEN-PE acompanhadas da Ficha de Investigação de Agravos de Notiﬁcaçãodo SINAN devidamente preenchida e protegida do contato direto com as amostras.
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>

