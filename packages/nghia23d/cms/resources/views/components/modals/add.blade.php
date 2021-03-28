<!-- Add Modal -->
<button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#modal-add">
    <i class="fa fa-plus"></i>
    Thêm
</button>
<div class="modal fade" id="modal-add" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered {{ !empty($modalClass) ? $modalClass : '' }}" role="document">
        <form enctype="multipart/form-data" class="modal-content" method="post"
            action="{{ !empty($route) ? $route : Request::url() }}" id="modal-form-add">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="modal-addLabel">Thêm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Hủy</button>
                <button type="submit" class="btn btn-primary btn-sm">Xác nhận</button>
            </div>
        </form>
    </div>
</div>
