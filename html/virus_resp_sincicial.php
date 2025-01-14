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
                    <a href="#">Vírus Respiratório Sincicial - VRS</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Vírus Respiratório Sincicial - VRS</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    RT-PCR em tempo real.
                </p>    
                <h3>Amostra biológica:</h3>
                <p>
                    Swab de Nasofaringe;<br>
                    Aspirado de Nasofaringe;<br>
                    Aspirado Traqueal e Lavado Broncoalveolar.<br>
                    Para amostras de SVO, as vísceras devem ser encaminhadas congeladas; não podem, sob hipótese alguma, ser colocadas em formol.
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    Não se aplica.
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    As amostras clínicas devem ser coletadas preferencialmente a partir do 3° dias após o início dos sintomas e no máximo até o 7° dia após o início dos sintomas.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    Deverão ser coletados três swabs, um swab de orofaringe e dois swabs de nasofaringe, sendo um de cada narina;<br>
                    Após a coleta, os três swabs devem ser introduzidos em um único tubo contendo meio de transporte viral, fornecido pelo LACEN-PE;<br>
                    Para coleta de material da nasofaringe, o swab deve atingir uma profundidade próxima à distância entre a abertura da narina anterior e parte anterior da abertura da orelha. Inserir com rotação suave o swab em uma narina, paralelamente ao palato e assoalho nasal até encontrar uma resistência que corresponde à parte posterior da nasofaringe. Realizar movimentos suaves de fricção e rotação. Retirar devagar, fazendo movimentos de rotação e repetir o procedimento na outra narina utilizando o mesmo swab;<br>
                    Para coleta de aspirado de nasofaringe deve-se acoplar o cateter ao aparelho de sucção. Manter o paciente sentado com a cabeça levemente inclinada para trás. Instilar 1,5mL de solução salina em um nariz. Inserir o cateter paralelamente ao palato até atingir a parede posterior da nasofaringe. Iniciar o processo de aspiração removendo o cateter suavemente com movimentos de rotação. Transferir o aspirado para o tubo;<br>
                    As coletas de aspirado traqueal e lavado bronco-alveolar são opções para paciente em estado crítico internados em unidades hospitalares. Após realizar o procedimento, transferir uma alíquota de cerca de 3mL para o tubo contendo o meio de transporte viral; <br>
                    Em pacientes que evoluíram para óbito antes de ter sido coletada amostra de material biológico, deve ser realizada a coleta de um único swab pós-óbito. Para melhor identificação viral, esse procedimento deve ser realizado de preferência até 12 horas após o óbito; <br>
                    Identificar o frasco coletor ou tubo com o meio de transporte viral com os seguintes dados: nome completo do paciente, data e hora de coleta.
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Até o momento do envio, as amostras devem ser mantidas sob refrigeração (2° a 8°C) por até 48 horas. Após esse período as amostras devem ser armazenadas em temperatura ultrabaixa de -80°C.
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    Os tubos deverão ser transportados em posição vertical de maneira a evitar vazamentos. A organização dentro da caixa térmica deverá ser feita em estantes de modo que não permita atrito e colisão entre os tubos durante o transporte. </br>
                    O transporte deverá ser realizado em caixa térmica de paredes rígidas e com trava e utilizando gelo reciclável em quantidade suficiente para manter a temperatura das amostras de 2° a 8°C.
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                Para casos suspeitos de <a href="https://sivepgripe.saude.gov.br/sivepgripe" target= "_blank" rel="noopener noreferrer"> Síndrome Respiratória Aguda Grave (SRAG Hospitalizado) </a><br>
                Para casos suspeitos de <a href="https://notifica.saude.gov.br/onboard" target= "_blank" rel="noopener noreferrer">Síndrome Gripal (SG)</a>.
                </p>
                <h3>Informações complementares:</h3>
                <p>
                    As amostras devem ser encaminhadas ao LACEN, após o cadastramento no Sistema de Gerenciamento do Ambiente Laboratorial (GAL). Para visualizar os resultados, a unidade solicitante deverá consultar o GAL. </br>São critérios de rejeição: amostras hemolisadas, acondicionamento adequado, volume insuficiente, amostra em temperatura ambiente ou com identificação inadequada
                </p>
            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>
