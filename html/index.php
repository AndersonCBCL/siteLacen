<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LACEN-PE</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
</head>

<body>
    
    <header>
       <?php include "cabecalho.php";?>
            
    </header>

    <section class="container">

        <main>
            <section class="secao-slides">
                <!--<img src="../imagens/slides/slides-img1.png" alt="">-->
                <img src="../imagens/home/imagem1a.png" alt="LACEN-PE">

            </section>

            <section class="secao-informacoes">
                <div class="leftside">
                    <h1 class="titulo">Informações</h1>
                    <div class="links-info">
                        <a href="" class="btn-link-info">
                            Manual de Coleta
                        </a>
                        <a href="exames_ofertados.php" class="btn-link-info">
                            Exames Ofertados
                        </a>
                        <a href="" class="btn-link-info">
                            Capacitações Ofertadas
                        </a>
                        <a href="" class="btn-link-info">
                            Notas Técnicas e Informativos
                        </a>
                    </div>
                </div>
                <div class="rightside">
                    
                        <div class="ultimas-noticias">
                        <a href="ultimas_noticias.php">    
                            <h2 class="sub-titulo">
                                Últimas Notícias
                            </h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet reprehenderit quisquam dolorem quis a modi iure magni, soluta, voluptatibus, nostrum tenetur similique excepturi iste qui. Voluptatem eaque magnam est tenetur!
                            </p>
                            </a>
                        </div>
                    
                    <div class="ultimas-noticias-img">
                        <img src="../imagens/img-ultimas-noticias.png" alt="">
                    </div>
                </div>
            </section>

            <section class="secao-servicos">
                <h1 class="titulo">Serviços</h1>
                <div class="links-servicos">
                    <a href="" class="btn-link-servico">
                        Rede Pernambucana de Laboratórios - RPELAB
                    </a>
                    <a href="" class="btn-link-servico">
                        Recepção Biológica
                    </a>
                    <a href="" class="btn-link-servico">
                        Recepção de Produtos
                    </a>
                    <a href="gal.php" class="btn-link-servico" >
                        GAL
                    </a>
                    <a href="https://triagemneonatal.saude.pe.gov.br" class="btn-link-servico" target="_blank">
                        Triagem Neonatal
                    </a>
                    
                </div>
            </section>
        </main>

    </section>

    <section class="secao-como-chegar">
        <h1 class="titulo-2">Como Chegar</h1>
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d987.6155780313718!2d-34.89268502523568!3d-8.05423381129238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1slacen%20pe!5e0!3m2!1spt-BR!2sbr!4v1715709114941!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
        

    <?php
        include "rodape.html";
    ?>

</body>
</html>