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
                            <li class="breadcrumb-item active">Details</li>
                        </ol>
                    </div>
                    <h4 class="page-title" style="color: #8c9ea9;">Category</h4>
                </div>
            </div>
        </div>

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

                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-striped table-dark mb-0 table-bordered">
                                    <tr>
                                        <td>Categroy Name (EN)</td>
                                        <td>{{ $data->updated_en_name ?? $data->en_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Categroy Name (CN)</td>
                                        <td>{{ $data->cn_name}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-lg-12">
                                @if (isset($data->image))
                                    @if(file_exists($data->image))
                                        <img src="{{ asset($data->image) }}" alt="{{$data->en_name}}" class="img-thumbnail" width="200" height="200">
                                    @endif
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
