<?php    
require_once '../ClassColector/usuarioColector.php';
require_once '../Colector/usuario.php';


// Logica
$alm = new usuario();
$model = new usuarioColector();
//echo 'alert("dataos")';
if(isset($_POST['pnombre'])){ 
echo 'alert("entro")';
$id = $_POST['id'];
$pnombre = $_POST['pnombre']; 
$snombre = $_POST['snombre'];
//$usuario = $_POST['usuario']; 
$email = $_POST['email']; 
//$clave = $_POST['clave']; 
$codigo = $_POST['codigo'];

if(isset($_POST['estado'])){
                //$stok is checkend and value = 1
                $estado = $_POST['estado'];
            }
            else{
                $estado=0;
            }
			
if(isset($_POST['administrador'])){
                //$stok is checkend and value = 1
                $administrador = $_POST['administrador'];
            }
            else{
                $administrador=0;
            }			
			
		$alm->setid($id); 
		$alm->setpnombre($pnombre);
		$alm->setsnombre($snombre);
		//$alm->setusuario($usuario);
		$alm->setemail($email);
		//$alm->setclave($clave);
		$alm->setcodigo($codigo);
		$alm->setestado($estado);
		$alm->setadministrador($administrador);


$model->Updateusuario($alm);
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