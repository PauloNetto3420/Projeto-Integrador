<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('CSS/estilo.css') ?>">
    <link rel="icon" href="<?=base_url()?>arquivo/icones/logo.png" type="image/png">
</head>
<body>
    
<main class="login">

<div class="left-login">

    <img src="<?php echo base_url('arquivo/login/cute-alien-animate.svg') ?>" class="left-img-login" alt="">

</div>

    <?php if (session()->has('success')) : ?>
        <div class="alert alert-success"><?= session('success') ?></div>
    <?php endif; ?>

    <?php if (session()->has('error')) : ?>
        <div class="alert alert-danger"><?= session('error') ?></div>
    <?php endif; ?>

    <form method="post" action="<?= route_to('public/reset-password') ?>">
        <div class="right-login">
            <div class="card-login">

            <h1>Redefinir senha</h1>

             <div class="textfield">
                <input type="Email" name="Email" placeholder="Email" required>
            </div>

            <div class="textfield">
                <input type="password" name="new_password" placeholder="Senha" required>
            </div>

            <button type="submit" class="btn-login" style="margin-bottom: 32px;">REDEFINIR SENHA</button>

            

    </form>

    <form action="login">
        <button type="submit" class="btn-cadastro">VOLTAR</button>
    </form>

        </div>
    </div>
    </main>

</body>
</html>
