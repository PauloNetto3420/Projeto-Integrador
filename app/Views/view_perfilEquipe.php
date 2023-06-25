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
            position: relative;
        }

        .participant-profile-link {
            position: absolute;
            top: 50%;
            right: 70px;
            transform: translateY(-50%);
        }

        .participant-delete-link {
            position: absolute;
            top: 50%;
            right: 140px;
            transform: translateY(-50%);
        }

        .participant-links {
        display: flex;
        justify-content: flex-end;
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
                <p><strong>Nome da Equipe:</strong> <?= $equipe['Nome']; ?></p>
                <p><strong>Contato:</strong> <?= $equipe['Contato']; ?></p>
                <p><strong>Quantidade de Membros:</strong> <?= $equipe['Quantidade']; ?></p>
                <a href="<?= base_url('public/partidas/listar/'); ?>" class="btn btn-primary">Ver Partidas Disponíveis</a>
                <a href="<?= base_url('public/partidas/criar'); ?>" class="btn btn-primary">Criar Partida</a>
            </div>
        </div>

        <div class="mt-4">
    <h5>Participantes:</h5>
    <?php if (!empty($participantes)) : ?>
        <ul class="participant-list">
            <?php foreach ($participantes as $participante) : ?>
                <li class="participant-item">
                    <div>
                        <strong>Nome:</strong> <?= $participante['Nome']; ?><br>
                        <strong>Email:</strong> <?= $participante['Email']; ?>
                    </div>
                    <div class="participant-links">
                        <a href="<?= base_url('public/equipe/ver-perfil/' . $participante['Id_Usuario']); ?>" class="participant-profile-link">Ver Perfil</a>
                        <?php if ($tipoUsuario == 1): ?>
                            <a href="<?= base_url('public/equipe/excluir-participante/' . $participante['Id_Usuario']); ?>" class="participant-delete-link">Excluir Participante</a>
                        <?php endif; ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>Nenhum participante encontrado.</p>
    <?php endif; ?>
</div>

        <?php if ($tipoUsuario == 1): ?>
            <a href="<?= base_url('public/equipe/gerenciar'); ?>" class="btn btn-primary">Gerenciar Equipe</a>
        <?php endif; ?>
    </div>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
