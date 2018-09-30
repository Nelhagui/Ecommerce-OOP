<?php 

class QueryBuilder
{
    private $pdo; //lo consigo del constructor siguiente

    public function __construct (PDO $pdo) //construimos la variable $pdo con los datos de acceso a la base de datos
    {
        $this->pdo = $pdo;
    }

    public function index ($table)  // esta función sirve para consultar todo (*) de la base
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$table}"); // pongo la consulta en la variable $stmt
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // PDO::FETCH_ASSOC le dice que devuelva el resultado en una matriz asociativa
    }

}