<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('CSS/estilo.css') ?>">
</head>
<body>
    
<main class="login">

<div class="left-login">

    <img src="<?php echo base_url('arquivo/login/cute-alien-animate.svg') ?>" class="left-img-login" alt="">

</div>
    <div class="container">

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

            <span class="linha"></span>
         <button type="submit" class="btn-login">Entrar</button>


        </div>

        </div>
        
        </form>
    </div>
    </main>
    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
