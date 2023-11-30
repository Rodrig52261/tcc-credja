<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <title>login</title>
</head>
<body>
    
    <div class="conteudo">
        <form action="../php/login.php" method="POST" class="form">

        <h1>LOGIN</h1>

        <input type="text" placeholder="nome" name="usuario">
        <input type="password" placeholder="senha" name="senha">
        <div class="btn-submit">
            <input type="submit" value="entrar" name="submit">
        </div>

        </form>
    </div>

</body>
</html>