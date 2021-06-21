@extends('cms::layouts.layout')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12 mb-3">
                    @component('cms::components.validate_errors') @endcomponent
                </div>
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
                                    <input value="{{ old('title') }}" class="form-control" type="text" name="title"
                                        required>
                                </div>

                                <div class="form-row mb-3">
                                    <div class="col-6">
                                        <label for="name">Tag <sup class="text-danger">*</sup> </label>
                                        <input value="{{ old('tag') }}" data-role="tagsinput" class="form-control"
                                            type="text" name="tag">
                                    </div>
                                    <div class="col-6">
                                        <label for="name">Meta descripttion <sup class="text-danger">*</sup></label>
                                        <input value="{{ old('meta_description') }}" class="form-control" type="text"
                                            name="meta_description">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="name">Thumbnail </label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a data-input="thumbnail" data-preview="holder"
                                                class="lfm btn btn-primary text-white">
                                                <i class="fa fa-picture-o"></i> Choose
                                            </a>
                                        </span>
                                        <input id="thumbnail" class="form-control" type="text" name="thumbnail"
                                            required>
                                    </div>
                                    <img id="holder" style="margin-top:15px;max-height:100px;">
                                </div>
                                <div class="form-group">
                                    <label for="name">Trạng thái <sup class="text-danger">*</sup> </label>
                                    <select name="status" class="form-control">
                                        <option value="1">Kích hoạt</option>
                                        <option value="0">Chưa kích hoạt</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Bài viết nổi bật <sup class="text-danger">*</sup>
                                        <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Bài viết nổi bật là bài viết sẽ xuất hiện ngoài trang chủ"
                                            aria-hidden="true"></i>
                                    </label>
                                    <select name="is_highlight" class="form-control">
                                        <option value="0">Bài viết bình thường</option>
                                        <option value="1">Bài viết nổi bật</option>
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
                                        <td class="text-right">Thao tác</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!count($data))
                                    @component('cms::components.table_nodata')@endcomponent
                                    @endif
                                    @foreach ($data as $index => $value)
                                    <tr>
                                        <td> {{ $index + 1 }} </td>
                                        <td> <a target="_blank" href="/{{ $value->slug_title }}.html"> <b>
                                                    {{ $value->title }} </b> </a></td>
                                        <td> <img width="150" src="{{ $value->thumbnail }}" alt=""> </td>
                                        <td> {{ $value->meta_description }} </td>
                                        <td class="text-center">
                                            @component('cms::components.change_status')
                                            @slot('id')
                                            {{$value->id}}
                                            @endslot
                                            @slot('status')
                                            {{$value->status}}
                                            @endslot
                                            @endcomponent
                                        </td>
                                        <td> {{ $value->user->name ?? 'Admin' }} </td>
                                        <td class="text-right">
                                            <!-- Destroy  -->
                                            @component('cms::components.modals.destroy')
                                            @slot('id') {{ $value->id }} @endslot
                                            @endcomponent

                                            <a class="btn btn-primary btn-sm" href="blog/{{ $value->id }}">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </td>
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
@section('js')
@component('cms::components.script_lfm')@endcomponent
@endsection
@endsection
