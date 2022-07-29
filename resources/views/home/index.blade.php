@extends('layouts.app')
@section('titulo', $viewData["titulo"])
@section('contenido')


	<!-- home page slider -->
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Fácil y rápido</p>
								<h1>Vende tus artesanias en Etsy</h1>
								<div class="hero-btns">
									<a href="https://www.etsy.com/sell" class="boxed-btn">¡Empezar!</a>
									<a href="#" class="bordered-btn">Preguntas frecuentes</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">¿Quieres aprender a usar Etsy?</p>
								<h1>Aprende a usar Etsy y sacale el mayor provecho</h1>
								<div class="hero-btns">
									<a href="#" class="boxed-btn">¡Aprender!</a>
									<a href="#" class="bordered-btn">¿Cómo empezar?</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Siempre en contacto</p>
								<h1>Participa en charlas con otros vendedores</h1>
								<div class="hero-btns">
									<a href="#" class="boxed-btn">Charlas</a>
									<a href="#" class="bordered-btn">Preguntas</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-money-bill-wave"></i>
						</div>
						<div class="content">
							<h3>Vende en todo México</h3>
							<p>Tus artesanias podrán ser vistas por todo México</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-award"></i>
						</div>
						<div class="content">
							<h3>Todo lo que necesitas</h3>
							<p>Te ayudaremos a crear tu tienda de artesanias en Etsy</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-comments-dollar"></i>
						</div>
						<div class="content">
							<h3>Vendedores</h3>
							<p>Comparte tus experiencias como vendedor</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- Poner lo que es ser un vendedor en Etsy y porque te beneficiara -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Inicia</span> nuevo vendedor</h3>
						<div class="text">
							Se parte del mercado creativo donde millones de compradores gastan miles de
							millones cada año
							comprando directamente a emprendedores creativos como tú.
						</div>
						<br>
						<p class="text">
							Te ayudamos con tus primeros pasos para abrir tu tienda en linea y te daremos los mejores
							concejos para publicar y vender tus productos.
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{ asset('/img/products/ceramica.jpg') }}"
									alt="Productos ceramicos"></a>
						</div>
						<h3>¿Qué puedo vender?</h3>
						<p class="descripcion tarjeta">Etsy es un mercado único de productos hechos a mano, artículos
							vintage y
							materiales para artesanía. <br> En el <a href="https://www.etsy.com/" target="_blank"
								rel="noopener noreferrer">sitio oficial de Etsy</a>, encontrarás una comunidad de
							creadores, propietarios
							de pequeños negocios y compradores con una pasión común por artículos curiosos e
							inusuales.<br>
							No se aceptan articulos que hayan sido comprados y esten siendo revendidos, inluso si el
							articulo fue hecho a mano.
						</p>
						<a href="https://help.etsy.com/hc/es/articles/115015672808?segment=selling#01FGYSCGKE88JVDTG9HARF2WXE"
							class="cart-btn" target="_blank" rel="noopener noreferrer"><i class="fas fa-book"></i> Más
							detalles </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{ asset('/img/products/tienda-online.png') }}" src=""
									alt="Tienda online"></a>
						</div>
						<h3>¿Cómo crear tu tienda en linea?</h3>
						<p class="descripcion tarjeta">
							1. Visita el <a href="https://www.etsy.com/sell">sitio oficial de vendedores Etsy</a> y
							selecciona <i>Empezar</i>.<br>
							2. Selecciona el idioma de la tienda, el país y la divisa y, a continuación, haz clic en
							<i>Guardar y continuar</i>.<br>
							3. Elige el nombre de tu tienda y, a continuación, haz clic en <i>Guardar y continuar</i>.
							<br>
							Así de fácil, no necesitas tener licencia comercial para vender en Etsy.<br>
							Es importante que realices este primer proceso desde un navegador.
						</p>
						<a href="https://help.etsy.com/hc/es/articles/115015672808?segment=selling#01FGYSWWHJZVWS5SGDF8X103CZ"
							class="cart-btn" target="_blank" rel="noopener noreferrer"><i class="fas fa-book"></i> Más
							detalles </a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{ asset('/img/products/comercio-elecronico.jpg') }}"
									alt=""></a>
						</div>
						<h3>¿Cómo añadir mis productos?</h3>
						<p class="descripcion tarjeta">Una vez que hayas completado todas las secciones de tu tienda, ya
							puedes empezar a añadir productos a tu tienda de Etsy. Cada vez que añades un producto a tu
							tienda de Etsy lo llamamos <i><u>publicar un anuncio</u></i>.<br>
							Te recomendamos seguir las <a
								href="https://help.etsy.com/hc/articles/360036207794?segment=selling" target="_blank"
								rel="noopener noreferrer">practicas recomendadas de atencion al cliente</a>.<br>
							El servicio excepcional y constante puede convertirte en un vendedor estrella.
						</p>
						<a href="https://help.etsy.com/hc/es/articles/115015672808?segment=selling#01FGYTEG9V0STGESFTWN1YZCXG"
							class="cart-btn" target="_blank" rel="noopener noreferrer"><i class="fas fa-book"></i> Más
							detalles </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product section -->



	<!-- testimonail-section-vendedores estrella -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{ asset('/img/avaters/avatar1.png') }}" alt="">
							</div>
							<div class="client-meta">
								<h3>Maria José<span>Vendedora #1</span></h3>
								<p class="testimonial-body">
									" He estado vendiendo artesanías desde hace 3 años y mi experiencia ha sido Lorem
									ipsum dolor sit amet consectetur adipisicing elit. Aut recusandae alias qui quasi
									molestiae impedit optio quia neque placeat, nemo ullam consectetur expedita labore,
									dolore accusantium nisi minus, commodi architecto. Por eso nunca he dejado usar Etsy
									y mi prioridad principal es darles servicio y atención a mis clientes. "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{ asset('/img/avaters/avatar2.png') }}" alt="">
							</div>
							<div class="client-meta">
								<h3>David Laris <span>Vendedor #2</span></h3>
								<p class="testimonial-body">
									" Descubrí Etsy gracias a un conocido que me aconsejo como mejorar las ventas de mi
									negocio de ropa tradicional hecha a mano. Aunque tenía mis dudas al principio estoy
									muy satisfecho con los resultados y con lo mucho que me ha ayudado a crecer mi
									negocio. "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="{{ asset('/img/avaters/avatar3.png') }}" alt="">
							</div>
							<div class="client-meta">
								<h3>Juan González <span>Vendedor #3</span></h3>
								<p class="testimonial-body">
									" Mi tiempo en Etsy me ha permitido conocer e intercambiar ideas con otros
									vendedores, lo cual me ha sido de mucha utilidad para mejorar mis estrategias de
									venta y la forma en la que muestro mis productos al publico. "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->

	
@endsection



