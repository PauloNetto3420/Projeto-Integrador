<?php $session = session(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Hub de Equipes</title>
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
        <h1>Hub de Equipes</h1>
        <?php if (!$session->get('Id_Equipe')) : ?>
            <p>Você ainda não está em uma equipe. Crie uma equipe ou procure por equipes disponíveis:</p>
            <div class="mb-4">
                <a href="equipe/cadastrar" class="btn btn-primary">Criar Equipe</a>
                <a href="equipe/pesquisar" class="btn btn-primary">Procurar Equipes</a>
            </div>
        <?php else : ?>
            <p>Você está atualmente na equipe <?php echo $session->get('Nome'); ?>.</p>
            <p>Selecione uma opção:</p>
            <ul>
                <li><a href="equipe/perfil">Perfil da Equipe</a></li>
                <li><a href="equipe/pesquisar">Procurar Equipes</a></li>
            </ul>
        <?php endif; ?>
    </div>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
