<?php $session = session(); ?>

<main class="content">
    <div class="container">
    
    <div class="row">
            <h1 class="text-center" style="font-size: 40pt; margin-bottom: 40px;"><strong>Cadastrar Equipe</strong></h1>
        </div>

    <form action="<?= site_url('equipes/cadastrarEquipe') ?>" method="post" enctype="multipart/form-data">
        
        <div class="d-flex justify-content-center" style="margin-bottom: 24px;">
            <div class="form-editar-perfil" style="margin-right: 40px;">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="Nome" id="Nome" style="box-shadow: 5px 5px 10px #C2C2C2;" required>
            </div>

            <div class="form-editar-perfil" style="margin-left: 40px;">
                <label for="data_nasc" class="form-label">Contato</label>
                <input type="text" class="form-control" id="Contato" name="Contato" style="box-shadow: 5px 5px 10px #C2C2C2;" required>
            </div>

        </div>

        <div class="d-flex justify-content-center" style="margin-bottom: 24px;">
            <div class="form-editar-perfil" style="margin-right: 40px;">
                <label for="nome" class="form-label">Quantidade</label>
                <select class="form-control" name="Quantidade" id="Quantidade" style="box-shadow: 5px 5px 10px #C2C2C2;">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                    <option value="30">30</option>
                </select>

            </div>

            <div class="form-editar-perfil" style="margin-left: 40px;">
                <label for="Foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="Foto" name="Foto" style="box-shadow: 5px 5px 10px #C2C2C2;">
            </div>

        </div>

        <div class="d-flex justify-content-center" style="margin-bottom: 24px;">

            <div class="form-editar-perfil2">
                <label for="Descricao" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="Descricao" name="Descricao" style="box-shadow: 5px 5px 10px #C2C2C2;" required>
            </div>

        </div>
        
        <div class="d-flex justify-content-center">
            <input type="button" value="Criar Equipe" class="btn-atualizar-perfil">
            <div style="margin-right: 16px; " class="justify-content-end">
                        <div class="modal fade" id="modalcriar" tabindex="-1" aria-labelledby="modalcriar" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="modalcriar">Confirmação</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Deseja mesmo criar uma equipe ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Sim</button>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>

    </form>

    </div>
</main>

