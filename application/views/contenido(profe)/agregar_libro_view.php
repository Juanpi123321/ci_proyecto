	<!-- Page Content -->     
	<div class="container">  
	        <!-- Page Heading/Breadcrumbs -->         
	        <div class="row">             
	        	<div class="col-lg-12">                 
	        		<h1 class="page-header" style="text- align:center;">Registro de libros</h1>           
	        	</div>         
	        </div>         

	        <!-- /.row -->  
	        <div class="row">                                                          
	        	<p>   
	            	<div id="loginbox" style="margin-top:10px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">            	
	            	<?php echo form_open_multipart('libro_controler/registrar_libro', ['class' => 'form-signin', 'role' => 'form']); ?>                        
	            		<div class="form-group">     
	            			<label for="titulo">Titulo del libro</label>  
	    					<?php echo form_input(['name' => 'titulo', 'id' => 'titulo', 'class' => 'form-control','placeholder' => 'Ingrese título del libro', 'required'=>'required', 'autofocus'=>'autofocus', 'value'=>set_value('titulo')]); ?>    
	    				</div>                 
	    				<span class="text-danger"><?php echo form_error('titulo'); ?></span>   

	    	  			<div class="form-group">  
	    					<label for="autor">Autor</label>  
	    					<?php echo form_input(['name' => 'autor', 'id' => 'autor', 'class' => 'form-control','placeholder' => 'Ingrese Autor', 'required'=>'required', 'value'=>set_value('autor')]); ?>      
	    				</div>                    
	    				<div class="form-group">     
	    					<label for="descripcion">Descripción</label>
	    					<?php echo form_input(['name' => 'descripcion', 'id' => 'descripcion', 'class' => 'form-control','placeholder' => 'Ingrese descripción', 'required'=>'required', 'value'=>set_value('descripcion')]); ?>      
	    				</div>                 
	    				<div class="form-group">      
	    					<label for="stock">Stock</label>   
	    					<?php echo form_input(['name' => 'stock', 'id' => 'stock', 'class' => 'form-control','placeholder' => 'Ingrese Stock', 'required'=>'required', 'value'=>set_value('stock')]); ?>      
	    				</div>         
	    				<span class="text-danger"><?php echo form_error('stock'); ?></span>  
						<div class="form-group">  
	    					<label for="precio">Precio</label>  
	    					<?php echo form_input(['name' => 'precio', 'id' => 'precio', 'class' => 'form-control','placeholder' => 'Ingrese precio', 'required'=>'required', 'value'=>set_value('precio')]); ?>      
	    				</div>  
	           			<span class="text-danger"><?php echo form_error('precio'); ?></span>  
						<div class="form-group">  
						    <label for="imagen">Imagen</label>  
						    <?php echo form_input(['name' => 'imagen', 'id' => 'imagen', 'type'=>'file', 'value'=>set_value('imagen')]); ?>      
						</div>                         
						<span class="text-danger"><?php echo form_error('imagen'); ?></span>   
	 					<div class="form-group">  
	  						<label for="categoria">Categoria</label>  
							<select name="categoria" class="form-control">  
	 							<option value="ninguno" selected="selected">Seleccione categoria</option> 
	 								<?php foreach($categorias as $categorias){ ?>  
	 							<option value="<?php echo $categorias->categoria_id; ?>" > 
	 								<?php echo $categorias->categoria_desc; ?> </option> <?php } ?>  
							</select>        
						</div>                          
						<span class="text-danger"><?php echo form_error('categoria'); ?></span>                                                     
						<div style="margin-top:10px" class="form-group">                                  
						<!-- Button -->  
							<div class="col-sm-12 controls">   
								<?php echo form_submit('Agregar', 'Agregar',"class='btn btn- success'"); ?>
							</div>                         
	                        <?php echo form_close();?>      
	                    </div>                                          
	                </div>           
	        <!-- </div>                                                                                        
	</div> --> 
	    		</p>
	    	</div>                 
	</div>             
</div>  
    
    <hr> 
