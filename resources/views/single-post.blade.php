@extends('guest.layout')

@section('title')
: {{ $post->heading }}
@endsection

@section('content')
    <div class="frame3" style="background: #001000;">
        <div class="container" 
        style="background:#fff; 
        margin-top:1.5rem; margin-bottom: 1.5rem;
        border-radius:0.6rem;
        padding:1rem">

        <div style="text-align:center;">
            <h1 style="color:#001000">{{ $post->heading }}</h1>
        </div>
        <hr>

                    <div class="row" style="text-align: center;">
                        <div class="col-md-12 col-sm-12">
                            <img class="img-fluid" src="{{ asset('images/cover_images/'.$post->cover_image) }}">
                        </div>
                    </div>
                    <hr>

                    <div class="row content-section">
                        {!! $post->body !!}
                    </div>

        </div>
    </div>
@endsection