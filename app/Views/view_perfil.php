<?php $session = session(); ?>

<main class="content">
    <div class="container">

    <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-8">
            <h1 class="text-center titulo-perfil">Meu Perfil</h1>
        </div>

    </div>

    <div class="row" style="margin-bottom: 16px;">

        <div class="col-md-4">
            <?php if (isset($usuario['Foto'])) : ?>
                <div class="d-flex justify-content-center align-items-center" style="margin-bottom: 16px;">
                    <img src="<?php echo base_url('uploads/' . $usuario['Foto']); ?>" alt="Foto do Perfil" width="304" height="304" class="rounded-circle" style="border: 2px solid #201B2C">
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
                    <img src="<?php echo base_url('arquivo/icones/default_profile.png'); ?>" alt="Foto do Perfil" width="304" height="304" class="thumbnail rounded-circle" style="border: 2px solid #201B2C">
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

        <h3><strong>Informações pessoais</strong></h3>
            <p class="info-user" style="margin-top: 32px;"><strong>Nome:</strong> <?php echo $usuario['Nome']; ?></p>
            <p class="info-user"><strong>Email:</strong> <?php echo $usuario['Email']; ?></p>
            <p class="info-user"><strong>Login:</strong> <?php echo $usuario['Login']; ?></p>
            <p class="info-user"><strong>Data de nascimento:</strong> <?php echo $usuario['Data_Nasc']; ?></p>
            <p class="info-user"><strong>Gênero:</strong> <?php echo $usuario['Genero']; ?></p>
        
        </div>
      
    </div>

    <div class="row" style="margin-top: 64px;">

        <div class="d-flex justify-content-center">
            <h1 id="subtitulo-equipe">Minha equipe</h1>
        </div>

        <p id="info-equipe">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet sit perspiciatis qui asperiores culpa velit, recusandae tenetur, ipsam reprehenderit dicta quia unde. Ipsa optio laudantium, nemo aliquid quidem molestiae delectus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure tempore dolore aut suscipit eaque! Aspernatur, odit laudantium qui vel aliquam accusamus corporis doloribus expedita delectus impedit laborum sapiente commodi aperiam.</p>

        <div class="d-flex justify-content-center" style="margin-bottom: 48px;">
            <div class="d-flex justify-content-center" style="width:720px; border: 2px solid #201B2C; border-radius: 50px;">
                <img src="<?php echo base_url('arquivo/icones/default_team_.png'); ?>" alt="Foto de equipe" class="img-equipe">
            </div>
        </div>

    </div>

    </div>
</main>

