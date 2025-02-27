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
                <div class="destaque" id="destaque"></div>
                <div class="noticias_anteriores">
                    <div class="news-container" id="newsContainer"></div>
                    <div class="pagination" id="pagination"></div>
                </div>
            </section>
        </div>

        <!-- Modal -->
        <div id="modal" class="modal">
            <div class="modal-content">
                <span id="closeModal" class="close">&times;</span>
                <div id="modal-body"></div>
            </div>
        </div>

        <script src="../js/noticias.js"></script>
        <script type="module">
            import { noticias } from '../js/noticias.js';

            function exibirModal(url) {
                const modal = document.getElementById('modal');
                const modalBody = document.getElementById('modal-body');

                modalBody.innerHTML = `<iframe src="${url}" width="100%" height="650px"></iframe>`;
                modal.style.display = 'block';
            }
            
            document.getElementById('closeModal').addEventListener('click', function() {
                document.getElementById('modal').style.display = 'none';
            });

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
            
            async function carregarNoticias() {
                const newsContainer = document.getElementById("newsContainer");

                if (newsContainer) {
                    newsContainer.innerHTML = noticias.map(noticia => `
                        <a href="${noticia.link}" class="news-link" data-id="${noticia.id}">${noticia.titulo}</a>
                    `).join('');

                    configurarEventos();
                }
            }
        </script>

    </div>

    <?php include "rodape.html"; ?>

</body>
</html>