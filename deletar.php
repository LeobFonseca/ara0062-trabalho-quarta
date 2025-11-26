<?php
include "db.php";

$id = $_GET["id"];

$sql = "DELETE FROM jogos WHERE id=$id";

if ($conn->query($sql)) {
    echo "<script>alert('Jogo deletado!'); window.location='catalogo.php';</script>";
} else {
    echo "<script>alert('Erro ao deletar!'); window.location='catalogo.php';</script>";
}
?>
