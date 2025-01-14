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
                    <a href="#">Resistência Bacteriana de Hanseníase</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Resistência Bacteriana de Hanseníase</h1>

            <section class="conteudo">

                <h3>Agravo:</h3>
                <p>
                    Hanseníase
                </p>    
                <h3>Metodologia:</h3>
                <p>
                    Hibridização por sonda em linha (LPA) para Hanseníase.
                </p>    
                <h3>Amostras:</h3>
                <p>
                    Biópsia de lesões.A amostra biológica deve ser o fragmento de pele da borda da lesão mais característica e de maior baciloscopia. A biópsia deverá ser realizada, preferencialmente, com <i>punch</i> de 6 mm, na impossibilidade deverão ser coletados dois fragmentos com <i>punch</i> de 4 mm.
                </p>    
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    A amostra biológica deverá ser acondicionada em tubos novos, com tampa de rosca (do tipo Eppendorf) que devem ser totalmente  preenchidos com álcool 70°GL ou 70%, garantindo assim que toda a amostra fique imersa para melhor preservá-la. As amostras que forem acondicionadas em FORMOL serão DESCARTADAS.
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                    Obrigatório o cadastro no Gerenciador de Ambiente Laboratorial (GAL) e formulário do Sistema de Investigação da Resistência Antimicrobiana – Hanseníase (SIRH).
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