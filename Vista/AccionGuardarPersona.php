<?php    
session_start();




require_once '../ClassColector/usuarioColector.php';
require_once '../Colector/usuario.php';



// Logica
$alm = new usuario();
$model = new usuarioColector();
echo 'va entrar';
if(isset($_POST['pnombre'])){ 
echo 'entrooooo';
$pnombre = $_POST['pnombre']; 
$snombre = $_POST['snombre'];
$usuario = $_POST['usuario']; 
$email = $_POST['email']; 
$clave = $_POST['clave']; 
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
			

		$alm->setpnombre($pnombre);
		$alm->setsnombre($snombre);
		$alm->setusuario($usuario);
		$alm->setemail($email);
		$alm->setclave($clave);
		$alm->setcodigo($codigo);
		$alm->setestado($estado);
		$alm->setadministrador($administrador);


$model->Insertusuario($alm);
//echo '<a href="Persona.php">Regresar</a>';

}
  

?>