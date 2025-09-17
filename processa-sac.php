<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = nl2br(htmlspecialchars($_POST['mensagem']));
} else {
    $nome = $email = $mensagem = null;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PlayPortal - SAC</title>

    <!-- Fonte Poppins para o texto -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet" />
    <!-- Fonte retrô Press Start 2P para o título -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet" />

    <style>
        body {
            background-color: white;
            margin: 0;
            font-family: 'Poppins', Arial, sans-serif;
            color: #222;
            padding: 20px;
        }
        header {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 20px;
            background-color: #2acafa;
            color: white;
        }
        header h1 {
            font-family: 'Press Start 2P', cursive;
            margin: 0;
            font-size: 1.2rem;
        }
        nav {
            padding: 10px 20px;
            background-color: #7ed9fd;
            font-family: 'Poppins', Arial, sans-serif;
            font-weight: 600;
            font-size: 1rem;
        }
        nav a, nav b {
            color: white;
            text-decoration: none;
            margin-right: 10px;
            font-weight: 600;
            font-family: 'Poppins', Arial, sans-serif;
            font-size: 1rem;
        }
        nav a:hover {
            text-decoration: underline;
        }
        main {
            max-width: 900px;
            margin: 30px auto;
            background-color: #f0f8ff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0,0,0,0.1);
        }
        main h2 {
            font-family: 'Press Start 2P', cursive;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }
        p {
            font-size: 1rem;
            margin-bottom: 10px;
            line-height: 1.4;
        }
        strong {
            color: #2acafa;
        }
        footer {
            text-align: center;
            padding: 15px 20px;
            background-color: #222;
            color: #00FFFF;
            font-size: 0.9rem;
            margin-top: 40px;
            font-family: Arial, sans-serif;
        }
        .error {
            color: red;
            font-weight: 700;
            font-size: 1.1rem;
        }
        a.back-link {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: #2acafa;
            font-weight: 600;
            font-family: 'Poppins', Arial, sans-serif;
        }
        a.back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <header>
        <h1>PlayPortal: Atendimento ao Cliente</h1>
    </header>

    <nav>
        <a href="index.html">Home</a> |
        <a href="catalogo.html">Catálogo de Jogos</a> |
        <b>SAC</b> |
        <a href="equipe.html">Equipe</a>
    </nav>

    <main>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <h2>Mensagem Recebida!</h2>
        <p><strong>Nome:</strong> <?= $nome ?></p>
        <p><strong>E-mail:</strong> <?= $email ?></p>
        <p><strong>Mensagem:</strong><br /><?= $mensagem ?></p>
        <a href="sac.html" class="back-link">← Voltar ao SAC</a>
    <?php else: ?>
        <p class="error">Método inválido. Por favor, envie o formulário corretamente.</p>
        <a href="sac.html" class="back-link">← Voltar ao SAC</a>
    <?php endif; ?>
    </main>

    <footer>
        <p>© 2025 PlayPortal. Todos os direitos reservados.</p>
        <p>
            Este projeto é uma ferramenta educacional e não comercial. As informações e imagens de jogos são utilizadas
            exclusivamente para fins de demonstração, aprendizado e ilustração de conceitos de desenvolvimento web.
        </p>
    </footer>
</body>
</html>

