@extends('layouts.fronted.index')
@section('redes')
<div class="red">
    <div id="facebook">
        <a href="https://www.facebook.com/angelica.mirandamendoza.9" target="none" class="fab fa-facebook-f "></a>
    </div>
    <div id="instagram">
        <a href="https://www.instagram.com/angelicamiranda.m/" target="none" class="fab fa-instagram"></a>
    </div>
    <div id="twiter">
        <a href="https://twitter.com/MirandaMedoza" target="none" class="fab fa-twitter-square"></a>
    </div>
    <div id="whatsaap">
        <a href="#" target="none" class="fab fa-whatsapp"></a>
    </div>
    <div id="linkeding">
        <a href="#" target="none" class="fab fa-linkedin"></a>
    </div>
</div>
@endsection
@section('navbar_top')
<div class="header-top">
    <div class="container d-flex justify-content-between">
        <div class="d-inline-flex ml-auto">
            
        </div>
    </div>
</div>
@endsection
@section('navbar')
    <header>
    <a href="#" class="logo">
        
        <img  class="imgtamaño" src="{{ asset('img/lgoo.png')}}" alt="Protecting You">
    </a>
    <div class="menu-toggle" ></div>
        <nav>
            <ul>
                <li><a href="" class="active">INICIO</a></li>
                <li><a href="{{ url('/contact')}}">CONTÁCTENOS</a></li>
                <li><a href="{{ url('/nosotros')}}">NOSOTROS</a></li>
				<li><a href="{{route('login')}}">LOGIN</a></li>
				<li><a href="{{route('register')}}">REGISTRATE</a></li>
            </ul>
        </nav>
        <div class="clearfix"></div>
    </header>
@endsection
@section('banner')
<div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-text">
                        <h4> </h4>
						<br>
						<br>
                        <h1 class="tipeo1">PROTECTING YOU</h1>
                        <h1 class="tipeo2"><span class="type"></span></h1>
                        <div class="botonesinfo">
                        <a href="" class="btn hero-btn">MAS INFORMACIÓN</a>
                        <a href="{{ url('/productos')}}" class="btn hero-btn2 btn1">VER PRODUCTOS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 
@section('cards_service')
<div class="container_cards">
    <div class="row_cards">
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-map-marker-alt fa-4x"></i>
                    <h4 class="title_services">Localizador</h4>
                    <p class="description_services">Rastrea la ubicación en tiempo real del niño</p><br>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-x3">Ver mas</a>  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-shopping-cart fa-4x"></i>
                    <h4 class="title_services">Actividad</h4>
                    <p class="description_services">Revisa la actividad de tu niño</p><br>
                    <a href="" class="btn_modal_wel mt-5" data-toggle="modal" data-target=".bd-example-modal-xl2">Ver mas</a>  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-user-check fa-4x"></i>
                    <h4 class="title_services">Contenido Inapropiado</h4>
                    <p class="description_services">Controla el contenido inapropiado de tu niño</p>
                    <a href="{{ url('/nosotros')}}" class="btn_modal_wel mt-5">Ver mas</a>  
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 mb-3 text-center">
            <div class="single-content_service">
                <div class="service">
                    <i class="fas fa-thumbs-up fa-4x"></i>
                    <h4 class="title_services">Múltiples Formas de Pago</h4>
                    <p class="description_services">Diferentes tipos de pago</p>
                    <a href="{{route('plan')}}" class="btn_modal_wel mt-5">Ver mas</a>          
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('cards')
<div class="container_cards">    
    <div class="row_cards">
        <div class="col-md-3 col-sm-6 mb-3">
            <div class="single-content">
                <img src="{{ asset('img/ubicación.jpg')}}" alt="Categorias Higienika Oficce Perú">
                <div class="text-content">
                    <h3>Localizcación</h3>
                    <hr class="style2">
                    <h5>Lugar exacto</h5>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection



@section('products')
<div class="producst_body autoplay ">
     
</div>
@endsection

@section('footer')
<footer class="footer">
    <div class="l-footer">
        <img  class="footer_img" src="{{asset('img/logowhite.png')}}" alt="Protecting You">
      
    <p>
    </p>
    </div>
        <ul class="r-footer">
            <li>
            <h2>Social</h2>
                <ul class="box">
                    <li class="button_social">
                        <i class="fab mr-2 fa-facebook"></i>
                        <a href="https://www.facebook.com/angelica.mirandamendoza.9" target="_blank">Facebook</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-twitter"></i>
                        <a href="https://twitter.com/MirandaMedoza">Twitter</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-instagram"></i>
                        <a href="https://www.instagram.com/angelicamiranda.m/" target="_blank">Instagram</a>
                    </li>
                    <li class="button_social">
                        <i class="fab mr-2 fa-linkedin-in"></i>
                        <a href="#" target="_blank">Linkedin</a>
                    </li>
                </ul>
            </li>
            <li class="features">
            <h2>Información</h2>
            <ul class="box">
                <li><a href="#">Políticas de Privacidad</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>
            </ul>
            </li>
           
        </ul>
       
</footer>
@endsection
@section('title')
<div class="col-12">
		<div class="testimonial-title">
			<h5>CONOCE</h5>
            <h3>NUESTRAS CATEGORÍAS</h3>
            <hr class="style1">
	    </div>
</div>
@endsection
