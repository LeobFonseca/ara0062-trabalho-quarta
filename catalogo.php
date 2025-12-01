<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="estilos.css" />
    <title>Catálogo</title>
</head>
<body>

<header>
    <img src="img/Controle.webp" />
    <h1>Catálogo de Jogos</h1>
</header>

<nav>
    <a href="index.html">Home</a> |
    <b>Catálogo de Jogos</b> |
    <a href="sac.html">SAC</a> |
    <a href="equipe.html">Equipe</a>
</nav>

<main>
<h2>Explore nosso catálogo de jogos</h2>

<a style="color:#00ffff" href="adicionar.php">➕ Adicionar novo jogo</a>

<table>
<thead>
<tr>
    <th>Capa</th>
    <th>Título</th>
    <th>Gênero</th>
    <th>Descrição</th>
    <th>Ações</th>
</tr>
</thead>

<tbody>

<?php
$sql = "SELECT * FROM jogos";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td><img src='img/" . $row['capa'] . "' width='120'></td>";
    echo "<td>" . $row['titulo'] . "</td>";
    echo "<td>" . $row['genero'] . "</td>";
    echo "<td>" . $row['descricao'] . "</td>";
    echo "<td>
            <a href='editar.php?id={$row['id']}'>✏️ Editar</a> |
            <a href='deletar.php?id={$row['id']}' onclick='return confirm(\"Deseja realmente deletar?\")'>🗑️ Deletar</a>
          </td>";
    echo "</tr>";
}
?>

</tbody>
</table>

</main>

</body>
</html>

