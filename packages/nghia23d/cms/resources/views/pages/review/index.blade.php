@extends('cms::layouts.layout')
@section('content')

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-12 mb-3">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger"> {{ $error }}</div>
                        @endforeach
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
                                        <div class="form-group">
                                            <label for="name">Tên người dùng <sup class="text-danger">*</sup> </label>
                                            <input value="{{ old('user_name') }}" class="form-control" type="text"
                                                name="user_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="image">Avatar<sup class="text-danger">*</sup> </label>

                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a data-input="image-c" data-preview="image-create"
                                                        class="lfm btn btn-primary text-white">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                </span>
                                                <input id="image-c" class="form-control" type="text" name="avatar" required>
                                            </div>
                                            <img id="image-create" style="margin-top:15px;max-height:100px;">
                                        </div>
                                        <div class="form-group">
                                            <label for="position">Chức danh<sup class="text-danger">*</sup> </label>
                                            <input class="form-control" required name="position"
                                                value="{{ old('position') }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Mô tả<sup class="text-danger">*</sup> </label>
                                            <textarea class="form-control" required name="description"
                                                rows="5">{{ old('description') }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Số sao </label>
                                            <input class="form-control" type="number" value="{{ old('stars') }}" name="stars"
                                                min="1" max="5">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Trạng thái <sup class="text-danger">*</sup> </label>
                                            <select name="status" class="form-control">
                                                <option value="1">Kích hoạt</option>
                                                <option value="0">Chưa kích hoạt</option>
                                            </select>
                                        </div>
                                    @endcomponent
                                </div>
                            </div>
                            <div class="card-body">
                                <table id="admin-table" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <td>#</td>
                                            <td>Username</td>
                                            <td>Avatar</td>
                                            <td>Chức danh</td>
                                            <td>Mô tả</td>
                                            <td>Số sao</td>
                                            <td>Trạng thái</td>
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
                                                <td> {{ $value->user_name }}</td>
                                                <td> <img class="img-fluid" width="100" src="{{ $value->avatar }}"
                                                        alt="{{ $value->avatar }}"> </td>
                                                <td>{{ $value->position }}></td>
                                                <td>
                                                    {{ $value->description }}
                                                </td>
                                                <td>
                                                    {{ $value->stars }}
                                                </td>
                                                <td class="text-center">
                                                    @component('cms::components.change_status')
                                                        @slot('id')
                                                            {{ $value->id }}
                                                        @endslot
                                                        @slot('status')
                                                            {{ $value->status }}
                                                        @endslot
                                                    @endcomponent
                                                </td>

                                                <td class="text-right">
                                                    <!-- Destroy  -->
                                                    @component('cms::components.modals.destroy')
                                                        @slot('id') {{ $value->id }} @endslot
                                                    @endcomponent

                                                    <!-- Edit  -->
                                                    @component('cms::components.modals.update')
                                                        @slot('id') {{ $value->id }} @endslot

                                                        <div class="form-group">
                                                            <label for="user_name">Username <sup class="text-danger">*</sup>
                                                            </label>
                                                            <input value="{{ $value->user_name }}" class="form-control"
                                                                type="text" name="user_name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="avatar">Avatar </label>
                                                            <div class="input-group">
                                                                <span class="input-group-btn">
                                                                    <a data-input="image-e" data-preview="image-edit"
                                                                        class="lfm btn btn-primary text-white">
                                                                        <i class="fa fa-picture-o"></i> Choose
                                                                    </a>
                                                                </span>
                                                                <input id="image-e" class="form-control" name="avatar">
                                                            </div>
                                                            <img id="image-edit" style="margin-top:15px;max-height:100px;">

                                                            <div class="text-center mt-2">
                                                                <img width="150" src="{{ $value->avatar }}" alt="">
                                                            </div>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="position">Chức danh<sup class="text-danger">*</sup>
                                                            </label>
                                                            <input class="form-control" required name="position"
                                                                value="{{ $value->position }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="description">Mô tả<sup class="text-danger">*</sup>
                                                            </label>
                                                            <textarea class="form-control" required name="description"
                                                                rows="5">{{ $value->description }}</textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="name">Số sao </label>
                                                            <input class="form-control" value="{{ $value->stars }}"
                                                                type="number" name="stars" min="1" max="5">
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Trạng thái</label>
                                                            <select class="form-control" name="status" required>
                                                                <option value="1" @if ($value->status) selected @endif>Kích hoạt
                                                                </option>
                                                                <option value="0" @if (!$value->status) selected @endif>Chưa kích
                                                                    hoạt</option>
                                                            </select>
                                                        </div>
                                                    @endcomponent
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
@endsection
@section('js')
    @component('cms::components.script_lfm')@endcomponent
@endsection
