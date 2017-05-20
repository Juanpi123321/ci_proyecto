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
				 				<th>Id</th>                            
				 				<th>Nombre de Usuario</th>                            
				 				<th>Contraseña</th>                            
				 				<th>Id_persona</th>                            
				 				<th>Estado</th>                                               
				 			</thead>     

				 			<tbody>      
				 				<?php foreach($usuarios as $row) { ?>  
				 				<tr>                 
				 					<td><?php  echo $row->Id_usuario; ?></td>
				 					<td><?php  echo $row->usuario;  ?> </td>                 
				 					<td><?php  echo $row->contrasena; ?></td>                 
				 					<td class="text-center"><?php  echo $row->persona_id;?></td>                 
				 					<td><?php  echo $row->estado;?></td>          
				                </tr>
				                <?php    } ?>    
				            </tbody> 
				    	</table>  
				    </div> 
				</div> 


				<br>
			</div>

			<br><br>
		</div>
	</div>	