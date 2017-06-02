<!-- principal productos-->
	<div class="container-fluid fondo-principal">
		<div class="container fondo-2">
			
			<!-- productos -->	
			<a name="productos" title=""></a>		
			<div class="row">
				<br>
				<div class="titulo text-center">
					<h2>PRODUCTOS</h2>
				</div>
			</div>
			<br>
			<div class="row">

			<?php foreach($productos as $row) { ?>
			<!-- productos -->
				<div class="col-md-6">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6">
							<br><img src="<?php echo base_url('uploads/img_productos/') . $row->imagen?>" class="img-responsive"/>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 text-justify">
								<h3><?php  echo $row->nombre; ?></h3>
								<p><?php  echo $row->caracteristica; ?></p>
								<br>
								<p>Stock disponible:&nbsp<?php  echo $row->stock; ?></p>
						</div>									
					</div>
					<div class="row">
						<div class="col-xs-10 col-xs-offset-2 col-sm-4 col-md-4 col-md-offset-1">
							<h3>$<?php  echo $row->precio; ?></h3>
						</div>
						<div class="col-xs-10 col-xs-offset-2 col-sm-offset-1 col-sm-4 col-md-6 col-md-offset-1"  style="padding-top: 15px">
							<!-- ese padding es para que quede al mismo nivel -->
							&nbspCant:
							<select class="custom-select">
								<option value="1" selected>1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">mas</option>					
							</select>		
							<!-- Carrito -->						 
							 <?php     if ($this->session->userdata('login')) {  
							 	echo form_open('carrito_controller/agregar_carrito'); 
							  	echo form_hidden('id', $row->Id_producto); 
							    echo form_hidden('nombre', $row->nombre); 
							    echo form_hidden('precio', $row->precio); 
							  	echo form_submit('comprar', 'Comprar',"class='btn btn-warning margen-comprar'");
							 	echo form_close();
							} ?> 

							<!-- para el caso de que quiera comprar sin estar logueado -->
							<?php if (!$this->session->userdata('login')) { ?> 
								<button type="button" data-toggle="popover" data-placement="right" title="Debe iniciar sesion para comprar" class="btn btn-warning margen-comprar">Comprar</button>		

								<script>
								$(document).ready(function(){
								    $('[data-toggle="popover"]').popover();   
								});
								</script>
							<?php } ?>
						</div>
						<br><br><br><br><br>
					</div>
				</div>
				<?php    } ?>
			</div>
			<br><br>
		</div>
	</div>