<?php
  session_start();
  if (!isset($_SESSION['id'])) {
    header("Location: login");
    exit;
  }

  $nomeUsuario = $_SESSION['nome'] ?? 'Nome do Usuário';
  $email = $_SESSION['email'] ?? 'email@exemplo.com';
  $fotoPerfil = $_SESSION['foto_perfil'] ?? 'img/default_user.png';

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Meu Perfil - BookIt</title>
  <link rel="stylesheet" href="CSS/perfil.css">
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
        <li><a href="logout.php">Sair</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="container_perfil">
      <h2>Perfil do Usuário</h2>

      <div class="foto-perfil">
        <img src="<?= $fotoPerfil ?>" alt="Foto do perfil">
      <form action="atualizar_foto_perfil" method="post" enctype="multipart/form-data" class="upload-foto-form">
        <label for="nova_foto" class="custom-file-upload">
          Escolher nova foto
        </label>
        <input type="file" name="nova_foto" id="nova_foto" accept="image/*" onchange="mostrarNomeArquivo(this)">
        <span id="nome-arquivo">Nenhum arquivo escolhido</span>
        <button type="submit">Atualizar Foto</button>
      </form>


      <form action="atualizar_perfil.php" method="post" class="editar-form">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="<?= htmlspecialchars($nomeUsuario) ?>">

        <label for="senha">Nova Senha:</label>
        <input type="password" name="senha" id="senha" placeholder="Digite sua nova senha">

        <label for="bio">Bio:</label>
        <textarea name="bio" id="bio" rows="4" placeholder="Conte um pouco sobre você..."></textarea>
        
        <button type="submit">Salvar Alterações</button>
      </form>
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
