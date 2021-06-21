@extends('cms::layouts.layout')
@section('content')
<div class="content-wrapper pt-5">
    <div class="content-header">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 mb-3">
                    @component('cms::components.validate_errors') @endcomponent
                </div>
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Danh sách <span class="text-lowercase">{{ $pageName }}</span> </h1>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-23">
                    <h1 class="m-0 text-dark">{{ $pageName }}: <span class="text-lowercase"> <b> {{ $data->title }}
                            </b>
                        </span> </h1>
                </div>
                <form class="col-sm-12 mt-5" method="post" action="{{ route('cms.blog.update', $data->id) }}">
                    @csrf
                    @method('PUT')
                    <label for="name">Tiêu đề <sup class="text-danger">*</sup> </label>
                    <input class="form-control" value="{{ $data->title }}" name="title" required>
            </div>

            <div class="form-row mb-3">
                <div class="col-6">
                    <label for="name">Tag <sup class="text-danger">*</sup> </label>
                    <input data-role="tagsinput" class="form-control" value="{{ $data->tag }}" name="tag">
                </div>
                <div class="col-6">
                    <label for="name">Meta descripttion <sup class="text-danger">*</sup></label>
                    <input class="form-control" value="{{ $data->meta_description }}" name="meta_description">
                </div>

            </div>
            <div class="form-group">
                <label for="name">Thumbnail </label>
                <div class="input-group">
                    <span class="input-group-btn">
                        <a data-input="thumbnail" data-preview="holder" class="lfm btn btn-primary text-white">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control" name="thumbnail">
                </div>
                <img id="holder" style="margin-top:15px;max-height:100px;">

                @isset($data->thumbnail)
                <div class="text-center mt-3">
                    <img width="150" src="{{ $data->thumbnail }}" alt="">
                    <div class="d-flex mx-auto pt-1 justify-content-center">
                        <b class="mr-2">Link: </b>
                        <a target="_black" href="{{ $data->thumbnail }}"> {{ $data->thumbnail }}</a>
                    </div>

                </div>
                @endisset

            </div>
            <div class="form-group">
                <label for="status">Trạng thái <sup class="text-danger">*</sup> </label>
                <select name="status" class="form-control">
                    <option value="1">Kích hoạt</option>
                    <option @if (!$data->status) selected @endif
                        value="0">Chưa kích hoạt</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Bài viết nổi bật <sup class="text-danger">*</sup>
                    <i class="fa fa-info-circle" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Bài viết nổi bật là bài viết sẽ xuất hiện ngoài trang chủ" aria-hidden="true"></i>
                </label>
                <select name="is_highlight" class="form-control">
                    <option value="0">Bài viết bình thường</option>
                    <option @if ($data->is_highlight) selected @endif value="1">
                        Bài viết nổi bật</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">Nội dung <sup class="text-danger">*</sup> </label>
                <textarea cols="50" id="tinymce" name="content">{!! $data->content !!}</textarea>
            </div>

            <div class="text-right pt-3">
                <div class="btn-group" role="group" aria-label="Button group">
                    <a href="{{ route('cms.blog.index') }}" class="btn btn-secondary mr-3">
                        Hủy
                    </a>
                    <button class="btn btn-primary">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        Cập nhật
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@section('js')
@component('cms::components.script_lfm')@endcomponent
@endsection
@endsection
