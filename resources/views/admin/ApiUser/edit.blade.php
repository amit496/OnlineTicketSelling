@extends('admin.layouts.index')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category</a></li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                    <h4 class="page-title" style="color: #8c9ea9;">Category</h4>
                </div>
            </div>
        </div>

        {!! ErrorMessage($errors) !!}

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>Category</h5>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('category.update', ['uuid' =>Crypt::encrypt($data->uuid)]) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <label for="" class="text-white">Category Name(EN)</label>
                                    <input class="form-control" type="text" id="category-name-en" name="category_name_en" value="{{ old('category_name_en', $data->updated_en_name ?? $data->en_name ) }}">
                                </div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-lg-12">
                                    <label for="" class="text-white">Category Name(CN)</label>
                                    <input class="form-control" type="text" id="category-name-cn" name="category_name_cn" value="{{ old('category_name_en', $data->cn_name) }}">
                                </div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-lg-12">
                                    <label for="" class="text-white">Category Image</label>
                                    <input type="file" class="dropify" name="image" data-default-file="{{ isset($data) && $data->image ? asset($data->image) : asset('placeholder.png') }}">
                                </div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-lg-12">
                                    <a href="{{ route('category.index') }}">
                                        <button type="button" class="btn btn-gradient-danger waves-effect waves-light add-button">Back</button>
                                    </a>
                                    <button type="submit" class="btn btn-gradient-warning waves-effect waves-light submit-button">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
