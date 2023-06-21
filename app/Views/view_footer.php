<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url('CSS/estilo.css') ?>">

</head>
<body>

    <main class="footer d-flex align-items-center">
        
        <div class="container">
           
            <div class="row">
                <div class="col-lg-4">
                    <a class="link-logo" href="home"><img src="<?php echo base_url('arquivo/logo/logo.png'); ?>" width="128" height="128" alt="Logo"><strong>ColaboraHub</strong></a>
                </div>

                <div class="col-md-3">
                    <h5 style="color: white;"><strong>Contatos</strong></h5>
                    <p style="color: white;">(19) 9999-9999</p>
                    <p style="color: white;">(19) 9999-9999</p>
                    <p style="color: white;">contato@colaborahub.com.br</p>
                </div>

                <div class="col-md-3">
                    <ul style="list-style: none;">
                        <li style="margin-bottom: 12px;"><a class="link-footer" href="perfil">Meu perfil</a></li>
                        <?php if ($session->get('Id_Equipe')) : ?>
                            <li style="margin-bottom: 12px;">
                                <a class="link-footer" href="equipe/perfil">Minha Equipe</a>
                            </li>
                            <?php endif; ?>
                        <li><a class="link-footer" href="home">Sobre nós</a></li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <ul style="list-style: none;">
                        <li style="margin-bottom: 12px;"><a class="link-footer" href="">Redes sociais</a></li>
                        <li><a class="rede-logo" href="home"><img style="margin-right: 16px;"src="<?php echo base_url('arquivo/icones/facebook.png'); ?>" width="16" height="16" alt="Logo"></a><a class="rede-logo" href="home"><img src="<?php echo base_url('arquivo/icones/instagram.png'); ?>" width="16" height="16" alt="Logo"></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </main>

</body>
</html>