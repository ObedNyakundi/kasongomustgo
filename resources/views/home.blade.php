@extends('guest.layout')

@section('content')
              <!-- hero section -->
            <div class="frame2">
                <div class="frame2-section">
                @if(!empty($slider_post) && count($slider_post)>0)

                @foreach($slider_post as $onepost)
                <h1>{{ $onepost->heading }}</h1>
                    <p>{{ $onepost->post_summary }}</p>
                    <a href="#">
                        <span>Learn More</span>
                        <span class="material-symbols-outlined"
                            >arrow_forward</span
                        >
                    </a>
                @endforeach

                @else
                    <h1>Ruto Must Go</h1>
                    <p>If Kenya must change, Ruto must go first</p>
                    <a href="#">
                        <span>Latest Updates</span>
                        <span class="material-symbols-outlined"
                            >arrow_forward</span
                        >
                    </a>
                @endif
                </div>
            </div>
            <!-- end of hero section -->
            
            <!-- featured stories -->
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
                <h1>Featured Stories</h1>
                <div class="frame3-section">
                    <div class="card">
                        <div class="top">
                            <img
                                src="{{ asset('landing/Assets/tq_blzp55lz-d-z3i-200h.png') }}"
                                alt=""
                            />
                        </div>
                        <div class="bottom">
                            <h5>Politics</h5>
                            <h3>The State of Democracy</h3>
                            <p>
                                An in-depth analysis of Kenya'sdemocratic
                                journey and currentchallenges
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="top">
                            <img
                                src ="{{ asset('landing/Assets/tq_httdwkskzj-oll-400w.png') }}"
                                alt=""
                            />
                        </div>
                        <div class="bottom">
                            <h5>Economy</h5>
                            <h3>Economic Reforms</h3>
                            <p>
                                Understanding the impact of recenteconomic
                                policies on daily life.
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="top">
                            <img
                                src="{{ asset('landing/Assets/tq_vumowcotjv-c1ed-400w.png') }}"
                                alt=""
                            />
                        </div>
                        <div class="bottom">
                            <h5>Gen z protest</h5>
                            <h3>Youth Movement</h3>
                            <p>
                                How young Kenyans are driving social change
                                across the nation.
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif
            <!-- end of featured stories -->
@endSection