<!DOCTYPE html>
<html>
<head>
    <title>Redefinir Senha</title>
</head>
<body>
    <h1>Redefinir Senha</h1>

    <?php if (session()->has('success')) : ?>
        <div class="alert alert-success"><?= session('success') ?></div>
    <?php endif; ?>

    <?php if (session()->has('error')) : ?>
        <div class="alert alert-danger"><?= session('error') ?></div>
    <?php endif; ?>

    <form method="post" action="<?= route_to('public/reset-password') ?>">
        <label for="Email">Email:</label>
        <input type="Email" name="Email" required>

        <label for="new_password">Nova Senha:</label>
        <input type="password" name="new_password" required>

        <button type="submit">Redefinir Senha</button>
        <a href="login">Voltar</a>
    </form>
</body>
</html>