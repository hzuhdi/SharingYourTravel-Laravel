@extends('template.index')
@section('content')

    <!-- END header -->

    <section class="site-section py-lg">

      <div class="container">
        
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <h1 class="mb-4">{{$b->title}}</h1>
            <div class="post-meta">
                        <span class="category">{{$b->countries}}</span>
                        <span class="mr-2">{{$b->created_at}}</span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
            <div class="post-content-body">
              <p>{{$b->content}}</p>

            <div class="row mb-5">
              <div class="col-md-12 mb-4 element-animate">
                <img src="{{ asset('images/'.$b->image)  }}" alt="Image placeholder" class="img-fluid">
              </div>
              </div>
            </div>
            <p></p>
            </div>
            <!-- Will be showing the author -->
            @component('comment.authorbox-blog-single')
            @endcomponent
          </div>
        </div>
      </div>
    </section>

    <!-- END section -->

    <!-- form for comment -->
    @component('comment.comment-box')
    @endcomponent





 @stop 
    