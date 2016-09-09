<?php    
require_once '../ClassColector/paisColector.php';
require_once '../Colector/pais.php';


// Logica
$alm = new pais();
$model = new paisColector();
//echo 'alert("dataos")';
if(isset($_POST['nombre'])){ 
echo 'alert("entro")';
$id = $_POST['id'];
$nombre = $_POST['nombre']; 
$prefijo = $_POST['prefijo'];
//$usuario = $_POST['usuario']; 
//$nivel_id = $_POST['nivel_id']; 
//$clave = $_POST['clave']; 

	
			
		$alm->setid($id); 
		$alm->setnombre($nombre);
		$alm->setprefijo($prefijo);
		//$alm->setusuario($usuario);
		//$alm->setnivel_id($nivel_id);
		//$alm->setclave($clave);
		
$model->Updatepais($alm);
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