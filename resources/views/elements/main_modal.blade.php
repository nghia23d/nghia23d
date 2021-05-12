<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="myModal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Super Mega Ultra Trân Trọng Thông Báo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body content">
                <p>
                    Xin chào bạn ghé thăm website của <b>Nghia23d</b> 🏵️🏵️🏵️🏵️
                </p>
                <p>
                    <b>Nghia23d</b> xin được giảm giá <i>50%</i> cho tất cả những khách hàng lần đầu tiên
                    sử dụng dịch vụ thiết kế website ❣️❣️❣️
                </p>
                <div class="text-center">
                    <a class="text-center fs-5" href="https://www.facebook.com/nghia23d">
                        <u class="text-danger" title="Gửi yêu cầu ngay"> Gửi yêu cầu ngay</u>
                    </a>
                </div>

                <img class="img-fluid my-3"
                    src="https://img.freepik.com/free-vector/horizontal-sale-banner-template_23-2148917183.jpg?size=626&ext=jpg"
                    alt="">
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>
@section('js')
<script>
    if(localStorage.POPUP_SALE_OFF != "1"){
    $(window).on('load', function () {
        setTimeout(() => {
            $('#myModal').modal('show');
        }, 1000);
    });
    localStorage.POPUP_SALE_OFF = "1";
}
</script>
@endsection