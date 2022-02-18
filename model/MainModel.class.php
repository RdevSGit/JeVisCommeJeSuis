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

        $query = $this->bdd->prepare('SELECT * FROM review WHERE category = 1');
        $query->execute(array());
        $review_cat_1 = $query->fetchAll();
        return $review_cat_1;
    }
    public function pushReviewCat2()
    {

        $query = $this->bdd->prepare('SELECT * FROM review WHERE category = 2');
        $query->execute(array());
        $review_cat_2 = $query->fetchAll();
        return $review_cat_2;
    }
}
