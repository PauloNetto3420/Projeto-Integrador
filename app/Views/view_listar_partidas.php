<!DOCTYPE html>
<html>
<head>
    <title>Lista de Partidas Disponíveis - Colaborahub</title>
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

        .partida-list {
            list-style-type: none;
            padding: 0;
        }

        .partida-item {
            background-color: #f8f9fa;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .partida-info {
            display: flex;
            justify-content: space-between;
        }

        .partida-actions {
            display: flex;
            justify-content: flex-end;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Partidas Disponíveis</h1>
        <p>Aqui estão as partidas disponíveis para a equipe:</p>

        <div class="mt-4">
            <?php if (!empty($partidas)) : ?>
                <ul class="partida-list">
                    <?php foreach ($partidas as $partida) : ?>
                        <li class="partida-item">
                            <div class="partida-info">
                                <strong>Tipo de Jogo:</strong> <?= $partida['Tipo_Jogo']; ?>
                                <strong>Jogadores:</strong> <?= $partida['Qntd_Jogadores']; ?>/5
                            </div>
                            <div class="partida-actions">
                                <?php if ($partida['Qntd_Jogadores'] < 5) : ?>
                                    <a href="<?= base_url('public/partidas/entrar/' . $partida['Id_Partida']); ?>" class="btn btn-primary">Entrar</a>
                                <?php else : ?>
                                    <span class="text-muted">Partida cheia</span>
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else : ?>
                <p>Nenhuma partida disponível.</p>
            <?php endif; ?>
        </div>
    </div>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
