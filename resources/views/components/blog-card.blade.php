<div class="col-md-4">
  <a href="{{ url('read', $blog->id) }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
      @if ($blog->image)
          <img src="{{ asset('images/'.$blog->image)  }}" alt="Image placeholder">
      @else
           <img src="{{ asset('images/default.png')}}" alt="Default image">
      @endif
    <div class="blog-content-body">
      <div class="post-meta">
        <span class="category">{{$blog->countries}}</span>
        <span class="mr-2">{{$blog->created_at->format('d.m.Y')}}</span> &bullet;
        <span class="ml-2"><span class="fa fa-comments"></span> {{$blog->comments->count()}}</span>
      </div>
      <h2>{!! substr($blog->title, 0, 32) !!}</h2>

      <p>
          {!! substr(preg_replace('/<[^>]*>/', "" , preg_replace("/<img[^>]+\>/i", "(image) ", $blog->content)), 0, 50)!!}
          ...
      </p>
      @if ($includeControls && Auth::check())
          <a class="btn btn-outline-dark pull-right" href="{{url('edit', $blog->id)}}">Update</a>
          <a class="btn btn-outline-dark pull-left" onclick="return confirm('Are you sure want to delete this post ?')" href="{{url('delete', $blog->id)}}">Delete</a>
      @endif
    </div>
    <!--Hai-->
  </a>
</div>
