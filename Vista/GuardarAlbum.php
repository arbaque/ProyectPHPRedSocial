
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
            $("#sendalbum").click(function(event){
				alert("dpfhh");
               $.post( 
                  "AccionGuardarAlbum.php",
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
<form  name="myFormalbum" id="myFormalbum">

<div class="display" id = "stage">
  <div class="form-group"> 
		<label class="control-label" for="formInput75">titulo</label>
		<input type="text" class="form-control" name="titulo" placeholder="Ingrese titulo ">
   </div>
  <div class="form-group"> 
		<label class="control-label" for="formInput75">contenido</label>
		<input type="text" class="form-control" name="contenido" placeholder="Ingrese contenido ">
   </div>

    <div class="form-group"> 
                <label class="control-label" for="formInput95">Nivel</label>               
                <select class="form-control" name="nivel_id"> 
                    <option  value="1" >Solo Amigos</option>                     
                    <option  value="2">Publico</option>                     
                    <option  value="3">Privado</option>                     
                </select>
    </div>
     
   
<p>
  <input type="button" id="sendalbum" value="Guardar"  />
</p>

</div>
</form>
</body>
</html>
