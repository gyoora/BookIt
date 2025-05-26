<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro - BookIt</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lora:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS/signUp.css" />
  <link rel="shortcut icon" href="img/srBiblioRosto.png" type="image/x-icon">
</head>
<body>
  <div class="login-container">
    <h1 class="logo">BookIt</h1>
    <form class="login-form" id="registerForm" method="POST">
      <h2>Crie sua conta</h2>

      <label for="name">Nome</label>
      <input type="text" id="name" name="name" placeholder="Insira como quer ser chamado"/>
      <small class="error-message" id="nameError"></small>

      <label for="email">Email</label>
      <input type="text" id="email" name="email" placeholder="seu@email.com"/>
      <small class="error-message" id="emailError"></small>

      <label for="password">Senha</label>
      <input type="password" id="password" name="pass" placeholder="Crie uma senha"/>
      <small class="error-message" id="passwordError"></small>

      <label for="confirmPassword">Confirmar Senha</label>
      <input type="password" id="confirmPassword" placeholder="Confirme sua senha"/>
      <small class="error-message" id="confirmPasswordError"></small>

      <input type="submit" value="Cadastrar">

      <p class="signup-link">Já tem uma conta? <a href="login">Entrar</a></p>
    </form>
  </div>
  <script src="JS/signUp.js"></script>
</body>
</html>
