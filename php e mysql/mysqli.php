<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'mysqli';

    $conn = new mysqli($host, $user, $pass, $db);

    // $create = "CREATE TABLE USERS(
    //         id INT,
    //         nm_user VARCHAR(25)
    //     );";

    // $insert = "INSERT INTO USERS (id, nm_user) VALUES (1, 'Thiago')";

    // $select = "SELECT * FROM users";

    // $sel = $conn->query($select);

    // $conn->close();

    //$users = $sel->fetch_assoc(); Um resultado
    
    // $users = $sel->fetch_all();

    // foreach($users as $user){
    //     print_r($user);
    // }

    $id = 3;
    $nm = "Gilmara";

    // $stmt = $conn->prepare("INSERT INTO users (id, nm_user) VALUES (?, ?)");
    // $stmt->bind_param("is", $id, $nm); // i = integer  s = String
    // $stmt->execute();

    // $stmt = $conn->prepare("SELECT * FROM users WHERE id < ?");
    // $stmt->bind_param("i", $id);
    // $stmt->execute();
    // $result = $stmt->get_result();
    // print_r($result->fetch_all());


    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    print_r($result->fetch_row());
    $conn->close();
