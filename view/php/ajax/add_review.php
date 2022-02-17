<?php

include_once "../connexion/connexion.php";

$title = htmlspecialchars($_POST['title']);
$content = htmlspecialchars($_POST['content']);
$author = htmlspecialchars($_POST['author']);
$category = htmlspecialchars($_POST['category']);

$query = $bdd->prepare("INSERT INTO review (title ,content, author, category ) VALUES (?,?,?,?)");
$query->execute(array($title, $content, $author, $category));

$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
header('Location: ' . $referer);