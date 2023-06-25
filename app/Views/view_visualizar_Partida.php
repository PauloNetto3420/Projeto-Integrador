<!DOCTYPE html>
<html>
<head>
    <title>Detalhes da Partida</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f2f2f2;
        }

        .container {
            padding: 40px;
            margin-top: 40px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #5e50ff;
        }

        p {
            color: #000000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalhes da Partida</h1>
        <p><strong>Tipo de Jogo:</strong> <?= $partida['Tipo_Jogo']; ?></p>
        <p><strong>Jogadores:</strong> <?= $partida['Qntd_Jogadores']; ?>/5</p>
        <!-- Exiba outros detalhes da partida -->
        
        <h2>Código da Partida</h2>
        <p><?= $codigo; ?></p>
        <!-- Exiba o código da partida -->
    </div>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
