@extends('admin.layouts.index')
@section('content')
    <div class="container-fluid">

        @include('admin.Category.breadcrumb')

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>Add</h5>
                            </div>
                            <div class="col-lg-6">
                                <a href="{{ route('category.index') }}" class="float-right">
                                    <button type="button" class="btn btn-gradient-danger waves-effect waves-light add-button">Back</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row justify-content-center">

                                <div class="col-lg-6">
                                    <label for="" class="text-white">Category Name(EN) <span class="text-danger">*</span></label>
                                    <input class="form-control @error('category_name_en') is-invalid @enderror" type="text" id="category-name-en" name="category_name_en" value="{{ old('category_name_en') }}">
                                    @error('category_name_en')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-6">
                                    <label for="" class="text-white">Category Name(CN)</label>
                                    <input class="form-control @error('category_name_cn') is-invalid @enderror" type="text" id="category-name-cn" name="category_name_cn" value="{{ old('category_name_cn') }}">
                                    @error('category_name_cn')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                            </div>

                            <div class="row justify-content-center mt-3">
                                <div class="col-lg-12">
                                    <label for="" class="text-white">Category Image</label>
                                    <input type="file" class="dropify @error('image') is-invalid @enderror" name="image" data-default-file="{{ asset('placeholder.png') }}" accept="image/*">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-lg-12">
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
