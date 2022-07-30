<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="Talento Artesanal">

	<!-- title -->
	<title>@yield('titulo', 'Talento Artesanal | Etsy')</title>

	<!-- favicon -->
    <link href="{{ asset('/img/favicon.png') }}" rel="icon"/>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{ secure_asset('/css/all.min.css') }}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{ secure_asset('/bootstrap/css/bootstrap.min.css') }}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{ secure_asset('/css/owl.carousel.css') }}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{ secure_asset('/css/magnific-popup.css') }}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{ secure_asset('/css/animate.css') }}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{ secure_asset('/css/meanmenu.min.css') }}">
	<!-- main style -->
	<link rel="stylesheet" href="{{ secure_asset('/css/main.css') }}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{ secure_asset('/css/responsive.css') }}">
	<!-- accesibilidad -->
	<link rel="stylesheet" href="{{ secure_asset('/css/jbility.min.css') }}">
	

</head>

<body>

	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

<script type="text/javascript"> 
	function googleTranslateElementInit() { 
		new google.translate.TranslateElement(
			{pageLanguage: 'es'}, 
			'google_translate_element'
		); 
	} 
</script>



	<!--PreLoader-->
	<div class="loader">
		<div class="loader-inner">
			<div class="circle"></div>
		</div>
	</div>
	<!--PreLoader Ends-->

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<!-- logo -->
				<div class=" col-sm-auto site-logo">
					<a href="{{ route('home.index') }}">
						<img src="{{ secure_asset('/img/logo.png') }}" height="65" width="100" alt="Logo de talento artesanal">
					</a>
				</div>
				<!-- logo -->
				<div class="col text-center">
					<div class="main-menu-wrap">

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
                                <li><a  href="{{route('home.index')}}">Inicio</a>
								</li>
                                <li><a>Cursos</a>
                                <ul class="sub-menu">
										<li><a href="{{ route('cursos.cursos') }}">Ver Todos los Cursos</a></li>
										<li><a href="{{ route('cursos.categorias') }}">Ver Categorias</a></li>
									</ul> 
                                </li>
                                <li><a  href="{{ route('historias.historias') }}">Historias de Exito</a></li>
                                
								<li><a href="{{route('home.nosotros')}}">Conocenos</a></li>
								<li><a href="#">Comunidad</a>
									<ul class="sub-menu">
										<li><a href="{{ route('foros.todos') }}">Foros</a></li>
									</ul>
								</li>
								<li><a href="{{route('home.contacto')}}">Contactanos</a></li>
								<li><a href="https://www.etsy.com/mx/" target="_blank" rel="noopener noreferrer">Pagina
										Oficial</a>

								</li>
								<li><a>Cuenta</a>
                                    <ul class="sub-menu">
                                        @guest
                                            <li><a  href="{{ route('login') }}">Iniciar Sesión</a></li>
                                            <li><a  href="{{ route('register') }}">Registrarme</a></li>
                                        @else
                                            @usuario
                                            <li><a  href="{{route('usuario.dashboard')}}">Menu Usuario</a></li>
                                            @endusuario
                                            @admin
                                            <li><a  href="{{route('admin.home.dashboard')}}">Menu Administrador</a></li>
                                            @endadmin
                                            <li>
                                                <form id="logout" action="{{ route('logout') }}" method="POST">
                                                @csrf
                                                <a role="button" 
                                                onclick="document.getElementById('logout').submit();">Cerrar Sesión</a>
                                                </form>
                                            </li>
                                        @endguest
                                        
                                        </ul> 
                                </li>
								<li></li> 
								
							</ul>
						</nav>
						<div class="acess-container">
							<div id="jbbutton" class="balloon" title="Accessibility"><span class="balloontext">Accesibilidad</span><img src="{{ secure_asset('/img/acessc50.png') }}"></div>
							<div id="acess-icons">
								<div class="acess-icon balloon"><span class="balloontext">Contraste</span><img id="contrast" src="{{ asset('/img/contraste40.png') }}"/></div>
								<div class="acess-icon balloon"><span class="balloontext">Aumetar Tamaño letra</span><img id="increaseFont" src="{{ asset('/img/fontsma40.png') }}"/></div>
								<div class="acess-icon balloon"><span class="balloontext">Decrementar tamaño letra</span><img id="decreaseFont" src="{{ asset('/img/fontsme40.png') }}"/></div>
								<div class="acess-icon balloon" id="google_translate_element"><span class="balloontext">Cambiar Idioma</span></div>
							</div>
						</div>
						
						 
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	


@yield('contenido')


	<!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="{{ secure_asset('/img/company-logos/logo.jpeg') }}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{ secure_asset('/img/company-logos/logo-talento.png') }}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{ secure_asset('/img/company-logos/etsy-logo.jpg') }}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{ secure_asset('/img/company-logos/4.png') }}" alt="">
						</div>
						<div class="single-logo-item">
							<img src="{{ secure_asset('/img/company-logos/5.png') }}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Acerca de Etsy</h2>
						<p>Etsy es un mercado global de artículos únicos y creativos. Es el hogar de un universo de
							artículos especiales y extraordinarios que abarca desde piezas artesanales únicas hasta
							tesoros vintage.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Contactanos</h2>
						<ul>
							<li>support@etsy.com</li>
							<li>+52 551 222 3333</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Suscribete para más noticias</h2>
						<p>Obtenga información relevante.</p>
						<form action="index.html">
							<input type="email" placeholder="Email">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->

	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2022 - The Honey<br>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->

	<!-- jquery -->
	<script src="{{ secure_asset('/js/jquery-1.11.3.min.js') }}" ></script>
	<!-- bootstrap -->
	<script src="{{ secure_asset('/bootstrap/js/bootstrap.min.js') }}"></script>
	<!-- count down -->
	<script src="{{ secure_asset('/js/jquery.countdown.js') }}"></script>
	<!-- isotope -->
	<script src="{{ secure_asset('/js/jquery.isotope-3.0.6.min.js') }}"></script>
	<!-- waypoints -->
	<script src="{{ secure_asset('/js/waypoints.js') }}"></script>
	<!-- owl carousel -->
	<script src="{{ secure_asset('/js/owl.carousel.min.js') }}"></script>
	<!-- magnific popup -->
	<script src="{{ secure_asset('/js/jquery.magnific-popup.min.js') }}"></script>
	<!-- mean menu -->
	<script src="{{ secure_asset('/js/jquery.meanmenu.min.js') }}"></script>
	<!-- sticker js -->
	<script src="{{ secure_asset('/js/sticker.js') }}"></script>
	<!-- main js -->
	<script src="{{ secure_asset('/js/main.js') }}"></script>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="{{ secure_asset('/js/jbility.min.js') }}"></script>

</body>

</html>
