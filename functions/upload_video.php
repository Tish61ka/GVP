<?php

    session_start();

    require './connect.php';

    $name = $_POST['name'];
    $text = $_POST['text'];

    $video = 'videos/'. $_FILES['video']['name'];
    move_uploaded_file($_FILES['video']['tmp_name'], '../' . $video);

    $sql = $connect->query("INSERT INTO `video` (`name`, `video`, `text`) VALUES ('$name', '$video', '$text')");
    header("Location: ../output/admin.php");