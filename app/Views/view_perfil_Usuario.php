<!DOCTYPE html>
<html>
<head>
    <title>Perfil do Usuário</title>
    <!-- Inclua os arquivos CSS do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f2f2f2;
        }

        .container {
            padding: 40px;
            margin-top: 40px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #5e50ff;
        }

        p {
            color: #000000;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Perfil do Usuário</h1>
        <p><strong>Foto</strong> <?= $usuario['Url_Foto']; ?></p>
        <p><strong>Nome:</strong> <?= $usuario['Nome']; ?></p>
        <p><strong>Email:</strong> <?= $usuario['Email']; ?></p>
        <!-- Exiba outros dados do perfil do usuário -->
    </div>

    <!-- Inclua os arquivos JavaScript do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
