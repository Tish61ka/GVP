<?php
    session_start();

    require_once('connect.php');

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $check_user = $connect->query("SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'"); 
    $user = $check_user->fetch(PDO::FETCH_ASSOC);

    if ($user>0){
        if($user['role']==1){
            $_SESSION['admin'] = [
                "id" => $user['id'],
                "email" => $user['email'],
                "full_name" => $user['full_name'],
                "role" => $user['role']
            ];
            header('Location: ../output/admin.php');
        }
        else{
            $_SESSION['user'] = [
                "id" => $user['id'],
                "email" => $user['email'],
                "full_name" => $user['full_name'],
                "role" => $user['role']
            ];
            header('Location: ../output/videohost.php');
        }        
    }
    else{
        $_SESSION['message'] = 'Неверный логин или пароль!!!';
        header('Location: ../output/sign.php');
    }   
         