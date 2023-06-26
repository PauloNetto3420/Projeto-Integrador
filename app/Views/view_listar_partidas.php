<main class="content">
    <div class="container">

    <h1 class="text-center" style="font-size: 40pt; margin-bottom: 64px;"><strong>Lista de Partidas</strong></h1>

    <?php if (!empty($partidas)) : ?>
        <ul style="list-style: none;">
            <?php foreach ($partidas as $partida) : ?>
                <?php if ($partida['Qntd_Jogadores'] < 5) : ?>
                    <div class="row" style="margin-bottom: 64px;">
                
                    <div class="d-flex justify-content-center">
                    <div class="col-md-5 d-flex  align-items-center">

                        <li>
                            <strong>Tipo de Jogo:</strong> <?= $partida['Tipo_Jogo']; ?><br>
                            <strong>Quantidade de Jogadores:</strong> <?= $partida['Qntd_Jogadores']; ?><br>
                        </li>
                    </div>

                    <div class="col-md-5 d-flex justify-content-center align-items-center">

                        <a href="<?= base_url('public/partidas/entrar/' . $partida['Id_Partida']); ?>" class="btn btn-entrar-equipe">Entrar</a>
                        
                    </div>

                    </div>
                
                </div>
                    
                <?php endif; ?>
            <?php endforeach; ?>

            

        </ul>
        
    <div class="d-flex justify-content-center">
        <?php else : ?>
            <p>Nenhuma partida disponível.</p>
        <?php endif; ?>
    </div>

    <div class="d-flex justify-content-center" style="margin-top: 40px;">
        <a href="<?= base_url('public/equipes/perfil'); ?>" class="btn btn-entrar-equipe">Voltar</a>
    </div>

    <span class="sec11"></span>
    </div>
</main>