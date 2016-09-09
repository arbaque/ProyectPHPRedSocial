<?php

require_once("../Colector/colector.php");
class imagenColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function Listarimagen()
	{
		try
		{
		    $result= $this->modelo->Listar("imagen","");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

public function Listarimagenespecifico ($codigo)
{
	try
		{
		     $result= $this->modelo->Listar("imagen", " where id =".$codigo);
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
}

 
 
 public function Insertimagen($ObGenero)
 {
 try
		{

		     $result= $this->modelo->operacion("INSERT INTO imagen (ruta , titulo ,contenido ,usuario_id ,nivel_id ,album_id,fechacreacion ) 
			 values (:ruta, :titulo, :contenido, :usuario_id, :nivel_id, :album_id, :fechacreacion)"
			 ,array(":ruta"=>$ObGenero-> getruta()
					,":titulo" => $ObGenero-> gettitulo()
					,":contenido" => $ObGenero-> getcontenido()
					,":usuario_id" => $ObGenero-> getusuario_id()
					,":nivel_id" => $ObGenero-> getnivel_id()
					,":album_id" => $ObGenero-> getalbum_id()					
					,":fechacreacion" => date("y-m-d")));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function Updateimagen($ObGenero)
 {
 try
		{

		$result= $this->modelo->operacion("update imagen set ruta =:ruta , titulo =:titulo, contenido = :contenido, usuario_id =:usuario_id, nivel_id =:nivel_id 
		,album_id =:album_id where id = :id"
		,array(":ruta"=>$ObGenero-> getruta()
				,":titulo" => $ObGenero-> gettitulo()
				,":contenido" => $ObGenero-> getcontenido()
				,":usuario_id" => $ObGenero-> getusuario_id()
				,":nivel_id" => $ObGenero-> getnivel_id()
				,":album_id" => $ObGenero-> getalbum_id()					
				,":id"=> $ObGenero-> getid()));

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function Deleteimagen($ObGenero)
 {
 try
		{
		      $result= $this->modelo->operacion("delete from imagen  where id = :id)",array(":id" => $ObGenero-> $getid()));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>
