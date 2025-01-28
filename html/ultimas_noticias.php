<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Últimas Notícias</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../estilo/estilo.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>

    <header>
        <?php include "cabecalho.php" ?>
    </header>
    
    <div class="container">
        
    <section class="banner-sec">
        <div class="container">
    <div class="row">
            <div class="col-md-3">
        <div class="card"> <img class="img-fluid" src="" alt="">
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small" id="openPopup-1">Notícia Antiga 1</h2>
                  </div>
            <p class="card-text"><small class="text-time"><em>3h atrás</em></small></p>
          </div>
              </div>
        <div class="card"> <img class="img-fluid" src="" alt="">
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small" id="openPopup-2">Notícia Antiga 2</h2>
                  </div>
            <p class="card-text"><small class="text-time"><em>3h atrás</em></small></p>
          </div>
              </div>
      </div>
            <div class="col-md-3">
        <div class="card"> <img class="img-fluid" src="" alt="">
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small" id="openPopup-3">Notícia Antiga 3</h2>
                  </div>
            <p class="card-text"><small class="text-time"><em>3h atrás</em></small></p>
          </div>
              </div>
        <div class="card"> <img class="img-fluid" src="" alt="">
                <div class="card-body">
            <div class="news-title">
                    <h2 class=" title-small" id="openPopup-4">Notícia Antiga 4</h2>
                  </div>
            <p class="card-text"><small class="text-time"><em>3h atrás</em></small></p>
          </div>
              </div>
      </div>
         <!-- não tirar os botões daqui nem tentar organizar o código, se não para de funcionar -->
            <div class="col-md-6 top-slider">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
          </ol>
                
                <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                    <div class="news-block">
                <div class="news-media"><img class="img-fluid" src="../imagens/ultimas-noticias/WhatsApp-Image-2020-08-28-at-15.07.13.jpeg" alt="..." style="width: 455px; height: 275px;"></div>
                <div class="news-title">
                        <h2 class=" title-large" id="openPopup-5">Notícia Nova 1</h2>
                      </div>
                <div class="news-des">Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes vel. Mauris nam suspendisse consectetur mus...</div>
                <div class="time-text"><strong>Agora</strong></div>
                <div></div>
              </div>
                  </div>
            <div class="carousel-item">
                    <div class="news-block">
                <div class="news-media"><img class="img-fluid" src="../imagens/ultimas-noticias/LACEN (4)-1.jpg" alt="..." style="width: 455px; height: 275px;"></div>
                <div class="news-title">
                        <h2 class=" title-large" id="openPopup-6">Notícia Nova 2</h2>
                      </div>
                <div class="news-des">Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes vel. Mauris nam suspendisse consectetur mus...</div>
                <div class="time-text"><strong>2h atrás</strong></div>
                <div></div>
              </div>
                  </div>
            <div class="carousel-item">
                    <div class="news-block">
                <div class="news-media"><img class="img-fluid" src="../imagens/img-ultimas-noticias.png" alt="..." style="width: 455px; height: 275px;" alt=""></div>
                <div class="news-title">
                        <h2 class=" title-large" id="openPopup-7">Notícia Nova 3</h2>
                      </div>
                <div class="news-des">Condimentum ultrices mi est a arcu at cum a elementum per cum turpis dui vulputate vestibulum in vehicula montes vel. Mauris nam suspendisse consectetur mus...</div>
                <div class="time-text"><strong>2h </strong></div>
                <div></div>
              </div>
                  </div>
          </div>
              </div>
      </div>
          </div>
  </div>
      </section>
        
    </div>

    <div id="popup-1" class="popup">
            <div class="popup-conteudo">
            <span class="fechar" id="closePopup-1">&times;</span>
            <h2>Notícia Antiga 1</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum vitae itaque, cum veniam provident minus.</p>
            </div>
        </div>
    <div id="popup-2" class="popup">
            <div class="popup-conteudo">
            <span class="fechar" id="closePopup-2">&times;</span>
            <h2>Notícia Antiga 2</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum vitae itaque, cum veniam provident minus.</p>
            </div>
        </div>
    <div id="popup-3" class="popup">
            <div class="popup-conteudo">
            <span class="fechar" id="closePopup-3">&times;</span>
            <h2>Notícia Antiga 3</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum vitae itaque, cum veniam provident minus.</p>
            </div>
        </div>
    <div id="popup-4" class="popup">
            <div class="popup-conteudo">
            <span class="fechar" id="closePopup-4">&times;</span>
            <h2>Notícia Antiga 4</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum vitae itaque, cum veniam provident minus.</p>
            </div>
        </div>
    <div id="popup-5" class="popup">
            <div class="popup-conteudo">
            <span class="fechar" id="closePopup-5">&times;</span>
            <h2>Notícia Nova 1</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <img src="../imagens/ultimas-noticias/WhatsApp-Image-2020-08-28-at-15.07.13.jpeg" alt="..." style="width: 600px; height: 400px;">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore distinctio corporis quod rem laborum commodi dolorum cumque tempore, eum exercitationem eaque provident aspernatur nulla incidunt perferendis reiciendis perspiciatis aperiam sapiente!</p>
            </div>
        </div>
    <div id="popup-6" class="popup">
            <div class="popup-conteudo">
            <span class="fechar" id="closePopup-6">&times;</span>
            <h2>Notícia Nova 2</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <img src="../imagens/ultimas-noticias/LACEN (4)-1.jpg" alt="..." style="width: 600px; height: 400px;" >
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum vitae itaque, cum veniam provident minus.</p>
            </div>
        </div>
    <div id="popup-7" class="popup">
            <div class="popup-conteudo">
            <span class="fechar" id="closePopup-7">&times;</span>
            <h2>Notícia Nova 3</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <img src="../imagens/img-ultimas-noticias.png" alt="..." style="width: 600px; height: 400px;">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum vitae itaque, cum veniam provident minus.</p>
            </div>
        </div>
    <?php
        include "rodape.html";
    ?>

    <script src="../src/noticias.js"></script>
</body>
</html>