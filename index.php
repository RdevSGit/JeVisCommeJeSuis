<?php

session_start();

//appel de la bdd
require("config/Database.class.php");

//appel des controllers
require("controller/MainController.class.php");
require("controller/UserController.class.php");
require('controller/ContentController.class.php');
//instanciation des classes
$MainController = new MainController();
$UserController = new UserController();
$ContentController = new ContentController();


if (isset($_GET["page"])) {
    switch ($_GET['page']) {
        case 'home':
            $MainController->ShowHomePage();
            break;
        case 'connect_user':
            $UserController->ConnectUser();
            break;
        case 'add_remove_review_page':
            $ContentController->AddOrRemoveReviewPage();
            break;
        case 'add_remove_service_page':
            $ContentController->AddOrRemoveServicePage();
            break;
        case 'add_review':
            $ContentController->AddReview();
            break;
        case 'add_service':
            $ContentController->AddService();
            break;
    }
} else {
    $MainController->ShowHomePage();
}
