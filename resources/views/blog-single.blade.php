@extends('template.index')
@section('content')

    <!-- END header -->

    <section class="site-section py-md">

      <div class="container">
        
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <h1 class="mb-4">{{$b->title}}</h1>
            <div class="post-meta">
                        <span class="category">{{$b->countries}}</span>
                        <span class="mr-2">{{$b->created_at}}</span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> {{$b->comments->count()}}</span>
                      </div>
            <div class="post-content-body">
              <p>{!!$b->content!!}</p>

            <div class="row mb-5">
              <div class="col-md-12 mb-4 element-animate">
                <img src="{{ asset('images/'.$b->image)  }}" alt="Image placeholder" class="img-fluid">
              </div>
              </div>
            </div>
            <p><a href="{{url('exportpdf', $b->id)}}" onclick="return confirm('Are you sure want to export this post to pdf ? this may take a few moments')" class="btn btn-primary btn-sm">Download as PDF</a></p>
            <hr />
            <!-- Component for showing comment -->
            @component('comment.comment-single')
              @slot('b', $b);
            @endcomponent
            </div>
            <!-- Component for author-->
            @component('comment.authorbox-blog-single')
              @slot('b', $b);
            @endcomponent


          </div>
        </div>
      </div>
    </section>



    <!-- END section -->

    <!-- form for comment -->
@if (Auth::check())
<div class="container" style="margin-bottom: 10px;">
<div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="{{ url('store-comment')}}" class="p-5 bg-light" method="post">
                  {!! csrf_field() !!}
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="commentcontent" id="message" cols="30" rows="5" class="form-control"></textarea>
                    <input type="hidden" name="blogid" value="{{ $b->id }}" />
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary">
                  </div>

                </form>
              </div>
            </div>
          </div>
        </div>
@else
<div class="container" style="margin-bottom: 10px;">
<div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <h4>*Please Login for comment </h4>
                <form action="#" class="p-5 bg-light">
                  <fieldset disabled="disabled">
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="" id="message" cols="30" rows="5" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" class="btn btn-primary">
                  </div>
                </fieldset>
                </form>
              </div>
            </div>
          </div>
        </div>
                    
@endif





 @stop 
    