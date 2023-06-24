<?php $session = session(); ?>

<main class="content">
    <div class="container">

    <div class="row">
        <h1 class="text-center titulo-perfil">Meu Perfil</h1>
    </div>

    <div class="row" style="margin-bottom: 16px;">

        <div class="col-md-4">
            <?php if (isset($usuario['Foto'])) : ?>
                <div class="d-flex justify-content-center align-items-center" style="margin-bottom: 16px;">
                    <img src="<?php echo base_url('uploads/' . $usuario['Foto']); ?>" alt="Foto do Perfil" width="304" height="304" class="img-thumbnail rounded-circle">
                </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <h2><strong><?php echo $usuario['Nome']; ?></strong></h2>
                    </div>
                    <div class="d-flex justify-content-center align-items-center" style="margin-bottom: 16px;">
                        <?php echo $usuario['Login']; ?>
                    </div>

                <div class="d-flex justify-content-center info-perfil">
                    <a href="<?php echo base_url('public/perfil/editar'); ?>" class="btn btn-editar-equipe">Editar Perfil</a>
                </div>

                <div class="d-flex justify-content-center info-perfil">
                    <a href="perfil/excluir" class="btn btn-excluir-equipe">Excluir Perfil</a>
                </div>

            <?php else : ?>
                <div class="d-flex justify-content-center align-items-center" style="margin-bottom: 16px;">
                    <img src="<?php echo base_url('arquivo/icones/default_profile.png'); ?>" alt="Foto do Perfil" width="304" height="304" class="img-thumbnail rounded-circle">
                </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <h2><strong><?php echo $usuario['Nome']; ?></strong></h2>
                    </div>
                    <div class="d-flex justify-content-center align-items-center" style="margin-bottom: 16px;">
                        <?php echo $usuario['Login']; ?>
                    </div>
                
                <div class="d-flex justify-content-center info-perfil">
                    <a href="<?php echo base_url('public/perfil/editar'); ?>" class="btn btn-editar-equipe">Editar Perfil</a>
                </div>

                <div class="d-flex justify-content-center info-perfil">
                    <a href="perfil/excluir" class="btn btn-excluir-equipe">Excluir Perfil</a>
                </div>

            <?php endif; ?>

        </div>

        <div class="col-md-8" style="padding: 32px; border: 2px solid #201B2C; border-radius: 50px;">

                <p class="info-user"><strong>Nome:</strong> <?php echo $usuario['Nome']; ?></p>
                <p class="info-user"><strong>Email:</strong> <?php echo $usuario['Email']; ?></p>
                <p class="info-user"><strong>Login:</strong> <?php echo $usuario['Login']; ?></p>
                <p class="info-user"><strong>Data de nascimento:</strong> <?php echo $usuario['Data_Nasc']; ?></p>                
                <p class="info-user"><strong>Gênero:</strong> <?php echo $usuario['Genero']; ?></p>

        </div>
      
    </div>

    <div class="row">
        <h1>Oi</h1>
    </div>

    </div>
</main>

