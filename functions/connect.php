<?php
    $host = 'localhost';
    $dbname = 'gvp';
    $username = 'root';
    $password = '';

    try{
        $connect = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    }catch(PDOException $pe){
        die("Не удалочь подключиться к БД $dbname : " . $pe->getMessage());
    }