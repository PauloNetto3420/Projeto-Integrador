<?php $session = session(); ?>

<section class="background-home" style="background-image: url('<?php echo base_url('arquivo/background/2560x1440.jpg'); ?>');">
    <h1 class="text-center titulo">ColaboraHub</h1>
    <p class="text-center subtitulo">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Ducimus iste blanditiis similique odit suscipit harum accusantium distinctio ad dignissimos itaque hic, <br>repellendus voluptatibus amet aliquam, iure atque vero, soluta aut.</p>    
    <p class="text-center subtitulo">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>Ducimus iste blanditiis similique odit suscipit harum accusantium distinctio ad dignissimos itaque hic, <br>repellendus voluptatibus amet aliquam, iure atque vero, soluta aut.</p>    

</section>

<main class="content">

    <div class="container">



      <section id="sec3">

      <div class="row">
        <article class="col-md-12">
          <h2 style="margin-bottom: 16px;"class="text-center"><strong>Explore e busque por equipes</strong></h2>
        </article>
      </div>

<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo base_url('arquivo/equipes/Equipes_01.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('arquivo/equipes/Equipes_01.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="<?php echo base_url('arquivo/equipes/Equipes_01.jpg'); ?>" class="d-block w-100" alt="...">
    </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
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

<div class="container-fluid" style="background: linear-gradient(to bottom, #201B2C, #0A080D, #201B2C); margin-bottom: 48px;">

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
                        <img style="border: 2px solid white;"src="<?php echo base_url('arquivo/jogadores/model_06.jpg'); ?>" class="img-fluid rounded-circle" alt="...">
            </div>
            </div>

            <div class="col d-flex align-items-center justify-content-center">
                <div class="persona">
                    <h5 class="text-center"><strong>Julia Alves</strong></h5>
                    <img style="border: 2px solid white;" src="<?php echo base_url('arquivo/jogadores/model_01.jpg'); ?>" class="img-fluid rounded-circle" alt="...">
                </div>
            </div>

            <div class="col d-flex align-items-center justify-content-center">
                <div class="persona">
                    <h5 class="text-center"><strong>Lucas José</strong></h5>
                    <img style="border: 2px solid white;"src="<?php echo base_url('arquivo/jogadores/model_02.jpg'); ?>" class="img-fluid rounded-circle" alt="...">    
                </div>
            </div>
            </div>
            </div>
        </article>

      </section>

</div>
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
          <div class="card" style="width: 20rem;">
          <a href="overwatch2"><img class="img-fluid" src="<?php echo base_url('arquivo/jogos/Overwatch_02.jpeg'); ?>" alt="Background"></a>
            <div class="card-body card-fundo">
              <a style="text-decoration: none; color: #201B2C;" href="overwatch2"><h5 class="text-center"><strong>Overwatch 2</strong></h5></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
          <div class="card" style="width: 20rem;">
          <a href="lol"><img class="img-fluid" src="<?php echo base_url('arquivo/jogos/LeagueOfLegends_02.jpeg'); ?>" alt="Background"></a>
            <div class="card-body card-fundo">
            <a style="text-decoration: none; color: #201B2C;" href="lol"><h5 class="text-center"><strong>League of Legends</strong></h5></a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
          <div class="card" style="width: 20rem;">
          <img class="img-fluid" src="<?php echo base_url('arquivo/jogos/RocketLeague_01.jpeg'); ?>" alt="Background">
            <div class="card-body card-fundo">
              <h5 class="text-center"><strong>Rocket League</strong></h5>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 d-flex justify-content-center">
          <div class="card" style="width: 20rem;">
          <img class="img-fluid" src="<?php echo base_url('arquivo/jogos/Fortnite_02.jpeg'); ?>" alt="Background">
            <div class="card-body card-fundo">
              <h5 class="text-center"><strong>Fortnite</strong></h5>
            </div>
          </div>
        </div>
      </section>
</main>
    
