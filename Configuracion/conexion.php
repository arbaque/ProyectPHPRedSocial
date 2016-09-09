<?php 
class conexion extends PDO
{
 
 //nombre base de datos
 private $dbname = "d51dpscapcrolm";
 //nombre servidor
 private $host = "ec2-174-129-4-75.compute-1.amazonaws.com";
 //nombre usuarios base de datos
 private $user = "gthhtrrbftmyth";
 //password usuario
 private $pass = " F2ogeeUwWMD07UejIykzhIjfrL";
 //puerto postgreSql
 private $port = "5432";
 private $dbh;
 
 //creamos la conexión a la base de datos prueba
 public function __construct() 
 {
     try {
 
         $this->dbh = parent::__construct("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->pass");
 
     } catch(PDOException $e) {
 
         echo  $e->getMessage(); 
 
     }
 
 }
 
 //función para cerrar una conexión pdo
 public function close_con() 
 {
 
     $this->dbh = null; 
 
 }
 
}
