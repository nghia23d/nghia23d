@extends('layouts.layout')

@section('title', 'Liên hệ')
@section('content')


    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Liên hệ</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <h2 class="contact-title">Liên hệ ngay với Nghia23d</h2>
            </div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                    novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nhập nội dung'"
                                    placeholder="Nhập nội dung"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="name" id="name" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tên của bạn'"
                                    placeholder="Têm của bạn">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control valid" name="email" id="email" type="email"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Địa chỉ email'"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tiêu đề'"
                                    placeholder="Tiêu đề">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <a href="https://www.facebook.com/nghia23d"
                            class="button button-contactForm boxed-btn">Gửi</a>
                        {{-- <button type="submit" class="button button-contactForm boxed-btn">Gửi</button> --}}
                    </div>
                </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Thành phố Hồ Chí Minh </h3>
                        <p>151 Bạch đằng, Phường 2, Quận Tân Bình</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>(+84) 0907754718</h3>
                        <p>Tất cả ngày trong tuần</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <a href="mailto:nghia23d@gmail.com"> <span class="contact-info__icon"><i
                                class="ti-email"></i></span></a>

                    <div class="media-body">
                        <h3> nghia23d@gmail.com</h3>
                        <p>Gửi mail mọi lúc mọi nơi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
