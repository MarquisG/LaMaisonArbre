@extends('front.layout')

@section('title', 'Contact')

@section('contact_active', 'active')

@section('content')
        
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-envelope"></i>
                        @if(Auth::check())
                            <h1 data-text='16' contentEditable="true" class="text-edit">
                                {{ $texts[15]->content }}
                            </h1>
                            <button data-text='16' class='btn btn-info' onclick='textValidate(this)'>
                                <span class='fa fa-check'></span>
                            </button>
                        @else
                            <h1>{{ $texts[15]->content }}</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-7 contact-form wow fadeInLeft">
	                    @if(Auth::check())
                            <p data-text='17' contentEditable="true" class="text-edit">
                                {{ $texts[16]->content }}
							</p>
                            <button data-text='17' class='btn btn-info' onclick='textValidate(this)'>
                                <span class='fa fa-check'></span>
                            </button>
                        @else
                            <p>{{ $texts[16]->content }}</p>
                        @endif
	                    <form role="form" action="assets/sendmail.php" method="post">
	                    	<div class="form-group">
	                    		<label for="contact-name">Nom Prénom</label>
	                        	<input type="text" name="name" placeholder="Entrer votre nom..." class="contact-name" id="contact-name">
	                        </div>
	                    	<div class="form-group">
	                    		<label for="contact-email">Email</label>
	                        	<input type="text" name="email" placeholder="Entrer votre email..." class="contact-email" id="contact-email">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-subject">Object</label>
	                        	<input type="text" name="subject" placeholder="Votre objet..." class="contact-subject" id="contact-subject">
	                        </div>
	                        <div class="form-group">
	                        	<label for="contact-message">Message</label>
	                        	<textarea name="message" placeholder="Votre message..." class="contact-message" id="contact-message"></textarea>
	                        </div>
	                        <button type="submit" class="btn">Envoyer</button>
	                    </form>
	                </div>
	                <div class="col-sm-5 contact-address wow fadeInUp">
	                    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2669.6922790881986!2d0.20201061604122558!3d48.0003337792127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e28f2b385d0775%3A0x43c18a8ee4cb81c3!2s4+Bis+Rue+de+la+Mariette%2C+72100+Le+Mans!5e0!3m2!1sfr!2sfr!4v1518905877422" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>
	                    <h3>Addresse</h3>
	                    @if(Auth::check())
                            <p data-text='18' contentEditable="true" class="text-edit">
                                {{ $texts[17]->content }}
							</p>
                            <button data-text='18' class='btn btn-info' onclick='textValidate(this)'>
                                <span class='fa fa-check'></span>
                            </button>
                        @else
                            <p>{{ $texts[17]->content }}</p>
						@endif
						
						@if(Auth::check())
                            <p data-text='19' contentEditable="true" class="text-edit">
                                {{ $texts[18]->content }}
							</p>
                            <button data-text='19' class='btn btn-info' onclick='textValidate(this)'>
                                <span class='fa fa-check'></span>
                            </button>
                        @else
                            <p>{{ $texts[18]->content }}</p>
						@endif
						
						@if(Auth::check())
                            <p data-text='20' contentEditable="true" class="text-edit">
                                {{ $texts[19]->content }}
							</p>
                            <button data-text='20' class='btn btn-info' onclick='textValidate(this)'>
                                <span class='fa fa-check'></span>
                            </button>
                        @else
                            <p>{{ $texts[19]->content }}</p>
                        @endif

	                </div>
	            </div>
	        </div>
        </div>

@endsection