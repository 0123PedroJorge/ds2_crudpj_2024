<?php
    $servername = "localhost";
    $user = "root";
    $pass = "";
    try{
        $conn = new PDO("mysql:host=$servername;dbname=ds2_crudpj_2024;", $user,$pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Deu certo";
    }
    catch(PDOException $erro){
        echo "não deu certo" . $erro->getMessage();
    }

$sql = "SELECT * FROM cadastro";
$result = $conn->prepare($sql);


