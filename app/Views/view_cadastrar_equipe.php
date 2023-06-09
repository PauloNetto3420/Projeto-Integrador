<?php $session = session(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Equipe</title>
</head>
<body>
    <h1>Cadastrar Equipe</h1>
    
    <?php if (isset($validation)): ?>
        <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
    <?php endif; ?>

    <form action="<?= site_url('equipes/cadastrarEquipe') ?>" method="post" enctype="multipart/form-data">
        <label for="nome">Nome da Equipe:</label>
        <input type="text" name="nome" id="nome" required>
        <br>

        <label for="descricao">Descrição da Equipe:</label>
        <textarea name="descricao" id="descricao" required></textarea>
        <br>

        <label for="contato">Contato:</label>
        <input type="text" name="contato" id="contato" required>
        <br>

        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto">
        <br>

        <label for="quantidade">Quantidade da Equipe:</label>
        <select name="quantidade" id="quantidade">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="25">25</option>
            <option value="30">30</option>
        </select>
        <br>

        <input type="submit" value="Cadastrar Equipe">
    </form>
</body>
</html>
