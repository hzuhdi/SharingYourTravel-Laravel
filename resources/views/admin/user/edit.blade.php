@section('js')
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showimage').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputimage").change(function () {
        readURL(this);
    });

    $(document).ready(function() {
    $(".users").select2();
});

</script>
@stop

@extends('admin.layout.app')

@push('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
@endpush

@section('content')

<form action="{{ route('user-update', $data->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Edit User</h4>

                      
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Email</label>
                            <div class="col-md-10">
                                <input id="email" type="rmail" class="form-control" name="nama" value="{{ $data->email }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $data->name }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
                            <label for="bio" class="col-md-4 control-label">Bio</label>
                            <div class="col-md-10">
                                <input id="bio" type="text" class="form-control" name="bio" value="{{ $data->bio }}">
                                @if ($errors->has('bio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="level" class="col-md-4 control-label">User Type</label>
                            <div class="col-md-10">
                            <select class="form-control" name="type" required="">
                                <option value=""></option>
                                <option value="admin" {{$data->type === "admin" ? "selected" : ""}}>admin</option>
                                <option value="default" {{$data->type === "default" ? "selected" : ""}}>default</option>
                            </select>
                            </div>
                        </div>

                        <div class="col-md-6 form-group">
                             <label for="images">Image</label>
                             <div class="element-animate">
                                @if($data->image)
                                <img src="{{ asset('images/'.$data->image)}}" alt="Image placeholder" id="showimage" style="max-width:200px;max-height:200px;float:left;">
                                @else
                              <img src="http://placehold.it/100x100" alt="Image placeholder" id="showimage" style="max-width:200px;max-height:200px;float:left;">
                              @endif
                              </div>
                              <div class="element-animate">
                                <input type="file" id="inputimage" name="image" class="validate" style="margin-top:5px;"/ >
                              </div>
                        </div>

                        

                        <button type="submit" class="btn btn-primary" id="submit">
                                    Update
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>
                        <a href="{{route('admin')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>
</form>
@endsection