<?php $session = session(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Colaborahub - Página Principal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('CSS/estilo.css') ?>">
</head>
<body>
  
<section>
    <img class="img-fluid" src="<?php echo base_url('arquivo/background/2560x1080.jpg'); ?>" alt="Background">
</section>

<main class="content">

    <div class="container">

    <section id="sec1" class="row">
        <article id="art1" class="col-md-12">
          <h2 class="text-center"><strong>Procure seu jogo favorito</strong></h2>
          <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates veritatis
            blanditiis, officiis aperiam ea magnam nisi accusamus accusantium est consequatur corrupti quam modi
            perferendis quisquam earum facilis consequuntur? Assumenda, quo?</p>
        </article>
      </section>

      <section id="sec2" class="row" style="margin-top: 32px; margin-bottom: 115px;">

        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
          <img class="img-fluid" src="<?php echo base_url('arquivo/jogos/Overwatch_02.jpeg'); ?>" alt="Background">
            <div class="card-body card-fundo">
              <p class="text-center">Overwatch 2</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
          <img class="img-fluid" src="<?php echo base_url('arquivo/jogos/LeagueOfLegends_02.jpeg'); ?>" alt="Background">
            <div class="card-body card-fundo">
              <p class="text-center">League of Legends</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
          <img class="img-fluid" src="<?php echo base_url('arquivo/jogos/RocketLeague_01.jpeg'); ?>" alt="Background">
            <div class="card-body card-fundo">
              <p class="text-center">Rocket League</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
          <img class="img-fluid" src="<?php echo base_url('arquivo/jogos/Fortnite_02.jpeg'); ?>" alt="Background">
            <div class="card-body card-fundo">
              <p class="text-center">Fortnite</p>
            </div>
          </div>
        </div>

      </section>

      <section id="sec3">

      <div class="row">
        <article class="col-md-12">
          <h2 class="text-center"><strong>Explore e busque por equipes</strong></h2>
        </article>
      </div>

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo base_url('arquivo/equipes/Equipes_01.jpg'); ?>" class="d-block w-100" alt="...">
        </div>
        
        <div class="carousel-item">
            <img src="<?php echo base_url('arquivo/jogos/Equipes_01.jpg'); ?>" class="d-block w-100" alt="...">
        </div>

        <div class="carousel-item">
            <img src="<?php echo base_url('arquivo/equipes/Equipes_01.jpg'); ?>" class="d-block w-100" alt="...">
        </div>

        </div>

        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            
        </a>

        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>

        </div>

            
        <div class="row">
            <article style="margin-top: 16px;" class="col-md-12">
                <p class="text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptates veritatis
                    blanditiis, officiis aperiam ea magnam nisi accusamus accusantium est consequatur corrupti quam modi
                    perferendis quisquam earum facilis consequuntur? Assumenda, quo?</p>
            </article>
        </div>
      </section>

      

        <h1>Bem-vindo ao Colaborahub</h1>
        <p>Seja bem-vindo, <?php echo $session->get('Nome'); ?>!</p>
        <p>Aqui está um resumo das suas atividades:</p>

        <div class="mt-4">
            <h5>Opções:</h5>
            <ul>
                <?php if (!$session->get('Email')) : ?>
                    <li><a href="login">Login</a></li>
                    <li><a href="cadastrar">Cadastro</a></li>
                <?php endif; ?>
                <li><a href="equipes">Hub de Equipes</a></li>
                <?php if ($session->get('Email')) : ?>
                <li><a href="perfil">Meu Perfil</a></li>
                <?php endif; ?>
                <?php if ($session->get('Id_Equipe')) : ?>
                    <li><a href="equipe/perfil">Minha Equipe</a></li>
                <?php endif; ?>
                
                <?php if ($session->get('Email')) : ?>
                <form action="logout" method="post">
                <button type="submit" class="btn btn-danger">Logout</button>
                </form>
                <?php endif; ?>
            </ul>
        </div>
    </div>

<div class="container-fluid" style="background: linear-gradient(to bottom, #201B2C, #0A080D, #201B2C);">

    <section id="sec4" class="container">

        <div class="row">
            <div class="col" style="color: white; padding: 30px;">
                <h1 class="text-center"  style="color: white;"><strong>Procure jogadores</strong></h1>
            </div>
        </div>

        <article class="row" style="color: white; padding: 30px;">
            <div class="container">
            <div class="row">
                <div class="col d-flex align-items-center justify-content-center">
                    <div class="persona">
                        <h5 class="text-center"><strong>Alan Ferreira</strong></h5>
                        <img src="<?php echo base_url('arquivo/jogadores/model_06.jpg'); ?>" class="img-fluid rounded-circle" alt="...">
            </div>
            </div>

            <div class="col d-flex align-items-center justify-content-center">
                <div class="persona">
                    <h5 class="text-center"><strong>Julia Alves</strong></h5>
                    <img src="<?php echo base_url('arquivo/jogadores/model_01.jpg'); ?>" class="img-fluid rounded-circle" alt="...">
                </div>
            </div>

            <div class="col d-flex align-items-center justify-content-center">
                <div class="persona">
                    <h5 class="text-center"><strong>Lucas José</strong></h5>
                    <img src="<?php echo base_url('arquivo/jogadores/model_02.jpg'); ?>" class="img-fluid rounded-circle" alt="...">    
                </div>
            </div>
            </div>
            </div>
        </article>

      </section>
</div>
</main>
    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!-- -->