@extends('layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('title', 'Galerie')

@section('main_container')

    <!-- page content -->
    <div class="right_col" role="main">
      @if(session('success'))
          <div class="alert alert-success" role="alert">
              {{ session('success') }}
              @if(session('id'))
                <a href={{ route('restoreGallery', session('id'))}} class="cancel"> Annuler</a>
              @endif
          </div>
        @endif
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Media Gallery </h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Media List</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="row">

                      @foreach($gallery as $img)
                      <div class="col-md-55">
                      <div class="thumbnail">
                          <div class="image view view-first">
                            <img style="width: 100%; display: block;" src="{{ asset('img/'.$img->name) }}" alt="image" />
                            <div class="mask">
                              <p>
                                @foreach($img->tag as $tag)
                                  {{$tag->name}}
                                @endforeach
                              </p>
                              <div class="tools tools-bottom">
                                <a href="{{ route('dropGallery', $img->id) }}"><i class="fa fa-times"></i></a>
                              </div>
                          </div>
                        </div>
                        </div>
                      </div>
                      @endforeach


                    </div>
                  </div>
                </div>
              </div>
              <div class="page-title form-title">
                <div class="title_left">
                  <h3>Image Upload </h3>
                </div>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Dropzone multiple file upload</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p>Drag multiple files to the box below for multi upload or click to select files.</p>
                    <form action="{{ route('storeGallery') }}" class="dropzone">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <select class="selectpicker" name="tags[]" multiple>
                      @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                      @endforeach
                    </select>  
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <br />
                    <br />
                    <br />
                    <br />
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
    <!-- /page content -->
@endsection

