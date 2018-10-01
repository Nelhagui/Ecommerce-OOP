<?php 

class QueryBuilder
{
    private $pdo; //lo consigo del constructor siguiente

    public function __construct (PDO $pdo) //construimos la variable $pdo con los datos de acceso a la base de datos
    {
        $this->pdo = $pdo;

    }
// esta función sirve para consultar todo (*) de la base
    public function index ($table)  
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$table}"); // pongo la consulta en la variable $stmt
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC le dice que devuelva el resultado en una matriz asociativa
    }


// funcion crea usuarios en la base de datos
    public function createUser($username, $email, $pass, $genre)
    {
        $stmt = $this->pdo->prepare("INSERT INTO users (`id`, `username`, `email`, `pass`, `genre`, `imageuser`, `descripcion`) VALUES (NULL, '$username', '$email', '$pass', '$genre', '', '')");

        $stmt->execute();
    }


// funcion crea categorías en la base de datos
    public function createCategory($name, $descripcion)
    {
        $stmt = $this->pdo->prepare("INSERT INTO categories (`id`, `name`, `description`) VALUES (NULL, '$name', '$descripcion')");

        $stmt->execute();
    }

// funcion crea servicios en la base de datos
    public function createService($idcategory, $iduser, $price, $name, $description, $urlimage, $urlvideo)
    {
        $stmt = $this->pdo->prepare("INSERT INTO `services` (`id`, `id_category`, `id_user`, `price`, `name`, `description`, `imageservice`, `videoservice`) VALUES (NULL, '$idcategory', '$iduser', '$price', '$name', '$description', '$urlimage', '$urlvideo');");

        $stmt->execute();
    }



}