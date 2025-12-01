<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $descricao = $_POST["descricao"];
    $capa = $_POST["capa"];

    $sql = "INSERT INTO jogos (titulo, genero, descricao, capa) 
            VALUES ('$titulo', '$genero', '$descricao', '$capa')";

    if ($conn->query($sql)) {
        echo "<script>alert('Jogo adicionado com sucesso!'); window.location='catalogo.php';</script>";
    } else {
        echo "<script>alert('Erro ao adicionar jogo'); window.location='catalogo.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="estilos.css?v=3">
</head>
<body>

<header>
    <img src="img/Controle.webp" alt="Logo" />
    <h1>Adicionar Novo Jogo</h1>
</header>

<nav>
    <a href="index.html">Home</a> |
    <a href="catalogo.php">Catálogo</a> |
    <a href="sac.html">SAC</a> |
    <a href="equipe.html">Equipe</a>
</nav>

<main>
    <div class="form-container">
        <h2>Preencha os dados do jogo</h2>

        <form method="POST">
            <label class="form-label">Título:</label>
            <input class="form-input" name="titulo" required>

            <label class="form-label">Gênero:</label>
            <input class="form-input" name="genero" required>

            <label class="form-label">Descrição:</label>
            <textarea class="form-textarea" name="descricao" required rows="4"></textarea>

            <label class="form-label">Nome do arquivo da capa (em /img):</label>
            <input class="form-input" name="capa">

            <button class="form-button" type="submit">Adicionar</button>
        </form>
    </div>
</main>

</body>
</html>
