<?php

require_once '../ClassColector/usuarioColector.php';
require_once '../Colector/usuario.php';

// Logica
$alm = new usuario();
$model = new usuarioColector();

?>  <div class="row">
            <div class="pure-u-1-12">
                
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="guardar_persona();">
  Nuevo
</button>
				
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Mantenimiento de Usuario
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                
                    <thead>
                        <tr>
                        <th style="text-align:left;">Codigo</th>
                        <th style="text-align:left;">Nombres</th>
                        <th style="text-align:left;">Apellidos</th>
                        <th style="text-align:left;">email</th>
                       <th style="text-align:left;">codigo</th>   
						<th style="text-align:left;">Operaciones</th>  					   
                        </tr>
                    </thead>
                    <?php foreach($model->Listarusuario() as $r): ?>
                        <tr>
                        <td><?php echo $r->getid(); ?></td>
                        <td><?php echo $r->getpnombre(); ?></td>
                        <td><?php echo $r->getsnombre(); ?></td>
                        <td><?php echo $r->getemail(); ?></td>
                        <td><?php echo $r->getcodigo(); ?></td>
<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="editar_persona(<?php echo $r->getid(); ?>)">
  Actualizar </button>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="Eliminar_persona(<?php echo $r->getid(); ?>)">
  Eliminar </button>
</td>

                        </tr>
                    <?php endforeach; ?>
                </table>     
                </div>
				 </div>
            </div>
        </div>

