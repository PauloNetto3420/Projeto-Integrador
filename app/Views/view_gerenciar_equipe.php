<main class="content">
    <div class="container">
        <h1 style="font-size: 40pt; margin-bottom: 64px;"><strong>Gerenciamento da Equipe</strong></h1>

        <div class="row" style="margin-bottom: 32px;">
            <h2><strong>Informações da equipe</strong></h2>
            <p><strong>Nome:</strong> <?php echo $equipe['Nome']; ?></p>
            <p><strong>Descrição:</strong> <?php echo $equipe['Descricao']; ?></p>
        </div>

        <div class="row">
        <h2><strong>Jogadores Candidatos</strong></h2>
            <?php if (count($jogadoresCandidatos) > 0): ?>
                <ul>
                <?php foreach ($participantes as $participante) : ?>
                        <li>
                            <?php echo $participante['Nome']; ?>
                            <form action="<?php echo base_url('public/equipe/aprovar'); ?>" method="post" style="display: inline;">
                                <input type="hidden" name="Id_Usuario" value="<?php echo $participante['Id_Usuario']; ?>">
                                <input type="hidden" name="Id_Equipe" value="<?php echo $equipe['Id_Equipe']; ?>"> 
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
    </div>

    <span class="sec10"></span>
</main>
