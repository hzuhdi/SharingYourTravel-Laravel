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
                {{-- TODO show user posts here --}}
            </div>
        </div>
    </div>
</section>

@endsection
