<?php    
session_start();




require_once '../ClassColector/albumColector.php';
require_once '../Colector/album.php';



// Logica
$alm = new album();
$model = new albumColector();
echo 'va entrar';
if(isset($_POST['titulo'])){ 
echo 'entrooooo';
$titulo = $_POST['titulo']; 
$contenido = $_POST['contenido'];
$usuario_id = $_SESSION['iduser']; 
$nivel_id = $_POST['nivel_id']; 


		$alm->settitulo($titulo);
		$alm->setcontenido($contenido);
		$alm->setusuario_id($usuario_id);
		$alm->setnivel_id($nivel_id);

$model->Insertalbum($alm);
//echo '<a href="Persona.php">Regresar</a>';

}
  

?>