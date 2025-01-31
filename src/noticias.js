const noticias = [
  { 
    titulo: "Teste 1", 
    descricao: "Descrição 1", 
    data: "30/01/2025", 
    link: "noticia1.html",
    imagem: "../imagens/ultimas-noticias/WhatsApp-Image-2020-08-28-at-15.07.13.jpeg"
  },
  { 
    titulo: "Teste 2", 
    descricao: "Descrição 2", 
    data: "29/01/2025", 
    link: "noticia2.html", 
    imagem: "../imagens/ultimas-noticias/LACEN (4)-1.jpg"
  },
  { 
    titulo: "Teste 3", 
    descricao: "Descrição 3", 
    data: "30/01/2025", 
    link: "noticia1.html",
    imagem: "../imagens/img-ultimas-noticias.png"
  },
  { 
    titulo: "Teste 4", 
    descricao: "Descrição 4", 
    data: "30/01/2025", 
    link: "noticia1.html",
  },
  { 
    titulo: "Teste 5", 
    descricao: "Descrição 5", 
    data: "29/01/2025", 
    link: "noticia2.html" 
  },
  { 
    titulo: "Teste 6", 
    descricao: "Descrição 6", 
    data: "29/01/2025", 
    link: "noticia2.html" 
  },
  { 
    titulo: "Teste 7", 
    descricao: "Descrição 7", 
    data: "29/01/2025", 
    link: "noticia2.html" 
  },
  { 
    titulo: "Teste 8", 
    descricao: "Descrição 8", 
    data: "29/01/2025", 
    link: "noticia2.html" 
  },
  { 
    titulo: "Teste 9", 
    descricao: "Descrição 9", 
    data: "29/01/2025", 
    link: "noticia2.html" 
  },
  { 
    titulo: "Teste 10", 
    descricao: "Descrição 10", 
    data: "29/01/2025", 
    link: "noticia2.html" 
  },
  { 
    titulo: "Teste 11", 
    descricao: "Descrição 11", 
    data: "29/01/2025", 
    link: "noticia2.html" 
  },
  { 
    titulo: "Teste 12", 
    descricao: "Descrição 12", 
    data: "29/01/2025", 
    link: "noticia2.html" 
  },

];

const noticiasPorPagina = 10;
let paginaAtual = 1;

function exibirNoticias() {
  const container = document.getElementById("newsContainer");
  container.innerHTML = "";
  
  const inicio = (paginaAtual - 1) * noticiasPorPagina;
  const fim = inicio + noticiasPorPagina;
  const noticiasExibir = noticias.slice(inicio, fim);

  noticiasExibir.forEach(noticia => {
      const div = document.createElement("div");
      div.className = "news-item";

      const imagemHTML = noticia.imagem ? `<img src="${noticia.imagem}" alt="Imagem da notícia">` : "";

      div.innerHTML = `
          <h2><a href="${noticia.link}" target="_blank">${noticia.titulo}</a></h2>
          <p>${noticia.descricao}</p>
          <small>${noticia.data}</small>
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
          event.preventDefault(); // Evita o recarregamento da página ao clicar
          paginaAtual = i;
          exibirNoticias();
      };
      pagContainer.appendChild(link);
  }
}

exibirNoticias();
