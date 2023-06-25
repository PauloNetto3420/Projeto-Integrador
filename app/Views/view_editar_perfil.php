<?php $session = session(); ?>

<main class="content">
    <div class="container">
        
        <div class="row">
            <h1 class="text-center" style="font-size: 40pt;"><strong>Editar Perfil</strong></h1>
        </div>

        <form action="<?php echo base_url('public/perfil/atualizar'); ?>" method="post" enctype="multipart/form-data">

        <div class="row">
            
            <div class="col-md-6 form-editar-perfil">
                 <label for="nome" class="form-label">Nome completo</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $session->get('Nome'); ?>">
            </div>
            
            <div class="col-md-6 form-editar-perfil">
                <label for="data_nasc" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="data_nasc" name="data_nasc" value="<?php echo $session->get('Data_Nasc'); ?>">
            </div>

        </div>

        <div class="row">
            
            <div class="col-md-6 form-editar-perfil">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $session->get('Email'); ?>">
            </div>

            <div class="col-md-6 form-editar-perfil">
                <label class="form-label">Gênero</label>
                <select class="form-control" name="genero">
                    <option value="Masculino" <?= set_select('genero', 'Masculino') ?>>Masculino</option>
                    <option value="Feminino" <?= set_select('genero', 'Feminino') ?>>Feminino</option>
                    <option value="Outro" <?= set_select('genero', 'Outro') ?>>Outro</option>
                </select>
            </div>
            
        </div>

        <div class="row">
            
            <div class="col-md-6 form-editar-perfil">
                <label for="login" class="form-label">Usuário</label>
                <input type="text" class="form-control" id="login" name="login" value="<?php echo $session->get('Login'); ?>">
            </div>

            <div class="col-md-6 form-editar-perfil" >
                <label for="Foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="Foto" name="Foto">
            </div>
            
        </div>
        
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
        </form>
    </div>
</main>