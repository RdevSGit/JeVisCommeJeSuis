<?php

class MainModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = new Database();
        $this->bdd = $this->bdd->getBdd();
    }

    public function pushReviewCat1()
    {

        $query = $this->bdd->prepare('SELECT * FROM review WHERE category = 1 ORDER BY date');
        $query->execute(array());
        $review_cat_1 = $query->fetchAll();
        return $review_cat_1;
    }
    public function pushReviewCat2()
    {

        $query = $this->bdd->prepare('SELECT * FROM review WHERE category = 2 ORDER BY date');
        $query->execute(array());
        $review_cat_2 = $query->fetchAll();
        return $review_cat_2;
    }
    public function pushService()
    {
        $query = $this->bdd->prepare('SELECT * FROM service');
        $query->execute(array());
        $service = $query->fetchAll();
        return $service;
    }
    public function pushContact(){
        $query = $this->bdd->prepare('SELECT * FROM contact');
        $query->execute(array());
        $contact = $query->fetch();
        return $contact;
    }
}
