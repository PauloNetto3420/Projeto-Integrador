<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
</head>
<body>
    <form action="inser_u" method="post">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="senha" placeholder="Senha">
        <input type="text" name="nome" placeholder="Nome">
        <input type="date" name="data_nascimento" placeholder="Data de nascimento">
        <input type="text" name="genero" placeholder="Gênero">
        <input type="url" name="url" placeholder="Upload da foto">
        <input type="submit" name="name" value="Cadastrar">
    </form>
</body>
</html>