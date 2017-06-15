
	<div class="container-fluid fondo-principal">
		<div class="container fondo-1">
			<!-- principal -->
			<div class="row">
				<br>
				<div class="titulo text-center">
					<h2>LISTADO DE VENTAS</h2>
				</div>
				<br><br>
				<!-- Tabla de Ventas -->               
				 <div class="row">      
				 	<div class="col-xs-12 col-md-offset-0">          
				 		<table id="tproductos" class="table table-bordred table-striped table-hover">       
				 			<thead>
				 				<th></th>       
				 				<th>Cliente</th>
				 				<th>DNI</th>
				 				<th>Fecha</th>
				 				<th>Hora</th>
				 				<th>Forma de Pago</th>
				 				<!-- <th>Total</th> -->
				 				<th>Detalle</th>
				 			</thead>     

				 			<tbody>      
				 				<?php foreach($facturas_cabecera as $row) { ?>  
				 				<tr>
				 					<td></td>
				 					<td><?php  echo $row->apellidos . ', ' . $row->nombres;?></td>
				 					<td><?php  echo $row->dni;?></td>
				 					<td><?php  echo $row->fecha; ?></td>
				 					<td><?php  echo $row->hora;?></td>
				 					<td><?php  echo $row->descripcion;?></td>
				 					<td>
										<button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#<?php echo $row->Id_factura; ?>">ver mas</button>
										<!-- Modal -->
										<div class="modal fade" id="<?php echo $row->Id_factura; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header">
										        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										        <h4 class="modal-title" >Detalle de producto</h4>
										      </div>
										      <!-- tomo el id de la factura cabecera -->
										      <?php $Id_factura = $row->Id_factura;?>
										      <div class="modal-body">
										        <table id="tproductos" class="table table-bordred table-striped table-hover">       
													  <thead>            
														<th>Imagen del producto</th>                
														<th>Nombre</th>
														<th>Precio unitario</th>
														<th>Cantidad</th>
														<th>Subtotal</th>
														<th></th>
													  </thead>
													  	<tbody>
													  	  <?php foreach($facturas_completa as $row) { ?>
													  	  <tr>
													  	  <?php if ($Id_factura == $row->factura_id): ;?>
														<td><img src="<?php echo base_url('uploads/img_productos/') . $row->imagen?>" height="150" width="150" /></td>
															<td><?php  echo $row->nombre; ?></td>
															<td>$<?php  echo $row->precio_unit; ?></td>
															<td><?php  echo $row->cantidad; ?></td>
															<td>$<?php echo $row->precio_unit * $row->cantidad?></td>
															<td></td>
														  </tr>
														  <?php endif;
														  		} ?>
														</tbody>
													  </table>

									      </div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
									      </div>
									    </div>
									  </div>
									</div>
									</td>		 					
				                </tr>
				                <?php    } ?>
				            </tbody> 
				    	</table>  
				    	<br>
				    </div> 
				</div>
				<br>
			</div>
			<br><br>
		</div>
	</div>	