function objetoAjax() {
    var xmlhttp = false;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }

    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
		// xmlhttp = new ActiveXObject("Msxml2.DOMDocument.4.0");
		
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}
function tables(){
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
}
//funciones de alumno guardar editar
function lista_persona() {
    var resultado = document.getElementById('page-wrapper');
  //  resultado.innerHTML = '<br>ccc<br><br><center><img src="img/45.gif"></center>';
    ajax = objetoAjax();
    ajax.open("GET", "../Persona.php", true);
	//alert("dd");
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
//alert(ajax.responseText);
            resultado.innerHTML = ajax.responseText;
            //tables();
        }
    }
    ajax.send(null);
}


function lista_album() {
    var resultado = document.getElementById('page-wrapper');
  //  resultado.innerHTML = '<br>ccc<br><br><center><img src="img/45.gif"></center>';
    ajax = objetoAjax();
    ajax.open("GET", "../Album.php", true);
	//alert("dd");
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
//alert(ajax.responseText);
            resultado.innerHTML = ajax.responseText;
            //tables();
        }
    }
    ajax.send(null);
}


function lista_pais() {
    var resultado = document.getElementById('page-wrapper');
  //  resultado.innerHTML = '<br>ccc<br><br><center><img src="img/45.gif"></center>';
    ajax = objetoAjax();
    ajax.open("GET", "../Pais.php", true);
	//alert("dd");
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
//alert(ajax.responseText);
            resultado.innerHTML = ajax.responseText;
            //tables();
        }
    }
    ajax.send(null);
}


function lista_rol() {
    var resultado = document.getElementById('page-wrapper');
  //  resultado.innerHTML = '<br>ccc<br><br><center><img src="img/45.gif"></center>';
    ajax = objetoAjax();
    ajax.open("GET", "../Rol.php", true);
	//alert("dd");
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
//alert(ajax.responseText);
            resultado.innerHTML = ajax.responseText;
            //tables();
        }
    }
    ajax.send(null);
}


function lista_acercade() {
    var resultado = document.getElementById('page-wrapper');
  //  resultado.innerHTML = '<br>ccc<br><br><center><img src="img/45.gif"></center>';
    ajax = objetoAjax();
    ajax.open("GET", "../Acercade.php", true);
	//alert("dd");
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
//alert(ajax.responseText);
            resultado.innerHTML = ajax.responseText;
            //tables();
        }
    }
    ajax.send(null);
}


$(document).ready(function() {
			//alert('sdfgs');
            // $("#sendpersona").click(function(event){
				// alert("dpfhh");
               // $.post( 
                  // "AccionGuardarPersona.php",
                  // $('#myForm').serialize(),
                  // function(data) {
					  // alert(data);
                     // //$('#stage').html(data);
                  // }
               // );
					
            // });
				
         });


function guardar_persona() {
    var resultado = document.getElementById('caja');
    ajax = objetoAjax();
    ajax.open("GET", "../GuardarPersona.php", true);
	ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            resultado.innerHTML = ajax.responseText;
			$("#sendpersona").click(function(event){				
               $.post( 
                  "../AccionGuardarPersona.php",
                  $('#myForm').serialize(),
                  function(data) {
					  alert(data);
					  lista_persona();
					// <?php if (isset($_SESSION['usuario'])) {?>  lista_persona();
					//	 <?php }?>
                     //$('#stage').html(data);
                  }
               );
					
            });          
        }
    }
    ajax.send(null);
}


function guardar_album() {
    var resultado = document.getElementById('caja');
    ajax = objetoAjax();
    ajax.open("GET", "../GuardarAlbum.php", true);
	ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            resultado.innerHTML = ajax.responseText;
			$("#sendalbum").click(function(event){				
               $.post( 
                  "../AccionGuardarAlbum.php",
                  $('#myFormalbum').serialize(),
                  function(data) {
					  alert(data);
					  lista_album();
					// <?php if (isset($_SESSION['usuario'])) {?>  lista_persona();
					//	 <?php }?>
                     //$('#stage').html(data);
                  }
               );
					
            });          
        }
    }
    ajax.send(null);
}

function guardar_pais() {
    var resultado = document.getElementById('caja');
    ajax = objetoAjax();
    ajax.open("GET", "../GuardarPais.php", true);
	ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
            resultado.innerHTML = ajax.responseText;
			$("#sendpais").click(function(event){				
               $.post( 
                  "../AccionGuardarPais.php",
                  $('#myFormpais').serialize(),
                  function(data) {
					  alert(data);
					  lista_pais();
					// <?php if (isset($_SESSION['usuario'])) {?>  lista_persona();
					//	 <?php }?>
                     //$('#stage').html(data);
                  }
               );
					
            });          
        }
    }
    ajax.send(null);
}



function editar_persona(codigo) {
    var resultado = document.getElementById('caja');
  //  resultado.innerHTML = '<br>ccc<br><br><center><img src="img/45.gif"></center>';
    ajax = objetoAjax();
    ajax.open("GET", "../EditarPersona.php?id="+codigo, true);
	//alert("dd");
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
//alert(ajax.responseText);
            resultado.innerHTML = ajax.responseText;
            $("#updatepersona").click(function(event){		
alert("boton");			
               $.post( 
                  "../AccionEditarPersona.php",
                  $('#myFormupdate').serialize(),
                  function(data) {
					  alert(data);
					  lista_persona();
					// <?php if (isset($_SESSION['usuario'])) {?>  lista_persona();
					//	 <?php }?>
                     //$('#stage').html(data);
                  }
               );
					
            }); 
        }
    }
    ajax.send(null);
}


function editar_album(codigo) {
    var resultado = document.getElementById('caja');
  //  resultado.innerHTML = '<br>ccc<br><br><center><img src="img/45.gif"></center>';
    ajax = objetoAjax();
    ajax.open("GET", "../EditarAlbum.php?id="+codigo, true);
	//alert("dd");
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
//alert(ajax.responseText);
            resultado.innerHTML = ajax.responseText;
            $("#updatealbum").click(function(event){		
alert("boton");			
               $.post( 
                  "../AccionEditarAlbum.php",
                  $('#myFormupdate').serialize(),
                  function(data) {
					  alert(data);
					  lista_album();
					// <?php if (isset($_SESSION['usuario'])) {?>  lista_persona();
					//	 <?php }?>
                     //$('#stage').html(data);
                  }
               );
					
            }); 
        }
    }
    ajax.send(null);
}

function editar_pais(codigo) {
    var resultado = document.getElementById('caja');
  //  resultado.innerHTML = '<br>ccc<br><br><center><img src="img/45.gif"></center>';
    ajax = objetoAjax();
    ajax.open("GET", "../EditarPais.php?id="+codigo, true);
	//alert("dd");
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
//alert(ajax.responseText);
            resultado.innerHTML = ajax.responseText;
            $("#updatepais").click(function(event){		
//alert("boton");			
               $.post( 
                  "../AccionEditarPais.php",
                  $('#myFormupdatepais').serialize(),
                  function(data) {
					  alert(data);
					  lista_pais();
					// <?php if (isset($_SESSION['usuario'])) {?>  lista_persona();
					//	 <?php }?>
                     //$('#stage').html(data);
                  }
               );
					
            }); 
        }
    }
    ajax.send(null);
}


function Eliminar_persona(codigo) {
    var resultado = document.getElementById('caja');
  //  resultado.innerHTML = '<br>ccc<br><br><center><img src="img/45.gif"></center>';
    ajax = objetoAjax();
    ajax.open("GET", "../AccionEliminarPersona.php?id="+codigo, true);
	//alert("dd");
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
//alert(ajax.responseText);
            resultado.innerHTML = ajax.responseText;
			
			 lista_persona();
			 
            // $("#updatepersona").click(function(event){		
// alert("boton");			
               // $.post( 
                  // "../AccionEliminarPersona.php",
                  // $('#myFormeliminar').serialize(),
                  // function(data) {
					  // alert(data);
					  // lista_persona();
					// // <?php if (isset($_SESSION['usuario'])) {?>  lista_persona();
					// //	 <?php }?>
                     // //$('#stage').html(data);
                  // }
               // );
					
            // }); 
        }
    }
    ajax.send(null);
}


function Eliminar_album(codigo) {
    var resultado = document.getElementById('caja');
  //  resultado.innerHTML = '<br>ccc<br><br><center><img src="img/45.gif"></center>';
    ajax = objetoAjax();
    ajax.open("GET", "../AccionEliminarAlbum.php?id="+codigo, true);
	//alert("dd");
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
//alert(ajax.responseText);
            resultado.innerHTML = ajax.responseText;
			
			 lista_album();
			 
            // $("#updatepersona").click(function(event){		
// alert("boton");			
               // $.post( 
                  // "../AccionEliminarPersona.php",
                  // $('#myFormeliminar').serialize(),
                  // function(data) {
					  // alert(data);
					  // lista_persona();
					// // <?php if (isset($_SESSION['usuario'])) {?>  lista_persona();
					// //	 <?php }?>
                     // //$('#stage').html(data);
                  // }
               // );
					
            // }); 
        }
    }
    ajax.send(null);
}



function Eliminar_pais(codigo) {
    var resultado = document.getElementById('caja');
  //  resultado.innerHTML = '<br>ccc<br><br><center><img src="img/45.gif"></center>';
    ajax = objetoAjax();
    ajax.open("GET", "../AccionEliminarPais.php?id="+codigo, true);
	//alert("dd");
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
//alert(ajax.responseText);
            resultado.innerHTML = ajax.responseText;
			
			 lista_pais();
			 
            // $("#updatepersona").click(function(event){		
// alert("boton");			
               // $.post( 
                  // "../AccionEliminarPersona.php",
                  // $('#myFormeliminar').serialize(),
                  // function(data) {
					  // alert(data);
					  // lista_persona();
					// // <?php if (isset($_SESSION['usuario'])) {?>  lista_persona();
					// //	 <?php }?>
                     // //$('#stage').html(data);
                  // }
               // );
					
            // }); 
        }
    }
    ajax.send(null);
}

function openlogin() {
    var resultado = document.getElementById('page-wrapper');
  //  resultado.innerHTML = '<br>ccc<br><br><center><img src="img/45.gif"></center>';
    ajax = objetoAjax();
    ajax.open("GET", "../login.php", true);
	//alert("dd");
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
//alert(ajax.responseText);
            resultado.innerHTML = ajax.responseText;
           $("#validalogin").click(function(event){		
		alert("boton");			
               $.post( 
                  "../validalogin.php",
                  $('#myFormlogin').serialize(),
                  function(data) {
					  alert(data);
					  
					  lista_persona();
					  location.reload();
					// <?php if (isset($_SESSION['usuario'])) {?>  lista_persona();
					//	 <?php }?>
                     //$('#stage').html(data);
                  }
               );
					
            }); 
			
			
        }
    }
    ajax.send(null);
}

function openlogin2() {
    var resultado = document.getElementById('page-wrapper');
  //  resultado.innerHTML = '<br>ccc<br><br><center><img src="img/45.gif"></center>';
    ajax = objetoAjax();
    ajax.open("GET", "../login.php", true);
	//alert("dd");
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
//alert(ajax.responseText);
            resultado.innerHTML = ajax.responseText;
           // lista_persona();  
        }
    }
    ajax.send(null);
}


function openlogincerrar() {
    var resultado = document.getElementById('page-wrapper');
  //  resultado.innerHTML = '<br>ccc<br><br><center><img src="img/45.gif"></center>';
    ajax = objetoAjax();
    ajax.open("GET", "../AccionCerrarSesion.php", true);
	//alert("dd");
    ajax.onreadystatechange = function() {
        if (ajax.readyState == 4) {
//alert(ajax.responseText);
            resultado.innerHTML = ajax.responseText;
         //   openlogin2();
			location.reload();
        }
    }
    ajax.send(null);
}




