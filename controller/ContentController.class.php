<?php

require_once("model/ContentModel.class.php");

class ContentController
{

    private $contentmodel;

    public function __construct()
    {
        $this->contentmodel = new ContentModel();
    }

    public function AddOrRemoveReviewPage()
    {
        $template = "add_remove_review";
        include "view/layout.phtml";
    }
    
    public function AddOrRemoveServicePage()
    {
        $template = "add_remove_service";
        include "view/layout.phtml";
    }

    public function AddReview()
    {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        if (!empty($_POST['title'] and  $_POST['content'] and $_POST['author'])) {
            $this->contentmodel->AddReview($title, $content, $author, $category);

        }
    }

    public function AddService()
    {
        $title = $_POST['title'];
        $time = $_POST['time'];
        $price = $_POST['price'];
        $this->contentmodel->AddService($title, $time, $price);
    }
}
