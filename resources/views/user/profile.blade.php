@extends('template.index')
@section('content')

{{-- TODO better CSS --}}

<section class='site-section py-sm'>
    <div class="container">
        <div class="row mt-4 mb-4">
            <h3>Here are your informations
                <b>{{$user->username}}</b>:
            </h3>
        </div>
        <div class="row">
            <div class="col-4">
                Username:
            </div>
            <div class="col-8">
                {{$user->username}}
            </div>
        </div>
    </div>
</section>

@endsection
