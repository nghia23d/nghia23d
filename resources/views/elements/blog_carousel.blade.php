@if (count($data) > 0)
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-tittle mb-30">
                    <h2>Bài viết nổi bật</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="mixedSlider" class="col-12">
                <div class="MS-content">
                    @foreach ($data as $value)
                    <div class="item">
                        <div class="imgTitle">
                            <h5 class="blogTitle">Nghia23d</h5>
                            <img src=" {{ $value->thumbnail }}" alt="{{ $value->title }}" />
                        </div>

                        <a href="{{ $value->slug_title }}.html">
                            <h5 title="{{ $value->title }}" class="contentTitle">{{ $value->title }}</h5>
                        </a>

                        <div class="summary-content">
                            {!! $value->short_content !!}
                        </div>
                        <a class="read-more" href="{{ $value->slug_title }}.html">Xem thêm</a>
                    </div>
                    @endforeach
                </div>
                <div class="MS-controls">
                    <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                    <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </div>
</section>
@endif