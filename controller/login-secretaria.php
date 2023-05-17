<?php


require_once '../Global.php';


// if (file_exists('../Global.php')) {
//     require_once '../Global.php';
// } else if (file_exists('./Global.php')) {
//     require_once './Global.php';
// } else if (file_exists('../../Global.php')) {
//     require_once '../../Global.php';
// }

if (!empty($_POST['login']) && !empty($_POST['password'])) {

    $secretaria = new Secretaria();

    if (!isset($_SESSION)) {
        session_start();
    }

    $secretaria->setLogin($_POST['login']);
    $secretaria->setSenha($_POST['password']);

    if (!empty(LoginDaoSecretaria::verificar($secretaria))) {

        $_SESSION['login'] = $secretaria->getLogin();
        $_SESSION['password'] = $secretaria->getSenha();

        header("Location: ../view/secretaria/home.php");
    } else {
        echo 'Usuário ou senha incorretos, clique aqui para se "<a>Cadastrar</a>"';
    }
}
