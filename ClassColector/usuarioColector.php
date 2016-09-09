<?php

require_once("../Colector/colector.php");
class usuarioColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function Listarusuario()
	{
		try
		{
		    $result= $this->modelo->Listar("usuario","");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

public function Listarusuarioespecifico ($codigo)
{
	try
		{
		     $result= $this->modelo->Listar("usuario", " where id =".$codigo);
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
}

public function validaLogin ($usuario, $clave)
{
	try
		{
		     $result= $this->modelo->Listar("usuario", " where usuario = '".$usuario . "' and clave ='". $clave ."'");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
}

 
 
 public function Insertusuario($ObGenero)
 {
 try
		{
echo date("y-m-d");
		     $result= $this->modelo->operacion("INSERT INTO usuario (pnombre , snombre ,usuario ,email ,clave ,codigo,estado,administrador ) 
			 values (:pnombre, :snombre, :usuario, :email, :clave, :codigo, :estado, :administrador  )",
			 array(":pnombre"=>$ObGenero-> getpnombre()
				,":snombre" => $ObGenero-> getsnombre()
				,":usuario" => $ObGenero-> getusuario()
				,":email" => $ObGenero-> getemail()
				,":clave" => $ObGenero-> getclave()
				,":codigo" => $ObGenero-> getcodigo()
				,":estado" => $ObGenero-> getestado()
				,":administrador" => $ObGenero-> getadministrador()));
				//,":fecharegistro" => date("y-m-d")));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function Updateusuario($ObGenero)
 {
 try
		{

$result= $this->modelo->operacion("update usuario set pnombre  =:pnombre  , snombre  =:snombre 
 , email  =:email, codigo  =:codigo ,estado   =:estado  ,administrador   =:administrador  where id =:id ",
 array(":pnombre"=>$ObGenero-> getpnombre()
				,":snombre" => $ObGenero-> getsnombre()
			//	,":usuario" => $ObGenero-> getusuario()
				,":email" => $ObGenero-> getemail()			
				,":codigo" => $ObGenero-> getcodigo()
				,":estado" => $ObGenero-> getestado()
				,":administrador" => $ObGenero-> getadministrador()
				,":id" => $ObGenero-> getid()));				
		  return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function Deleteusuario($ObGenero)
 {
 try
		{
		      $result= $this->modelo->operacion("delete from usuario  where id = :id ",array(":id" => $ObGenero-> getid()));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>
