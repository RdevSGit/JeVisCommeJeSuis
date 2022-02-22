<?php

include_once "../../../config/connexion/connexion.php";

$id = $_POST['id'];
$table = $_POST['table'];

if ($table == 'review') {
    $query = $bdd->prepare("DELETE FROM review WHERE id = ?");
    $query->execute(array($id));
}

if ($table == 'service') {
    $query = $bdd->prepare("DELETE FROM service WHERE id = ?");
    $query->execute(array($id));
}
