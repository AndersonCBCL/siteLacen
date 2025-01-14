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
                    <a href="#">HTLV (Vírus do Linfotrópico de células T humanas)</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >HTLV (Vírus do Linfotrópico de células T humanas)</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    Sorologia: pesquisa de anticorpos por ensaios imunoenzimáticos;<br>
                    Western blot.
                </p>   
                <h3>Amostra biológica:</h3>
                <p>
                    Soro.
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    Sangue sem anticoagulante (tubo seco ou com gel separador): 5 a 10ml
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    A critério do médico solicitante.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Soro: Coleta por punção venosa (mínimo de 5ml de sangue) em tubo sem anticoagulante. Após a coleta realizar a centrifugação da amostra para separação do soro.
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Soro acondicionado em tubo de polipropileno com tampa.Até o envio ao LACEN-PE, pode ser armazenado de 2ºC a 8ºC, no máximo, por 48 horas.
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    Caixas isotérmicas com gelo reciclável sinalizadas com símbolo de risco biológico;<br>
                    Usar suporte ou estante adequada para colocar os tubos de ensaio ou microtubos a ﬁm de evitar derramamento ou vazamento das amostras durante o transporte, forrando a caixa térmica com papel absorvente.<br>
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                    Todo material enviado ao LACEN-PE, deve ser acompanhado da ﬁcha de solicitação especíﬁca do exame totalmente preenchida, assinada e carimbada pelo profissional requisitante.
                </p>
                <h3>Informações Complementares:</h3>
                <p>
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

