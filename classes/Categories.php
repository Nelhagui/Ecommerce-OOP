<?php

class Category
{
    private $id;
    private $name;
    private $description;

    public function __construct( $id = null, $name, $description) 
    {
        $this->id = $id;
        $this->name= $name;
        $this->description= $description;
    }

    public function setId($id)
    {
            $this->name = $id;
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

    public function getName()
    {
            return $this->name;
    }
    
    public function getDescription()
    {
            return $this->description;
    }



}
