@extends('front.layout')

@section('title', 'Acceuil')

@section('home_active', 'active')

@section('content')

        
        <!-- Slider -->
        
        <div class="slider-2-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 slider-2-text wow fadeInUp">
                        <h1>La Maison Arbre</h1>
					
						@if(Auth::check())
							<div contentEditable="true" class="text-edit">
								<p data-text='1'>{{ $texts[0]->content }}</p>
							</div>
							<button data-text='1' class='btn btn-info' onclick='textValidate(this)'>
								<i class='fa fa-check'></i>
							</button>
						@else
							<p>{{ $texts[0]->content }}</p>
						@endif
                    </div>
                </div>
            </div>
        </div>
        
        
         <!-- Presentation -->
        <div class="presentation-container">
        	<div class="container">
        		<div class="row">
	        		<div class="col-sm-12 wow fadeInLeftBig">
	            		<h1>La Maison Arbre - Location d'appartements meublés</h1>

						@if(Auth::check())
							<div contentEditable="true" class="text-edit">
								<p data-text='2'>{{ $texts[1]->content }}</p>
							</div>
							<button data-text='2' class='btn btn-info' onclick='textValidate(this)'>
								<i class='fa fa-check'></i>
							</button>
						@else
							<p>{{ $texts[1]->content }}</p>
						@endif
	            	</div>
            	</div>
        	</div>
        </div>



        <!-- Services -->
        <div class="services-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-2 col-sm-push-1">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-wifi"></i></div>
		                    <h3>Internet</h3>
		                </div>
					</div>
                    <div class="col-sm-2 col-sm-push-1">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-bed"></i></div>
		                    <h3>Meublé</h3>
		                </div>
					</div>
					<div class="col-sm-2 col-sm-push-1">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-car"></i></div>
		                    <h3>Parking</h3>
		                </div>
	                </div>
	                <div class="col-sm-2 col-sm-push-1">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-camera-retro"></i></div>
		                    <h3>Laverie</h3>
		                </div>
	                </div>
	                <div class="col-sm-2 col-sm-push-1">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-magic"></i></div>
		                    <h3>Menage</h3>
		                </div>
	                </div>
	            </div>
	        </div>
        </div>
        

        <!-- Latest work -->
        <div class="work-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 work-title wow fadeIn">
		                <h2>Les différents appartements</h2>
		            </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-4">
		                <div class="work wow fadeInUp">
		                    <img src="{{ asset('front/img/home/11.jpg') }}" alt="T1" data-at2x="{{ asset('front/img/home/11.jpg') }}">
		                    <h3>Appartement T1 30m2</h3>

							@if(Auth::check())
								<div contentEditable="true" class="text-edit">
									<p data-text='3'>{{ $texts[2]->content }}</p>
								</div>
								<button data-text='3' class='btn btn-info' onclick='textValidate(this)'>
									<i class='fa fa-check'></i>
								</button>
							@else
								<p>{{ $texts[2]->content }}</p>
							@endif

		                    <div class="work-bottom">
		                        <a class="big-link-2 view-work" href="{{ asset('front/img/home/11.jpg') }}"><i class="fa fa-plus"></i></a>
		                    </div>
		                </div>
	                </div>
	                <div class="col-sm-4">
		                <div class="work wow fadeInDown">
		                    <img src="{{ asset('front/img/home/17.jpg') }}" alt="T1b" data-at2x="{{ asset('front/img/home/17.jpg') }}">
		                    <h3>Appartement traversant T1bis 30m2</h3>

							@if(Auth::check())
								<div contentEditable="true" class="text-edit">
									<p data-text='4'>{{ $texts[3]->content }}</p>
								</div>
								<button data-text='4' class='btn btn-info' onclick='textValidate(this)'>
									<i class='fa fa-check'></i>
								</button>
							@else
								<p>{{ $texts[3]->content }}</p>
							@endif

		                    <div class="work-bottom">
		                        <a class="big-link-2 view-work" href="{{ asset('front/img/home/17.jpg') }}"><i class="fa fa-plus"></i></a>
		                    </div>
		                </div>
		            </div>
		            <div class="col-sm-4">
		                <div class="work wow fadeInUp">
		                    <img src="{{ asset('front/img/home/1.jpg') }}" alt="T3" data-at2x="{{ asset('front/img/home/1.jpg') }}">
		                    <h3>Appartement 80m2 T3</h3>

							@if(Auth::check())
								<div contentEditable="true" class="text-edit">
									<p data-text='5'>{{ $texts[4]->content }}</p>
								</div>
								<button data-text='5' class='btn btn-info' onclick='textValidate(this)'>
									<i class='fa fa-check'></i>
								</button>
							@else
								<p>{{ $texts[4]->content }}</p>
							@endif

		                    <div class="work-bottom">
		                        <a class="big-link-2 view-work" href="{{ asset('front/img/home/1.jpg') }}"><i class="fa fa-plus"></i></a>
		                    </div>
		                </div>
		            </div>
	            </div>
	        </div>
        </div>
        
@endsection