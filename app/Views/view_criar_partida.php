<!DOCTYPE html>
<html>
<head>
    <title>Criar Partida</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Criar Partida</h1>
        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger" role="alert">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <p><?= esc($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?php echo base_url('public/partidas/criar'); ?>">
            <div class="mb-3">
                <label for="Tipo_Jogo" class="form-label">Jogo</label>
                <select class="form-select" id="Tipo_Jogo" name="Tipo_Jogo">
                    <option value="League of Legends">League of Legends</option>
                    <option value="Cs:GO">Cs:GO</option>
                    <option value="Overwatch 2">Overwatch 2</option>
                    <option value="Rocket League">Rocket League</option>
                    <option value="Warzone 2.0">Warzone 2.0</option>
                    <option value="Fortnite">Fortnite</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Qntd_Jogadores" class="form-label">Quantidade de Jogadores (múltiplo de 5)</label>
                <input type="number" class="form-control" id="Qntd_Jogadores" name="Qntd_Jogadores">
            </div>
            <button type="submit" class="btn btn-primary">Criar Partida</button>
        </form>
    </div>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
