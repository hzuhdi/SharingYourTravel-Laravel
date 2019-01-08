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
</script>
<script type="text/javascript">

    $(document).ready(function() {
    $(".users").select2();
});

</script>

@stop
@push('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
@endpush


@extends('admin.layout.app')
@section('content')


<!-- <div class="main-panel">
        <div class="content-wrapper">
<section class="site-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6">
            <h1 style="margin: 5px;">Edit Blog</h1>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">

            <form action="{{ url('blog-update', $data->id) }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}
                <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="title">Title</label>
                      <input type="text" id="title" class="form-control" name="title" value="{{ $data->title }}">
                    </div>
                </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Countries</label>
                      <select class="form-control" name="countries" id="countries" value="{{ $data->countries }}">
                        <option value="Asia">Asia</option>
                        <option value="Africa">Africa</option>
                        <option value="Europe">Europe</option>
                        <option value="Middle East">Middle East</option>
                        <option value="South Americe">South America</option>
                        <option value="North America">North America</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                     <label for="images">Images</label>
                     <div class="element-animate">
                         @if ($data->image)
                             <img src="{{ asset('images/'.$data->image)}}" alt="Image placeholder" id="showimage" style="max-width:200px;max-height:200px;float:left;">
                         @else
                             no image for this blog post..
                         @endif
                      </div>
                      <div class="element-animate">
                        <input type="file" id="inputimage" name="image" class="validate" style="margin-top:5px;" value="{{ $data->image }}"/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
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
                    <div class="col-md-4 form-group">
                      <input type="submit" class="btn btn-primary">
                    </div>
                    <div class="col-md-4 form-group" style="text-align: center;">
                        <button type="reset" class="btn btn-danger">
                                    Reset
                        </button>
                    </div>
                    <div class="col-md-4 form-group" style="text-align: right;">

                        <a href="{{route('admin-blog')}}" class="btn btn-light pull-right">Back</a>
                    </div>
                  </div>
                </form>


          </div>
      </div>
     </div>
    </section>
</div>
</div> -->
<div class="main-panel">
<div class="content-wrapper">
<form action="{{ url('blog-update', $data->id) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
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
                                <input id="title" type="text" class="form-control" name="title" value="{{ $data->title }}" required>
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
</div>
</div>
@endsection