<div class="col-md-4">
  <a href="{{ url('read', $blog->id) }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
    <img src="{{ asset('images/'.$blog->image)  }}" alt="Image placeholder">
    <div class="blog-content-body">
      <div class="post-meta">
        <span class="category">{{$blog->countries}}</span>
        <span class="mr-2">{{$blog->created_at}}</span> &bullet;
        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
      </div>
      <h2>{{$blog->title}}</h2>
      <p>{!!substr($blog->content,0,50)!!}...</p>

                @if (Auth::check())
                    <a class="btn btn-outline-light pull-right" href="{{url('update')}}">Update</a>
                    <a class="btn btn-link btn-custom pull-right" href="{{url('delete')}}">Delete</a>
                @else
                    
                @endif      
    </div>
  </a>
</div>
