<?php
    $host = 'localhost';
    $db = 'pdo';
    $user = 'root';
    $pass = '';

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    // $stmt = $conn->prepare("CREATE TABLE users (id INT, nm_user VARCHAR(25))");
    // $stmt->execute();

    // $stmt = $conn->prepare("INSERT INTO USERS (id, nm_user) VALUES (:PId, :PNm_user)");
    // $stmt->execute(array(':PId'=>1, ':PNm_user'=>'Thiago'));

    // $stmt = $conn->prepare("UPDATE users SET nm_user = :PNm_user WHERE id = :PId");
    // $stmt->execute(array(':PNm_user'=>'Thiago lacerda', ':PId'=>1));

    $stmt = $conn->prepare("SELECT * FROM users");
    $stmt->execute();
    $res = $stmt->fetch(PDO::FETCH_ASSOC);
    print_r($res);
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    print_r($res);
