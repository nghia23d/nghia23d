<!-- Update Modal -->
<button class="btn btn-secondary btn-sm btn-icon" type="button" data-toggle="modal" data-target="#modal-update-{{ $id }}">
    <i class="fa fa-edit"></i>
</button>
<div class="modal fade text-left" id="modal-update-{{ $id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content" method="post" action="{{ !empty($route) ? $route : Request::url().'/'.$id }}" id="modal-form-update">
            @csrf
            @method('PUT')
            <div class="modal-header">
                <h5 class="modal-title" id="modal-addLabel">Chỉnh sửa</h5>
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