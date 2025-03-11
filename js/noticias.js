const noticiasPorPagina = 10;
let paginaAtual = 1;

document.addEventListener("DOMContentLoaded", function () {
    exibirNoticias();
    exibirNoticiasHash();
});

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
            
            <div class="news-text">
                <h2>
                    <a class="news-link" href="javascript:void(0);" data-noticia="${noticia.id}">${noticia.titulo}</a>
                </h2>
                <small>${noticia.data}</small>
            </div>
            ${imagemHTML}
        `;

        container.appendChild(div);
    });

    atualizarPaginacao();
}

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

const noticias = [
    { titulo: "Teste 1", descricao: "Descrição 1", data: "30/01/2025", imagem: "", link: "../arquivos/qualidade/nvl/Boletim_NVL_Dezembro_2024_ok.pdf", id: "noticia_1" },
    { titulo: "Teste 2", descricao: "Descrição 2", data: "29/01/2025", imagem: "../imagens/ultimas-noticias/lacen-img1.jpg", link: "../arquivos/qualidade/nvl/Para configurar um servidor com RAID 6.html", id: "noticia_2" },
    { titulo: "Teste 3", descricao: "Descrição 3", data: "30/01/2025", imagem: "../imagens/img-ultimas-noticias.png", link: "noticia_3.php", id: "noticia_3" },
    { titulo: "Teste 4", descricao: "Descrição 4", data: "30/01/2025", link: "noticia_4.php", id: "noticia_4" },
];

exibirNoticias();

const modal = document.getElementById('modal');
const modalContent = document.getElementById('modal-body');
const closeModal = document.getElementById('closeModal');

function openModalWithContent(noticia) {
    modalContent.innerHTML = '<p>Carregando...</p>';
    modalContent.style.width = "100%";
    modalContent.style.height = "800px";

    if (noticia.link.endsWith(".pdf") || noticia.link.endsWith(".html") || noticia.link.endsWith(".php")) {
        modalContent.innerHTML = `<iframe src="${noticia.link}" width="100%" height="800px" style="border: none;"></iframe>`;
    } else {
        fetch(noticia.link)
            .then(response => response.text())
            .then(data => {
                modalContent.innerHTML = `<div style="width: 100%; height: 800px; overflow: auto;">${data}</div>`;
            })
            .catch(error => {
                modalContent.innerHTML = '<p>Erro ao carregar conteúdo.</p>';
            });
    }

    modal.style.display = 'block';
    history.replaceState(null, null, window.location.pathname);

}

function fecharModal() {
    modal.style.display = 'none';
    if (window.history.state) {
        history.back()
    }
}

document.addEventListener('click', function (event) {
    if (event.target.classList.contains('news-link')) {
        event.preventDefault();
        let noticiaId = event.target.getAttribute("data-noticia");

        let noticia = noticias.find(n => n.id === noticiaId);
        if (noticia) {
            openModalWithContent(noticia);
        }
    }
});

closeModal.addEventListener('click', fecharModal);

window.addEventListener('click', function (event) {
    if (event.target === modal) {
        fecharModal();
    }
});

function exibirNoticiasHash() {
    const hash = window.location.hash.substring(1);
    if (hash) {
        let noticia = noticias.find(n => n.id === hash);
        if (noticia) {
            openModalWithContent(noticia);
        }
    }
}

window.addEventListener('hashchange', exibirNoticiasHash);
