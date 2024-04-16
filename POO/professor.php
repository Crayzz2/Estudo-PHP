<?php 
    interface Caracteristicas{

        function falar ();

    }
    class Pessoa implements Caracteristicas{
        private $nome;
        private $idade;


        function __construct($nome=null, $idade=null)
        {
            $this->nome = $nome;
            $this->idade = $idade;
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
        
        function toString(){
            echo "Meu nome é $this->nome, tenho $this->idade anos. <br>";
        }

        function falar(){
            echo 'Hello world';
        }
    }
    class Professor extends Pessoa{
        private $materia;

        function __construct($nome=null, $idade=null, $materia=null)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->materia = $materia;
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
        function getMateria(){
            return $this->materia;
        }
        function setMateria($materia){
            $this->materia = $materia;
        }
    }

    $prof = new Professor('Deividi', 33, 'IA');

    echo $prof->getNome() . '<br>';
    echo $prof->getIdade() . '<br>';
    echo $prof->getMateria() . '<br>';

    echo $prof instanceof Pessoa;
    echo $prof instanceof Professor;

    $prof->falar();
    
