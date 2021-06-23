@if (count($data))
    <div class="slider-area">
        <div class="slider-active">
            <!-- Single Slider -->
            @foreach ($data as $index => $value)
                <div class="single-slider slider-height d-flex align-items-center slide-bg">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                <div class="hero__caption">
                                    @if ($index)
                                        <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">
                                            {{ $value->title }}
                                        </h1>
                                    @else
                                        <h2 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">
                                            {{ $value->title }}
                                        </h2>
                                    @endif
                                    <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">
                                        {!! nl2br($value->description) !!}
                                    </p>
                                    <!-- Hero-btn -->
                                    @isset($value->link)
                                        <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s"
                                            data-duration="2000ms">
                                            <a href=" {{ $value->link }}" class="btn">Tìm hiểu ngay</a>
                                        </div>
                                    @endisset

                                </div>
                            </div>
                            <div class="col-4 d-none d-sm-block">
                                <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                    <img class="img-fluid  heartbeat" style="width: 150%;" src="{{ $value->image }}"
                                        alt="{{ $value->title }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
