<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <h1>Meu Perfil</h1>

    <!-- Exibir mensagem de sucesso, se houver -->
    <?php if (session()->has('success')) : ?>
        <div class="alert alert-success"><?= session('success') ?></div>
    <?php endif; ?>

    <!-- Exibir mensagem de erro, se houver -->
    <?php if (session()->has('errors')) : ?>
        <div class="alert alert-danger">
            <?php foreach (session('errors') as $error) : ?>
                <p><?= $error ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-6">
            <h2>Dados Pessoais</h2>
            <form action="<?= site_url('meu-perfil/atualizar') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?= old('nome', $user['nome']) ?>">
                </div>
                <div class="mb-3">
                    <label for="data_nasc" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" id="data_nasc" name="data_nasc" value="<?= old('data_nasc', $user['data_nasc']) ?>">
                </div>
                <div class="mb-3">
                    <label for="login" class="form-label">Login</label>
                    <input type="text" class="form-control" id="login" name="login" value="<?= old('login', $user['login']) ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= old('email', $user['email']) ?>">
                </div>
                <div class="mb-3">
                    <label for="genero" class="form-label">Gênero</label>
                    <select class="form-select" id="genero" name="genero">
                        <option value="">Selecione</option>
                        <option value="Masculino" <?= old('genero', $user['genero']) === 'Masculino' ? 'selected' : '' ?>>Masculino</option>
                        <option value="Feminino" <?= old('genero', $user['genero']) === 'Feminino' ? 'selected' : '' ?>>Feminino</option>
                        <option value="Outro" <?= old('genero', $user['genero']) === 'Outro' ? 'selected' : '' ?>>Outro</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="foto" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </form>
        </div>
        <div class="col-md-6">
            <h2>Foto</h2>
            <?php if (!empty($user['foto'])) : ?>
                <img src="<?= base_url('public/uploads/' . $user['foto']) ?>" alt="Foto do Perfil" class="img-fluid">
            <?php else : ?>
                <p>Nenhuma foto encontrada.</p>
            <?php endif; ?>
        </div>
    </div>
<?= $this->endSection() ?>
