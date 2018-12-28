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

<form action="{{ route('blog-update', $data->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
<div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Edit Blog</h4>

                      
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Title</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="nama" value="{{ $data->title }}" required>
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('countries') ? ' has-error' : '' }}">
                            <label for="level" class="col-md-4 control-label">Countries</label>
                            <div class="col-md-6">
                            <select class="form-control" name="countries" required="">
                                <option value=""></option>
                                <option value="Asia" {{$data->countries === "Asia" ? "selected" : ""}}>Asia</option>
                                <option value="Europe" {{$data->countries === "Europe" ? "selected" : ""}}>Europe</option>
                                <option value="Middle East" {{$data->countries === "Middle East" ? "selected" : ""}}>Middle East</option>
                                <option value="North America" {{$data->countries === "North America" ? "selected" : ""}}>North America</option>
                                <option value="South America" {{$data->countries === "South America" ? "selected" : ""}}>South America</option>
                            </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 form-group">
                              <label for="content">Content</label>
                              <textarea id="summernote" name="content">{{$data->content}}</textarea>
                                <script>
                                  $('#summernote').summernote({
                                    placeholder: 'Content',
                                    tabsize: 2,
                                    height: 300
                                  });
                                </script>
                            </div>
                          </div>

                          <div class="row">
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