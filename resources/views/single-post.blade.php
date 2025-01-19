@extends('guest.layout')

@section('title')
: {{ $post->heading }}
@endsection

@section('content')
    <div class="frame3">
        <div style="text-align:center; margin-top:-3rem !important;">
            <h1>{{ $post->heading }}</h1>
        </div>

        <div class="frame3-section">
            <div class="container">
                <div class="row featured-image">
                    <div class="col-md-12 col-sm-12">
                        <img src="{{ asset('images/cover_images/'.$post->cover_image) }}">
                    </div>
                </div>

                <div class="row content-section">
                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </div>
@endsection