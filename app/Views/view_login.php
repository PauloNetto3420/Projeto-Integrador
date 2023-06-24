<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url('CSS/estilo.css') ?>">
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
                <input type="text" name="login" placeholder="Usuário ou E-Mail">
            </div>
    
            <div class="textfield">
            <input type="password" name="senha" placeholder="Senha">
            </div>

           
         <button type="submit" class="btn-login">Entrar</button>

        </form>

        <span class="linha"></span>
        <p id="info-cadastro">Não tem cadastro?</p>
        
        <form action="cadastrar">
            <button type="submit" class="btn-cadastro">CADASTRAR</button>
        </form>

        </div>
        
    </div>
    </main>

</body>
</html>
