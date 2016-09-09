<?php

require_once("../Colector/colector.php");
class paisColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos paiss de una tabla con postgreSql
public function Listarpais()
	{
		try
		{
		    $result= $this->modelo->Listar("pais","");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

public function Listarpaisespecifico ($codigo)
{
	try
		{
		     $result= $this->modelo->Listar("pais", " where id =".$codigo);
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
}


 
 
 public function Insertpais($ObGenero)
 {
 try
		{
echo date("y-m-d");
		     $result= $this->modelo->operacion("INSERT INTO pais (nombre , prefijo ) 
			 values (:nombre, :prefijo )",
			 array(":nombre"=>$ObGenero-> getnombre()
				,":prefijo" => $ObGenero-> getprefijo()));
				// ,":pais" => $ObGenero-> getpais()));
				// ,":email" => $ObGenero-> getemail()
				// ,":clave" => $ObGenero-> getclave()
				// ,":codigo" => $ObGenero-> getcodigo()
				// ,":estado" => $ObGenero-> getestado()
				// ,":administrador" => $ObGenero-> getadministrador()));
				//,":fecharegistro" => date("y-m-d")));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function Updatepais($ObGenero)
 {
 try
		{

$result= $this->modelo->operacion("update pais set nombre  =:nombre  , prefijo  =:prefijo 
   where id =:id ",
 array(":nombre"=>$ObGenero-> getnombre()
				,":prefijo" => $ObGenero-> getprefijo()
			// //	,":pais" => $ObGenero-> getpais()
				// ,":email" => $ObGenero-> getemail()			
				// ,":codigo" => $ObGenero-> getcodigo()
				// ,":estado" => $ObGenero-> getestado()
				// ,":administrador" => $ObGenero-> getadministrador()
				,":id" => $ObGenero-> getid()));				
		  return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function Deletepais($ObGenero)
 {
 try
		{
		      $result= $this->modelo->operacion("delete from pais  where id = :id ",array(":id" => $ObGenero-> getid()));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>
