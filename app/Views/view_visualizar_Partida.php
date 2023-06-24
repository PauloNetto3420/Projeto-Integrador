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

        .participant-list {
            list-style-type: none;
            padding: 0;
        }

        .participant-item {
            background-color: #f8f9fa;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalhes da Partida</h1>
        <p>Aqui estão os detalhes da partida:</p>

        <div class="row">
            <div class="col-md-6">
                <h5>Dados da Partida:</h5>
                <p><strong>Tipo de Jogo:</strong> <?= $partida['Tipo_Jogo']; ?></p>
                <p><strong>Quantidade de Jogadores:</strong> <?= $partida['Qntd_Jogadores']; ?></p>
            </div>
        </div>

        <div class="mt-4">
            <h5>Participantes:</h5>
            <?php if (!empty($participantes)) : ?>
                <ul class="participant-list">
                    <?php foreach ($participantes as $participante) : ?>
                        <li class="participant-item">
                            <strong>Nome:</strong> <?= $participante['nome']; ?><br>
                            <strong>Email:</strong> <?= $participante['email']; ?><br>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else : ?>
                <p>Nenhum participante encontrado.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
