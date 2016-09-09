<?php    
session_start();




require_once '../ClassColector/paisColector.php';
require_once '../Colector/pais.php';



// Logica
$alm = new pais();
$model = new paisColector();
//echo 'va entrar';
if(isset($_POST['nombre'])){ 
//echo 'entrooooo';
$nombre = $_POST['nombre']; 
$prefijo = $_POST['prefijo'];

		$alm->setnombre($nombre);
		$alm->setprefijo($prefijo);
		
$model->Insertpais($alm);
//echo '<a href="Persona.php">Regresar</a>';

}
  

?>