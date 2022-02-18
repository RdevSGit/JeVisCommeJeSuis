<?php

class ContentModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = new Database();
        $this->bdd = $this->bdd->getBdd();
    }

    public function AddReview($title, $content, $author, $category)
    {
        $query = $this->bdd->prepare("INSERT INTO review (title ,content, author, category ) VALUES (?,?,?,?)");
        $query->execute(array($title, $content, $author, $category));
    }

    public function AddService($title, $time, $price)
    {
        $query = $this->bdd->prepare("INSERT INTO service (title ,time, price) VALUES (?,?,?)");
        $query->execute(array($title, $time, $price));
    }
    public function Review()
    {
        $query = $this->bdd->prepare('SELECT id, title, content, author FROM review ORDER BY date DESC');
        $query->execute(array());
        $review = $query->fetchAll();
        return $review;
    }
    public function Service()
    {
        $query = $this->bdd->prepare('SELECT id, title, time, price FROM service ORDER BY date DESC');
        $query->execute(array());
        $service = $query->fetchAll();
        return $service;
    }
}
