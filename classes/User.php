<?php

class User
{
    private $id;
    private $username;
    private $email;
    private $password;
    private $genre;
    private $imageuser;
    private $descripcion;

    public function __construct( $username, $email, $password, $genre, $imageuser = null, $descripcion = null, $id = null) 
    {
        if ($id == null) {
            $this->password = password_hash($password, PASSWORD_DEFAULT);
            $this->email = $email;
            $this->genre = $genre;
            $this->imageuser= $imageuser;
            $this->descripcion= $descripcion;
        } else {
            $this->password = $password;
        }
        $this->id = $id;
        $this->username = $username;

    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
 
    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
// FUNCIÓN PARA GUARDAR IMAGEN
    // public function guardarImagen($email)
    // {
    //     //SI la foto de perfil sube sin error
    //     if ($_FILES["avatar"]["error"] == UPLOAD_ERR_OK)
    //     {
    //         //ENTRA a esta logica
    //         $nombre=$_FILES["avatar"]["name"];
    //         $archivo=$_FILES["avatar"]["tmp_name"];

    //         $ext = pathinfo($nombre, PATHINFO_EXTENSION);
    //         //SI la foto no es JPG o JPEG
    //         if ($ext != "jpg" && $ext != "jpeg") {
    //             //Dame error
    //             return "Error";
    //         }

    //         $miArchivo = dirname(__FILE__);
    //         $miArchivo = $miArchivo . "/../img/";
    //         $miArchivo = $miArchivo . $this->getEmail() . "." . $ext;

    //         move_uploaded_file($archivo, $miArchivo);
    //     }
    // }




        /**
         * Get the value of genre
         */ 
        public function getGenre()
        {
                return $this->genre;
        }

        /**
         * Set the value of genre
         *
         * @return  self
         */ 
        public function setGenre($genre)
        {
                $this->genre = $genre;

                return $this;
        }

        /**
         * Get the value of imageuser
         */ 
        public function getImageuser()
        {
                return $this->imageuser;
        }

        /**
         * Set the value of imageuser
         *
         * @return  self
         */ 
        public function setImageuser($imageuser)
        {
                $this->imageuser = $imageuser;

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }
}