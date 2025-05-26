<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login - BookIt</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lora:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS/login.css" />
  <link rel="shortcut icon" href="img/srBiblioRosto.png" type="image/x-icon">
</head>
<body>
  <div class="login-container">
    <h1 class="logo">BookIt</h1>
    <form class="login-form" id="loginForm" method="POST">
        <h2>Entrar na sua conta</h2>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="seu@email.com"/>
        <small class="error-message" id="emailError"></small>

        <label for="password">Senha</label>
        <input type="password" id="password" name="pass" placeholder="Sua senha"/>
        <small class="error-message" id="passwordError"></small>

        <button type="submit">Entrar</button>
        <p class="signup-link">Não tem uma conta? <a href="signUp">Cadastre-se</a></p>
    </form>
  </div>
  <script src="JS/login.js"></script>
</body>
</html>
