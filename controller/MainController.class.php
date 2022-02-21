<?php

require_once("model/MainModel.class.php");

class MainController
{

    private $mainmodel;

    public function __construct()
    {
        $this->mainmodel = new MainModel();
    }

    public function ShowHomePage()
    {
        $review_cat_1 = $this->mainmodel->pushReviewCat1();
        $review_cat_2 = $this->mainmodel->pushReviewCat2();
        $service = $this->mainmodel->pushService();
        $contact = $this->mainmodel->pushContact();
        $template = "home";
        include "view/layout.phtml";
    }
    
    public function ShowReikiPage()
    {
        $template = "more_about_reiki";
        include "view/layout.phtml";
    }

    public function ShowReflexePage()
    {
        $template = "more_about_reflexe";
        include "view/layout.phtml";
    }
}
