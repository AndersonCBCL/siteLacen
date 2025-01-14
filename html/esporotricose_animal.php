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
                    <a href="#">Esporotricose Animal</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Esporotricose Animal</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    Cultura em ágar Sabouraud suplementado ou Mycosel.
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Aspirado de linfonodo.
                </p>
                <h3>Período da coleta:</h3>
                <p>
                    A partir da suspeita clínica, de preferência sem nenhum tratamento prévio.
                </p>
                <h3>Material necessário para coleta:</h3>
                <p>
                    Tubo contendo soro fisiológico ou meio de transporte tipo Cary Blair para a cultura.
                </p>
                <h3>Conservação da amostra:</h3>
                <p>
                    Tubo contendo soro fisiológico ou meio de transporte tipo Cary Blair: conservar em temperatura ambiente por até 12 horas;<br>
                    NÃO REFRIGERAR.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    <b>Felino e Cães:</b><br>
                    Para a coleta, o profissional deverá seguir todas as normas de biossegurança, incluindo uso de jaleco, luvas e máscara, e a contenção do animal deverá ser feita de forma a tornar a coleta segura para todos envolvidos no procedimento.
                    Fazer a contenção evitando-se machucar o animal;<br>
                    Utilizar swab estéril para a coleta. Fazer a deposição do material coletado rolando-se o swab sobre a lâmina, semelhante a um imprint.  Evitar tocar com o swab nos pelos do animal, para que seja minimizada a contaminação com outros fungos e bactérias;<br>
                    Coletar de duas a quatro lâminas de cada animal para o exame direto, podendo-se eleger mais de uma lesão (neste caso, identificar localização da lesão na lâmina).
                </p>
                <h3>Transporte:</h3>
                <p>
                    VERIFICAR INFORMAÇÃO COM A CVLZOE 
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                    Ficha de requisição do GAL e formulários específicos distribuídos pela CVLZOE.  <b>QUAL FORMULARIO?</b>
                </p>
                <h3>Informações complementares:</h3>
                <p>
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
