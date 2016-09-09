<?php    
session_start();

require_once '../ClassColector/usuarioColector.php';
require_once '../Colector/usuario.php';
// Logica

$alm = new usuario();
$model = new usuarioColector();


$alm->setid($_GET['id']);
$model->deleteusuario($alm);
//header("Location:Vistademo.php");
?>
  <div class="form-group"> 
		<label class="control-label" for="formInput75">Registro Eliminado</label>
	
   </div>