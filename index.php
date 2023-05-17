<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login-secretaria.css">
    <script type="text/javascript" src="./assets/js/login-secretaria.js" defer></script>

    <title>Login de Secretaria</title>
</head>

<body>
    <div class="form-container">
        <form method="post" action="./controller/login-secretaria.php">
            <h1>Login</h1>
            <h2>Digite seus dados de acesso nos campos abaixo.</h2>

            <div class="label-input">
                <label for="">Login</label>
                <input type="text" name="login" id="" required>
            </div>

            <div class="label-input">
                <label for="">Senha</label>
                <input type="password" name="password" id="password" required>
                <img onclick="eyeClick()" width="20px" src="./assets/img/olho.png" id="eyeSvg" alt="">
            </div>

            <input class="enviar" type="submit" value="Entrar">
        </form>

    </div>
</body>

</html>