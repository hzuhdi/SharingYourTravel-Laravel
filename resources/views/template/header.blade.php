    <header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-3 social">
              <a href="#"><span class="fa fa-twitter"></span></a>
              <a href="#"><span class="fa fa-facebook"></span></a>
              <a href="#"><span class="fa fa-instagram"></span></a>
              <a href="#"><span class="fa fa-youtube-play"></span></a>
              <a href="#"><span class="fa fa-vimeo"></span></a>
              <a href="#"><span class="fa fa-snapchat"></span></a>
            </div>
            <div class="col-6">
                @if (Auth::check())
                    <a class="btn btn-outline-light pull-right" href="{{url('logout')}}">Log Out</a>
                    <a class="btn btn-link btn-custom pull-right" href="{{url('profile')}}">{{Auth::user()->username}}</a>
                @else
                    <a class="btn btn-outline-light pull-right" href="{{url('login')}}">Log In</a>
                    <a class="btn btn-link btn-custom pull-right" href="{{url('register')}}">Register</a>
                @endif
            </div>
            <div class="col-3 search-top">
              <!-- <a href="#"><span class="fa fa-search"></span></a> -->
              <form action="#" class="search-top-form">
                <span class="icon fa fa-search"></span>
                <input type="text" id="s" placeholder="Type keyword to search...">
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="container logo-wrap">
        <div class="row pt-5">
          <div class="col-12 text-center">
            <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
            <h1 class="site-logo"><a href="index.html">Sharing Your Travel</a></h1>
          </div>
        </div>
      </div>

      <nav class="navbar navbar-expand-md  navbar-light bg-light">
        <div class="container">


          <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="/">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="category.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Countries</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="category.html">Asia</a>
                  <a class="dropdown-item" href="category.html">Africa</a>
                  <a class="dropdown-item" href="category.html">Europe</a>
                  <a class="dropdown-item" href="category.html">Middle East</a>
                  <a class="dropdown-item" href="category.html">North America</a>
                  <a class="dropdown-item" href="category.html">South America</a>
                </div>

              </li>

              <li class="nav-item">
                <a class="nav-link" href="blogs.html">Stories</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('add')}}">Share</a>
              </li>

            </ul>

          </div>
        </div
      </nav>
    </header>
    <!-- END header -->
