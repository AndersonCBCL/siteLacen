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
                    <a href="Index.php"> Serviços </a>
                </li>
                <span class="dir">></span> 
                <li>
                    <a href="gal.php"> GAL </a>
                </li>
            </ul>
        </nav>

        <section class="pagina_servico_gal">

            <section class="imagem">
                <h1 class="titulo_servico" >GAL</h1>
            </section>
        

            <section class="conteudo">
                <p>
                    O sistema Gerenciador de Ambiente Laboratorial (GAL) foi desenvolvido pela Coordenação Geral de Laboratórios de Saúde Pública (CGLAB), em parceria com Departamento de Informática do Sistema Único de Saúde (DATASUS) e a Secretária de Vigilância em Saúde (SVS).
                </p>
                <p>
                    O GAL é um sistema informatizado desenvolvido para Laboratórios de Saúde Pública aplicado aos exames e ensaios de amostras de origem humana, animal e ambiental, com padrão nacional, e desenvolvido de acordo com os protocolos do Ministério da Saúde.
                </p>
                <p>
                    <p class="conteudo_p_funcoes">Principais funções:</p>
                    <ul class="conteudo_topicos_funcoes">
                        <li>Gerenciar e acompanhar as realizações das análises laboratoriais desde a sua solicitação até emissão do laudo final;</li>
                        <li>Gerar relatórios gerenciais e de produção nas Redes de Laboratórios de Saúde Pública;</li>
                        <li>Gerar consultas e relatórios (específicos e epidemiológicos);</li>
                        <li>Enviar resultados laboratoriais dos casos suspeitos ou confirmados para o Sistema de Informação de Agravos de Notificação (SINAN);</li>
                        <li>Subsidiar as tomadas de decisões pelas Vigilâncias nas esferas Nacional, Estadual e Municipal;</li>
                        <li>Padronizar as informações dos laudos e pareceres técnicos.</li>
                    </ul>
                </p>
                <div class="acesso_rapido">
                    <h3>
                        Acesso Rápido
                    </h3>
                    <h4>
                        Usuário:
                    </h4>
                    <p>
                        <li><a href="../downloads//GAL/TERMO _DE_CONFIDENCIALIDADE.pdf" download="TERMO _DE_CONFIDENCIALIDADE.pdf" type="application/pdf"> Termo de Confidencialidade</a></li>
                        <li><a href="../downloads//GAL/CADASTRO_NOVA-PERMISSAO_REATIVACAO.pdf" download="CADASTRO_NOVA-PERMISSAO_REATIVACAO.pdf" type="application/pdf">Cadastro, Nova Permissão ou Reativação</a></li>
                        <li><a href="">Solicitação de treinamento</a></li>
                    </p>    
                    <h4>
                        Unidade de Saúde
                    </h4>
                    <p>
                        Cadastro ou alteração de dados
                    </p>

                    <h4>
                        Configuração
                    </h4>
                    <p>
                        Configuração de fluxo de exames/ensaios;<br>
                        Formulário de inclusão e alteração de kit - Biologia Médica;<br>
                        Formulário de inclusão e alteração de exame/metodologia - Biologia Médica;<br>
                        Formulário de inclusão e alteração ensaio e método - Ambiental;<br>
                        Formulário de inclusão e alteração investigação/pesquisa/técnica - Animal Vertebrado;<br>
                        Formulário de inclusão e alteração finalidade/ensaio/técnica - Animal Invertebrado;                    
                    </p>
                    
                </div>


            </section>
        </section>
    </section>
    <?php
        include "rodape.html";
    ?>
</body>
        