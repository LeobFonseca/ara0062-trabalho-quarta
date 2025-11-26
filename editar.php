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

    $update = "UPDATE jogos SET titulo='$titulo', genero='$genero', descricao='$descricao', capa='$capa' WHERE id=$id";

    if ($conn->query($update)) {
        echo "<script>alert('Jogo atualizado!'); window.location='catalogo.php';</script>";
    } else {
        echo "<script>alert('Erro ao atualizar!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<main>
<h2>Editar jogo</h2>

<form method="POST">
    <label>Título:</label>
    <input name="titulo" value="<?= $jogo["titulo"] ?>" required>

    <label>Gênero:</label>
    <input name="genero" value="<?= $jogo["genero"] ?>" required>

    <label>Descrição:</label>
    <textarea name="descricao" required><?= $jogo["descricao"] ?></textarea>

    <label>Capa (arquivo em /img):</label>
    <input name="capa" value="<?= $jogo["capa"] ?>">

    <button>Salvar</button>
</form>

</main>

</body>
</html>
