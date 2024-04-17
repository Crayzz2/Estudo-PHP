<?php
    class Contact{
        public $name;
        public $email;
        public $phone;
        
        function getName(){
            return $this->name;
        }
        function getEmail(){
            return $this->email;
        }
        function getPhone(){
            return $this->phone;
        }
        function setEmail($email){
            $this->email = $email;
        }
        function setPhone($phone){
            $this->phone = $phone;
        }
    }

    $contact = new Contact();
    $contact->name = 'Thiago';
    $contact->email = 'thiago.lacerda@hotmail.com';
    $contact->phone = 123456789;

    echo $contact->getName() . '<br>';
    echo $contact->getEmail() . '<br>';
    echo $contact->getPhone() . '<br>';

