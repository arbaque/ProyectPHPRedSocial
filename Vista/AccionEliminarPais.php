<?php    
session_start();

require_once '../ClassColector/paisColector.php';
require_once '../Colector/pais.php';
// Logica

$alm = new pais();
$model = new paisColector();


$alm->setid($_GET['id']);
$model->deletepais($alm);
//header("Location:Vistademo.php");
?>
  <div class="form-group"> 
		<label class="control-label" for="formInput75">Registro Eliminado</label>
	
   </div>