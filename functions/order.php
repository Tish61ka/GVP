<?php
session_start();

require './connect.php';

$full_name = $_SESSION['user']['full_name'];
$text = $_POST['text'];
$data = date('d.m.Y');

$sql = $connect->query("INSERT INTO `orders` (`full_name`, `text`, `data`) VALUES ('$full_name', '$text', '$data')");
header("Location: ../output/videohost.php");