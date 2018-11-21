@extends('template.index')
@section('content')

@if(count($blogs))

<section class="site-section py-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-4"><br>Blogs</h2>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-12 main-content">
            <div class="row">

        @foreach($blogs as $b)
            @component('components.blog-card')
                @slot('blog', $b);
            @endcomponent
        @endforeach

           </div>
</div>
</div>
</div>
</section>

<div class="fixed-action-btn horizontal" style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">add</i>
    </a>
  </div>

        @else
        <p>There is no post</p>


@endif

@stop
