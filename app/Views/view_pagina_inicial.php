<?php $session = session(); ?>

<section class="background-home" style="background-image: url('<?php echo base_url('arquivo/background/2560x1440.jpg'); ?>');">
  <h1 class="text-center titulo">ColaboraHub</h1>
  <p class="text-center subtitulo">Colabora Hub, idealizado por João Henrique e Paulo Netto,<br>é um site
    de encontro de equipes para gamers que revolucionou a forma como os jogadores se conectam.<br> Com
    uma história inspiradora, a plataforma nasceu da paixão de João e Paulo pelo mundo dos games <br>e
    sua visão de criar um espaço inclusivo e colaborativo.</p>

  <div class="d-grid gap-2 col-2 mx-auto" style="margin-top: 35px;">

    <button class="btn btn-primary btn-lg text-center" style="background-color: #15C75C; border: #0A080D;"><a href="cadastrar" style="color: #ffffff; text-decoration: none;">Seja parte do jogo</a></button>
  </div>
</section>



<main class="content">

  <div class="container">

    <section id="sec3">

      <div class="row">
        <article class="col-md-12">
          <h2 style="margin-bottom: 32px; margin-top: 32px;" class="text-center"><strong>Explore e busque por equipes</strong></h2>
        </article>
      </div>

      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img style="border-radius: 35px;" src="<?php echo base_url('arquivo/equipes/Equipes_01.jpeg'); ?>" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img style="border-radius: 35px;" src="<?php echo base_url('arquivo/equipes/Equipes_02.jpg'); ?>" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img style="border-radius: 35px;" src="<?php echo base_url('arquivo/equipes/Equipes_03.jpg'); ?>" class="d-block w-100" alt="...">
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
        <article style="margin-top: 16px; margin-bottom: 64px;" class="col-md-12">
          <p class="text-center">Essas equipes são compostas por jogadores talentosos e apaixonados que buscam alcançar o sucesso e o reconhecimento em sua respectiva área de especialização.</p>
        </article>
      </div>
    </section>

    <section id="sec1" class="row">
      <article id="art1" class="col-md-12">
        <h2 class="text-center" style="margin-bottom: 32px;"><strong>Procure seu jogo favorito</strong></h2>
        <p class="text-center">Descubra um mundo de emoção e desafio nos jogos online! Libere seu espírito competitivo e mergulhe em experiências virtuais cheias de adrenalina. Com inúmeras opções de jogos disponíveis, há algo para todos os gostos e estilos.</p>
      </article>
    </section>

    <section id="sec2" class="row" style="margin-top: 32px; margin-bottom: 115px;">

      <div class="col-lg-3 col-md-3 col-sm-6 d-flex justify-content-center">
        <div class="card" style="width: 20rem;">
          <a href="http://localhost/ColaboraHub/public/overwatch2"><img class="img-fluid" src="<?php echo base_url('arquivo/jogos/Overwatch_02.jpeg'); ?>" alt="Background"></a>
          <div class="card-body card-fundo">
            <h5 class="text-center"><strong>Overwatch 2</strong></h5>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 d-flex justify-content-center">
        <div class="card" style="width: 20rem;">
          <a href="http://localhost/ColaboraHub/public/lol"><img class="img-fluid" src="<?php echo base_url('arquivo/jogos/LeagueOfLegends_02.jpeg'); ?>" alt="Background"></a>
          <div class="card-body card-fundo">
            <h5 class="text-center"><strong>League of Legends</strong></h5>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 d-flex justify-content-center">
        <div class="card" style="width: 20rem;">
          <a href="http://localhost/ColaboraHub/public/rocket"><img class="img-fluid" src="<?php echo base_url('arquivo/jogos/RocketLeague_01.jpeg'); ?>" alt="Background"></a>
          <div class="card-body card-fundo">
            <h5 class="text-center"><strong>Rocket League</strong></h5>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 d-flex justify-content-center">
        <div class="card" style="width: 20rem;">
          <a href="http://localhost/ColaboraHub/public/fornite"><img class="img-fluid" src="<?php echo base_url('arquivo/jogos/Fortnite_02.jpeg'); ?>" alt="Background"></a>
          <div class="card-body card-fundo">
            <h5 class="text-center"><strong>Fortnite</strong></h5>
          </div>
        </div>
      </div>
    </section>

  </div>

  <div class="container-fluid" style="background: linear-gradient(to bottom, #201B2C, #0A080D, #201B2C); margin-bottom: 32px;">

    <section id="sec4" class="container">

      <div class="row">
        <div class="col" style="color: white; padding: 30px;">
          <h1 class="text-center" style="color: white;"><strong>Procure jogadores</strong></h1>
        </div>
      </div>

      <article class="row" style="color: white; padding: 30px;">
        <div class="container">
          <div class="row">
            <div class="col d-flex align-items-center justify-content-center">
              <div class="persona">
                <h5 class="text-center"><strong>Alan Ferreira</strong></h5>
                <img style="border: 2px solid white;" src="<?php echo base_url('arquivo/jogadores/model_06.jpg'); ?>" class="img-fluid rounded-circle" alt="...">
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
                <img style="border: 2px solid white;" src="<?php echo base_url('arquivo/jogadores/model_02.jpg'); ?>" class="img-fluid rounded-circle" alt="...">
              </div>
            </div>
          </div>
        </div>
      </article>

    </section>

  </div>

  <article style="color: #201B2C;">
    <p class="text-center">Jogar jogos online é muito divertido, mas a verdadeira mágica acontece quando você se conecta com outros jogadores apaixonados. <br>Encontre sua tribo virtual e descubra a alegria de jogar em equipe!</p>
    <p class="text-center">Ao buscar por jogadores de jogos online, você terá a oportunidade de construir amizades duradouras e compartilhar experiências incríveis. <br>Juntos, vocês poderão enfrentar desafios mais difíceis, conquistar objetivos ambiciosos e criar memórias inesquecíveis.</p>
  </article>

  <section class="sec5 d-flex justify-content-center">

    <form action="equipe/pesquisar">
      <button type="submit" class="btn-buscar-equipe"><strong>Buscar equipes</strong></button>
    </form>

  </section>

  <?php if (!$session->get('Id_Equipe')) : ?>
    <section class="sec6 d-flex justify-content-center">

      <form action="equipes/cadastrarEquipe" method="POST">
        <button type="button" data-bs-toggle="modal" data-bs-target="#modalSair" class="btn-criar-equipe"><strong>Criar equipe</strong></button>

        <div class="modal fade" id="modalSair" tabindex="-1" aria-labelledby="modalSair" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalLogout">Confirmação</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Deseja criar uma equipe ?</p>
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Sim</button>
              </div>
            </div>
          </div>
        </div>
      </form>
    <?php endif; ?>

    </section>

    <span class="sec7"></span>

    </div>
</main>