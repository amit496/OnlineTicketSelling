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
                                <h5>Category</h5>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-dark table-striped table-hover table-bordered">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th>Field</th>
                                            <th>Value</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>Categroy Name (EN)</td>
                                            <td>{{ $data->updated_en_name ?? $data->en_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Categroy Name (CN)</td>
                                            <td>{{ $data->cn_name}}</td>
                                        </tr>
                                    </tbody>
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
