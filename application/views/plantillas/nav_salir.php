
	<!-- barra de navegacion -->
	<nav role="navigation" class="navbar navbar-default">
		<div class="navbar-header">
			<button type="button" data-target="#barra-navegacion" data-toggle="collapse" class="navbar-toggle">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<img class="navbar-logo" src="<?php echo base_url(); ?>assets/img/pcgamer-logo.png">
		</div>		
		<div id="barra-navegacion" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="<?= $inicio ?>"><a href="<?php echo base_url(); ?>">INICIO</a></li>
				<li class="<?= $productos ?>"><a href="<?php echo base_url(); ?>#productos">PRODUCTOS</a></li>
				<li class="<?= $contacto ?>"><a href="<?php echo base_url(); ?>pcgamer/contacto">CONTACTO</a></li>
				<li class="dropdown <?= $nosotros ?>">
					<a data-toggle="dropdown" class="dropdown-toggle" href="<?php echo base_url(); ?>pcgamer/index/#">NOSOTROS<b class="caret"></b></a>
					<ul role="menu" class="dropdown-menu">
						<li><a href="<?php echo base_url(); ?>pcgamer/quienes_somos">QUIENES SOMOS</a></li>
						<li><a href="<?php echo base_url(); ?>pcgamer/comercializacion">COMERCIALIZACION</a></li>
						<li><a href="<?php echo base_url(); ?>pcgamer/terminos_y_condiciones">TERMINOS Y CONDICIONES</a></li>
					</ul>
				</li>
			</ul>

		<!-- Boton de sesion -->
			<div class="btn-group navbar-right margen-boton-navbar">
			  <button type="button" class="btn btn-primary btn-circle btn-lg dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i></button>
				<!-- <div class="row"> -->
				  <ul class="dropdown-menu" style="background: ghostwhite; color: black; text-align: center;">
				    <hr style="margin-top: 3px;">
				    <div class="row">			   	  
				      <div class="col-md-4">
						<img src="<?php echo base_url('uploads/img_usuarios/') . $imagen?>" height="50" width="50"/>
					  </div>
					  <div class="col-md-6">
					    <li><b>&nbsp<?= $nombres?>&nbsp<?= $apellidos?>&nbsp</b></li>
					    <br>
					    <li>&nbsp<?= $nombre_usuario?>&nbsp</li>
					   </div>
					 </div>
					 	<hr style="margin-top: 10px; margin-bottom: 3px;">
					    <a href="<?php echo base_url();?>login_controller/cerrar_sesion" title=""><button type="button" class="btn btn-primary btn-sm navbar-btn" data-toggle="modal" data-target=#Cerrar>Cerrar Sesion</button></a>
				  </ul>
				<!-- </div> -->
			</div>
			<!-- Buscador -->
			<form role="search" class="navbar-form navbar-right" style="border-style: none">
				<div class="form-group">
					<input type="text" placeholder="Buscar" class="form-control">
				</div>
				<span class="btn btn-default glyphicon glyphicon-search hidden-xs hidde-sm"></span>	
			</form>		
		</div>	
	</nav>