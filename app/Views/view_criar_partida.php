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

        <form action="<?= base_url('public/partidas/criar'); ?>" method="post">
            <div class="mb-3">
                <label for="Tipo_Jogo" class="form-label">Tipo de Jogo:</label>
                <select class="form-select" name="Tipo_Jogo" id="Tipo_Jogo">
                    <option value="Warzone 2.0">Warzone 2.0</option>
                    <option value="Fortnite">Fortnite</option>
                    <option value="League of Legends">League of Legends</option>
                    <option value="Overwatch 2">Overwatch 2</option>
                    <option value="Rocket League">Rocket League</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Criar Partida</button>
        </form>
    </div>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
