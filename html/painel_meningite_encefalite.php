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
                    <a href="#">Painel de Meningite/Encefalite</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Painel de Meningite/Encefalite</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    PCR em tempo real.
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    LCR.
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    500µLde volume e enviadas, em tubo estéril, refrigeradas entre 2 a 8 °C em até 72h.
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    As amostras clínicas devem ser coletadas preferencialmente antes da administração de antibiótico.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
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
                    Obrigatório o cadastro no Gerenciador de Ambiente Laboratorial (GAL) e notificação no SINAN, além de FOR 605 – FORMULÁRIO PARA DIAGNÓSTICO DE MENINGITES/ENCEFALITES VIRAIS. 
                </p>
                <h3>Informações complementares:</h3>
                <p>                    
                    Amostras encaminhadas sem resultado quimocitológico (rotina laboratorial do líquor);<br>
                    Amostras com exames laboratoriais sugestivos ou confirmados para neuroinfecções de outras etiologias;<br>
                    Amostras cuja coleta tenha sido posterior à antibioticoterapia.<br>
                    Não enquadramento nos critérios descritos no item 1.5.1 da Nota Técnica 004/2024 do LACEN;<br>
                    Amostras com identificação insuficiente ou duvidosa;<br>
                    Amostra sem ficha do SINAN;<br>
                    Amostras colhidas em frasco inadequado;<br>
                    Amostras encaminhadas fora do prazo estabelecido após a coleta ou transportada de maneira inadequada;<br>
                    Pacientes com critérios de infecção hospitalar (pacientes com neuroinfecção decorrente de procedimentos neurocirúrgico,independente do resultado do líquor) tendo em vista que os patógenos envolvidos nesses casos não são contemplados no exame;<br>
                    Pacientes sem clínica de neuroinfecção, mas com alterações no estudo do líquor justificáveis por outras causas;<br>
                    Paciente com diagnóstico etiológico determinado por outro método diagnóstico, desde que o infectologista e neurologistanão especifique possiblidade de coinfecção;<br>
                    Amostra de líquor que não tenha sido acondicionada/armazenada dentro dos critérios estabelecidos pelo LACEN ou comtempo de coleta maior que 4 dias.
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>