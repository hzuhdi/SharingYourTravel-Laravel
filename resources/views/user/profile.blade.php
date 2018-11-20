@extends('template.index')
@section('content')

{{-- TODO add edit option --}}

<section class='site-section py-sm'>
    <div class="container mt-4 mb-4">
        <h3>Here are your information <b>{{$user->username}}</b>:</h3>
        <div class="row">
            <div class="col-md-3">
                <b>Username</b>:
            </div>
            <div class="col-md-9">
                {{$user->username}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <b>Biography</b>:
            </div>
            <div class="col-md-9">
                {{$user->bio}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <b>Posts</b>:
            </div>
            <div class="col-md-9">
                @if(count($user->blogs) > 0)
                    @foreach($user->blogs as $b)
                        {{-- TODO refactoring in components --}}
                        <div class="row blog-entries">
                            <div class="col-md-4">
                              <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                <img src="images/img_5.jpg" alt="Image placeholder">
                                <div class="blog-content-body">
                                  <div class="post-meta">
                                    <span class="category">{{$b->countries}}</span>
                                    <span class="mr-2">{{$b->created_at}}</span> &bullet;
                                    <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                                  </div>
                                  <h2>{{$b->title}}</h2>
                                  <p>{!!substr($b->content,0,50)!!}...</p>
                                </div>
                              </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <span class="text-danger py-sm">Oh nooooo... you don't have any blog post <i class="fa fa-frown-o"></i></span><br />
                    <a class="btn btn-outline-danger" href="/add">click here to share your travel story</a>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection
