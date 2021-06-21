@extends('layouts.layout')

@section('content')

    <!-- Slider -->
    @include('elements.slider', ['data' => $data->slider])

    <!-- Featured -->
    @include('elements.block_feature')


    <!-- Intro -->
    @include('elements.block_introduce')


    <!-- Question ask -->
    @include('elements.question_ask', ['data' => $data->questionAsk])


    <!-- Blog carousel -->
    @include('elements.blog_carousel', ['data' => $data->blogHightLight])


    <!--Summary -->
    @include('elements.block_summary')

@endsection
