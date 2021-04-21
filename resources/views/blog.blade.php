@extends('layouts.layout')

@section('title', $data->title)
@section('keywords', $data->tag)
@section('description', $data->meta_descrtion)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
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
