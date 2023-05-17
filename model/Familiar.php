<?php
    class Familiar{
        private $cod;
        private $nome;
        private $dataNascimento;
        private $cpf;
        private $cep; 
        private $logradouro;
        private $numLog;
        private $bairro;
        private $cidade;
        private $estado;
        private $senha;
        private $email;
        

        
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

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getCpf(){
        return $this -> cpf;
    }

    public function setDataNascimento($dataNascimento){
        $this -> dataNascimento = $dataNascimento;
    }

    public function getDataNascimento(){
        return $this -> dataNascimento;
    }

    public function setLogradouro($logradouro){
         $this  -> logradouro = $logradouro; 
    }

    public function getLogradouro(){
        return $this -> logradouro;
    }

    public function setNumLog($numLog){
         $this -> numLog = $numLog;
    }

    public function getNumLog(){
        return $this -> numLog;
    } 

    public function setCep($cep){
         $this -> cep = $cep;
    }

    public function getCep(){
        return $this -> cep;
    }

    public function setBairro($bairro){
        $this -> bairro = $bairro;
    }

    public function getBairro(){
        return $this ->  bairro;
    }

    public function setCidade($cidade){
        $this-> cidade = $cidade;
    }

    public function getCidade(){
        return $this -> cidade;
    }

    public function setEstado($estado){
        $this->estado=$estado;
    }
    public function getEstado(){
        return $this->estado;
    }

    public function getUf(){
        return $this->estado;
    }


    public function setSenha($senha){
        $this->senha=$senha;
    }
    public function getSenha(){
        return $this->senha;
    }
        
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }   

    }    
    
?>



    