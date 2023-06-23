<!DOCTYPE html>
<html>
<head>
    <title>Gerenciamento da Equipe</title>
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
        <h1>Gerenciamento da Equipe</h1>
        <p>Nome da Equipe: <?php echo $equipe['Nome']; ?></p>
        <p>Descrição: <?php echo $equipe['Descricao']; ?></p>
        <!-- Exiba outros detalhes da equipe -->

        <h2>Jogadores Candidatos</h2>
        <?php if (count($jogadoresCandidatos) > 0): ?>
            <ul>
                <?php foreach ($jogadoresCandidatos as $jogador): ?>
                    <li>
                        <?php echo $jogador['Nome']; ?>
                        <form action="<?php echo base_url('public/equipe/aprovar'); ?>" method="post" style="display: inline;">
                            <input type="hidden" name="usuarioId" value="<?php echo $jogador['Id_Usuario']; ?>">
                            <input type="hidden" name="equipeId" value="<?php echo $equipeId; ?>">
                            <button type="submit" class="btn btn-primary">Aprovar</button>
                        </form>
                    </li>
                    <!-- Exiba outras informações do jogador -->
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum jogador candidato encontrado.</p>
        <?php endif; ?>
    </div>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
