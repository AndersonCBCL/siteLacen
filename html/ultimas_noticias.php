<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Últimas Notícias</title>
    <link rel="stylesheet" href="../estilo/estilo.css">
</head>
<body>
    <header>
        <?php include "cabecalho.php" ?>
    </header>
    
    <div class="container">
        
        <nav class="nav_paginas">
            <ul>
                <li>
                    <a href="index.php"> Home</a>
                </li>
                <span class="dir">></span> 
                <li>
                    &Uacute;ltimas Not&iacute;cias
                </li>
            </ul>
        </nav>
    
       

        <div class="pagina_ultimas_noticias">
            <h1>&Uacute;ltimas Not&iacute;cias</h1>
            <section class="ultimas_noticias">
                <div  class="destaque" id="destaque">

                <script>
                        function carregarPagina(arquivoNoticia) {
                            fetch(arquivoNoticia)
                                .then(response => {
                                    if (!response.ok) {
                                        throw new Error("Erro ao carregar a página: " + response.status);
                                    }
                                    return response.text();
                                })
                                .then(data => {
                                    document.getElementById("destaque").innerHTML = data;
                                })
                                .catch(error => console.error(error));

                            };

                                window.addEventListener('load', () => {
                                 const hash = window.location.hash.substring(1);
                                 hash && carregarPagina (`${hash}.php`);
                                });
                </script>

                </div>
                <div class="noticias_anteriores">
                    <div class="news-container" id="newsContainer"></div>
                    <div class="pagination" id="pagination"></div>
                </div>
            </section>
        </div>


        <script src="../src/noticias.js"></script>
    </div>
    <?php
        include "rodape.html";
    ?>
</body>
</html>