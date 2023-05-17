<?php
    class Conexao{

        public static function Conectar(){
            
            //instanciando a classe PDO "tipo do banco, servidor, nome do banco, user e senha"

            $conexao = new PDO("mysql:host=localhost;dbname=bdanjosperdidos", "root", "");

            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conexao;
        }
    }
?>