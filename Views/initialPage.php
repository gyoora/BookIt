<?php
session_start();
$usuarioNome = $_SESSION['nome'] ?? 'Usuário';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BookIt - Início</title>
  <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;600&display=swap" rel="stylesheet" />
  <link rel="shortcut icon" href="img/srBiblioRosto.png" type="image/x-icon">
  <link rel="stylesheet" href="css/dashboard.css" />
</head>
<body>

  <header>
    <div class="logo">
      <img src="img/bookIt-light-font.png" alt="Logo BookIt">
    </div>
    <nav>
      <ul>
        <li><a href="#">Início</a></li>
        <li><a href="bookshelf">Estante de livros</a></li>
        <li><a href="meu_perfil">Perfil</a></li>
        <li><a href="#">Sair</a></li>
      </ul>
    </nav>
  </header>

  <main class="dashboard">

    <section class="boas-vindas">
      <div>
        <h1>Bem-vindo(a) ao BookIt, <?php echo htmlspecialchars($usuarioNome); ?>!</h1>
        <p>Vamos explorar novas leituras hoje?</p>
      </div>
      <div class="biblio-box">
        <img src="img/srBiblioMascote.png" alt="Sr. Biblio" />
        <p class="fala">"A leitura é o alimento da alma!"</p>
      </div>
    </section>

    <section class="atalhos">
      <div class="card">
        <h2>Minhas Leituras</h2>
        <p>Acompanhe seus livros em andamento.</p>
        <a href="#">Ver estante →</a>
      </div>

      <div class="card">
        <h2>Descobrir Livros</h2>
        <p>Encontre novos livros para se apaixonar.</p>
        <a href="#">Explorar →</a>
      </div>

      <div class="card">
        <h2>Avaliar livros</h2>
        <p>Avalie e poste a sua opinião sobre as suas leituras!</p>
        <a href="#">Escrever agora →</a>
      </div>
    </section>

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
