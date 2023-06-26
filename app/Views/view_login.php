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

        <?php if (isset($error)): ?>
            <div class="alert alert-danger">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <?php if (isset($validation)): ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
        <div class="right-login">
        
            <div class="card-login">

            <h1>Fazer login</h1>
                

            <div class="textfield">
                <input type="text" name="login" placeholder="Usuário ou Email">
            </div>
    
            <div class="textfield">
            <input type="password" name="senha" placeholder="Senha">
            </div>

           
         <button type="submit" class="btn-login">ENTRAR</button>

        </form>

        <span class="linha"></span>
        <p id="info-cadastro">Não tem cadastro?</p>
        <a href="reset-password">Esqueceu sua senha?</a>
        
        <form action="cadastrar">
            <button type="submit" class="btn-cadastro">CADASTRAR</button>
        </form>

        </div>
        
    </div>
    </main>

</body>
</html>
