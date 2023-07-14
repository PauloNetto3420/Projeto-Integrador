<?php $session = session(); ?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ColaboraHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('CSS/estilo.css') ?>">
    <link rel="icon" href="<?= base_url() ?>arquivo/icones/logo.png" type="image/png">
</head>

<body>
    <nav id="head" class="navbar navbar-expand-lg navbar-dark header">
        <div class="container">
            <a href="http://localhost/ColaboraHub/public/home"><img src="<?php echo base_url('arquivo/logo/logo.png'); ?>" width="64" height="64 " alt="Logo"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>




            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">

                    <li style="margin-right: 32px;">
                        <a href="http://localhost/ColaboraHub/public/home"><img src="<?php echo base_url('arquivo/icones/notificacao.png'); ?>" width="40" height="40" alt="Logo"></a>
                    </li>

                    <li style="margin-right: 32px;">

                        <?php if ($session->get('Login')) : ?>
                            <div class="justify-content-end">
                                <a href="http://localhost/ColaboraHub/public/perfil"><img src="<?php echo base_url('arquivo/icones/perfil.png'); ?>" width="40" height="40" alt="Logo"></a>
                            </div>
                        <?php endif; ?>

                    </li>

                    <li>

                        <?php if ($session->get('Id_Equipe')) : ?>
                            <div class="justify-content-end">
                                <a href="http://localhost/ColaboraHub/public/equipes/perfil"><img src="<?php echo base_url('arquivo/icones/equipe.png'); ?>" width="40" height="40" alt="Logo"></a>
                            </div>
                        <?php endif; ?>

                    </li>

                </ul>

            </div>
            
            <?php if ($session->get('Login')) : ?>
                <div style="margin-right: 16px; " class="justify-content-end">
                    <form action="http://localhost/ColaboraHub/public/logout" method="post">
                        <button type="button" class="button-logout" data-bs-toggle="modal" data-bs-target="#modalLogout" name="button-logout">SAIR</button>

                        <div class="modal fade" id="modalLogout" tabindex="-1" aria-labelledby="modalLogout" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalLogout">Confirmação</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Deseja mesmo fazer logout?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Sim</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            <?php endif; ?>
            <?php if (!$session->get('Login')) : ?>

                <div class="justify-content-end">
                    <form action="http://localhost/ColaboraHub/public/login">
                        <button type="submit" class="button-login" name="button-login">LOGIN</button>
                    </form>
                </div>
            <?php endif; ?>

        </div>

    </nav>