<main class="content">

<div class="container">

    <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-8">
            <h1 class="text-center titulo-perfil">Perfil usuário</h1>
        </div>

    </div>

    <div class="row" style="margin-bottom: 16px;">

        <div class="col-md-4">

            <h1 class="text-center titulo-perfil"><?= $usuario['Nome']; ?></h1>
            <div class="d-flex justify-content-center align-items-center" style="margin-bottom: 16px;">
                <p><strong>Foto</strong> <?= $usuario['Url_Foto']; ?></p>
        </div>

    </div>
    
    <div class="col-md-8" style="padding: 32px; border: 2px solid #201B2C; border-radius: 50px;">

        <h3><strong>Informações pessoais: </strong></h3>
            <p><strong>Nome:</strong> <?= $usuario['Nome']; ?></p>
            <p><strong>Email:</strong> <?= $usuario['Email']; ?></p>
    </div>

    </div>

    <span class="sec10"></span>
</div>

</main>
