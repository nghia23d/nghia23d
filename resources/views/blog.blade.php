@extends('layouts.layout')

@section('title', isset($q) ? "Tìm kiếm: $q" : 'Bài viết')

@section('content')
    <div class="slider-area mb-5">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">

                    <!-- Nodata -->
                    @if (!$data->total())
                        <div class="text-cemter">
                            <h3>Không có dữ liệu nào cho từ khóa: <span class="text-secondary">{{ $q }}</span>
                            </h3>
                        </div>
                    @endif

                    <!-- Blog -->
                    @foreach ($data as $value)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="{{ $value->thumbnail }}" alt="{{ $value->title }}">
                                {{-- <a href="#" class="blog_item_date">
                                <h3>15</h3>
                                <p>Jan</p>
                            </a> --}}
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="{{ $value->slug_title }}.html">
                                    <h2>{{ $value->title }}</h2>
                                </a>
                                <div class="content mb-3 summary-content">
                                    {!! $value->short_content !!}
                                </div>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> {{-- {{ $value->user->name }} --}} Admin</a></li>
                                    <li>
                                        <a href="#"><i class="fa fa-tags"></i> Tags: </a>
                                        @foreach ($value->tag_array as $tag)
                                            <a href="/search?q={{ $tag }}" class="px-1">{{ $tag }}</a>
                                        @endforeach
                                    </li>
                                    {{-- <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li> --}}
                                </ul>
                            </div>
                        </article>
                    @endforeach

                    <!-- Pagination -->
                    {{ $data->withQueryString()->links('pagination.default') }}

                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    @include('elements.search', ['keyword' => isset($q) ? $q : ''])

                    {{-- <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Resaurant food</p>
                                    <p>(37)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Travel news</p>
                                    <p>(10)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Modern technology</p>
                                    <p>(03)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Product</p>
                                    <p>(11)</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Inspiration</p>
                                    <p>21</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex">
                                    <p>Health Care (21)</p>
                                    <p>09</p>
                                </a>
                            </li>
                        </ul>
                    </aside> --}}

                    {{-- <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Recent Post</h3>
                        <div class="media post_item">
                            <img src="assets/img/post/post_1.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>From life was you fish...</h3>
                                </a>
                                <p>January 12, 2019</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="assets/img/post/post_2.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="assets/img/post/post_3.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="assets/img/post/post_4.png" alt="post">
                            <div class="media-body">
                                <a href="single-blog.html">
                                    <h3>Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                    </aside>

                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>

                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                                type="submit">Subscribe</button>
                        </form>
                    </aside> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
