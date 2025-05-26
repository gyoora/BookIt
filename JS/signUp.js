document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("registerForm");

  const nameInput = document.getElementById("name");
  const emailInput = document.getElementById("email");
  const passwordInput = document.getElementById("password");
  const confirmPasswordInput = document.getElementById("confirmPassword");

  const nameError = document.getElementById("nameError");
  const emailError = document.getElementById("emailError");
  const passwordError = document.getElementById("passwordError");
  const confirmPasswordError = document.getElementById("confirmPasswordError");

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    nameError.textContent = "";
    emailError.textContent = "";
    passwordError.textContent = "";
    confirmPasswordError.textContent = "";

    let valid = true;

    const name = nameInput.value.trim();
    const email = emailInput.value.trim();
    const password = passwordInput.value.trim();
    const confirmPassword = confirmPasswordInput.value.trim();

    // Validação do nome
    if (name === "") {
      nameError.textContent = "O campo de nome é obrigatório.";
      valid = false;
    }

    if (email === "") {
      emailError.textContent = "O campo de email é obrigatório.";
      valid = false;
    } else if (!validateEmail(email)) {
      emailError.textContent = "Digite um email válido.";
      valid = false;
    }

    if (password === "") {
      passwordError.textContent = "A senha é obrigatória.";
      valid = false;
    } else if (password.length < 6) {
      passwordError.textContent = "A senha deve ter pelo menos 6 caracteres.";
      valid = false;
    }

    if (confirmPassword === "") {
      confirmPasswordError.textContent = "Confirme sua senha.";
      valid = false;
    } else if (password !== confirmPassword) {
      confirmPasswordError.textContent = "As senhas não coincidem.";
      valid = false;
    }

    if (valid) {
      console.log("Formulário válido. Enviando dados...");
      form.submit();
    }
  });

  function validateEmail(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
  }
});
