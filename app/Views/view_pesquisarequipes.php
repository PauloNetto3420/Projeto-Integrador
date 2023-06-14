<!-- view_pesquisarEquipes.php -->
<?php $session = session(); ?>
<h1>Pesquisar Equipes Disponíveis</h1>

<ul>
    <?php foreach ($equipes as $equipe) : ?>
        <li>
            <strong>Nome da Equipe:</strong> <?php echo $equipe['Nome']; ?><br>
            <strong>Descrição:</strong> <?php echo $equipe['Descricao']; ?><br>
            <!-- Adicione outras informações relevantes sobre a equipe -->
            <a href="solicitarEntrar/<?php echo $equipe['Id_Equipe']; ?>">Solicitar Entrar</a>
        </li>
    <?php endforeach; ?>
</ul>
