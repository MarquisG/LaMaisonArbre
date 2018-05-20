@extends('front.layout')

@section('title', 'Acceuil')

@section('home_active', 'active')

@section('content')

        
        <!-- Slider -->
        
        <div class="slider-2-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 slider-2-text wow fadeInUp">
						
						@if(Auth::check())
							<h1 data-text='11' contentEditable="true" class="text-edit">
								{{ $texts[10]->content }}
							</h1>
							<button data-text='11' class='btn btn-info' onclick='textValidate(this)'>
								<i class='fa fa-check'></i>
							</button>
						@else
							<h1>{{ $texts[10]->content }}</h1>
						@endif
					
						@if(Auth::check())
							<p data-text='1' contentEditable="true" class="text-edit">
								{{ $texts[0]->content }}
							</p>
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
						
						@if(Auth::check())
							<h1 data-text='10' contentEditable="true" class="text-edit">
								{{ $texts[9]->content }}
							</h1>
							<button data-text='10' class='btn btn-info' onclick='textValidate(this)'>
								<i class='fa fa-check'></i>
							</button>
						@else
							<h1>{{ $texts[9]->content }}</h1>
						@endif

						@if(Auth::check())
							<p data-text='2' contentEditable="true" class="text-edit">
								{{ $texts[1]->content }}
							</p>
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

							@if(Auth::check())
								<h3 data-text='7' contentEditable="true" class="text-edit">
									{{ $texts[6]->content }}
								</h3>
								<button data-text='7' class='btn btn-info' onclick='textValidate(this)'>
									<i class='fa fa-check'></i>
								</button>
							@else
								<h3>{{ $texts[6]->content }}</h3>
							@endif

							@if(Auth::check())
								<p data-text='3' contentEditable="true" class="text-edit">
									{{ $texts[2]->content }}
								</p>
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
							
							@if(Auth::check())
								<h3 data-text='8' contentEditable="true" class="text-edit">
									{{ $texts[7]->content }}
								</h3>
								<button data-text='8' class='btn btn-info' onclick='textValidate(this)'>
									<i class='fa fa-check'></i>
								</button>
							@else
								<h3>{{ $texts[7]->content }}</h3>
							@endif

							@if(Auth::check())
								<p data-text='4' contentEditable="true" class="text-edit">
									{{ $texts[3]->content }}
								</p>
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
							
							@if(Auth::check())
								<h3 data-text='9' contentEditable="true" class="text-edit">
									{{ $texts[8]->content }}
								</h3>
								<button data-text='9' class='btn btn-info' onclick='textValidate(this)'>
									<i class='fa fa-check'></i>
								</button>
							@else
								<h3>{{ $texts[8]->content }}</h3>
							@endif


							@if(Auth::check())
								<p data-text='5' contentEditable="true" class="text-edit">
									{{ $texts[4]->content }}
								</p>
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