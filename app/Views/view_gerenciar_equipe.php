<main class="content">
    <div class="container">
        <h1>Gerenciamento da Equipe</h1>
        <p>Nome da Equipe: <?php echo $equipe['Nome']; ?></p>
        <p>Descrição: <?php echo $equipe['Descricao']; ?></p>
        <!-- Exiba outros detalhes da equipe -->

        <h2>Jogadores Candidatos</h2>
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

    <span class="sec10"></span>
</main>
