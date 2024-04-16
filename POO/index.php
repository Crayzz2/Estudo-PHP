<?php 
    class User{
        private $nome;
        private $idade;
        private $altura;
        private $peso;


        function __construct($nome=null, $idade=null, $altura=null, $peso=null)
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
            return $this->idade;
        }
        function setIdade($idade){
            $this->idade = $idade;
        }
        function getAltura(){
            return $this->altura;
        }
        function setAltura($altura){
            $this->altura = $altura;
        }
        function getPeso(){
            return $this->peso;
        }
        function setPeso($peso){
            $this->peso = $peso;
        }
        
        function toString(){
            echo "Meu nome é $this->nome, tenho $this->idade anos, meu peso é $this->peso kilos e tenho $this->altura metros de altura. <br>";
        }
    }

    $pessoa = new User('Thiago', 20, 1.86, 105);
    $pessoa2 = new User();


    echo $pessoa->getNome() . "<br>";
    echo $pessoa->getIdade() . "<br>";
    echo $pessoa->getAltura() . "<br>";
    echo $pessoa->getPeso() . "<br>";
    
    $pessoa->toString();
    
    $pessoa->setNome('João');
    $pessoa->setIdade(32);
    $pessoa->setAltura(1.65);
    $pessoa->setPeso(73);

    echo $pessoa->getNome() . "<br>";
    echo $pessoa->getIdade() . "<br>";
    echo $pessoa->getAltura() . "<br>";
    echo $pessoa->getPeso() . "<br>";

    $pessoa->toString();

    echo $pessoa2->getNome() . "<br>";
    echo $pessoa2->getIdade() . "<br>";
    echo $pessoa2->getAltura() . "<br>";
    echo $pessoa2->getPeso() . "<br>";

    $pessoa2->toString();
    
    $pessoa2->setNome('Thiago');
    $pessoa2->setIdade(20);
    $pessoa2->setAltura(1.86);
    $pessoa2->setPeso(105);
    
    $pessoa2->toString();

