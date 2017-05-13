<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Terminos y Condiciones</title>
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
	
	<div class="container-fluid fondo-principal">
		<div class="container fondo-2">
			<div class="row">
				<br>
				<div class="titulo text-center">
					<h2>TERMINOS Y CONDICIONES</h2>
				</div><br>
				<div class="margen-izq text-justify" style="margin-right: 15px;">
					<p>GALLARDO JUAN PABLO, a través de nuestro dominio web <a href="index.html">www.pcgamer.com.ar</a> en adelante el “Sitio”, comunica a nuestros Clientes los términos y condiciones que van a regir a los efectos de la utilización por éstos del Sitio (en adelante Usuario/Cliente). Asimismo, se informa en el presente respecto de la política de protección de datos de carácter personal (en adelante los “Datos Personales”) con el objeto que los Clientes Usuarios determinen en forma voluntaria si desean suministrar a GALLARDO JUAN PABLO sus datos personales en ocasión del uso del Sitio o compra de alguno de los productos ofrecidos por GALLARDO JUAN PABLO en el mismo.</p>
					<p>El Propietario y Operador del Sitio es GALLARDO JUAN PABLO. La dirección postal del Sitio web es 9 de Julio 1449 &#8211; Ciudad de Corrientes.</p>
					
					<!-- Leer mas Modal -->
					<div class="text-center">							
						<a href="#leermas" data-toggle="modal" data-target=#leermas>Leer mas</a>
					   
					<!-- Modal Terminos -->
					<div class="modal fade" id="leermas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					    <div class="modal-lg" style="margin-left: 5%;">
					        <div class="modal-content">
					            <!-- Modal Header -->
					            <div class="modal-header">
					                <button type="button" class="close" data-dismiss="modal">
					                       <span aria-hidden="true">&times;</span>
					                       <span class="sr-only">Close</span>
					                </button>
					                <h4 class="modal-title">Terminos y Condiciones</h4>
					            </div>            
					            <!-- Modal Body -->
				            	<div class="modal-body">
				            		<div id="leermas" class="text-justify" style="margin: 15px;">
										<p>En función de los expresado, se fija en el presente los términos y condiciones a los efectos del uso por parte del Usuario Cliente del sitio <a href="index.html">www.pcgamer.com.ar</a>.</p>
										<p>1. El sólo uso del Sitio implica la aceptación irrevocable e incondicional por parte del Usuario/Cliente de todos los términos y condiciones fijados en el presente, asumiendo la obligación de respetar las mismas.</p>
										<p>2. GALLARDO JUAN PABLO se reserva el derecho de realizar cambios en el Sitio, en las condiciones de uso y en las notificaciones que correspondieren, en cualquier momento, y con la simple modificación del presente, comunicándolo a través de publicación en el Sitio. Asimismo, GALLARDO JUAN PABLO se reserva el derecho en cualquier momento de interrumpir el servicio ofrecido, sin previo aviso a los Usuarios/Clientes, en forma transitoria o definitiva, y sin necesitar en ningún momento consentimiento del Usuario/Cliente.</p>
										<p>3. En función de lo expresado en el punto 2 del presente, cada vez que el Usuario /Cliente desee utilizar el Sitio, deberá aceptar a priori todos y cada uno de los términos y condiciones especificados en el presente.</p>
										<p>4. Protección de los Datos Personales: GALLARDO JUAN PABLO ha implementado procesos a los efectos de Protección de los Datos Personales de los Usuarios/Clientes, con el objeto de evitar el mal uso, alteración, acceso no autorizado y/o robo de los Datos Personales suministrados por el Usuario/Cliente a GALLARDO JUAN PABLO. Sin perjuicio de lo expresado en el presente, el Usuario/Cliente acepta y reconoce que las medidas de seguridad en Internet no son inviolables. El Usuario/Cliente que suministre sus datos personales tendrá la posibilidad de ejercer su derecho de acceso a los mismos. También podrá rectificar los mismos, o solicitar el retiro de su nombre de la base de datos, ingresando a el Formulario de Contacto del sitio y completando dicho Formulario.</p>
										<p>5. Mediante el uso del sitio el Usuario/Cliente acepta los términos y condiciones del presente y declara bajo juramento tener 18 años de edad o más. Los padres, tutores o responsables de los menores de 18 años, son plenamente responsables por el uso del Sitio por parte de éstos.</p>
										<p>6. Toda la información suministrada por el Usuario/Cliente deberá ser verdadera, siendo exclusiva responsabilidad del Usuario/Cliente verificar que sus datos sean correctamente ingresados en el Sitio.</p>
										<p>7. Al utilizar el Sitio, el Usuario/Cliente es responsable del cuidado de la confidencialidad de su cuenta y contraseña. En función de lo especificado en el presente, el Cliente/Usuario es responsable de todo lo que se registra en su cuenta.</p>
										<p>8. Indemnidad: Asimismo el Sitio sólo se puede utilizar con fines lícitos. El Cliente/Usuario se obliga a mantener indemne a GALLARDO JUAN PABLO por cualquier tipo de reclamo, extrajudicial, administrativo o judicial, de cualquier tercero, por el uso del Sitio por parte del usuario/Cliente, o en caso de verificarse multas y/o deudas de cualquier tipo en función del desempeño o actividad realizada por el Usuario/Cliente en el Sitio.</p>
										<p>9. Compra de Productos: la compra de cualquier producto o servicio publicado a través del Sitio se encuentra sujeta a disponibilidad de stock, de la aprobación de identidad del Usuario/Cliente, de la imputación correcta de la tarjeta de crédito o valores transferidos, como a la aprobación por parte del Cliente Usuario de estos términos y condiciones. Asimismo, podrán variar las características técnicas de los productos, los precios de los mismos, podrán los precios no coincidir con los ofrecidos en los locales GALLARDO JUAN PABLO. Las fotos o ilustraciones publicadas en el Sitio son al solo efecto ilustrativo y, la información de los productos, podrá variar en caso de incorrecciones o equívocos involuntarios.</p>
										<p>10. Proceso de compra: Sin perjuicio de encontrarse detallado el proceso de compra en el sitio <a href="index.html">http://www.pcgamer.com.ar</a> el mismo se detalla a continuación:</p>
										<p>10.1. Se deja expresa constancia que GALLARDO JUAN PABLO no se hace responsable por los reintegros que deban efectuar los Bancos emisores de tarjetas de crédito respecto de las promociones vigentes, siendo dichas entidades emisoras las únicas responsables de efectivizar en tiempo y forma el reintegro correspondiente.</p>
										<p>10.2. Una vez elegido el producto el Cliente deberá presionar el botón comprar y verá en su carrito de compras los artículos que tiene cargados, pudiendo modificar la cantidad o eliminar los que desee.</p>
										<p>10.3. Aquí el Cliente encontrará los distintos medios de pagos y promociones que están disponibles en la venta online.</p>
										<p>10.4. Si el cliente no se encuentra registrado no podrá comprar.</p>
										<p>10.5. Luego deberá continuar con el proceso de compra.</p>
										<p>10.6. Luego deberá confirmar o modificar los datos ingresados y las cuotas elegidas, para pasar a un servicio externo autorizado por su tarjeta para el pago y validación de los datos, montos y plan de pago.</p>
										<p>10.7. GALLARDO JUAN PABLO podrá contactar al Usuario/Cliente vía telefónica para realizar una validación de datos, debiendo tener dicha línea base en Argentina.</p>
										<p>10.8. El resultado de la operación le será informado, y las operaciones exitosas generarán el comprobante vía correo electrónico a su casilla de email de la registración, como comprobante de la misma, con los datos para cualquier consulta o duda posterior a su compra.</p>
										<p>11. Precios: Todos los precios publicados en el Sitio incluyen IVA. Se deja expresa constancia que los precios publicados en el Sitio podrán sufrir modificaciones y el precio estipulado en la factura será el del momento del cierre de la compra por parte del Usuario/Cliente.</p>
										<p>12. Facturación: La factura a emitirse será la de consumidor final (Comprobante Tipo “B”), siendo esta la modalidad de facturación para ventas online. En caso de necesitar factura &#8220;A&#8221; el Usuario/Cliente deberá solicitarla al momento de la compra, indicando Razón Social y Número de CUIT en &#8220;INFORMACIÓN ADICIONAL&#8221; .</p>
										<p>13. Pago: Condiciones: El Sitio solo opera con tarjetas de crédito que podrán variar y sus condiciones se informan en la página de medios de pago correspondiente.</p>
										<p>Una vez registrado el Usuario/Cliente podrá conocer los planes disponibles de cada entidad y prestadora autorizados por las mismas como por acuerdos con GALLARDO JUAN PABLO. GALLARDO JUAN PABLO no valida ni opera con los establecimientos de tarjetas de crédito en forma directa, sino a través de una pasarela de pago autorizadas por las mismas <a href="http://www.mercadopago.com.ar/">http://www.mercadopago.com.ar</a> que ofrece el servicio de validación de tarjetas, identidad de titulares, código de Seguridad, para el monto de compra que estare efectuando.</p>
										<p>GALLARDO JUAN PABLO no recolecta ni almacena datos de su tarjeta de crédito, ni define el resultado de la operación, siendo esto responsabilidad de cada entidad emisora.</p>
										<p>14. Entregas: Los métodos y costos de envío que le brinda GALLARDO JUAN PABLO dependerán de la cantidad de productos y del lugar de entrega de los mismos. Podrá conocer telefónicamente el costo y tiempo de entrega de los productos seleccionados para una localidad y provincia de lugar de destino. Las entregas se realizaran de Lunes a Viernes de 14 a 18hs en el domicilio indicado por el Usuario/Cliente. Los sábados, domingos y días festivos no se realizarán entregas, por lo tanto para los plazos otorgados se deberá tener en cuenta solo días hábiles. Por razones de cuidado y seguridad para con nuestros clientes se realizara una validación de datos. La fecha de entrega comenzará a correr a partir del resultado de dicha validación. Se recomienda al Usuario/Cliente revisar el producto que no tenga ralladuras o golpes producto del traslado, antes de firmar la conformidad de entrega. Asimismo, en el momento de la entrega del producto adquirido se solicitará a la persona receptora del producto un documento que identifique a la misma (Documento Nacional de Identidad o Cédula de Identidad). Asimismo el receptor deberá suscribir el recibo con la aclaración del nombre y documento.</p>
										<p>15. Cambios y devoluciones. El cambio de productos se acepta dentro de los 3 días de recibida la mercadería. Es necesario que el producto este en perfectas condiciones, con accesorios y empaques originales. En todos los casos se deberá conservar la factura de compra (en su versión física o digital) y remito de entrega. Los cambios y/o devoluciones deberán realizarse por teléfono al 4815-6172 que se especifica en su correo electrónico de compra donde se le brindará al Cliente la información y la solución más cómoda para su conformidad.</p>
										<p>16. Se deja expresa constancia que el Usuario/Cliente posee el derecho a revocar la aceptación de la oferta que realice el Establecimiento, durante un plazo de 10 (diez) días corridos, desde la entrega del bien o celebración del contrato, lo último que ocurra, en los términos del Artículo 34º de la Ley Nº 24.240 y la Resolución 906/98 de la Secretaría de Industria, Comercio y Minería.</p>
										<p>17. Derechos de Propiedad Intelectual: &#8220;PCGAMER&#8221; son marcas registradas y se encuentran todos los derechos reservados conforme a la ley 11.723.</p>
										<p>18. Los bienes y/o servicios ofrecidos en esta página no son promovidos, auspiciados ni garantizados por VISA Argentina SA u otras entidades similares.</p>
										<p>19. Legislación aplicable: el presente es regido por las leyes de la República Argentina.</p><br><br>
								    </div>			                
					            </div>            
					        </div>
					    </div>
					</div>
										
					</div>				    
				    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				    <div class="visible-lg">
						<br><br><br><br><br><br><br><br><br><br>
					</div>
				</div>
			</div>
		</div>
	</div>

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