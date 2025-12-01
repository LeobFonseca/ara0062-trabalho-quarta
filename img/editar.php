<?php
include "db.php";

$id = $_GET["id"];
$sql = "SELECT * FROM jogos WHERE id=$id";
$result = $conn->query($sql);
$jogo = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titulo = $_POST["titulo"];
    $genero = $_POST["genero"];
    $descricao = $_POST["descricao"];
    $capa = $_POST["capa"];

    $update = "UPDATE jogos 
               SET titulo='$titulo', genero='$genero', descricao='$descricao', capa='$capa' 
               WHERE id=$id";

    if ($conn->query($update)) {
        echo "<script>alert('Jogo atualizado!'); window.location='catalogo.php';</script>";
    } else {
        echo "<script>alert('Erro ao atualizar!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="estilos.css?v=4">
</head>
<body>

<header>
    <img src="img/Controle.webp" alt="Logo" />
    <h1>Editar Jogo</h1>
</header>

<nav>
    <a href="index.html">Home</a> |
    <a href="catalogo.php">Catálogo</a> |
    <a href="sac.html">SAC</a> |
    <a href="equipe.html">Equipe</a>
</nav>

<main>
    <div class="form-container">
        <h2>Alterar informações do jogo</h2>

        <form method="POST">

            <label class="form-label">Título:</label>
            <input class="form-input" name="titulo" value="<?= $jogo['titulo'] ?>" required>

            <label class="form-label">Gênero:</label>
            <input class="form-input" name="genero" value="<?= $jogo['genero'] ?>" required>

            <label class="form-label">Descrição:</label>
            <textarea class="form-textarea" name="descricao" rows="4" required><?= $jogo['descricao'] ?></textarea>

            <label class="form-label">Capa (arquivo em /img):</label>
            <input class="form-input" name="capa" value="<?= $jogo['capa'] ?>">

            <button class="form-button" type="submit">Salvar</button>
        </form>
    </div>
</main>

</body>
</html>
