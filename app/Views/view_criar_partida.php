<!DOCTYPE html>
<html>
<head>
    <title>Criar Partida - Colaborahub</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Criar Partida</h1>

        <form action="<?= base_url('public/partidas/criar'); ?>" method="post">
            <div class="mb-3">
                <label for="Tipo_Jogo" class="form-label">Tipo de Jogo</label>
                <input type="text" class="form-control" id="Tipo_Jogo" name="Tipo_Jogo" required>
            </div>

            <button type="submit" class="btn btn-primary">Criar Partida</button>
        </form>
    </div>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
