<?php $session = session(); ?>

<main class="content">
    <div class="container">

        <div class="row">
            <div class="col-md-4"></div>

            <div class="col-md-8">
                <h1 class="text-center titulo-perfil">Minha Equipe</h1>

            </div>
        </div>

        <div class="row" style="margin-bottom: 16px;">

            <div class="col-md-4">
                <div class="d-flex justify-content-center align-items-center" style="margin-bottom: 16px;">
                    <img src="<?php echo base_url('arquivo/icones/default_team_.png'); ?>" alt="Foto do Perfil" width="304" height="304" class=" rounded-circle" style="border: 2px solid #201B2C">

                </div>
                <div class="d-flex justify-content-center info-perfil">
                    <a href="<?= base_url('public/partidas/listar/'); ?>" class="btn btn-editar-equipe">Ver Partidas Disponíveis</a>
                </div>

                <div class="d-flex justify-content-center align-items-center info-perfil">
                    <?php if ($tipoUsuario == 1) : ?>
                        <a href="<?= base_url('public/equipe/gerenciar'); ?>" class="btn btn-gerenciar-equipe">Gerenciar Equipe</a>
                    <?php endif; ?>
                </div>

                <div class="d-flex justify-content-center info-perfil">
                    <a href="<?= base_url('public/partidas/criar'); ?>" class="btn btn-excluir-equipe">Criar Partida</a>
                </div>

            </div>

            <div class="col-md-8" style="padding: 32px; border: 2px solid #201B2C; border-radius: 50px;">
                <h5><strong>Dados da Equipe:</strong></h5><br>
                <p><strong>Nome da Equipe:</strong> <?= $equipe['Nome']; ?></p>
                <p><strong>Contato:</strong> <?= $equipe['Contato']; ?></p>
                <p><strong>Descrição</strong> <?= $equipe['Descricao']; ?></p>
                <p><strong>Quantidade de Membros:</strong> <?= $equipe['Quantidade']; ?></p>
                <br>
                <h5><strong>Participantes:</strong></h5><br>
                <?php if (!empty($participantes)) : ?>
                    <ul class="participant-list">
                        <?php foreach ($participantes as $participante) : ?>
                            <li class="participant-item">
                                <strong>Nome:</strong> <?= $participante['Nome']; ?><br>
                                <strong>Email:</strong> <?= $participante['Email']; ?><a style="margin-left: 64px;" href="<?= base_url('public/equipe/ver-perfil/' . $participante['Id_Usuario']); ?>" class="btn btn-excluir-equipe">Ver Perfil</a><br><br>
                                
                                <?php if ($tipoUsuario == 1) : ?>
                                    <a href="<?= base_url('public/equipe/excluir-participante/' . $participante['Id_Usuario']); ?>" class="participant-delete-link">Excluir Participante</a>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                <?php else : ?>
                    <p>Nenhum participante encontrado.</p>
                <?php endif; ?>

            </div>
        </div>

        <span class="sec7"></span>
    </div>
</main>