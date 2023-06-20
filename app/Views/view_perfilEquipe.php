<!DOCTYPE html>
<html>
<head>
    <title>Minha Equipe - Colaborahub</title>
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

        .participant-list {
            list-style-type: none;
            padding: 0;
        }

        .participant-item {
            background-color: #f8f9fa;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Minha Equipe</h1>
        <p>Aqui estão os detalhes da equipe:</p>

        <div class="row">
            <div class="col-md-6">
                <h5>Dados da Equipe:</h5>
                <p><strong>Nome da Equipe:</strong> <?php echo $equipe['Nome']; ?></p>
                <p><strong>Contato:</strong> <?php echo $equipe['Contato']; ?></p>
                <p><strong>Quantidade de Membros:</strong> <?php echo $equipe['Quantidade']; ?></p>
            </div>
        </div>

        <div class="mt-4">
    <h5>Participantes:</h5>
    <ul class="participant-list">
        <?php foreach ($participantes as $participante) : ?>
            <?php if (isset($participante['Tipo']) && ($participante['Tipo'] == 1 || $participante['Tipo'] == 2)) : ?>
                <li class="participant-item">
                    <strong>Nome:</strong> <?php echo $participante['Nome']; ?><br>
                    <strong>Email:</strong> <?php echo $participante['Email']; ?><br>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</div>


        <?php if ($Tipo == 1): ?>
            <a href="<?php echo base_url('public/equipe/gerenciar'); ?>" class="btn btn-primary">Gerenciar Equipe</a>
        <?php endif; ?>
    </div>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
