<?php

class Service
{
    private $id;
    private $id_category;
    private $id_user;
    private $price;
    private $name;
    private $description;
    private $imageservice;
    private $videoservice;


    public function __construct( $id = null, $id_category, $id_user, $price, $name, $description, $imageservice = null, $videoservice = null) 
    {
        $this->id = $id;
        $this->id_category = $id_category;
        $this->id_user = $id_user;
        $this->price = $price;
        $this->name= $name;
        $this->description= $description;
        $this->imageservice = $imageservice;  
        $this->videoservice = $videoservice;
    }

    public function setIdCategory($id_category)
    {
            $this->id_category = $id_category;

            return $this;
    }

    public function setIdUser($id_user)
    {
            $this->id_user = $id_user;

            return $this;
    }

    public function setPrice($price)
    {
            $this->price = $price;

            return $this;
    }

    public function setName($name)
    {
            $this->name = $name;

            return $this;
    }
    

    public function setDescription($description)
    {
            $this->description = $description;

            return $this;
    }

    // GETTER
    public function getId ()
    {
            return $this->id;
    }
    public function getIdCategory()
    {     
            return $this->id_category;
    }

    public function getIdUser()
    {
            return $this->id_user;
    }

    public function getPrice()
    {
            return $this->price;
    }

    public function getName()
    {
            return $this->name;
    }
    

    public function getDescription()
    {
            return $this->description;
    }

    public function getImageService()
    {
            return $this->imageservice;
    }

    public function getVideoService()
    {
            return $this->videoservice;
    }



}
