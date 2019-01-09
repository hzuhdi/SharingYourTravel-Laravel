@extends('template.index')
@section('content')


<!-- Part for carousell -->
<!--       <section class="site-section py-sm" style="margin-top: 10px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="owl-carousel owl-theme home-slider">
              
              @foreach($blogs as $b)
                @if($loop->index < 4)
                    <div>
                        @if ($b->image)
                            <a href="{{ url('read', $b->id) }}" class="a-block d-flex align-items-center height-lg" style="background-image: url('{{ asset('images/'.$b->image)  }}'); ">
                        @else
                             <a href="{{ url('read', $b->id) }}" class="a-block d-flex align-items-center height-lg" style="background-image: url('images/img_1.jpg'); ">
                        @endif
                      
                      <div class="text half-to-full">
                      <div class="post-meta">
                        <span class="category">{{$b->countries}}</span>
                        <span class="mr-2">{{$b->created_at}}</span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> {{$b->comments->count()}}</span>
                    </div>
                    <h3>{{$b->title}}</h3>
                    <p>{!!substr($b->content,0,50)!!}...</p>
                  </div>
                </a>
              </div>

              @endif

              @endforeach
            </div>
            
          </div>
        </div>
      </div>
    </section> -->
<!-- End Carousel -->


<!-- Blog card -->
<img src="/images/logo.png" class="element-animate" style="width:auto; height: 200px; text-align: center; display: block; margin-left: auto; margin-right: auto; margin-top: 10px; margin-bottom: 5px;">


@if(count($blogs) > 0)

<section class="site-section py-sm">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            @if (isset($title))
                <h2 class="mb-4"><br>{{$title}}</h2>
            @else
                <h2 class="mb-4"><br>Blogs</h2>
            @endif
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-12 main-content">
            <div class="row">

        @foreach($blogs as $b)
            @component('components.blog-card')
                @slot('blog', $b);
                @slot('includeControls', false):
            @endcomponent
        @endforeach

           </div>
</div>
</div>
</div>
</section>
{{--
        {{ $blogs->render()}}

 --}}


        @else
        <div class="text-center">
        <p>There is no post</p>
        </div>


@endif



<!-- End of blogcard -->

@stop


