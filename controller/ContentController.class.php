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
        $review = $this->contentmodel->Review();
        $template = "add_remove_review";
        include "view/layout.phtml";
    }

    public function AddOrRemoveServicePage()
    {
        $service = $this->contentmodel->Service();
        $template = "add_remove_service";
        include "view/layout.phtml";
    }
}
