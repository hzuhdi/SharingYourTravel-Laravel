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

@stop

@push('styles')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>
@endpush

@extends('template.index')
@section('content')


<section class="site-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6">
            <h1>Add Your Stories</h1>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">

            <form action="{{ url('update', $showEdit->id) }}" method="post" enctype="multipart/form-data">
            	{!! csrf_field() !!}
            	<div class="row">
            		<div class="col-md-12 form-group">
                      <label for="title">Title</label>
                      <input type="text" id="title" class="form-control" name="title" value="{{ $showEdit->title }}">
                    </div>
                </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Countries</label>
                      <select class="form-control" name="countries" id="countries" value="{{ $showEdit->countries }}">
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
                         @if ($showEdit->image)
                             <img src="{{ asset('images/'.$showEdit->image)}}" alt="Image placeholder" id="showimage" style="max-width:200px;max-height:200px;float:left;">
                         @else
                             no image for this blog post..
                         @endif
                      </div>
                      <div class="element-animate">
                        <input type="file" id="inputimage" name="image" class="validate" style="margin-top:5px;" value="{{ $showEdit->image }}"/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="content">Content</label>
                      <textarea id="summernote" name="content">{{$showEdit->content}}</textarea>
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
                      <input type="submit" class="btn btn-primary">
                    </div>
                  </div>
                </form>


          </div>
      </div>
     </div>
    </section>

@stop
