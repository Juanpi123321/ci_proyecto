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
				    <div class="col-lg-12">         
				    	<h1 class="page-header" style="text-align:center;">Listado de Usuarios</h1>          
				    </div>         
				</div>        
				 <!-- /.row -->               
				 <div class="row">      
				 	<div class="col-md-8 col-md-offset-2">          
				 		<table id="mytable" class="table table-bordred table-striped table-hover">       
				 			<thead>                            
				 				<th>Usuario</th>                            
				 				<th>Email</th>                            
				 				<th>Nombre</th>                            
				 				<th>Apellido</th>                             
				 				<th>DNI</th>                           
				 				<th>Direccion</th>
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
				 					<td><img src="<?php echo base_url('uploads/img_usuarios/') . $row->imagen?>" height="100" width="100" /></td>
				                </tr>
				                <?php    } ?>
				            </tbody> 
				    	</table>  
				    	<br>
				    	<a href="<?php echo base_url(); ?>/admin_controller/registracion_admin"><button class="btn btn-primary">Registrar Usuario</button></a>
				    </div> 
				</div> 


				<br>
			</div>

			<br><br>
		</div>
	</div>	