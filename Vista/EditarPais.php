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
require_once '../ClassColector/paisColector.php';
require_once '../Colector/pais.php';
// Logica
$alm = new pais();
$model = new paisColector();
$alm  = $model->Listarpaisespecifico($_GET['id']);

//echo var_dump($alm);

foreach($alm as $usuario1){
	$i = 1;  
	$nombre  = $usuario1-> getnombre();
	$prefijo  = $usuario1-> getprefijo();
	// $usuario_id  = $usuario1-> getusuario_id();
	// $nivel_id =  $usuario1-> getnivel_id();

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
<form  name="myFormupdatepais" id="myFormupdatepais">
<div class="display" id = "stage">
  <div class="form-group"> 
		<label class="control-label" for="formInput75">Nombre</label>
		<input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre del Pais " value=<?php echo $nombre;?>>
   </div>
  <div class="form-group"> 
		<label class="control-label" for="formInput75">Prefijo</label>
		<input type="text" class="form-control" name="prefijo" placeholder="Ingrese Prefijo del Pais " value=<?php echo $prefijo;?>>
   </div>

<p>
  <input type="button" id="updatepais" value="Guardar"  />
</p>
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
</div>
</form>
</body>
</html>
