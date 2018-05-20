@extends('front.layout')

@section('title', 'Galerie')

@section('galerie_active', 'active')

@section('content')
        
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-camera"></i>
                        @if(Auth::check())
                            <h1 data-text='14' contentEditable="true" class="text-edit">
                                {{ $texts[13]->content }}
                            </h1>
                            <button data-text='14' class='btn btn-info' onclick='textValidate(this)'>
                                <span class='fa fa-check'></span>
                            </button>
                        @else
                            <h1>{{ $texts[13]->content }}</h1>
                        @endif
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
                        @foreach($tags as $tag)
                            <a href="#" class="filter-{{ str_replace(' ', '-', $tag->name) }}">{{ $tag->name }}</a> / 
                        @endforeach
	            	</div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">

                        @foreach($gallery as $img)
                            <div class="portfolio-box
                                @foreach($img->tag as $tag)
                                  {{ str_replace(' ', '-', $tag->name) }}
                                @endforeach
                            
                            ">
                                <div class="portfolio-box-container">
                                    <img src="{{ asset('img/'.$img->name) }}" alt="" data-at2x="{{ asset('img/'.$img->name) }}">
                                    <div class="portfolio-box-text">
                                        <a class="big-link-2 view-work" href="{{ asset('img/'.$img->name) }}"><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                            </div>

                            <!-- {{ foreach($img->tag as $tag){str_replace(' ', '-',$tag->name)} } -->
                        @endforeach


                   
                        
                        
	                </div>
	            </div>
	        </div>
        </div>

@endsection