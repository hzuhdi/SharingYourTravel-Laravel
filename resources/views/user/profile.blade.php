@section('js')
<script type="text/javascript">

      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#showimage').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputimage").change(function () {
        readURL(this);
    });

</script>
<script>
      $(document).ready(function() {
      $('#summernote').summernote();
      });
</script>

@stop

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
                    <br />
                @else
                    <span class="text-danger py-sm">Oh nooooo... you don't have any blog post <i class="fa fa-frown-o"></i></span><br />
                    <a class="btn btn-outline-danger" href="/add">click here to share your travel story</a>
                @endif


          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
          <div class="sidebar-box">
          <h3 class="text-center">Profile</h3>
              <div class="bio text-center">
                @if(is_null($user->image))
                <img src="/images/profile.png" alt="Image Placeholder" class="img-fluid" style="border-radius: 50%; width: 100px; margin-top: 10px;">
                @else
                <img src="/images/{{ $b->user->image }}" alt="Image Placeholder" class="img-fluid" style="border-radius: 50%; width: 100px; margin-top: 10px;">
                @endif
                <div class="bio-body">
                  <h2>{{ $user->name }}</h2>
                  @if (is_null($user->bio))
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem facilis sunt repellendus excepturi beatae</p>
                  @else
                    <p>{{ $b->user->bio }}</p>
                  @endif
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
        </div>

      </div>
    </section>



@endsection
