<?php

    include_once ('models/Car.php');

    class CarDAO implements CarDAOInterface {

        private $conn;

        public function __construct(PDO $conn){
            $this->conn = $conn;
        }

        public function create(Car $car){
            $ins = $this->conn->prepare("INSERT INTO cars (brand, km, color) VALUES (:PBrand, :PKm, :PColor)");
            $ins->execute(array(":PBrand"=>$car->getBrand(), ":PKm"=>$car->getKm(), ":PColor"=>$car->getColor()));
        }
        public function findAll(){
            $carsReturn = [];

            $sel = $this->conn->prepare("SELECT * FROM cars");
            $sel->execute();

            $data = $sel->fetchAll();

            foreach ($data as $cars){

                $car = new Car();
                $car->setId($cars["id"]);
                $car->setBrand($cars["brand"]);
                $car->setKm($cars["km"]);
                $car->setColor($cars["color"]);

                $carsReturn[] = $car;
            }

            return $carsReturn;
        }

    }