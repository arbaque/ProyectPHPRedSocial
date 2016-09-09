<?php

require_once("../Colector/colector.php");
class perfilColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function Listarperfil()
	{
		try
		{
		    $result= $this->modelo->Listar("perfil","");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

public function Listarperfilespecifico ($codigo)
{
	try
		{
		     $result= $this->modelo->Listar("perfil", " where usuario_id =".$codigo);
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
}

 
 
 public function Insertperfil($ObGenero)
 {
 try
		{

		     $result= $this->modelo->operacion("INSERT INTO perfil (fechanacimiento , genero ,pais_id,image ,image_header ,titulo, 
			 bio , likes , dislikes ,direccion , telefono , email ,usuario_id , nivel_id ) 
			 values (:fechanacimiento , :genero , :pais_id, :image ,:image_header ,:titulo, 
			 :bio , :likes , :dislikes , :direccion , :telefono , :email , :usuario_id , :nivel_id)"
			 ,array(":fechanacimiento"=>$ObGenero-> getfechanacimiento()
					,":genero" => $ObGenero-> getgenero()
					,":pais_id" => $ObGenero-> getpais_id()
					,":image" => $ObGenero-> getimage()
					,":image_header" => $ObGenero-> getimage_header()
					,":titulo" => $ObGenero-> gettitulo()
					,":bio" => $ObGenero-> getbio()
					,":likes" => $ObGenero-> getlikes()
					,":dislikes" => $ObGenero-> getdislikes()
					,":direccion" => $ObGenero-> getdireccion()
					,":telefono" => $ObGenero-> gettelefono()
					,":email" => $ObGenero-> getemail()
					,":usuario_id" => $ObGenero-> getusuario_id()
					,":nivel_id" => $ObGenero-> getnivel_id()));
					
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function Updateperfil($ObGenero)
 {
 try
		{

$result= $this->modelo->operacion("update perfil set fechanacimiento = :fechanacimiento  , genero = :genero ,pais_id =:pais_id
				,image =:image ,image_header =:image_header ,titulo=:titulo, 
			 bio =:bio , likes =:likes , dislikes =:dislikes ,direccion =:direccion , telefono =:telefono
			 , email =:email ,  nivel_id =:nivel_id where usuario_id = :usuario_id"
			 ,,array(":fechanacimiento"=>$ObGenero-> getfechanacimiento()
					,":genero" => $ObGenero-> getgenero()
					,":pais_id" => $ObGenero-> getpais_id()
					,":image" => $ObGenero-> getimage()
					,":image_header" => $ObGenero-> getimage_header()
					,":titulo" => $ObGenero-> gettitulo()
					,":bio" => $ObGenero-> getbio()
					,":likes" => $ObGenero-> getlikes()
					,":dislikes" => $ObGenero-> getdislikes()
					,":direccion" => $ObGenero-> getdireccion()
					,":telefono" => $ObGenero-> gettelefono()
					,":email" => $ObGenero-> getemail()					
					,":nivel_id" => $ObGenero-> getnivel_id()
					,":usuario_id" => $ObGenero-> getusuario_id()));		                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function Deleteperfil($ObGenero)
 {
 try
		{
		      $result= $this->modelo->operacion("delete from perfil  where usuario_id = :usuario_id)",array(":usuario_id" => $ObGenero-> $getusuario_id()));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>
