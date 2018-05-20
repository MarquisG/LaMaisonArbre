@extends('front.layout')

@section('title', 'Appartements')

@section('appartements_active', 'active')

@section('content')
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
						<i class="fa fa-building"></i>
						
						@if(Auth::check())
                            <h1 data-text='15' contentEditable="true" class="text-edit">
                                {{ $texts[14]->content }}
                            </h1>
                            <button data-text='15' class='btn btn-info' onclick='textValidate(this)'>
                                <span class='fa fa-check'></span>
                            </button>
                        @else
                            <h1>{{ $texts[14]->content }}</h1>
                        @endif

                    </div>
                </div>
            </div>
        </div>

        <!-- Appartements -->
        <div class="pricing-1-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 pricing-1-title wow fadeIn">
		                <h2>5 Appartements</h2>
		            </div>
	            </div>
	            <div class="row">
	            	
	            	<div class="col-sm-4 pricing-1-box wow fadeInUp">
                		<div class="pricing-1-box-inner">
		                	<div class="pricing-1-box-price">
							<strong>{{ $apparts[0]->name }}</strong>
		                	</div>
		                    <div class="pricing-1-box-features">
		                    	<ul>
									@foreach($apparts[0]->field as $field)
		                    			<li>{{ $field->name }}</li>
									@endforeach
		                    	</ul>
		                    </div>
		                    <div class="pricing-1-box-sign-up">
		                    	<a class="big-link-3" href={{ route('contact') }}>Contact us Now</a>
		                    </div>
	                    </div>
                    </div>
                    <div class="col-sm-4 pricing-1-box pricing-1-box-best wow fadeInDown">
                		<div class="pricing-1-box-inner">
		                	<div class="pricing-1-box-price">
		                		<strong>{{ $apparts[1]->name }}</strong>
		                	</div>
		                    <div class="pricing-1-box-features">
		                    	<ul>
		                    		@foreach($apparts[1]->field as $field)
		                    			<li>{{ $field->name }}</li>
									@endforeach
		                    	</ul>
		                    </div>
		                    <div class="pricing-1-box-sign-up">
		                    	<a class="big-link-3" href={{ route('contact') }}>Contact us Now</a>
		                    </div>
	                    </div>
                    </div>
                    <div class="col-sm-4 pricing-1-box wow fadeInUp">
                		<div class="pricing-1-box-inner">
		                	<div class="pricing-1-box-price">
		                		<strong>{{ $apparts[2]->name }}</strong>
		                	</div>
		                    <div class="pricing-1-box-features">
		                    	<ul>
		                    		@foreach($apparts[2]->field as $field)
		                    			<li>{{ $field->name }}</li>
									@endforeach
		                    	</ul>
		                    </div>
		                    <div class="pricing-1-box-sign-up">
		                    	<a class="big-link-3" href={{ route('contact') }}>Contact us Now</a>
		                    </div>
	                    </div>
                    </div>
	            </div>
	        </div>
        </div>

@endsection