<?php
    // $nome = 'Thiago';
    // echo '<h1 style="color: red;">Hello world! ', $nome, '</h1>';




    // echo 1, 2, 3;
    // $num_int = 1;
    // echo is_int($num_int);




    // echo 1;
    // echo 10;
    // echo 100;
    // if (is_int(1)){
    //     echo 'É inteiro';
    // }



    // echo 'Texto com aspas simples<br>';
    // echo "Texto com aspas duplas";



    // $arr = ['nome' => 'Pulse', 'marca' => 'Fiat', 'rodas' => 4];
    // echo 'O ', $arr['nome'], ' é da marca ', $arr['marca'], ' e tem ', $arr['rodas'], ' rodas.';



    // $pessoa = ['nome'=>'Thiago', 'idade'=>20];
    // if ($pessoa['idade'] >= 18){
    //     echo 'Você é maior de idade';
    // }



    // class Carro{


    //     function ligarCarro(){
    //         echo 'O carro foi ligado';
    //     }
    // }

    // $pulse = new Carro;

    // $pulse->ligarCarro();



    // function compararNumeros($n1, $n2){
    //     if($n1 > $n2){
    //         return 'O primeiro número é maior';
    //     }else if($n2 > $n1){
    //         return 'O segundo número é maior';
    //     }else{
    //         return 'Os números são iguais';
    //     };
    // };
    
    // echo compararNumeros(1, 5);


    // $x = 4;

    // while($x < 30){
    //     echo $x.'<br>';
    //     if($x == 24){
    //         break;
    //     }
    //     $x += 2;
    // }

    $arr = [];

    for($x = 1; $x<=10; $x++){
        array_push($arr, $x);
    }
    foreach($arr as $i){
        echo $i;
    }
    
?>