<?php $session = session(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Hub de Equipes</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
    
</head>
<body>
<main class="content">
    <div class="container">
        <h1>Hub de Equipes</h1>
        <?php if (!$session->get('Id_Equipe')) : ?>
            <p>Você ainda não está em uma equipe. Crie uma equipe ou procure por equipes disponíveis:</p>
            <div class="mb-4">
                <a href="equipes/cadastrar" class="btn btn-primary">Criar Equipe</a>
                <a href="equipes/pesquisar" class="btn btn-primary">Procurar Equipes</a>
            </div>
        <?php else : ?>
            <p>Você está atualmente na equipe <?php echo $session->get('Nome'); ?>.</p>
            <p>Selecione uma opção:</p>
            <ul>
                <li><a href="equipes/perfil">Perfil da Equipe</a></li>

                <li><a href="equipes/pesquisar">Procurar Equipes</a></li>
                <?php endif; ?>
            </ul>
    </div>
</main>
    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
