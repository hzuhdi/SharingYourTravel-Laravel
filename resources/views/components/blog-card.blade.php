<div class="col-md-4">
  <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
    <img src="images/img_5.jpg" alt="Image placeholder">
    <div class="blog-content-body">
      <div class="post-meta">
        <span class="category">{{$blog->countries}}</span>
        <span class="mr-2">{{$blog->created_at}}</span> &bullet;
        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
      </div>
      <h2>{{$blog->title}}</h2>
      <p>{!!substr($blog->content,0,50)!!}...</p>
    </div>
  </a>
</div>
