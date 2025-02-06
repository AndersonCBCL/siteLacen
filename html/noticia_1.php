<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícia 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilo/estilo.css">
    <link href="'https://fonts.googleapis.com/css2?family=Calistoga&family=Inter:wght@100..900&display=swap"
    
</head>
<body>
    <header>
        <?php
         include "/cabecalho.php"
         ?>
    </header>
        <div class="container">
                <nav class="nav_paginas">
                    <ul>
                        <li>
                            <a href="index.php"> Home</a>
                        </li>
                        <span class="dir">></span> 
                        <li>
                            <a href="ultimas_noticias.php"> &Uacute;ltimas Not&iacute;cias </a>
                        </li>
                        <span class="dir">></span> 
                        <li>
                            <a"> Not&iacute;cia </a>
                        </li>
                    </ul>
                </nav>
            
                <article class="column-middle">
                    <h1>Texto de Exemplo</h1>
                    <p>
                        Lorem ipsum odor amet, consectetuer adipiscing elit. Aptent etiam curae justo accumsan nascetur phasellus pellentesque. Id lorem rhoncus sem ornare cras. Enim accumsan senectus lectus pretium ligula sociosqu tristique faucibus. Ridiculus nullam maecenas, elementum congue nulla penatibus. Bibendum hendrerit class vehicula ipsum urna.
                    </p>
                    <span>Data/Data/2025</span>
                    <figure>
                        <img src="../imagens/ultimas-noticias/WhatsApp-Image-2020-08-28-at-15.07.13.jpeg" />
                        <figcaption>Non nam per accumsan venenatis senectus rhoncus suspendisse.</figcaption>
                    </figure>
                    <p>
                        Neque nisi ex imperdiet integer maximus vivamus varius imperdiet. Torquent laoreet fames erat nulla primis. Sed dis sed est ut morbi feugiat nisi. Condimentum id pharetra ipsum ornare tortor a. Urna magna nulla augue massa ipsum venenatis. Nec odio interdum montes venenatis rutrum facilisis phasellus sagittis. Imperdiet fringilla porttitor nisl litora; libero orci aliquet maximus. Dolor nam nulla eget mattis quam sapien eleifend elit metus. Aliquam ipsum fames himenaeos blandit sit faucibus litora gravida.
                    </p>
                    <p>
                        Ridiculus condimentum magnis imperdiet euismod vestibulum purus semper. Ex aliquam quis gravida dapibus interdum potenti placerat. Nisi fringilla mi; efficitur aenean posuere venenatis. Consectetur elit justo mus velit purus volutpat magnis. Odio est quis nascetur ante porta. Odio sagittis commodo a duis risus. Consectetur augue elit maximus feugiat purus adipiscing nibh. Et felis mattis parturient integer magnis sed; venenatis nibh eros.
                    </p>
                </article>
        </div>

    <?php
        include "/rodape.html";
    ?>
</body>
</html>