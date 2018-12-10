<!DOCTYPE html>
<html>
<head>
	<title>SYT Sharing Your Travel!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">

    <link rel="stylesheet" href="/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- include libraries(jQuery, bootstrap) -->
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 


<!-- include summernote css/js -->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.css" rel="stylesheet">


</head>

<section class="site-section">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6">
            <h1>Add Your Stories</h1>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">

            <form action="{{ url('store') }}" method="post" enctype="multipart/form-data">
            	{!! csrf_field() !!}
            	<div class="row">
            		<div class="col-md-12 form-group">
                      <label for="title">Title</label>
                      <input type="text" id="title" class="form-control" name="title">
                    </div>
                </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Countries</label>
                      <select class="form-control" name="countries" id="countries">
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
                      <img src="http://placehold.it/100x100" alt="Image placeholder" id="showimage" style="max-width:200px;max-height:200px;float:left;">
                      </div>
                      <div class="element-animate">
                        <input type="file" id="inputimage" name="image" class="validate" style="margin-top:5px;"/ >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="content">Content</label>
                      <textarea name="content" id="content" class="form-control " cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                        <textarea id="summernote" name="editordata"></textarea>
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

<footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>Paragraph</h3>
            <p>
              <img src="/images/img_1.jpg" alt="Image placeholder" class="img-fluid">
            </p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, accusantium optio unde perferendis eum illum voluptatibus dolore tempora, consequatur minus asperiores temporibus reprehenderit.</p>
          </div>
          <div class="col-md-6 ml-auto">
            <div class="row">
              <div class="col-md-7">
                <h3>Latest Post</h3>
                <div class="post-entry-sidebar">
                  <ul>
                    <li>
                      <a href="">
                        <img src="/images/img_6.jpg" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                          <div class="post-meta">
                            <span class="mr-2">March 15, 2018 </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <img src="/images/img_3.jpg" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                          <div class="post-meta">
                            <span class="mr-2">March 15, 2018 </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="">
                        <img src="/images/img_4.jpg" alt="Image placeholder" class="mr-4">
                        <div class="text">
                          <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
                          <div class="post-meta">
                            <span class="mr-2">March 15, 2018 </span> &bullet;
                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-1"></div>

              <div class="col-md-4">

                <div class="mb-5">
                  <h3>Quick Links</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Adventure</a></li>
                    <li><a href="#">Courses</a></li>
                    <li><a href="#">Categories</a></li>
                  </ul>
                </div>

                <div class="mb-5">
                  <h3>Social</h3>
                  <ul class="list-unstyled footer-social">
                    <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                    <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                    <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                    <li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
                    <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                    <li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
    </footer>

    <!-- END footer -->

    <!-- Loader -->
        <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/jquery-migrate-3.0.0.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/jquery.waypoints.min.js"></script>
    <script src="/js/jquery.stellar.min.js"></script>

    
    @section('js')

    @show

    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
</script>


    <script src="/js/main.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
    
  </body>
</html>
