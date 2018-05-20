@extends('layouts.blank')

@push('stylesheets')
    <!-- Example -->
    <!--<link href=" <link href="{{ asset("css/myFile.min.css") }}" rel="stylesheet">" rel="stylesheet">-->
@endpush

@section('title', 'Appartements')

<script>var id = 0</script>

@section('main_container')

    <!-- page content -->
     <div class="right_col" role="main">
        @if(session('success'))
          <div class="alert alert-success" role="alert">
              {{ session('success') }}
          </div>
        @endif
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Appartements</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            @foreach($apparts as $appart)
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>{{ $appart->name }}</h2>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                      <table id="table" class="table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($appart->field as $field)
                            <tr>
                              <td>{{ $field->name }}</td>
                              <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editModal" onclick='action({{ $field->id }}, "{{ $field->name }}")'><small>Edit</small></button>
                                <a href={{route('dropField', $field->id)}} class="btn btn-danger"><small>Delete</small></a>
                              </td>
                            </tr>
                          @endforeach
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{ route('apparts') }}" method="POST">
                            <tr>
                                <td>
                                  
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="hidden" name="appart" value="{{ $appart->id }}">
                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                      <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                              
                                </td>
                                <td>
                                  <button type="submit" class="btn btn-info"><small>Add</small></button>
                                </td> 
                              </tr>
                            </form>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach



        <!-- Modal -->
        <div id="editModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit the tag</h4>
              </div>
              <form id="edit-form" method='post'>
                <div class="modal-body">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="edit-name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>

          </div>
        </div>


    <!-- /page content -->
@endsection

<script>

function action(id, name){
  document.getElementById('edit-form').action = './apparts/edit/'+id;
  document.getElementById('edit-name').value = name;
}

</script>