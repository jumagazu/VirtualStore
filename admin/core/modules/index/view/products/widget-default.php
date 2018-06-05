        <!-- Main Content -->

          <div class="row">
            <div class="col-md-12">
                  <a  href="index.php?view=newproduct" class="pull-right btn-sm btn btn-default">Agregar Producto</a>
  <!-- Button trigger modal -->


            <h2>PRODUCTOS</h2>
            </div>
            </div>

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <i class="fa fa-th-list"></i> Productos
                </div>
                <div class="widget-body medium no-padding">
<?php
$categories = ProductData::getAll();
 if(count($categories)>0):?>
                  <div class="table-responsive">
                    <table class="table table-bordered">
                      <tbody>
<thead>
  <th>Nombre</th>
  <th>Visible</th>
  <th>Destacado</th>
  <th>Existencia</th>
  <th></th>
</thead>
<?php foreach($categories as $cat):?>
                        <tr>
                        <td><?php echo $cat->name; ?></td>
                        <td style="width:90px;"><center><?php if($cat->is_public):?><i class="fa fa-check"></i><?php else: ?><i class="fa fa-remove"></i><?php endif; ?></center> </td>
                        <td style="width:90px;"><center><?php if($cat->is_featured):?><i class="fa fa-check"></i><?php else: ?><i class="fa fa-remove"></i><?php endif; ?></center> </td>
                        <td style="width:90px;"><center><?php if($cat->in_existence):?><i class="fa fa-check"></i><?php else: ?><i class="fa fa-remove"></i><?php endif; ?></center> </td>
                        <td style="width:105px;">
                        <a " title="Ir a Tienda"href="../index.php?view=producto&product_id=<?php echo $cat->id; ?>" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-link"></i></a> 
                        <a " title="Actualizar producto"href="index.php?view=editproduct&product_id=<?php echo $cat->id; ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a> 
                        <a " title="Eliminar producto" data-toggle="modal" data-target="#modal<?php echo $cat->id; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a> 
                        </td>
                        </tr>


                         <!-- Modal -->
                        <div class="modal fade" id="modal<?php echo $cat->id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Borrar producto</h5>
                                    </div>
                                    <div class="modal-body">
                                        &iquest;Est&#225;s seguro que deseas borrar el producto "<?php echo $cat->name;?>"&#63;,<br>
                                        de ser as&#237; no podr&#225;s recuperar el producto...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <a title="Eliminar producto" href="index.php?action=delproduct&product_id=<?php echo $cat->id;?>" class="btn btn-danger">Borrar producto</a>
                                    </div>
                                </div>
                            </div>
                        </div>



<?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
<?php else:?>
  <div class="panel-body">
  <p class="alert alert-warning">No hay productos, puedes empezar agregando tu lista de productos.</p>
  </div>
 <?php endif; ?>

                </div>
              </div>
            </div>

          </div>
