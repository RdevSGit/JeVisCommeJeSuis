<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=jeviscommejesuis;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
session_start();
