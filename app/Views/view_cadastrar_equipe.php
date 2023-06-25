<?php $session = session(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastrar Equipe</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
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
        
        <input type="hidden" name="Tipo" id="Tipo" value="1">

        <input type="button" value="Cadastrar Equipe" data-bs-toggle="modal" data-bs-target="#confirmationModal">
    </form>

    <!-- Modal de Confirmação -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirmação de Cadastro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Deseja realmente cadastrar a equipe?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
