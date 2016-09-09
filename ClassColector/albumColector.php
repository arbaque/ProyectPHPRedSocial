<?php

require_once("../Colector/colector.php");
class albumColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function Listaralbum()
	{
		try
		{
		    $result= $this->modelo->Listar("album","");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

public function Listaralbumespecifico ($codigo)
{
	try
		{
		     $result= $this->modelo->Listar("album", " where id =".$codigo);
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
}

 
 
 public function Insertalbum($ObGenero)
 {
 try
		{

		     $result= $this->modelo->operacion("INSERT INTO album (titulo , contenido ,usuario_id,nivel_id) 
			 values (:titulo, :contenido, :usuario_id, :nivel_id)"
			,array(":titulo"=>$ObGenero-> gettitulo()
					,":contenido" => $ObGenero-> getcontenido()
					,":usuario_id" => $ObGenero-> getusuario_id()
					,":nivel_id" => $ObGenero-> getnivel_id()));			
					
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function Updatealbum($ObGenero)
 {
 try
		{

		$result= $this->modelo->operacion("update album set titulo =:titulo , contenido =:contenido, nivel_id =:nivel_id
		 where id = :id"
		,array(":titulo"=>$ObGenero-> gettitulo()
					,":contenido" => $ObGenero-> getcontenido()
			///	,":usuario_id" => $ObGenero-> getusuario_id()
					,":nivel_id" => $ObGenero-> getnivel_id()			
					,":id"=> $ObGenero-> getid()));
		 
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function Deletealbum($ObGenero)
 {
 try
		{
		      $result= $this->modelo->operacion("delete from album  where id = :id",array(":id" => $ObGenero-> getid()));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>
