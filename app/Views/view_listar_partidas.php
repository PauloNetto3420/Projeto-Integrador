<!DOCTYPE html>
<html>
<head>
    <title>Lista de Partidas</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Lista de Partidas</h1>

        <?php if (!empty($partidas)) : ?>
            <ul>
                <?php foreach ($partidas as $partida) : ?>
                    <li>
                        <strong>Tipo de Jogo:</strong> <?= $partida['Tipo_Jogo']; ?><br>
                        <strong>Código da Partida:</strong> <?= $partida['Id_Partida']; ?><br>
                        <strong>Quantidade de Jogadores:</strong> <?= $partida['Qntd_Jogadores']; ?><br>
                        <?php if ($partida['Qntd_Jogadores'] < 5) : ?>
                            <a href="<?= base_url('public/partidas/entrar/' . $partida['Id_Partida']); ?>" class="btn btn-primary">Entrar</a>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else : ?>
            <p>Nenhuma partida disponível.</p>
        <?php endif; ?>
    </div>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
