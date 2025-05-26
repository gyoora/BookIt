<?php
if (!isset($_SESSION)) session_start();
if (!isset($livrosLidos)) $livrosLidos = [];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Minha Estante - BookIt</title>
  <link rel="stylesheet" href="css/bookshelf.css">
  <link rel="shortcut icon" href="img/srBiblioRosto.png" type="image/x-icon">
</head>
<body>
  <header>
    <div class="logo">
      <img src="img/bookIt-light-font.png" alt="Logo BookIt">
    </div>
    <nav>
      <ul>
        <li><a href="dashboard">Início</a></li>
        <li><a href="bookshelf">Minha estante</a></li>
        <li><a href="meu_perfil">Perfil</a></li>
        <li><a href="#">Sair</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <h1>Minha Estante</h1>
    <div id="books-container">
      <section id="aviso">
        <?php
          if (empty($ret)) {
            echo "<p>Nenhum livro encontrado!</p>";
          }
        ?>
      </section>
      <button>Adicionar livro a estante</button>
    </div>
  </main>

  <footer>
    <div class="footer-content">
      <div class="footer-logo">
        <img src="img/srBiblioRosto.png" alt="Sr. Biblio">
        <p class="slogan">BookIt — onde os livros ganham vida!</p>
      </div>
      <div class="footer-links">
        <a href="#">Sobre</a>
        <a href="#">Contato</a>
        <a href="#">Termos de uso</a>
        <a href="#">Política de privacidade</a>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> BookIt. Todos os direitos reservados.</p>
    </div>
  </footer>
</body>
</html>
