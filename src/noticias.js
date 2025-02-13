const noticiasPorPagina = 5;
let paginaAtual = 1;

function exibirNoticias() {
    const container = document.getElementById("newsContainer");
    container.innerHTML = "";
    
    const inicio = (paginaAtual - 1) * noticiasPorPagina;
    const fim = inicio + noticiasPorPagina;
    const noticiasExibir = noticias.slice(inicio, fim);

    noticiasExibir.forEach((noticia, index) => {
        const div = document.createElement("div");
        div.className = "news-item";
        div.id = `newsMini-${inicio + index}`;

        const imagemHTML = noticia.imagem ? `<img src="${noticia.imagem}" alt="Imagem da notícia">` : "";

        div.innerHTML = `
            ${imagemHTML} 
            <div class="news-text">
                 <h2 id="${noticia.id}><a class="news-title" onClick="carregarPagina('${noticia.link}')">${noticia.titulo}</a></h2>
                <small>${noticia.data}</small>
            </div>
        `;

        container.appendChild(div);
    });

    atualizarPaginacao();
}

const noticias = [
    { titulo: "Teste 1 Lorem ipsum dolor sit amet conscectur adispiscing elit", descricao: "Descrição 1 Lorem ipsum dolor sit amet conscectur adispiscing elit", data: "30/01/2025", imagem: "../imagens/ultimas-noticias/WhatsApp-Image-2020-08-28-at-15.07.13.jpeg", link:"noticia_1.php", id: "noticia_1" },
    { titulo: "Teste 2 Lorem ipsum dolor sit amet conscectur adispiscing elit", descricao: "Descrição 2 Lorem ipsum dolor sit amet conscectur adispiscing elit", data: "29/01/2025", imagem: "../imagens/ultimas-noticias/LACEN (4)-1.jpg", link:"noticia_2.php", id: "noticia_2" },
    { titulo: "Teste 3 Lorem ipsum dolor sit amet conscectur adispiscing elit", descricao: "Descrição 3 Lorem ipsum dolor sit amet conscectur adispiscing elit", data: "30/01/2025", imagem: "../imagens/img-ultimas-noticias.png", link:"noticia_3.php", id: "noticia_3" },
    { titulo: "Teste 4 Lorem ipsum dolor sit amet consectetur adispiscing elit", descricao: "Descrição 4 Lorem ipsum dolor sit amet conscectur adispiscing elit", data: "30/01/2025", link:"noticia_4.php", id: "quartaNoticia" },
];

function atualizarPaginacao() {
    const pagContainer = document.getElementById("pagination");
    pagContainer.innerHTML = "";
    const totalPaginas = Math.ceil(noticias.length / noticiasPorPagina);
    
    for (let i = 1; i <= totalPaginas; i++) {
        const link = document.createElement("a");
        link.href = "#";
        link.innerText = i;
        link.className = i === paginaAtual ? "active" : "";
        link.onclick = function (event) {
            event.preventDefault();
            paginaAtual = i;
            exibirNoticias();
        };
        pagContainer.appendChild(link);
    }
}

exibirNoticias();


