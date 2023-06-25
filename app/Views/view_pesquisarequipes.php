<?php $session = session(); ?>

<main class="content">
    <div class="container">
    <h1 class="text-center" style="font-size: 40pt; margin-bottom: 64px;"><strong>Equipes Disponíveis</strong></h1>

    <ul style="list-style: none;">
        <?php foreach ($equipes as $equipe) : ?>
            <div class="row" style="margin-bottom: 64px;">
                
                <div class="d-flex justify-content-center">
                    <div class="col-md-5 d-flex justify-content-center align-items-center">
                        <li>
                            <p><strong>Nome da Equipe:</strong> <?php echo $equipe['Nome']; ?></p>
                            <p><strong>Descrição:</strong> <?php echo $equipe['Descricao']; ?></p>
                            <p><strong>Contato:</strong> <?php echo $equipe['Contato']; ?></p>
                        </li>
                    </div>

                    <div class="col-md-5 d-flex justify-content-center align-items-center">

                        <a class="btn btn-entrar-equipe" href="solicitarEntrar/<?php echo $equipe['Id_Equipe']; ?>">Entrar</a>
                        
                    </div>
                </div>
                
            </div>

        <?php endforeach; ?>
    </ul>

    <span class="sec8"></span>
    </div>
</main>














