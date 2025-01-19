@extends('guest.layout')

@section('title')
: Category {{ $our_category->name }}
@endsection

@section('content')
        @if(!empty($posts) && count($posts)>0)
            <div class="frame3">
                <h1>Featured Stories</h1>
                <div class="frame3-section">
                @foreach($posts as $post)
                    <div class="card">
                        <div class="top">
                            <img
                                src="{{ asset('images/cover_images/'.$post->cover_image) }}"
                                alt=""
                            />
                        </div>
                        <div class="bottom">
                            <h5>{{ $post->category->name }}</h5>
                            <h3>{{ $post->heading }}</h3>
                            <p>
                                {{ $post->post_summary }}
                            </p>
                            <a href="{{ route('single.post',$post->id) }}">Read More</a>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            
        @else
            <div class="frame3">
                <h1 style="color:red;">No Posts exist for this category</h1>

            </div>
        @endif

@endsection