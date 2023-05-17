<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <?php require_once '../../Global.php';?>
    <?php if(!isset($_SESSION)){
        session_start();
    }?>
    <h1>Seja bem vindo, <?php echo $_SESSION['login'];?></h1>
    <p><a href="../../controller/logout-secretaria.php">Sair</a></p>
</body>
</html>