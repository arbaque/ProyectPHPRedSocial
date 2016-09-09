<?php    
session_start();

require_once '../ClassColector/albumColector.php';
require_once '../Colector/album.php';
// Logica

$alm = new album();
$model = new albumColector();


$alm->setid($_GET['id']);
$model->deletealbum($alm);
//header("Location:Vistademo.php");
?>
  <div class="form-group"> 
		<label class="control-label" for="formInput75">Registro Eliminado</label>
	
   </div>