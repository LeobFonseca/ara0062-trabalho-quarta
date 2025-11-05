// Aplica o tema armazenado em todas as páginas
const body = document.body;
const temaArmazenado = localStorage.getItem("tema");

if (temaArmazenado === "escuro") {
  body.classList.add("tema-escuro");
}

// Botão só existe no index.html
const toggle = document.getElementById("toggleTema");
if (toggle) {
  toggle.addEventListener("click", () => {
    body.classList.toggle("tema-escuro");
    if (body.classList.contains("tema-escuro")) {
      localStorage.setItem("tema", "escuro");
    } else {
      localStorage.setItem("tema", "claro");
    }
  });
}
