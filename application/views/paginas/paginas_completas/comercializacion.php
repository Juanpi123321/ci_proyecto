<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comercializacion</title>
	<link rel="stylesheet" href="BS/css/bootstrap.css">
	<link rel="stylesheet" href="CSS/estilo.css">
</head>
<body>
	<!-- barra de navegacion -->
	<nav role="navigation" class="navbar navbar-default">
		<!-- navbar-fixed-top     para que quede el navbar pegada arriba, pero no anda con la ventana modal :( -->
		<div class="navbar-header">
			<button type="button" data-target="#barra-navegacion" data-toggle="collapse" class="navbar-toggle">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<img class="navbar-logo" src="img/pcgamer-logo.png">
		</div>		
		<div id="barra-navegacion" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="index.html">INICIO</a></li>
				<li><a href="index.html#productos">PRODUCTOS</a></li>
				<li><a href="contacto.html">CONTACTO</a></li>
				<li class="dropdown active">
					<a data-toggle="dropdown" class="dropdown-toggle" href="#">NOSOTROS<b class="caret"></b></a>
					<ul role="menu" class="dropdown-menu">
						<li><a href="quienes-somos.html">QUIENES SOMOS</a></li>
						<li><a href="comercializacion.html">COMERCIALIZACION</a></li>
						<li><a href="terminos-y-condiciones.html">TERMINOS Y CONDICIONES</a></li>
					</ul>
				</li>
			</ul>
			
			<button type="button" class="btn btn-primary navbar-btn navbar-right margen-boton-navbar" data-toggle="modal" data-target=#ingresar>Ingresar</button>				    
			<!-- Modal -->
			<div class="modal fade" id="ingresar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog modal-sm">
			        <div class="modal-content">
			            <!-- Modal Header -->
			            <div class="modal-header">
			                <button type="button" class="close" data-dismiss="modal">
			                       <span aria-hidden="true">&times;</span>
			                       <span class="sr-only">Close</span>
			                </button>
			                <h4 class="modal-title" id="myModalLabel">Pc-Gamer Login</h4>
			            </div>            
			            <!-- Modal Body -->
			            <form class="form-horizontal" role="form">
			            	<div class="modal-body">		               
			                  <div class="form-group col-sm-10">
			                        <input type="email" class="form-control" placeholder="Usuario" required/>
			                  </div>
			                  <div class="form-group col-sm-10">
			                        <input type="password" class="form-control" placeholder="Contraseña" required/>
			                  </div>
			                  <div class="form-group">
			                    <div class="col-sm-10 checkbox">
			                        <label>
			                            <input type="checkbox"/>Recordar mi cuenta
			                        </label>			                      
			                    </div>
			                  </div>			                
				            </div>            
				            <!-- Modal Footer -->
				            <div class="modal-footer form-horizontal">                
				                <button type="submit" class="btn btn-primary">Iniciar Sesion
				                </button>
				                <button type="button" class="btn btn-default" data-dismiss="modal">Registrarse
				                </button>
				            </div>
			            </form>
			        </div>
			    </div>
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
	<!-- Principal -->
	<div class="container-fluid fondo-principal">
		<div class="container fondo-2">
			<div class="row">
				<br>
				<div class="titulo text-center">
					<h2>COMERCIALIZACION</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-justify">
						<div class="row">
						  <div class="col-md-5 col-sm-6">
						      <h3>PREGUNTAS FRECUENTES</h3>
						  </div>
						  <div class="col-md-6 col-sm-6 col-md-offset-1" style="padding-top: 15px">
							  <img class="img-responsive" src="img/medios.PNG">
						  </div>
						</div>
						<br>
						<p><b>¿Hacen envíos al interior, y tiene un costo?</b></p>
						<p>Hacemos envíos por Oca previo pago (ejemplo depósito bancario) del pedido, tienen un costo aproximado de $200, dependiendo de dimensiones del paquete y distancia. Demora entre 4 y 7 días hábiles en llegarte. El costo envío se abona cuando te llega a tu domicilio o sucursal más cercana según requiera el cliente.
						</p>
						<p><b>¿Cuáles son las formas de pago?</b></p>
						<p>Las formas de pago en son efectivo, transferencia o depósito bancario, tarjetas de crédito o débito en el local (consultar recargos), y MercadoPago (tarjetas de crédito, Pagofacil y Rapipago).</p>
						<p><b>¿Puedo pagar con tarjeta?</b></p>
						<p>Sí podes, y aceptamos prácticamente todas las tarjetas de crédito en el local, o si estas en el interior lo podes hacer mediante MercadoPago (la misma web te da esta opción de pago). 
						<p><b>¿Los precios publicados en la web en que moneda están?</b></p>
						<p>Todos los precios de la web están expresados en pesos argentinos.</p>
						<p><b>¿Son precios Finales o más IVA?</b></p>
						<p>Todos los precios son finales IVA incluido.</p>
						<p><b>¿Entregan factura y garantía?</b></p>
						<p>En absolutamente todas las ventas que realizamos se entrega factura fiscal en donde especifica el tiempo de la garantía. Bajo ningún concepto ni excepción realizamos ventas sin su respectiva factura.</p>
						<p><b>¿Puedo pagar con tarjeta de débito?</b></p>
						<p>Sí podes, y se te cobra el “Precio de Lista”.</p>
						<p><b>¿Necesito un presupuesto, como hago?</b></p>
						<p>Simplemente desde la web vas agregando los productos y el sistema te va sumando los productos. Todos los productos, stock y precios son reales y al momento.</p>
						<p><b>¿Tienen sucursales?</b></p>
						<p>No tenemos ninguna sucursal, nuestro único punto de venta al público es la Ciudad de Corrientes por la calle 9 de julio 1449 (zona centrica)</p>
						<p><b>¿Puedo ir a local a retirar mi compra personalmente o enviar a alguien?</b></p>
						<p>Sí poder retirar tu compra personalmente o enviar a alguien. Y en el caso de que la compra este ya pagada anteriormente la persona que retira tiene que venir con los datos del pedido y su DNI (que es el único documento válido) para retirar.</p>
						<p><b>Aún no puede resolver mi consultar. ¿Donde puedo contactarme?</b></p>
						<p>Podes comunicarte con nosotros por mail a <a href='pcgamer@hotmail.com'>pcgamer@hotmail.com</a> o telefónicamente al <b>3794221129</b> en los horarios de atención al público.</p><br><br>
				</div>
			</div>
		</div>
	</div>

	<!-- pie -->
	<footer class="pie text-center">
		<div class="hidden-xs">
			<p>© 2017 Juanpi Gallardo Front-End Developer. All rights reserved.</p>
		</div>
		<div class="visible-xs">
			<p class="small">© 2017 Juanpi Gallardo Front-End Developer.</p>
		</div>
	</footer>	
	<script src="BS/js/jquery-3.2.0.min.js"></script>
	<script src="BS/js/bootstrap.js"></script>
</body>
</html>