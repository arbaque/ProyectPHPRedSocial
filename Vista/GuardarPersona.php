
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrar Usuario</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">

<script type = "text/javascript" 
         src = "js/jquery.min.js"></script>
	
<script>
$(document).ready(function() {
			alert('sdfgs');
            $("#sendpersona").click(function(event){
				alert("dpfhh");
               $.post( 
                  "AccionGuardarPersona.php",
                  $('#myForm').serialize(),
                  function(data) {
					  alert(data);
                     //$('#stage').html(data);
                  }
               );
					
            });
				
         });
</script>		 
</head>

<body>
<form  name="myForm" id="myForm">

<div class="display" id = "stage">
  <div class="form-group"> 
		<label class="control-label" for="formInput75">Nombres</label>
		<input type="text" class="form-control" name="pnombre" placeholder="Ingrese sus Nombres ">
   </div>
  <div class="form-group"> 
		<label class="control-label" for="formInput75">Apellidos</label>
		<input type="text" class="form-control" name="snombre" placeholder="Ingrese sus Apellidos ">
   </div>
  <div class="form-group"> 
		<label class="control-label" for="formInput75">Usuario</label>
		<input type="text" class="form-control" name="usuario" placeholder="Ingrese su Nombre de Usuario ">
   </div>

     <div class="form-group"> 
		<label class="control-label" for="formInput75">Email</label>
		<input type="text" class="form-control" name="email" placeholder="Ingrese Email">
   </div>   
     <div class="form-group"> 
		<label class="control-label" for="formInput75">Contraseña</label>
		<input type="password" class="form-control" name="clave" placeholder="Ingrese su Contraseña ">
   </div>         
   <div class="form-group"> 
		<label class="control-label" for="formInput75">Confirme su Contraseña</label>
		<input type="password" class="form-control" name="clave1" placeholder="Ingrese su Contraseña ">
   </div>
   
     <div class="form-group"> 
		<label class="control-label" for="formInput75">Codigo de Activación </label>
		<input type="text" class="form-control" name="codigo" placeholder="Ingrese su Codigo de Activación ">
   </div>
   <div class="form-group"> 
		<label class="control-label"> 
			<input type="checkbox" value="1"  name="administrador" >Administrador      
		</label>
   </div>
    <div class="form-group"> 
		<label class="control-label"> 
			<input type="checkbox" value="1" name="estado">Estado      
		</label>
   </div>
     
   
<p>
  <input type="button" id="sendpersona" value="Guardar"  />
</p>

</div>
</form>
</body>
</html>
