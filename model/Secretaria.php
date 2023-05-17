<?php

    class Secretaria{
        private $cod;
        private $nome;
        private $estado;
        private $login;
        private $senha;
        private $dataCadastro;

        public function setCod($cod){
            $this->cod = $cod;
        }
        public function getCod(){
            return $this->cod;
        }

        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getNome(){
            return $this->nome;
        }
        
        public function setEstado($estado){
            $this->estado = $estado;
        }
        public function getEstado(){
            return $this->estado;
        }

        public function setLogin($login){
            $this->login = $login;
        }
        public function getLogin(){
            return $this->login;
        }

        public function setSenha($senha){
            $this->senha = $senha;
        }
        public function getSenha(){
            return $this->senha;
        }

        public function setDataCadastro($dataCadastro){
            $this->dataCadastro = $dataCadastro;
        }
        public function getDataCadastro(){
            return $this->dataCadastro;
        }

    }

?>