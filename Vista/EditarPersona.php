<?php    
session_start();

// require_once '../ClassColector/usuarioColector.php';
// require_once '../Colector/usuario.php';


// // Logica
// $alm = new usuario();
// $model = new usuarioColector();
// //echo 'alert("dataos")';
// if(isset($_POST['updatepersona'])){ 
// echo 'alert("entro")';
// $id = $_POST['id'];
// $pnombre = $_POST['pnombre']; 
// $snombre = $_POST['snombre'];
// $usuario = $_POST['usuario']; 
// $email = $_POST['email']; 
// $clave = $_POST['clave']; 
// $codigo = $_POST['codigo'];

// if(isset($_POST['estado'])){
                // //$stok is checkend and value = 1
                // $estado = $_POST['estado'];
            // }
            // else{
                // $estado=0;
            // }
			
// if(isset($_POST['administrador'])){
                // //$stok is checkend and value = 1
                // $administrador = $_POST['administrador'];
            // }
            // else{
                // $administrador=0;
            // }			
			
		// $alm->setid($id); 
		// $alm->setpnombre($pnombre);
		// $alm->setsnombre($snombre);
		// $alm->setusuario($usuario);
		// $alm->setemail($email);
		// $alm->setclave($clave);
		// $alm->setcodigo($codigo);
		// $alm->setestado($estado);
		// $alm->setadministrador($administrador);


// $model->Updateusuario($alm);
// //echo '<a href="Persona.php">Regresar</a>';

// }
// else {
require_once '../ClassColector/usuarioColector.php';
require_once '../Colector/usuario.php';
// Logica
$alm = new usuario();
$model = new usuarioColector();
$alm  = $model->Listarusuarioespecifico($_GET['id']);

//echo var_dump($alm);

foreach($alm as $usuario1){
	$i = 1;  
	$pnombre  = $usuario1-> getpnombre();
	$snombre  = $usuario1-> getsnombre();
	$usuario  = $usuario1-> getusuario();
	$email =  $usuario1-> getemail();
	$clave  = $usuario1-> getclave();
	$codigo  = $usuario1-> getcodigo();
	$estado  =  $usuario1-> getestado();
	$administrador  =  $usuario1-> getadministrador();

}
?>

<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrar Usuario</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">

<script type = "text/javascript" 
         src = "js/jquery.min.js"></script>
	
<script>
// $(document).ready(function() {
			// alert('sdfgs');
             // $("#updatepersona").click(function(event){				
               // $.post( 
                  // "AccionEditarPersona.php",
                  // $('#myForm').serialize(),
                  // function(data) {
					  // alert(data);
					// // <?php if (isset($_SESSION['usuario'])) {?>  lista_persona();
					// //	 <?php }?>
                     // //$('#stage').html(data);
                  // }
               // );
					
            // }); 
				
         // });
</script>		 
</head>
<body>
<form  name="myFormupdate" id="myFormupdate">
<div class="display" id = "stage">
  <div class="form-group"> 
		<label class="control-label" for="formInput75">Nombres</label>
		<input type="text" class="form-control" name="pnombre" placeholder="Ingrese sus Nombres " value=<?php echo $pnombre;?>>
   </div>
  <div class="form-group"> 
		<label class="control-label" for="formInput75">Apellidos</label>
		<input type="text" class="form-control" name="snombre" placeholder="Ingrese sus Apellidos " value=<?php echo $snombre;?> >
   </div>  

     <div class="form-group"> 
		<label class="control-label" for="formInput75">Email</label>
		<input type="text" class="form-control" name="email" placeholder="Ingrese Email" value=<?php echo $email;?>>
   </div>          
     <div class="form-group"> 
		<label class="control-label" for="formInput75">Codigo de Activación </label>
		<input type="text" class="form-control" name="codigo" placeholder="Ingrese su Codigo de Activación " value=<?php echo $codigo;?>>
   </div>
   <div class="form-group"> 
		<label class="control-label"> 
			<input type="checkbox" value=<?php echo $administrador;?>  name="administrador" >Administrador      
		</label>
   </div>
    <div class="form-group"> 
		<label class="control-label"> 
			<input type="checkbox" value=<?php echo $estado;?> name="estado">Estado      
		</label>
   </div>
        
<p>
  <input type="button" id="updatepersona" value="Guardar"  />
</p>
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
</div>
</form>
</body>
</html>
