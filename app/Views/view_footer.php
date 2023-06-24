<?php $session = session(); ?>

<main class="footer d-flex align-items-center">
        
        <div class="container">
           
            <div class="row" style="margin-bottom: 32px; ">
                <div class="col-lg-4">
                    <a class="link-logo" href="#head"><img src="<?php echo base_url('arquivo/logo/logo.png'); ?>" width="128" height="128" alt="Logo"><strong>ColaboraHub</strong></a>
                </div>

                <div class="col-md-3">
                   <ul style="list-style: none;">
                        <li class="link-footer"></a>Contatos</li>
                        <li class="item-footer"><img style="margin-right: 8px;"src="<?php echo base_url('arquivo/icones/fone.png'); ?>" width="16" height="16" alt="Logo">(19) 9999-9999</li>
                        <li class="item-footer"><img style="margin-right: 8px;"src="<?php echo base_url('arquivo/icones/whatsapp.png'); ?>" width="16" height="16" alt="Logo">(19) 9999-9999</li>
                        <li class="item-footer"><img style="margin-right: 8px;"src="<?php echo base_url('arquivo/icones/email.png'); ?>" width="16" height="16" alt="Logo">contato@colaborahub.com.br</li>
                   </ul>
                </div>

                <div class="col-md-3">
                    <ul style="list-style: none;">
                        <li style="margin-bottom: 12px;"><a class="link-footer" href="http://localhost/ColaboraHub/public/perfil">Meu perfil</a></li>
                        <?php if ($session->get('Id_Equipe')) : ?>
                            <li style="margin-bottom: 12px;">
                                <a class="link-footer" href="http://localhost/ColaboraHub/public/equipe/perfil">Minha Equipe</a>
                            </li>
                            <?php endif; ?>
                        <li><a class="link-footer" href="home">Sobre nós</a></li>
                    </ul>
                </div>

                <div class="col-md-2">
                    <ul style="list-style: none;">
                        <li style="margin-bottom: 12px;"><a class="link-footer" href="">Redes sociais</a></li>
                        <li><a href="https://www.facebook.com/"><img style="margin-right: 16px;"src="<?php echo base_url('arquivo/icones/facebook.png'); ?>" width="16" height="16" alt="Logo"></a><a class="rede-logo" href="https://www.instagram.com/"><img src="<?php echo base_url('arquivo/icones/instagram.png'); ?>" width="16" height="16" alt="Logo"></a></li>
                    </ul>
                </div>
            </div>

        <footer class="row">
            <div class="col">
                <p style="color: white;" class="text-center">COLABORAHUB 2023. TODOS OS DIREITOS RESERVADOS</p>
            </div>
        </footer>

        </div>
    </main>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>

