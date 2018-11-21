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

            <form action="{{ url('store') }}" method="post">
            	{!! csrf_field() !!}
            	<div class="row">
            		<div class="col-md-12 form-group">
                      <label for="title">Title</label>
                      <input type="text" id="title" class="form-control" name="title">
                    </div>
                </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="phone">Picture</label>
                      <input type="text" id="picture" class="form-control" name="picture">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="email">Countries</label>
                      <input type="text" id="countries" class="form-control" name="countries">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="content">Content</label>
                      <textarea name="content" id="message" class="form-control " cols="30" rows="8"></textarea>
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
