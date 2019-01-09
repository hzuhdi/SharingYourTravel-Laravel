@extends('template.index')
@section('content')

@if(count($result))

<section class="site-section py-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-4"><br>Blogs Finding Result : <b>{{$query}}</b></h2>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-12 main-content">
            <div class="row">

        @foreach($result as $blog)

        <div class="col-md-4">
        <a href="{{ url('read', $blog->id) }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
          @if ($blog->image)
              <img src="{{ asset('images/'.$blog->image)  }}" alt="Image placeholder">
          @else
               <img src="{{ asset('images/default.png')}}" alt="Default image">
          @endif
        <div class="blog-content-body">
        <div class="post-meta" style="height: 70px; margin: 1px;">
        <span class="category">{{$blog->countries}}</span>
        <span class="mr-2">{{$blog->created_at->format('d.m.Y')}}</span> &bullet;
        <span class="ml-2"><span class="fa fa-comments"></span> {{$blog->comments->count()}}</span>
        </div>
        <div style="height: 70px; margin: 1px;">
        <h2>{!! substr($blog->title, 0, 32) !!}</h2>
        </div>

        <p>
          {!! substr(preg_replace('/<[^>]*>/', "" , preg_replace("/<img[^>]+\>/i", "(image) ", $blog->content)), 0, 50)!!}
          ...
        </p>
    </div>
    <!--Hai-->
  </a>
</div>
        
              <!-- <div class="col-md-4">
                  <img src="/images/img_5.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      
                  </div>
                </a>
              </div> -->

        @endforeach

           </div>


</div>
</div>
</div>
</section>


        {{ $result->render()}}


        @else
        <p>Blogs not found!</p>

 
@endif

</body>    

@stop