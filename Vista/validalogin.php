<?php    
session_start();




require_once '../ClassColector/usuarioColector.php';
require_once '../Colector/usuario.php';

//echo var_dump($_POST['nombres']);

// Logica
$alm = new usuario();
$model = new usuarioColector();
echo 'va entrar';
if(isset($_POST['usuario'])){ 
echo 'entrooooo';
//$pnombre = $_POST['clave']; 

		// $alm->setpnombre($pnombre);
		// $alm->setsnombre($snombre);
		$alm->setusuario($_POST['usuario']);
		//$alm->setemail($email);
		$alm->setclave( $_POST['clave']);
		// $alm->setcodigo($codigo);
		// $alm->setestado($estado);
		// $alm->setadministrador($administrador);


$alm  = $model->validaLogin($_POST['usuario'], $_POST['clave'] );
$i= 0;
foreach($alm as $usuario1){
	$i = 1;  
	$_SESSION['iduser']  = $usuario1-> getid();
	$_SESSION['pnombre']  = $usuario1-> getpnombre();
	$_SESSION['snombre']  = $usuario1-> getsnombre();
	$_SESSION['usuario']  = $usuario1-> getusuario();
	$_SESSION['email']  =  $usuario1-> getemail();
	$_SESSION['clave']  = $usuario1-> getclave();
	$_SESSION['codigo']  = $usuario1-> getcodigo();
	$_SESSION['estado']  =  $usuario1-> getestado();
	$_SESSION['administrador']  =  $usuario1-> getadministrador();
			
		echo " 
                <script language=’JavaScript’> 
                alert('Ingreso Exitoso'); 
                </script>";
				
				
}
if ($i =0){
		echo " <script language=’JavaScript’> 
                alert('Usuario o Clave Incorrectos'); 
                </script>";
}

//header('Location: index.html');    

//echo '<a href="Persona.php">Regresar</a>';

}
  

?>