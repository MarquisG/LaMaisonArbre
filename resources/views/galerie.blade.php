<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>La Maison Arbre - Galerie</title>

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
                    <a href="index.html">
                        <h1>La Maison Arbre</h1>
                        <p>Locations meublées au Mans</p>
                    </a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="{{ route('home') }}"><i class="fa fa-home"></i><br>Acceuil</a>
						</li>
                        <li>
							<a href="{{ route('appartements') }}"><i class="fa fa-building"></i><br>Appartements</a>
						</li>
						<li class="active">
							<a href="{{ route('galerie') }}"><i class="fa fa-camera"></i><br>Galerie</a>
						</li>
                        <li>
							<a href="#"><i class="fa fa-check-circle"></i><br>A faire</a>
						</li>
						<li>
							<a href="{{ route('contact') }}"><i class="fa fa-envelope"></i><br>Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
        
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-camera"></i>
                        <h1>Galerie</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio -->
        <div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<a href="#" class="filter-all active">Tout</a> / 
	            		<a href="#" class="filter-t1">Appart T1</a> / 
	            		<a href="#" class="filter-t1b">Appart T1bis</a> / 
	            		<a href="#" class="filter-t3">Appart T3</a>
	            	</div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
		                <div class="portfolio-box t1 t1b t3">
		                	<div class="portfolio-box-container">
			                	<img src="assets/img/portfolio/1.jpg" alt="" data-at2x="assets/img/portfolio/1.jpg">
			                	<div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/1.jpg"><i class="fa fa-search"></i></a>
			                	</div>
			                </div>
		                </div>
                        <div class="portfolio-box t1 t1b t3">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/2.jpg" alt="" data-at2x="assets/img/portfolio/2.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/2.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1 t1b t3">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/3.jpg" alt="" data-at2x="assets/img/portfolio/3.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/3.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1 t1b t3">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/4.jpg" alt="" data-at2x="assets/img/portfolio/4.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/4.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1 t1b t3">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/5.jpg" alt="" data-at2x="assets/img/portfolio/5.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/5.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="portfolio-box t1b">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/6.jpg" alt="" data-at2x="assets/img/portfolio/6.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/6.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1b">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/7.jpg" alt="" data-at2x="assets/img/portfolio/7.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/7.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1b">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/8.jpg" alt="" data-at2x="assets/img/portfolio/8.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/8.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1b">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/9.jpg" alt="" data-at2x="assets/img/portfolio/9.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/9.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1b">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/10.jpg" alt="" data-at2x="assets/img/portfolio/10.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/10.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1b">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/11.jpg" alt="" data-at2x="assets/img/portfolio/11.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/11.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1b">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/12.jpg" alt="" data-at2x="assets/img/portfolio/12.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/12.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div> 
                        <div class="portfolio-box t1b">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/14.jpg" alt="" data-at2x="assets/img/portfolio/14.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/14.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1b">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/15.jpg" alt="" data-at2x="assets/img/portfolio/15.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/15.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="portfolio-box t1">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/16.jpg" alt="" data-at2x="assets/img/portfolio/16.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/16.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/17.jpg" alt="" data-at2x="assets/img/portfolio/17.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/17.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/18.jpg" alt="" data-at2x="assets/img/portfolio/18.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/18.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/19.jpg" alt="" data-at2x="assets/img/portfolio/19.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/19.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/20.jpg" alt="" data-at2x="assets/img/portfolio/20.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/20.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/21.jpg" alt="" data-at2x="assets/img/portfolio/21.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/21.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/22.jpg" alt="" data-at2x="assets/img/portfolio/22.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/22.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/23.jpg" alt="" data-at2x="assets/img/portfolio/23.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/23.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/24.jpg" alt="" data-at2x="assets/img/portfolio/24.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/24.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/25.jpg" alt="" data-at2x="assets/img/portfolio/25.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/25.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-box t1">
                            <div class="portfolio-box-container">
                                <img src="assets/img/portfolio/26.jpg" alt="" data-at2x="assets/img/portfolio/26.jpg">
                                <div class="portfolio-box-text">
                                    <a class="big-link-2 view-work" href="assets/img/portfolio/26.jpg"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                        </div>

                   
                        
                        
	                </div>
	            </div>
	        </div>
        </div>

         <!-- Footer -->
        <footer>
            <div class="container">
                
                <div class="row">
                    
                    <div class="col-sm-2"></div>     
                    <div class="col-sm-4 footer-box wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <h4>A propos</h4>
                        <div class="footer-box-text">
	                        <p>
	                        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
	                        	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
	                        </p>
                        </div>
                    </div>
                    <div class="col-sm-1"></div>
                    <div class="col-sm-4 footer-box wow fadeInDown animated" style="visibility: visible;animation-name: fadeInDown;/* float:  right; *//* text-align:  right; */">
                        <h4>Contactez-nous</h4>
                        <div class="footer-box-text footer-box-text-contact">
	                        <p><i class="fa fa-map-marker"></i> Addresse: 4 bis rue de la Mariette, 72100 LE MANS</p>
	                        <p><i class="fa fa-phone"></i> Téléphone: 06 13 49 32 83</p>
	                        <p><i class="fa fa-envelope"></i> Email: <a href="">contact@maisonarbre.com</a></p>
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

    </body>

</html>