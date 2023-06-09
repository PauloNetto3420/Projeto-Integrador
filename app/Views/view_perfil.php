<?php $session = session(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Colaborahub - Meu Perfil</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f2f2f2;
        }

        .container {
            padding: 40px;
            margin-top: 40px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #5e50ff;
        }

        p {
            color: #000000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Meu Perfil</h1>
        <div class="row">
            <div class="col-md-4">
                <?php if (isset($usuario['foto'])) : ?>
                    <img src="<?php echo base_url('uploads/' . $usuario['foto']); ?>" alt="Foto do Perfil" class="img-thumbnail">
                <?php else : ?>
                    <img src="<?php echo base_url('assets/images/default-profile-image.jpg'); ?>" alt="Foto do Perfil" class="img-thumbnail">
                <?php endif; ?>
            </div>
            <div class="col-md-8">
                <p><strong>Nome:</strong> <?php echo $usuario['nome']; ?></p>
                <p><strong>Email:</strong> <?php echo $usuario['email']; ?></p>
                <p><strong>Login:</strong> <?php echo $usuario['login']; ?></p>
                <p><strong>Data de nascimento:</strong> <?php echo $usuario['data_nasc']; ?></p>
                <p><strong>Genêro:</strong> <?php echo $usuario['genero']; ?></p>
                <!-- Outros dados do perfil -->
            </div>
            <a href="home">Home</a>
            <a href="<?php echo base_url('public/perfil/editar'); ?>" class="btn btn-primary">Editar Perfil</a>
            <a href="perfil/excluir" class="btn btn-danger">Excluir Perfil</a>        
        </div>
    </div>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
