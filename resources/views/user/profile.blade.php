@extends('template.index')
@section('content')

{{-- TODO add edit option --}}


<section class='site-section py-sm'>
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6">
            <h1><Br>Your Posts : </h1>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">

                @if(count($user->blogs) > 0)
                    <div class="row blog-entries">
                    @foreach($user->blogs as $b)
                            @component('components.blog-card')
                                @slot('blog', $b);
                                @slot('includeControls', true)
                            @endcomponent
                    @endforeach
                    </div>
                @else
                    <span class="text-danger py-sm">Oh nooooo... you don't have any blog post <i class="fa fa-frown-o"></i></span><br />
                    <a class="btn btn-outline-danger" href="/add">click here to share your travel story</a>
                @endif


          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <div class="bio text-center">
                @if (is_null($user->image))
                <img src="/images/profile.png" alt="Image Placeholder" class="bio img">
                @else
                <img src="{{ $user->image }}" alt="Image Placeholder" class="img-fluid">
                @endif
                <div class="bio-body">
                  <h2>{{$user->name}}</h2>
                  <h7>{{$user->email}}</h7>
                  <p>{{$user->bio}}</p>
                  <p><a href="/edit-profile" class="btn btn-primary btn-sm">Edit Profile</a></p>
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <!-- END sidebar-box -->
          <!-- END sidebar -->
        </div>
      </div>
    </section>



@endsection
