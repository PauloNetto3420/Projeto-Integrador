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
        <label for="Nome">Nome da Equipe:</label>
        <input type="text" name="Nome" id="Nome" required>
        <br>

        <label for="Descricao">Descrição da Equipe:</label>
        <textarea name="Descricao" id="Descricao" required></textarea>
        <br>

        <label for="Contato">Contato:</label>
        <input type="text" name="Contato" id="Contato" required>
        <br>

        <label for="Foto">Foto:</label>
        <input type="file" name="Foto" id="Foto">
        <br>

        <label for="Quantidade">Quantidade da Equipe:</label>
        <select name="Quantidade" id="Quantidade">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
            <option value="25">25</option>
            <option value="30">30</option>
        </select>
        <br>
        
        <input type="hidden" name="Tipo" id="Tipo" value="1">

        <input type="submit" value="Cadastrar Equipe">
    </form>
</body>
</html>
