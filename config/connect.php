<?php

$host = "localhost";

$data_base = "Fatraca";

$user = "root";

$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$data_base", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // if($conn)
    // {
    //      echo "Conectado!";
    // }
} catch (PDOException $th) {
    echo "erro na conexão: " . $th->getMessage();
}