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

@stop

@extends('template.index')
@section('content')


<section class='site-section py-sm'>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('update-profile', $user->user) }}" method="post" enctype="multipart/form-data">

                  {!! csrf_field() !!}
                    <div class="sidebar-box" style="margin-top: 60px;">
                        <div class="bio text-center">
                            @if (is_null($user->image))
                                <img src="/images/default.png" alt="Image Placeholder" class="bio img">
                            @else
                                <img src="/images/{{ $user->image }}" alt="Image Placeholder" class="img-fluid">
                            @endif
                            <div class="bio-body">
                                <div class="element-animate">
                                    <input type="file" id="inputimage" name="image" class="validate" style="margin-top:5px;" value="{{ $user->image }}"/>
                                </div>
                                <label for="name">Full Name</label>
                                <input type="text" id="name" class="form-control" name="name" value="{{ $user->name}}">
                                <label for="name">Email</label>
                                <input type="email" id="email" class="form-control" name="email" value="{{ $user->email}}">
                                <label for="name">Password</label>
                                <input type="Password" id="password" class="form-control" name="password" placeholder="enter new password" value="">
                                <label for="content">Bio <strong>*max 200 words</strong></label>
                                <textarea name="bio" id="bio" class="form-control " cols="30" rows="8">{{$user->bio}}</textarea>

                                <div class="row">
                                    <div class="col-md-12 form-group" style="margin: 5px;">
                                        <input type="submit" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>



@endsection
