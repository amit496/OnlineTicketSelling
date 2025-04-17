@extends('admin.layouts.index')
@section('content')
    <div class="container-fluid">

        @include('admin.ApiUser.breadcrumb')

        {!! ErrorMessage($errors) !!}

        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5>Add API User</h5>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('apiuser.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <label for="" class="text-white">Name</label>
                                    <input class="form-control" type="text" id="api-user-name" name="api_user_name" value="{{ old('api_user_name') }}" autofocus>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-lg-12">
                                    <label for="" class="text-white">Email</label>
                                    <input class="form-control" type="email" id="api-user-email" name="api_user_email" value="{{ old('api_user_email') }}">
                                </div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-lg-12">
                                    <label for="" class="text-white">Category Image</label>
                                    <input type="file" class="dropify" name="image"
                                        data-default-file="{{ asset('placeholder.png') }}">
                                </div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-lg-12">
                                    <a href="{{ route('category.index') }}">
                                        <button type="button"
                                            class="btn btn-gradient-danger waves-effect waves-light add-button">Back</button>
                                    </a>
                                    <button type="submit"
                                        class="btn btn-gradient-warning waves-effect waves-light submit-button">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
