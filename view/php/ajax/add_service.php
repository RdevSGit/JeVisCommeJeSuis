<?php

include_once "../../../config/connexion/connexion.php";

$title = htmlspecialchars($_POST['title']);
$time = htmlspecialchars($_POST['time']);
$price = htmlspecialchars($_POST['price']);

$query = $bdd->prepare("INSERT INTO service (title ,time, price) VALUES (?,?,?)");
$query->execute(array($title, $time, $price));

$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
header('Location: ' . $referer);
