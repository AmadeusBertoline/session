<?php

require_once '../Global.php';
echo 'Aoba';
    
    // if(file_exists('../Global.php')){
    //     require_once '../Global.php';
    // }else if(file_exists('./Global.php')){
    //     require_once './Global.php';
    // }else if(file_exists('../../Global.php')){
    //     require_once '../../Global.php';
    // }

    class LoginDaoSecretaria{

        public static function verificar($secretaria){

            //conexão ao banco
            $conexao = Conexao::Conectar();
            //consultar se existe os dados no banco
            $querySelect = "SELECT cod FROM tbSecretaria
                            WHERE loginSecretaria = '".$secretaria->getLogin()."' AND senha = '".$secretaria->getSenha()."' ";
            
            $resultado = $conexao->query($querySelect);

            $secretaria = $resultado->fetchAll();

            return $secretaria;

        }
    }

?>