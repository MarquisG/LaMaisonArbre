<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>La Maison Arbre - @yield('title')</title>

        <!-- CSS -->
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="{{ asset('front/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('front/flexslider/flexslider.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/form-elements.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/media-queries.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
        
        <!-- Top menu -->
		<nav class="navbar" role="navigation">
			<div class="container">
				<div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
                    @if(!Auth::check())
                        <a href={{ route('home') }}>
                    @endif

                    @if(Auth::check())
                        <h1 data-text='12' contentEditable="true" class="text-edit">
                            {{ $texts[11]->content }}
                        </h1>
                        <button data-text='12' class='btn btn-info' onclick='textValidate(this)'>
                            <i class='fa fa-check'></i>
                        </button>
                    @else
                        <h1>{{ $texts[11]->content }}</h1>
                    @endif
                    
                    @if(Auth::check())
                        <p data-text='13' contentEditable="true" class="text-edit">
                            {{ $texts[12]->content }}
                        </p>
                        <button data-text='13' class='btn btn-info' onclick='textValidate(this)'>
                            <i class='fa fa-check'></i>
                        </button>
                    @else
                        <p>{{ $texts[12]->content }}</p>
                    @endif
                        
                    @if(!Auth::check())
                        </a>
                    @endif
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li class=@yield('home_active')>
							<a href="{{ route('home') }}"><i class="fa fa-home"></i><br>Acceuil</a>
						</li>
                        <li class=@yield('appartements_active')>
							<a href="{{ route('appartements') }}"><i class="fa fa-building"></i><br>Appartements</a>
						</li>
						<li class=@yield('galerie_active')>
							<a href="{{ route('galerie') }}"><i class="fa fa-camera"></i><br>Galerie</a>
						</li>
                        <li class=@yield('todo_active')>
							<a href="#"><i class="fa fa-check-circle"></i><br>A faire</a>
						</li>
						<li class=@yield('contact_active')>
							<a href="{{ route('contact') }}"><i class="fa fa-envelope"></i><br>Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>



@yield('content')


        <!-- Footer -->
        <footer>
            <div class="container">
                
                <div class="row">
                    
                    <div class="col-sm-2"></div>     
                    <div class="col-sm-4 footer-box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <h4>A propos</h4>
                        <div class="footer-box-text">
	                        @if(Auth::check())
								<p data-text='6' contentEditable="true" class="text-edit">
									{{ $texts[5]->content }}
                                </p>
								<button data-text='6' class='btn btn-info' onclick='textValidate(this)'>
									<i class='fa fa-check'></i>
								</button>
							@else
								<p>{{ $texts[5]->content }}</p>
							@endif
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4 footer-box wow fadeInDown animated" style="visibility: visible;animation-name: fadeInDown;/* float:  right; *//* text-align:  right; */">
                        <h4>Contactez-nous</h4>
                        <div class="footer-box-text footer-box-text-contact">

                        
                        @if(Auth::check())
                            <i class="fa fa-map-marker"></i> Addresse:
                            <p data-text='18' contentEditable="true" class="text-edit">
                                {{ $texts[17]->content }}
							</p>
                            <button data-text='18' class='btn btn-info' onclick='textValidate(this)'>
                                <span class='fa fa-check'></span>
                            </button>
                        @else
                            <p><i class="fa fa-map-marker"></i> Addresse: {{ $texts[17]->content }}</p>
						@endif
						
                        @if(Auth::check())
                            <p data-text='19' contentEditable="true" class="text-edit">
                                {{ $texts[18]->content }}
							</p>
                            <button data-text='19' class='btn btn-info' onclick='textValidate(this)'>
                                <span class='fa fa-check'></span>
                            </button>
                        @else
                            <p><i class="fa fa-phone"></i>{{ $texts[18]->content }}</p>
						@endif
						
                        @if(Auth::check())
                            <p data-text='20' contentEditable="true" class="text-edit">
                                {{ $texts[19]->content }}
							</p>
                            <button data-text='20' class='btn btn-info' onclick='textValidate(this)'>
                                <span class='fa fa-check'></span>
                            </button>
                        @else
                            <p><i class="fa fa-envelope"></i>{{ $texts[19]->content }}</p>
                        @endif
                        </div>
                    </div>
                </div>
                
                <div class="row">
                	<div class="col-sm-12 wow fadeIn">
                		<div class="footer-border"></div>
                	</div>
                </div>
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">
                        <p>Copyright 2018 - All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="{{ asset('front/js/jquery-1.11.1.min.js') }}"></script>		
        <script src="{{ asset('front/bootstrap/js/bootstrap.min.js') }}"></script>		
        <script src="{{ asset('front/js/bootstrap-hover-dropdown.min.js') }}"></script>		
        <script src="{{ asset('front/js/jquery.backstretch.min.js') }}"></script>		
        <script src="{{ asset('front/js/wow.min.js') }}"></script>		
        <script src="{{ asset('front/js/retina-1.1.0.min.js') }}"></script>		
        <script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>		
        <script src="{{ asset('front/flexslider/jquery.flexslider-min.js') }}"></script>		
        <script src="{{ asset('front/js/jflickrfeed.min.js') }}"></script>		
        <script src="{{ asset('front/js/masonry.pkgd.min.js') }}"></script>		
        <script src="{{ asset('front/js/scripts.js') }}"></script>		
        <script src="{{ asset('front/js/jquery.ui.map.min.js') }}"></script>		
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

        <script>
            function textValidate(e){

                var content = document.querySelector('[data-text="'+e.getAttribute('data-text')+'"]').innerText;

                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: "{{ route('textEdit') }}", 
                    data: {"_token": "{{ csrf_token() }}","id": e.getAttribute('data-text'), "content": content},
                    success: function(data) {
                        console.log(data);
                        e.classList.remove('btn-info')
                        e.classList.add('btn-success')
                        setTimeout(function(){ 
                            e.classList.remove('btn-success')
                            e.classList.add('btn-info')
                        }, 3000);
                    },
                    error: function(xhr, status){
                        console.log(status);
                        console.log(xhr);
                        e.classList.remove('btn-info')
                        e.classList.add('btn-danger')
                        setTimeout(function(){ 
                            e.classList.remove('btn-danger')
                            e.classList.add('btn-info')
                        }, 3000);
                    }
                    });

                

            }
        </script>

    </body>

</html>

