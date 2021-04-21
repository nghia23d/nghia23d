@extends('layouts.layout')

@section('title', $data->title)
@section('keywords', $data->tag)
@section('description', $data->meta_description)

@section('content')
    <div class="slider-area mb-5">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2> <a style="color: black" href="/blog.html">Blog</a>  / {{ $data->title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{ $data->thumbnail }}" alt="">
                    </div>
                    <div class="blog_details">
                        <h1>
                            {{ $data->title }}
                        </h1>
                        <ul class="blog-info-link mt-3 mb-4">
                            <li><a href="#"><i class="fa fa-user"></i> {{ $data->user->name }} </a></li>
                        </ul>
                        <div class="content">
                            {!! $data->content !!}
                        </div>
                    </div>
                </div>

                <div class="blog-author mt-5">
                    <div class="media align-items-center">
                        <img width="120" src="https://avatars.githubusercontent.com/u/59638642?v=4" alt="Nghia23d">
                        <div class="media-body ml-3">
                            <a href="#">
                                <h4>Nghia23d</h4>
                            </a>
                            <p>
                                Yêu thích lập trình và hưởng thụ cuộc sống!
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4">
                @include('elements.tags', ['tags' => $data->tag_array])
            </div>
        </div>
    </div>
@endsection
