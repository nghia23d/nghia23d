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
                                    <label for="name">Câu hỏi <sup class="text-danger">*</sup> </label>
                                    <input value="{{ old('question') }}" class="form-control" type="text"
                                        name="question" required>
                                </div>

                                <div class="form-group">
                                    <label for="name">Trả lời <sup class="text-danger">*</sup> </label>
                                    <textarea class="form-control" required name="ask"
                                        rows="5">{{ old('ask') }}</textarea>
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
                                        <td>Câu hỏi</td>
                                        <td>Trả lời</td>
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
                                        <td> {{ $value->question }}</td>
                                        <td> {{ $value->ask }}</td>

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

                                        <td class="text-right">
                                            <!-- Destroy  -->
                                            @component('cms::components.modals.destroy')
                                            @slot('id') {{ $value->id }} @endslot
                                            @endcomponent

                                            <!-- Edit  -->
                                            @component('cms::components.modals.update')
                                            @slot('id') {{$value->id}} @endslot

                                            <div class="form-group">
                                                <label for="name">Câu hỏi <sup class="text-danger">*</sup> </label>
                                                <input value="{{ $value->question }}" class="form-control" type="text"
                                                    name="question" required>
                                            </div>

                                            <div class="form-group">
                                                <label for="name">Trả lời <sup class="text-danger">*</sup> </label>
                                                <textarea class="form-control" required name="ask"
                                                    rows="5">{{ $value->ask }}</textarea>
                                            </div>

                                            <div class="form-group">
                                                <label>Trạng thái</label>
                                                <select class="form-control" name="status" required>
                                                    <option value="1" @if($value->status) selected @endif>Kích hoạt
                                                    </option>
                                                    <option value="0" @if(!$value->status) selected @endif>Chưa kích
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
