<main class="content">
    
    <div class="container">
        <h1 class="text-center" style="font-size: 40pt; margin-bottom: 64px;"><strong>Detalhes da Partida</strong></h1>
    
        <div class="d-flex justify-content-center align-items-center" style="margin-bottom: 24px;">
        
            <div class="" style="margin-right: 80px;">
                <p><strong>Jogadores:</strong> <?= $partida['Qntd_Jogadores']; ?>/5</p>
                <p><strong>Jogo:</strong> <?= $partida['Tipo_Jogo']; ?></p>
            </div>

            <div class="" style="margin-left: 80px;">
                <h3><strong>Código da Partida</strong></h3>
                <p style="color: #15C75C;"><strong><?= $codigo; ?></strong></p>
                <p class="text-center">Cole este codigo no jogo</p>
                
            </div>

        </div>
        <div class="d-flex justify-content-center" style="margin-top: 40px;">
    <a href="<?= base_url('public/equipes/perfil'); ?>" class="btn btn-entrar-equipe">Voltar</a>
</div>


    <span class="sec10"></span>

    </div>
</main>

