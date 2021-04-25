@extends('layouts.layout')

@section('title', 'Trang không tìm thấy')
    {{-- @section('keywords', $data->tag)
@section('description', $data->meta_description) --}}

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-5 mx-auto h-50 text-danger">
                <h1><i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i> 404</h1>
                <h2>Oops... Page Not Found!</h2>

                <form class="w-75 mx-auto my-5 d-flex" action="">
                    <input name="q" placeholder="Tìm kiếm" required="" class="single-input">
                    <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms"
                        style="animation-delay: 0.8s;">
                        <a href="#" class="btn">Tìm kiếm</a>
                    </div>
                </form>

                <h3>Follow my social:</h3>
                <div class="footer-copy-right f-center pt-3">
                    <!-- social -->
                    <div class="footer-social">
                        <a href="https://www.facebook.com/nghia23d">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/nghia23d/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://github.com/nghia23d">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/nghia23d/">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/nghia23d/">
                            <i class="fab fa-bitbucket"></i>
                        </a>
                        <a href="https://www.pinterest.com/nghia23d/">
                            <i class="fab fa-pinterest"></i>
                        </a>
                        <a href="http://nghia23d.com/">
                            <i class="fas fa-globe"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

@endsection
