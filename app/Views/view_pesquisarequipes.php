<?php $session = session(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pesquisar equipes</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
    
</head>
<body>

<main class="content">
    <div class="container">
    <?php $session = session(); ?>
    <h1>Pesquisar Equipes Disponíveis</h1>

    <ul>
        <?php foreach ($equipes as $equipe) : ?>
            <li>
                <strong>Nome da Equipe:</strong> <?php echo $equipe['Nome']; ?><br>
                <strong>Descrição:</strong> <?php echo $equipe['Descricao']; ?><br>
                <!-- Adicione outras informações relevantes sobre a equipe -->
                <a href="solicitarEntrar/<?php echo $equipe['Id_Equipe']; ?>">Entrar</a>
            </li>
        <?php endforeach; ?>
    </ul>
    </div>
</main>
    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>













