<?php

require_once '../ClassColector/rolColector.php';
require_once '../Colector/rol.php';

// Logica
$alm = new rol();
$model = new rolColector();

?>  <div class="row">
            <div class="pure-u-1-12">
                
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="guardar_rol();">
  Nuevo
</button>
				
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Mantenimiento de Pais
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                
                    <thead>
                        <tr>
                        <th style="text-align:left;">Codigo</th>
                        <th style="text-align:left;">Nombres</th>                      
						<th style="text-align:left;">Operaciones</th>  					   
                        </tr>
                    </thead>
                    <?php foreach($model->Listarrol() as $r): ?>
                        <tr>
                        <td><?php echo $r->getid(); ?></td>
                        <td><?php echo $r->getnombre(); ?></td>
<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="editar_rol(<?php echo $r->getid(); ?>)">
  Actualizar </button>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="Eliminar_rol(<?php echo $r->getid(); ?>)">
  Eliminar </button>
</td>

                        </tr>
                    <?php endforeach; ?>
                </table>     
                </div>
				 </div>
            </div>
        </div>

