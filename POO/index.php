<?php 
    class User{
        private $nome;
        private $idade;
        private $altura;
        private $peso;


        function __construct($nome, $idade, $altura, $peso)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->altura = $altura;
            $this->peso = $peso;
        }
        
        function getNome(){
            return $this->nome;
        }
        function setNome($nome){
            $this->nome = $nome;
        }
        function getIdade(){
            return $this->nome;
        }
        function setIdade($nome){
            $this->nome = $nome;
        }
        function getAltura(){
            return $this->nome;
        }
        function setAltura($nome){
            $this->nome = $nome;
        }
        function getPeso(){
            return $this->nome;
        }
        function setPeso($nome){
            $this->nome = $nome;
        }
        
        function toString(){
            echo "Meu nome é $this->nome, tenho $this->idade anos, meu peso é $this->peso kilos e tenho $this->altura metros de altura. <br>";
        }
    }

    $pessoa = new User('Thiago', 20, 1.86, 105);


    echo $pessoa->getNome() . "<br>";
    echo "$pessoa->idade <br>";
    echo "$pessoa->altura <br>";
    echo "$pessoa->peso <br>";
    
    $pessoa->toString();
    
    $pessoa->setNome('João');

    echo $pessoa->getNome() . "<br>";