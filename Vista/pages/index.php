<?php
// crear las cookies
session_start();
if (isset($_SESSION['usuario'])){
$nombre = $_SESSION['pnombre'];
$clave = $_SESSION['clave'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proyecto PHP Red Social Adulto Mayor</title>
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="../css/timeline.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
</head>
<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
		<?php if (isset($_SESSION['usuario'])) {?>
				  <div class="panel-heading">Bienvenido a su Red Social de Adulto Mayor: <?php echo $_SESSION['usuario'];?>  </div>'
				<?php }?>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.html">Inicio</a>
				
				<?php if (!isset($_SESSION['usuario'])) {?>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="guardar_persona();">
					Registrar
				</button>
				<?php  }?>				
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
					<?php if (isset($_SESSION['usuario'])) {?>
						<li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>					
					<?php  }?>
					
					<?php if (!isset($_SESSION['usuario'])) {?>
                        <li class="divider"></li>
                        <li><a href="#" onClick="openlogin();"><i class="fa fa-sign-out fa-fw"></i> Iniciar Sesion</a>
                        </li>
					<?php }?>
					<?php if (isset($_SESSION['usuario'])) {?>
						<li class="divider"></li>
                        <li><a href="#" onClick="openlogincerrar();"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesion</a>
                        </li>
						<?php  }?>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
						<?php if (isset($_SESSION['usuario'])) {?>
                        <li>
                            <a href="#" onClick="lista_persona();"><i class="fa fa-dashboard fa-fw"></i> Usuarios</a>
                        </li>
						<?php  }?>
						<?php if (isset($_SESSION['usuario'])) {?>
                        <li>
                            <a href="#" onClick="lista_pais();"><i class="fa fa-dashboard fa-fw"></i> Pais </a>                            
                        </li>
						<?php  }?>
						<?php if (isset($_SESSION['usuario'])) {?>
                        <li>
                            <a href="#" onClick="lista_album();" ><i class="fa fa-table fa-fw"></i> Album</a>
                        </li>
						<?php  }?>
						<?php if (isset($_SESSION['usuario'])) {?>
                        <li>
                            <a href="#" onClick="lista_rol();" ><i class="fa fa-edit fa-fw"></i> Rol</a>
                        </li>
						<?php  }?>
						
						 <li>
                            <a href="#" onClick="lista_acercade();" ><i class="fa fa-edit fa-fw"></i> Acerca de ..</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">                
            </div>          
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>Estados</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Detalle de Estados </span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">12</div>
                                    <div>Ultimas Noticias</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">Detalle De Noticias</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
          
         
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                    
                    <!-- /.panel -->
                    
                       
                        
                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Usuario</h4>
                                            <p><small class="text-muted"><i class="fa fa-clock-o"></i> Podra crear y administar usuarios del potal de redes sociales adulto mayor </small>
                                            </p>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Podra crear y administar usuarios del potal de redes sociales adulto mayor</p>
                                        </div>
                                    </div>
                                </li>
                               
                                <li>
                                    <div class="timeline-badge danger"><i class="fa fa-bomb"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Descripcion Redes Sociales Adulto Mayor</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Es una potente herramienta de redes sociales que permite al adulto mayor estar comunicado con sus familiares y amgios en general</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Perfil</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>En perfil podra agregar toda la informacion referente a su usuario y usuarios en general de redes sociales adulto mayor</p>
                                        </div>
                                    </div>
                                </li>
                             
                              
                        
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Album y Fotos</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Podra Crear album y imagnes para su redes social de adulto mayor </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../js/sb-admin-2.js"></script>
    <script src="../js/js.js"></script>


<!-- Modal -->
<div class="modal fade" id="myModal"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Red Social Adulto Mayor </h4>
      </div>
      <div class="modal-body" id="caja">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>       
      </div>
    </div>
  </div>
</div>

</body>

</html>
