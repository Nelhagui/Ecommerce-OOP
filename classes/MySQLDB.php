<?php

    require_once("DB.php");
    require_once("User.php");
    require 'classes/PDOConnector.php';

    

    class MySQLDB extends DB
    {
        protected $connection;

        public function __construct() 
        {
            $pdo = new PDOConnector();
            $this->connection = $pdo->make();
        }

         function saveUser(User $user)
        {   
            $username=$user->getUsername();
            $email=$user->getEmail();
            $password=$user->getPassword();
            $genre=$user->getGenre();
            $imageuser=$user->getImageuser();
            $description=$user->getDescripcion();
            var_dump($user);
            $query = $this->connection->prepare("INSERT INTO users VALUES(NULL, :username, :email, :password, :genre, :imageuser, :description)");

             $query->bindParam(':username', $username, PDO::PARAM_STR);
             $query->bindParam(':email', $email, PDO::PARAM_STR);
             $query->bindParam(':password', $password, PDO::PARAM_INT);
             $query->bindParam(':genre', $genre, PDO::PARAM_STR);
             $query->bindParam(':imageuser', $imageuser, PDO::PARAM_STR);
             $query->bindParam(':description', $description, PDO::PARAM_STR);
   
            //  var_dump($query); exit;
            
         
            $query->execute();

            $id = $this->connection->lastInsertId();
            $user->setId($id);

            return $user;
        }

        function dbEmailSearch($email)
        {
            $query = $this->connection->prepare("SELECT * FROM users WHERE email = :email");
            $query->bindValue(":email", $email);
            $query->execute();

            $userArray = $query->fetch(PDO::FETCH_ASSOC);

            // if ($userArray) {
            //     $usuario = new User($userArray, ['username'], $userArray["email"], $userArray["password"], $userArray["genre"]);
            //     return $usuario;
            // } else {
            //     return null;
            // }

            return $userArray;
	    }
        


        function traeTodaLaBase()
        {
            $query = $this->connection->prepare("SELECT * FROM users");
            $query->execute();
            
            $usuariosFormatoArray = $query->fetchAll(PDO::FETCH_ASSOC);
            //Esta variable va a traer todos los usuarios en formato array, pero queremos objetos...
            $usuariosFormatoClase = [];
            //asi que armamos nuestro array de usuarios EN FORMATO DE CLASE y lo "foreacheamos" (?)
            foreach ($usuariosFormatoArray as $usuario):
                //array DE OBJETOS del tipo Usuario, nada mas y nada menos. Como se procesan despues, es responsabilidad de otra clase.
                $usuariosFormatoClase[] = new Usuario($usuario["email"], $usuario["password"], $usuario["id"]);
            endforeach;

            return $usuariosFormatoClase;
            //Aclaro de nuevo, el array que devuelve este metodo es un ARRAY DE OBJETOS.
        
        }


        public function buscarDatos($datos)
        {
            $stmt = $this->connection->prepare("SELECT * FROM $datos");
            $stmt->execute();
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        function dbConnect(){
        }


        function guardarServicio(Service $categoria)
        {   
            
            $id=$categoria->getId();
            $id_category=$categoria->getIdCategory();
            $id_user=$categoria->getIdUser();
            $price=$categoria->getPrice();
            $name=$categoria->getName();
            $description=$categoria->getDescription();
            $imageservice=$categoria->getImageService();
            $videoservice=$categoria->getVideoService();
            var_dump($imageservice);
            $query = $this->connection->prepare("INSERT INTO services VALUES(NULL, :idcategory, :iduser, :price, :name, :description, :imageservice, :videoservice)");

             $query->bindParam(':idcategory', $id_category, PDO::PARAM_STR);
             $query->bindParam(':iduser', $id_user, PDO::PARAM_STR);
             $query->bindParam(':price', $price, PDO::PARAM_INT);
             $query->bindParam(':name', $name, PDO::PARAM_STR);
             $query->bindParam(':description', $description, PDO::PARAM_STR);
             $query->bindParam(':imageservice', $imageservice, PDO::PARAM_STR);
             $query->bindParam(':videoservice', $videoservice, PDO::PARAM_STR);
       
            $query->execute();

            // $id = $this->connection->lastInsertId();
            // $user->setId($id);

            // return $user;
        }


        function guardarCategoria (Category $categoria)
        {   
            
            $id=$categoria->getId();
            $name=$categoria->getName();
            $description=$categoria->getDescription();

            $query = $this->connection->prepare("INSERT INTO categories VALUES(NULL, :name, :description)");

            $query->bindParam(':name', $name, PDO::PARAM_STR);
            $query->bindParam(':description', $description, PDO::PARAM_STR);

            $query->execute();

        }





    }

