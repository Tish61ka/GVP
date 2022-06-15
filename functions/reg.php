<?php
    session_start();

    require_once('connect.php');
    
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm){ 
        $password = md5($password);
        $add_user = $connect->query("INSERT INTO `users`(`full_name`, `email`, `password`) VALUES ('$full_name','$email','$password')");
        $_SESSION['message'] = "Регистрация прошла успешно!";
        header('Location: ../output/sign.php');    
    }
    else{
        $_SESSION['message'] = 'Пароли не совпадают!';
        header('Location: ../output/sign.php'); 
    }   