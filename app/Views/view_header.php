<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('CSS/estilo.css') ?>">

</head>
<body>

<main class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            
            <img src="<?php echo base_url('arquivo/logo/logo.png'); ?>" width="72" height="72" alt="Logo" class="logo">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <form class="d-flex form-busca" role="search" >
                            <input class="form-control me-2 text-center input-busca" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn-busca" type="submit">💛</button>
                        </form>
                    </li>
                </ul>

                
            </div>

            <div class="justify-content-end">
                <button type="button" class="btn btn-primary">LOGIN</button>
            </div> 

        </div>
    </nav>
</main>

</body>
</html>