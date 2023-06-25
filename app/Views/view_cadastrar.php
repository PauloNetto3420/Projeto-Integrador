<!DOCTYPE html>
<html lang="pt-br">
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="<?php echo base_url('CSS/estilo.css') ?>">
    <link rel="icon" href="<?=base_url()?>arquivo/icones/logo.png" type="image/png">
</head>
<body>
    
<main class="cad">

    <div class="left-cad">
        <img src="<?php echo base_url('arquivo/login/cute-alien-animate.svg') ?>" class="left-img-cad" alt="">
        <h1 id="teste">ColaboraHub</h1>
    </div>

        <?php if (isset($validation)): ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
        <div class="right-cad">

            <div class="card-cad">

                <h1>Cadastre-se</h1>

                <div class="line">

                    <div class="col1">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" placeholder="Nome">
                    </div>

                    <div class="col2">
                        <label for="data_nasc">Data</label>
                        <input type="date" name="data_nasc">
                    </div>

                </div>

                <div class="line">

                    <div class="col1">
                        <label for="email">Email</label>
                        <input type="text" name="email" placeholder="Email">
                    </div>

                        <div class="col2">
                            <label for="genero">Genero</label>
                            <div id="combo-fundo">
                                <select name="genero" id="combo">
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Outro">Outro</option>
                                </select>
                            </div>
                        </div>

                </div>

                <div class="line">

                    <div class="col1">
                        <label for="login">Usuário</label>
                        <input type="text" name="login" placeholder="Usuário">
                    </div>

                </div>
        
                <div class="line">

                    <div class="col1">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>

                    <div class="col2">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Confirme sua senha">
                    </div>

                    <div id="button">
                        <button type="submit" class="btn-cad">Cadastrar</button>
                    </div>

                </div>

            </div>
            
        </div>

        </form>
    </main>

</body>
</html>
