<?php    
require_once '../ClassColector/albumColector.php';
require_once '../Colector/album.php';


// Logica
$alm = new album();
$model = new albumColector();
//echo 'alert("dataos")';
if(isset($_POST['titulo'])){ 
echo 'alert("entro")';
$id = $_POST['id'];
$titulo = $_POST['titulo']; 
$contenido = $_POST['contenido'];
//$usuario = $_POST['usuario']; 
$nivel_id = $_POST['nivel_id']; 
//$clave = $_POST['clave']; 

	
			
		$alm->setid($id); 
		$alm->settitulo($titulo);
		$alm->setcontenido($contenido);
		//$alm->setusuario($usuario);
		$alm->setnivel_id($nivel_id);
		//$alm->setclave($clave);
		
$model->Updatealbum($alm);
//echo '<a href="Persona.php">Regresar</a>';

}
// else {
// require_once '../ClassColector/usuarioColector.php';
// require_once '../Colector/usuario.php';
// // Logica
// $alm = new usuario();
// $model = new usuarioColector();
// $alm  = $model->Listarusuarioespecifico($_GET['id']);

// foreach($alm as $usuario){
	// $i = 1;  
	// $pnombre  = $usuario-> getpnombre();
	// $snombre  = $usuario-> getsnombre();
	// $usuario  = $usuario-> getusuario();
	// $email =  $usuario-> getemail();
	// $clave  = $usuario-> getclave();
	// $codigo  = $usuario-> getcodigo();
	// $estado  =  $usuario-> getestado();
	// $administrador  =  $usuario-> getadministrador();
// }
// }
?>