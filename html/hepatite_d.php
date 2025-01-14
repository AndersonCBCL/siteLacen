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
                    <a href="#">Hepatite D</a>
                </li>
            </ul>
        </nav>

        <!--
        <section class="secao-titulo-pagina-nivel2">
            <h1 class="titulo-pagina">Exames Ofertados</h1>
        </section>
        -->

        <section class="pagina_exame">

            <h1 class="titulo_exame" >Hepatite D</h1>

            <section class="conteudo">

                <h3>Metodologia:</h3>
                <p>
                    PCR em tempo real
                </p>   
                <h3>Amostra biológica:</h3>
                <p>
                    Plasma.
                </p>    
                <h3>Volume ideal:</h3>
                <p>
                    Sangue venoso colhido em EDTA ou sem anticoagulante 5 mL.
                </p>
                <h3>Período ideal de coleta:</h3>
                <p>
                    Na suspeita clínica é solicitada uma coleta.
                </p>
                <h3>Orientações para a coleta de amostra:</h3>
                <p>
                    O exame requer a coleta de uma amostra de sangue total em tubo sem anticoagulante com gel separador (tampa amarela). Deve ser coletado a quantidade de tubos suficiente para a obtenção de um volume final de no mínimo 6 mL de amostra;<br>
                    O(s) tubo(s) deve(m) ser identificado(s) com o nome completo do paciente e a sua data de nascimento.
                </p>
                <h3>Conservação da amostra até o envio:</h3>
                <p>
                    Após a coleta, o tubo deve ser mantido em temperatura ambiente de 30 a 60 minutos para ativação e retração do coágulo. Posteriormente o tubo deve ser centrifugado a 3.000 rpm por 10 minutos para separação do soro.  Após a centrifugação, a amostra deverá ser entregue em até 48h após a coleta ao LACEN em isopor ou caixa térmica com gelo reciclável (2° a 8°C), em suporte estável evitando que amostra vire.<br>
                    <u>Fluxo alternativo da amostra (aplica-se para unidades coletoras sem disponibilidade de centrífuga)</u>:<br>
                    Após a coleta, o tubo deve ser homogeneizado delicadamente por inversão e encaminhado em até 24h após a coleta ao LACEN em isopor ou caixa térmica com gelo reciclável (2° a 8°C), em suporte estável evitando que amostra vire. 
                </p>
                <h3>Forma de acondicionamento para transporte:</h3>
                <p>
                    Caixas isotérmicas com gelo reciclável sinalizadas com símbolo de risco biológico;<br>
                    Usar suporte (estante) para conter derramamento ou vazamento durante o transporte e forrar a caixa isotérmica com papel absorvente;<br>
                </p>
                <h3>Formulários requeridos:</h3>
                <p>
                    Para realização do exame de CV-HDV, o profissional solicitante deverá preencher minimamente os campos obrigatórios sinalizados pelo asterisco (*), do formulário de solicitação do exame (https://www.gov.br/aids/pt-br/sistemas-de-informacao/gal). <br>
                    Salienta-se que o preenchimento inadequado do formulário de solicitação implicará na incapacidade de registro da requisição do exame no sistema Gerenciador de Ambiente Laboratorial – GAL 	, pela unidade de cadastro (instituição solicitante/coletora), e/ou avaliação dos critérios de realização do exame, pelo laboratório executor.
                </p>
                <h3>Critérios de rejeição de amostra:</h3>
                <p>
                    Amostras recebidas que não estiverem em conformidade com o protocolo de coleta, armazenamento e transporte indicado acima;<br>
                    Amostras recebidas com o formulário de solicitação sem os campos obrigatórios preenchidos (impeditivo para a análise dos critérios de solicitação e realização do exame);<br>
                    Amostras recebidas sem o formulário de solicitação; <br>
                    Amostras recebidas sem o cadastro da requisição do exame no sistema GAL pela unidade coletora; <br>
                    Solicitações que não atendam aos critérios de realização do exame estabelecidos no PCDT de Hepatite B e Coinfecções vigente.
                    
                </p>

            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
</html>

