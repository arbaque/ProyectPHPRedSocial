
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registrar Album</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">

<script type = "text/javascript" 
         src = "js/jquery.min.js"></script>
	
<script>
$(document).ready(function() {
			alert('sdfgs');
            $("#sendpais").click(function(event){
				alert("dpfhh");
               $.post( 
                  "AccionGuardarPais.php",
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
<form  name="myFormpais" id="myFormpais">

<div class="display" id = "stage">
  <div class="form-group"> 
		<label class="control-label" for="formInput75">Nombre</label>
		<input type="text" class="form-control" name="nombre" placeholder="Ingrese Nombre del Pais ">
   </div>
  <div class="form-group"> 
		<label class="control-label" for="formInput75">Prefijo Pais</label>
		<input type="text" class="form-control" name="prefijo" placeholder="Ingrese Prefijo ">
   </div>
   
<p>
  <input type="button" id="sendpais" value="Guardar"  />
</p>

</div>
</form>
</body>
</html>
