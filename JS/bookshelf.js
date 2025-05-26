google.books.load({"language": "pt-BR"});

google.books.setOnLoadCallback(function () {

  aviso = document.getElementById("aviso");
  
  if (!livrosLidos || livrosLidos.length === 0) {
    aviso.innerHTML = "Nenhum livro lido encontrado.";
    return;
  } else {
    aviso.innerHTML = "";
  }

  livrosLidos.forEach(livro => {
    const container = document.createElement("div");
    container.className = "book-viewer";
    container.id = `viewerCanvas${livro.id}`;
    document.getElementById("books-container").appendChild(container);

    const viewer = new google.books.DefaultViewer(container);
    viewer.load(livro.google_book_id);
  });
});
