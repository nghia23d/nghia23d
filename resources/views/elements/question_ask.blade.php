@if(count($data))
<section class="section-padding30 slider-height2  d-flex">
    <div class="container m-auto">
        <!-- Section tittle -->
        <div class="row">
            <div class="col-12">
                <div class="section-tittle mb-30">
                    <h2>Câu hỏi thường gặp</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    @foreach ($data as $key => $value)
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne-{{$key}}" aria-expanded="false"
                                aria-controls="flush-collapseOne-{{$key}}">
                                {{$value->question}}
                            </button>
                        </h2>
                        <div id="flush-collapseOne-{{$key}}" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                {{$value->ask}}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif