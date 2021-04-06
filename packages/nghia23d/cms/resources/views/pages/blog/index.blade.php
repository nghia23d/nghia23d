@extends('cms::layouts.layout')
@section('content')
    test
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Danh sách <span class="text-lowercase">{{ $pageName }}</span> </h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- Table --}}
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header d-flex">
                                <div class="align-self-center">
                                    <h3 class="card-title">Bảng dữ liệu</h3>
                                </div>
                                <div class="ml-auto">
                                    @component('cms::components.modals.add')
                                        @slot('modalClass') modal-lg @endslot
                                        <div class="form-group">
                                            <label for="name">Tiêu đề <sup class="text-danger">*</sup> </label>
                                            <input class="form-control" type="text" name="title" required>
                                        </div>

                                        <div class="form-row mb-3">
                                            <div class="col-6">
                                                <label for="name">Tag <sup class="text-danger">*</sup> </label>
                                                <input class="form-control" type="text" name="tag">
                                            </div>
                                            <div class="col-6">
                                                <label for="name">Meta descripttion <sup class="text-danger">*</sup></label>
                                                <input class="form-control" type="text" name="meta_description">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="name">Thumbnail </label>
                                            <input class="form-control" name="thumbnail" type="file" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Trạng thái <sup class="text-danger">*</sup> </label>
                                            <select name="status" class="form-control">
                                                <option value="1">Kích hoạt</option>
                                                <option value="0">Chưa kích hoạt</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Nội dung <sup class="text-danger">*</sup> </label>
                                            <textarea cols="50" id="tinymce" name="content"></textarea>
                                        </div>
                                    @endcomponent
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="admin-table" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <td>Tiêu đề</td>
                                            <td>Thumbnail</td>
                                            <td>Meta description</td>
                                            <td>Trạng thái</td>
                                            <td>Tác giả</td>
                                            <td>Thao tác</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!count($data))
                                            @component('cms::components.table_nodata')@endcomponent
                                        @endif
                                        @foreach ($data as $index => $value)
                                            <tr>
                                                <td> {{ $index + 1 }} </td>
                                                <td> {{ $value->title }} </td>
                                                <td> {{ $value->thumbnail }} </td>
                                                <td> {{ $value->meta_description }} </td>
                                                <td> {{ $value->status }} </td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelEdit" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelEdit">Chỉnh sửa {{$prefix}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="form-edit" method="POST" action="{{route($prefix.'.update',0)}}" accept-charset="UTF-8" enctype="multipart/form-data" class="form-horizontal form-label-left">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="status" class="control-label">Status</label>
                <select class="form-control" id="status" name="status">
                    <option value="1" >Kích hoạt</option>
                    <option value="0">Chưa kích hoạt</option>
                </select>
            </div>
            <div class="form-group">
              <label for="status" class="control-label">Trạng thái liên hệ</label>
              <select class="form-control" id="status-contact" name="status_contact">
                  <option value="1" >Đã liên hệ</option>
                  <option value="0">Chưa liên hệ</option>
              </select>
          </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <img class="d-none img-fluid" src="" alt="">
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> --}}
    {{-- @section('js')
      <script>

        $('.btn-edit').click(function() {
            $("#modal-edit").modal({backdrop: 'static', keyboard: false});

            let id              = $(this).data('id');
            let rowParent       = $('tr#row-'+id);
            let status          = rowParent.find(".btn-status-ajax");
            let statusContact   = rowParent.find(".status-contact");

            let formEdit = $('#form-edit');

            formEdit.attr('action', formEdit.attr('action').slice(0, -1) + id);

            $("#status").val(status.attr('data-value'));
            $("#status-contact").val(statusContact.attr('data-value'));
        });

      </script>
  @endsection --}}
@section('js')
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script>
  var editor_config = {
    path_absolute : "/",
    selector: '#tinymce',
    relative_urls: false,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table directionality",
      "emoticons template paste textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    file_picker_callback : function(callback, value, meta) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
      if (meta.filetype == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }
      
      tinyMCE.activeEditor.windowManager.openUrl({
        url : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no",
        onMessage: (api, message) => {
          callback(message.content);
        }
      });
    }
  };

  tinymce.init(editor_config);
</script>

@endsection
@endsection
