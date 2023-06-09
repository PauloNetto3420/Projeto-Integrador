<?php $session = session(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Colaborahub - Página Principal</title>
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
        <h1>Bem-vindo ao Colaborahub</h1>
        <p>Seja bem-vindo, <?php echo $session->get('Nome'); ?>!</p>
        <p>Aqui está um resumo das suas atividades:</p>
        <!-- Inclua o conteúdo do resumo aqui -->

        <div class="mt-4">
            <h5>Opções:</h5>
            <ul>
                <?php if (!$session->get('Email')) : ?>
                    <li><a href="login">Login</a></li>
                    <li><a href="cadastrar">Cadastro</a></li>
                <?php endif; ?>
                <li><a href="equipes">Hub de Equipes</a></li>
                <li><a href="perfil">Meu Perfil</a></li>
                <?php if ($session->get('id_equipe')) : ?>
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

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
