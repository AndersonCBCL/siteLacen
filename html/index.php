<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LACEN-PE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilo/estilo.css">
    <link href="'https://fonts.googleapis.com/css2?family=Calistoga&family=Inter:wght@100..900&display=swap"
</head>

<body>
    
    <header>
       <?php include "cabecalho.php";?>
            
    </header>

    <section class="container">

        <main>
            <section class="secao-slides">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="../imagens/slides/slides-img1.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../imagens/home/imagem1a.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="../imagens/slides/slides-img1.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
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
                            <div id="carouselExampleCaptions" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="../imagens/img-ultimas-noticias.png" alt="..." style="width: 455px; height: 275px;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Primeira Notícia</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../imagens/slides/slides-img1.png" alt="..." style="width: 455px; height: 275px;" >
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Segunda Notícia</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../imagens/img-ultimas-noticias.png" alt="..." style="width: 455px; height: 275px;">
                                        <div class="carousel-caption d-none d-md-block">
                                            <h5>Terceira Notícia</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>