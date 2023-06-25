<h1>Lista de Partidas</h1>

<?php if (!empty($partidas)) : ?>
    <ul>
        <?php foreach ($partidas as $partida) : ?>
            <?php if ($partida['Qntd_Jogadores'] < 5) : ?>
                <li>
                    <strong>Tipo de Jogo:</strong> <?= $partida['Tipo_Jogo']; ?><br>
                    <strong>Código da Partida:</strong> <?= $partida['Id_Partida']; ?><br>
                    <strong>Quantidade de Jogadores:</strong> <?= $partida['Qntd_Jogadores']; ?><br>
                    <a href="<?= base_url('public/partidas/entrar/' . $partida['Id_Partida']); ?>" class="btn btn-primary">Entrar</a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
<?php else : ?>
    <p>Nenhuma partida disponível.</p>
<?php endif; ?>
