<?php

require_once '../ClassColector/albumColector.php';
require_once '../Colector/album.php';

// Logica
$alm = new album();
$model = new albumColector();

?>  <div class="row">
            <div class="pure-u-1-12">
                
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="guardar_album();">
  Nuevo
</button>
				
 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Mantenimiento de Album
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                
                    <thead>
                        <tr>
                        <th style="text-align:left;">Codigo</th>
                        <th style="text-align:left;">titulo</th>
                        <th style="text-align:left;">contenido</th>
                        <th style="text-align:left;">usuario_id</th>
                       <th style="text-align:left;">nivel_id</th>   
						<th style="text-align:left;">Operaciones</th>  					   
                        </tr>
                    </thead>
                    <?php foreach($model->Listaralbum() as $r): ?>
                        <tr>
                        <td><?php echo $r->getid(); ?></td>
                        <td><?php echo $r->gettitulo(); ?></td>
                        <td><?php echo $r->getcontenido(); ?></td>
                        <td><?php echo $r->getusuario_id(); ?></td>
                        <td><?php echo $r->getnivel_id(); ?></td>
<td>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="editar_album(<?php echo $r->getid(); ?>)">
  Actualizar </button>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" onclick="Eliminar_album(<?php echo $r->getid(); ?>)">
  Eliminar </button>
</td>

                        </tr>
                    <?php endforeach; ?>
                </table>     
                </div>
				 </div>
            </div>
        </div>

