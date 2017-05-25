<!-- principal -->
	<div class="container-fluid fondo-principal">
		<div class="container fondo-1">
			<!-- principal -->
			<div class="row">
				<br>
				<div class="titulo text-center">
					<h2>GESTION DE USUARIOS</h2>
				</div>
				<br>
				<div class="row">
				    <div class="col-xs-8 col-xs-offset-1 col-sm-8 col-sm-offset-1 col-md-6 col-md-offset-3">
				    	<h1 class="page-header" style="text-align:center;">Listado de Usuarios</h1>        
				    </div>
				    <div class="col-xs-1 col-xs-offset-0 col-sm-1 col-sm-offset-0 col-md-offset-1">
				    	<a href="<?php echo base_url(); ?>/admin_controller/registracion_admin"><button class="btn btn-primary">Nuevo Usuario</button></a>
				    </div>
				</div>        
				 <!-- Tabla de Usuarios -->               
				 <div class="row">      
				 	<div class="col-xs-12 col-md-offset-0">          
				 		<table id="tusuarios" class="table table-bordred table-striped table-hover">       
				 			<thead>                            
				 				<th>Usuario</th>                            
				 				<th>Email</th>                            
				 				<th>Nombre</th>                            
				 				<th>Apellido</th>                             
				 				<th>DNI</th>                           
				 				<th>Direccion</th>
				 				<th>Rol</th>
				 				<th>Imagen</th>
				 				<th></th>
				 				<th></th>
				 			</thead>     

				 			<tbody>      
				 				<?php foreach($usuarios as $row) { ?>  
				 				<tr>                 
				 					<td><?php  echo $row->usuario; ?></td>
				 					<td><?php  echo $row->email; ?></td>
				 					<td><?php  echo $row->nombres; ?></td>
				 					<td><?php  echo $row->apellidos; ?></td>
				 					<td><?php  echo $row->dni; ?></td>
				 					<td><?php  echo $row->direccion; ?></td>
				 					<td><?php  echo $row->descripcion; ?></td>
				 					<td><img src="<?php echo base_url('uploads/img_usuarios/') . $row->imagen?>" height="100" width="100" /></td>
				 					<td>
				 						<a class="btn btn-success" href="<?php echo base_url("admin_controller/editar_usuario/$row->Id_usuario");?>" >
				 							<span class="glyphicon glyphicon-pencil"></span>
				 						</a>
				 					</td>

				 					<?php if ( ($row->estado) ==1 )            
				 						{ ?>  
							                <td>
							                	<a class="btn btn-danger" href="<?php echo base_url("admin_controller/eliminar_usuario/$row->Id_usuario");?>" >
							                		<span class="glyphicon glyphicon-trash"></span>
							                	</a>
								            </td>            
								        <?php } else {  ?>  
							                <td>    
							                	<a class="btn btn-danger" href="<?php echo base_url("admin_controller/activar_usuario/$row->Id_usuario");?>" >
							                		<span class="glyphicon glyphicon-glyphicon glyphicon-ok"></span>
							                	</a>
							                </td>  
							     		<?php }    ?>


				                </tr>
				                <?php    } ?>
				            </tbody> 
				    	</table>  
				    	<br>
					    <!-- Modal content-->
					      <div class="modal-content">
					        <div class="modal-header">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <h4 class="modal-title">Modal Header</h4>
					        </div>
					        <div class="modal-body">
					          <p>Some text in the modal.</p>
					        </div>
					        <div class="modal-footer">
					          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					        </div>
					      </div>




				    </div> 
				</div> 


				<br>
			</div>

			<br><br>
		</div>
	</div>	