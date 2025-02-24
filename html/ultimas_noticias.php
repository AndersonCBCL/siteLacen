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
                    function carregarPagina() {
                        document.querySelectorAll('.news-link').forEach(link => {
                            link.addEventListener('click', function(event) {
                                event.preventDefault();

                                const pdfUrl = this.getAttribute('href'); 
                                const destaqueDiv = document.getElementById('destaque'); 
                                destaqueDiv.innerHTML = ''; 
                                
                                const embed = document.createElement('embed'); 
                                embed.src = pdfUrl; 
                                embed.type = 'application/pdf'; 
                                embed.width = '100%'; 
                                embed.height = '650px'; 

                                destaqueDiv.appendChild(embed);
                            });
                        });
                    }

                    window.addEventListener('load', carregarPagina);
                </script>
                </div>
                <div class="noticias_anteriores">
                    <div class="news-container" id="newsContainer"></div>
                    <div class="pagination" id="pagination"></div>
                </div>
            </section>
        </div>

        <script src="../js/noticias.js"></script>
        <script type="module">
                import { noticias } from '../js/noticias.js';

                window.addEventListener('load', () => {
                    const hash = window.location.hash.substring(1);

                    if (hash) {
                        const noticia = noticias.find(n => n.id === hash);

                        if (noticia) {
                            if (noticia.link.endsWith(".pdf")) {
                                exibirPDF(noticia.link);
                            } else if (noticia.link.endsWith(".html") || noticia.link.endsWith(".php")) {
                                carregarPagina(noticia.link);
                                
                            } else {
                                console.error('Formato não suportado:', noticia.link);
                                document.getElementById("destaque").innerHTML = "<p>Formato não suportado.</p>";
                            }
                        } else {
                            console.error('Notícia não encontrada.');
                            document.getElementById("destaque").innerHTML = "<p>Notícia não encontrada.</p>";
                        }
                    }
                });

                function exibirPDF(url) {
                    const container = document.getElementById("destaque");
                    container.innerHTML = `<iframe src="${url}" width="100%" height="650px"></iframe>`;
                }

                async function carregarPagina(url) {
                    const container = document.getElementById("destaque");

                    try {
                        const response = await fetch(url);

                        if (!response.ok) throw new Error(`Erro HTTP: ${response.status}`);

                        const html = await response.text();
                        container.innerHTML = html;
                    } catch (error) {
                        console.error(error);
                        container.innerHTML = "<p>Erro ao carregar conteúdo.</p>";
                    }
                }
        </script>

    </div>
    <?php
        include "rodape.html";
    ?>
</body>
</html>