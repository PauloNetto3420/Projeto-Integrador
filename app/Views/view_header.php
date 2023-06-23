<?php $session = session(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ColaboraHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('CSS/estilo.css') ?>">
  </head>
  <body style="background-color: #f3f1f1;">
    <nav class="navbar navbar-expand-lg header">
        <div class="container">
           <a href="home"><img src="<?php echo base_url('arquivo/logo/logo.png'); ?>" width="72" height="72" alt="Logo"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <form class="d-flex form-busca" role="search" >
                            <input class="form-control me-2 text-center input-busca" type="search" placeholder="Buscar" aria-label="Search">
                            <span class="fundo-btn-busca"><button class="btn-busca" type="submit"><img src="<?php echo base_url('arquivo/icones/pesquisa.png'); ?>" width="20" height="20" alt="Logo"></button></span>
                        </form>
                    </li>
                    <li>
                        <a href="home"><img src="<?php echo base_url('arquivo/icones/notificacao.png'); ?>" width="40" height="40" alt="Logo"></a>
                    </li>
                </ul>

                
            </div>

            <div class="justify-content-end">
                <form action="login">
                <button type="submit" class="button-login" name="button-login">LOGIN</button>
                </form>
            </div> 

        </div>
    </nav>
