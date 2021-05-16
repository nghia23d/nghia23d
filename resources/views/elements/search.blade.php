<aside class="single_sidebar_widget search_widget">
    <form method="get" action="/search">
        <div class="form-group">
            <div class="input-group mb-3">
                <input value="{{$keyword}}" name="q" type="text" class="form-control"
                    placeholder='Nhập từ khóa' onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Nhập từ khóa:'">
                {{-- <div class="input-group-append">
                    <button class="btns" type="button"><i class="ti-search"></i></button>
                </div> --}}
            </div>
        </div>
        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn" type="submit">Tìm kiếm</button>
    </form>
</aside>
