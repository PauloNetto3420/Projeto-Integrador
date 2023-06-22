<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
</head>
<body>
    
<main class="content">
    <div class="container">
        <h2>Cadastro</h2>

        <?php if (isset($validation)): ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Login</label>
                <input type="text" class="form-control" name="login" value="<?= set_value('login') ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="<?= set_value('email') ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha">
            </div>
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?= set_value('nome') ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" name="data_nasc" value="<?= set_value('data_nasc') ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Gênero</label>
                <select class="form-control" name="genero">
                    <option value="Masculino" <?= set_select('genero', 'Masculino') ?>>Masculino</option>
                    <option value="Feminino" <?= set_select('genero', 'Feminino') ?>>Feminino</option>
                    <option value="Outro" <?= set_select('genero', 'Outro') ?>>Outro</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</main>
    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
