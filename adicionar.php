<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $descricao = $_POST["descricao"];
    $capa = $_POST["capa"];

    $sql = "INSERT INTO jogos (titulo, genero, descricao, capa) VALUES ('$titulo', '$genero', '$descricao', '$capa')";

    if ($conn->query($sql)) {
        echo "<script>alert('Jogo adicionado com sucesso!'); window.location='catalogo.php';</script>";
    } else {
        echo "<script>alert('Erro ao adicionar jogo'); window.location='catalogo.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet" />
  
    <link rel="stylesheet" href="estilos.css">
    <meta charset="UTF-8">
</head>
<body>

<main>
<h2>Adicionar novo jogo</h2>

<form method="POST">
    <label>Título:</label>
    <input name="titulo" required>

    <label>Gênero:</label>
    <input name="genero" required>

    <label>Descrição:</label>
    <textarea name="descricao" required></textarea>

    <label>Nome do arquivo da capa (em /img):</label>
    <input name="capa">

    <button>Enviar</button>
</form>

</main>
</body>
</html>
