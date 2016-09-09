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
require_once '../ClassColector/albumColector.php';
require_once '../Colector/album.php';
// Logica
$alm = new album();
$model = new albumColector();
$alm  = $model->Listaralbumespecifico($_GET['id']);

//echo var_dump($alm);

foreach($alm as $usuario1){
	$i = 1;  
	$titulo  = $usuario1-> gettitulo();
	$contenido  = $usuario1-> getcontenido();
	$usuario_id  = $usuario1-> getusuario_id();
	$nivel_id =  $usuario1-> getnivel_id();

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
<form  name="myFormupdatealbum" id="myFormupdate">
<div class="display" id = "stage">
  <div class="form-group"> 
		<label class="control-label" for="formInput75">titulo</label>
		<input type="text" class="form-control" name="titulo" placeholder="Ingrese titulo " value=<?php echo $titulo;?>>
   </div>
  <div class="form-group"> 
		<label class="control-label" for="formInput75">contenido</label>
		<input type="text" class="form-control" name="contenido" placeholder="Ingrese contenido " value=<?php echo $contenido;?>>
   </div>

    <div class="form-group"> 
                <label class="control-label" for="formInput95">Nivel</label>               
                <select class="form-control" name="nivel_id" value=<?php echo $nivel_id;?> > 
                    <option  value="1" >Solo Amigos</option>                     
                    <option  value="2">Publico</option>                     
                    <option  value="3">Privado</option>                     
                </select>
    </div>
     
  
     
<p>
  <input type="button" id="updatealbum" value="Guardar"  />
</p>
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
</div>
</form>
</body>
</html>
