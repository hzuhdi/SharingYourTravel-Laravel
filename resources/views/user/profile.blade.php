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
                    <div class="row blog-entries">
                    @foreach($user->blogs as $b)
                            @component('components.blog-card')
                                @slot('blog', $b);
                            @endcomponent
                    @endforeach
                    </div>
                @else
                    <span class="text-danger py-sm">Oh nooooo... you don't have any blog post <i class="fa fa-frown-o"></i></span><br />
                    <a class="btn btn-outline-danger" href="/add">click here to share your travel story</a>
                @endif
            </div>
        </div>
    </div>
</section>

@endsection
