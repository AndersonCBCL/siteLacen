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
                    <a href="#">Tuberculose Baciloscopia e Cultura</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Tuberculose Baciloscopia e Cultura</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    Baciloscopia em Ziehl-Neelsen;<br>
                    Cultura em meios líquidos e sólidos.
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    O quadro abaixo indica os tipos de amostra e sua conservação e transporte.
                    <table>
                        <thead>
                            <tr>
                                <th>METODOLOGIA</th>
                                <th>TIPO DE MATERIAL/QUANTITATIVO</th>
                                <th>PERÍODO DA COLETA</th>
                                <th>RECIPIENTE/CONSERVAÇÃO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Baciloscopia Cultura pulmonar
                                </td>
                                <td>
                                    Escarro (espontâneo ou induzido);<br>
                                    Lavado gástrico, Lavado broncoalveolar, Lavado brônquico, Fragmento de tecido pulmonar (biópsia pulmonar);<br>
                                    Aspirado transtraqueal.
                                </td>
                                <td>
                                    Pacientes sintomáticos respiratórios que procuram os serviços de saúde com tosse e expectoração há mais de três semanas.
                                </td>
                                <td>
                                    Recipiente plástico transparente de boca larga com tampa rosqueável;<br>
                                    Manter refrigerada (2ºC a 8ºC) até envio ao Laboratório;<br>
                                    Escarro: até 7 dias;<br>
                                    Lavado gástrico e urina: Até 4 horas;<br>
                                    Outras amostras: Até 24 horas.
                                </td>
                            </tr> 
                            <tr>
                                <td>
                                    Cultura extra-pulmonar
                                </td>
                                <td>
                                    Urina;<br>
                                    Liquídos pleural, sinovial, peritonial, pericárdico, ascitico e LCR;<br>
                                    Secreções ganglionares e de nódulos;<br>
                                    Fragmentos de tecidos: biopsias cutâneas, de ossos e de órgãos;<br>
                                    Secreções purulentas de pele, nariz, ouvido, olhos, garganta, etc;<br>
                                    Sangue e aspirado de medula;<br>
                                    Aspirados de gânglios e de tumores.<br>
                                    Quantitativo: 5 mL de cada amostra.
                                </td>
                                <td>
                                    Pacientes que procuram os serviços de saúde
                                </td>
                                <td>
                                    Recipiente plástico transparente de boca larga com tampa rosqueável;<br>
                                    Manter refrigerada (2ºC a 8ºC) até envio ao laboratório;<br>
                                    Escarro: até 7 dias;<br>
                                    Lavado gástrico e urina: Até 4 horas;<br>
                                    Outras amostras: Até 24 horas.                        
                                </td>
                            </tr>           
                        </tbody>
                    </table>
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    Seguir instruções do quadro acima.
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    Seguir instruções do quadro acima.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Seguir instruções do quadro acima.
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Seguir instruções do quadro acima.
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    Seguir instruções do quadro acima.
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                    Obrigatório o cadastro no Gerenciador de Ambiente Laboratorial (GAL) e Formulário de Notificação do SINAN.
                </p>
                <h3>Informações complementares:</h3>
                <p>
                    As amostras devem ser encaminhadas ao LACEN, após o cadastramento no Sistema de Gerenciamento do Ambiente Laboratorial (GAL). Para visualizar os resultados, a unidade solicitante deverá consultar o GAL.
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>
