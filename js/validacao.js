// js/sac.js
document.getElementById("formSAC").addEventListener("submit", function(e){
  e.preventDefault();

  const nome = document.getElementById("nome").value.trim();
  const cpf = document.getElementById("cpf").value.trim();
  const email = document.getElementById("email").value.trim();
  const mensagem = document.getElementById("mensagem").value.trim();
  const feedback = document.getElementById("feedback");

  if (!nome || !cpf || !email || !mensagem) {
    feedback.textContent = "Por favor, preencha todos os campos.";
    feedback.style.color = "red";
    return;
  }

  // CPF só números
  if (!/^\d{11}$/.test(cpf)) {
    feedback.textContent = "CPF inválido. Insira apenas 11 números.";
    feedback.style.color = "red";
    return;
  }

  // E-mail simples
  if (!/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(email)) {
    feedback.textContent = "E-mail inválido.";
    feedback.style.color = "red";
    return;
  }

  // Armazena nome
  localStorage.setItem("sacNome", nome);
  window.location.href = "mensagem.html";
});
