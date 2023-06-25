<?php $session = session(); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Colaborahub - Meu Perfil</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">

</head>
<body>
<main class="content">
    <div class="container">
        <h1>Meu Perfil</h1>
        <div class="row">
            <div class="col-md-4">
                <?php if (isset($usuario['Foto'])) : ?>
                    <img src="<?php echo base_url('uploads/' . $usuario['Foto']); ?>" alt="Foto do Perfil" class="img-thumbnail">
                <?php else : ?>
                    <img src="<?php echo base_url('assets/images/default-profile-image.jpg'); ?>" alt="Foto do Perfil" class="img-thumbnail">
                <?php endif; ?>
            </div>
            <div class="col-md-8">
                <p><strong>Nome:</strong> <?php echo $usuario['Nome']; ?></p>
                <p><strong>Email:</strong> <?php echo $usuario['Email']; ?></p>
                <p><strong>Login:</strong> <?php echo $usuario['Login']; ?></p>
                <p><strong>Data de nascimento:</strong> <?php echo $usuario['Data_Nasc']; ?></p>
                <p><strong>Genêro:</strong> <?php echo $usuario['Genero']; ?></p>
                <!-- Outros dados do perfil -->
            </div>
            <a href="home">Home</a>
            <a href="<?php echo base_url('public/perfil/editar'); ?>" class="btn btn-primary">Editar Perfil</a>
            <a href="perfil/excluir" class="btn btn-danger">Excluir Perfil</a>        
        </div>
    </div>
</main>
    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
