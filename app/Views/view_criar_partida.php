<?php $session = session(); ?>
<main class="content">    
    <div class="container">
        <h1 class="text-center" style="font-size: 40pt; margin-bottom: 40px;"><strong>Criar Partida</strong></h1>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger" role="alert">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <p><?= esc($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <form method="post" action="<?php echo base_url('public/partidas/criar'); ?>">

        <div class="d-flex justify-content-center" style="margin-bottom: 24px;">
            <div class="form-editar-perfil" style="margin-right: 40px;">
                <label for="Tipo_Jogo" class="form-label" style="font-size: 16pt;">Jogo</label>

                <select class="form-select" id="Tipo_Jogo" name="Tipo_Jogo" style="box-shadow: 5px 5px 10px #C2C2C2;">
                    <option value="League of Legends">League of Legends</option>
                    <option value="Cs:GO">Cs:GO</option>
                    <option value="Overwatch 2">Overwatch 2</option>
                    <option value="Rocket League">Rocket League</option>
                    <option value="Warzone 2.0">Warzone 2.0</option>
                    <option value="Fortnite">Fortnite</option>
                </select>
            </div>

            

        </div> 

        <div class="d-flex justify-content-center" style="margin-top: 112px;">
            <button type="submit" class="btn-atualizar-perfil">Criar partida</button>
        </div>

        </form>

        <span class="sec9"></span>
    </div>
</main>