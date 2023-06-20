<?php $session = session(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Colaborahub - Editar Perfil</title>
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
        <h1>Editar Perfil</h1>
        <form action="<?php echo base_url('public/perfil/atualizar'); ?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $session->get('Nome'); ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $session->get('Email'); ?>">
            </div>
            <div class="mb-3">
                <label for="login" class="form-label">Login</label>
                <input type="text" class="form-control" id="login" name="login" value="<?php echo $session->get('Login'); ?>">
            </div>
            <div class="mb-3">
                <label for="data_nasc" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nasc" name="data_nasc" value="<?php echo $session->get('Data_Nasc'); ?>">
            </div>
            <label class="form-label">Gênero</label>
                <select class="form-control" name="genero">
                    <option value="Masculino" <?= set_select('genero', 'Masculino') ?>>Masculino</option>
                    <option value="Feminino" <?= set_select('genero', 'Feminino') ?>>Feminino</option>
                    <option value="Outro" <?= set_select('genero', 'Outro') ?>>Outro</option>
                </select>
            <!-- Outros campos do formulário de edição de perfil -->
            <div class="mb-3">
                <label for="Foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="Foto" name="Foto">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle
