<?php $session = session(); ?>

<main class="content">
    <div class="container">

    <div class="row titulo-perfil">
        <h1 class="text-center">Meu Perfil</h1>
    </div>

    <div class="row">

        <div class="col-md-4">
            <?php if (isset($usuario['Foto'])) : ?>
                <div class="d-flex justify-content-center align-items-center">
                    <img src="<?php echo base_url('uploads/' . $usuario['Foto']); ?>" alt="Foto do Perfil" width="304" height="304" class="img-thumbnail rounded-circle">
                </div>

                <?php echo $usuario['Nome']; ?>
                <?php echo $usuario['Login']; ?>

                <div class="d-flex justify-content-center">
                    <a href="<?php echo base_url('public/perfil/editar'); ?>" class="btn btn-primary">Editar Perfil</a>
                </div>

                <div class="d-flex justify-content-center">
                    <a href="perfil/excluir" class="btn btn-danger">Excluir Perfil</a>
                </div>

            <?php else : ?>
                <div class="d-flex justify-content-center align-items-center">
                    <img src="<?php echo base_url('arquivo/icones/default_profile.png'); ?>" alt="Foto do Perfil" width="304" height="304" class="img-thumbnail rounded-circle">
                </div>

                <?php echo $usuario['Nome']; ?>
                <?php echo $usuario['Login']; ?>
                
                <div class="d-flex justify-content-center">
                    <a href="<?php echo base_url('public/perfil/editar'); ?>" class="btn btn-primary">Editar Perfil</a>
                </div>

                <div class="d-flex justify-content-center">
                    <a href="perfil/excluir" class="btn btn-danger">Excluir Perfil</a>
                </div>

            <?php endif; ?>

        </div>

        <div class="col-md-8" >
            <p><strong>Nome:</strong> <?php echo $usuario['Nome']; ?></p>
            <p><strong>Email:</strong> <?php echo $usuario['Email']; ?></p>
            <p><strong>Login:</strong> <?php echo $usuario['Login']; ?></p>
            <p><strong>Data de nascimento:</strong> <?php echo $usuario['Data_Nasc']; ?></p>                
            <p><strong>Gênero:</strong> <?php echo $usuario['Genero']; ?></p>
                <!-- Outros dados do perfil -->
        </div>
      
    </div>


    </div>
</main>

