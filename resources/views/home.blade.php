@extends('layouts.layout')
@section('content')
    @include('elements.slider')

    {{-- Featured --}}
    <section class="section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle mb-70">
                        <h2>Công nghệ thiết kế Web hiện đại</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-social.png" alt="" />
                        </div>
                        <div class="product-caption">
                            <h3>
                                <a href="product_details.html">Bootstrap v5.0/4.x</a>
                            </h3>
                            <span>Latest</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <img src="https://blog.knoldus.com/wp-content/uploads/2020/05/Logo-1024x528.png" alt="" />
                        </div>
                        <div class="product-caption">
                            <h3>
                                <a href="product_details.html">Html5 - Css3 - Javscript</a>
                            </h3>
                            <span>Latest</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <img src="https://res.cloudinary.com/cloudinary-marketing/image/upload/c_fill,w_770/dpr_3.0,f_auto,fl_lossy,q_auto/v1/Web_Assets/blog/Laravel-SDK.png"
                                alt="" />
                        </div>
                        <div class="product-caption">
                            <h3>
                                <a href="product_details.html">Framework Laravel</a>
                            </h3>
                            <span>Latest</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Info --}}
    <div class="watch-area ">
        <div class="container">
            <div class="row align-items-center justify-content-between padding-130">
                <div class="col-lg-5 col-md-6">
                    <div class="watch-details mb-40">
                        <h2>Giao diện thân thiện
                        </h2>
                        <p>
                            Đối với một công ty, một nhà hàng hay khách sạn,... một website để quảng bá
                            giống như một bộ mặt thứ hai, nơi mà khách hàng sẽ tìm đến để tìm hiểu trước tiên về các
                            sản phẩm dich vụ của họ. Do đóyêu cầu cần có một website chuyên nghiệp, vừa thân thiện
                            dễ sử dụng, vừa nổi bật những sản phẩm dịch vụ của họ, nhằm thu hút được sự quan tâm chú
                            ý của hàng ngay từ cái nhìn đầu tiên.
                        </p>
                        <a href="shop.html" class="btn">Tìm hiểu ngay</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="choice-watch-img mb-40">
                        <img src="https://www.image-illustration.net/wp-content/uploads/2018/08/user-interface-design-hero-banner.jpg"
                            alt="" />
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="choice-watch-img mb-40">
                        <img src="https://nexttop.org/images/web-design/web-design-service.png" alt="" />
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="watch-details mb-40">
                        <h2>Đề cao sự đơn giản
                        </h2>
                        <p>
                            Tối giản đang là xu hướng thiết kế chung của ngành website, là sự tối giản về các chi
                            tiết
                            thiết và tăng những trải nghiệm mượt mà. Sự tối giản vừa phải trong thiết kế sẽ mang đến
                            người dùng một cảm giác không gian gọn gàng và thông thoáng.
                        </p>
                        <a href="shop.html" class="btn">Tìm hiểu ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
