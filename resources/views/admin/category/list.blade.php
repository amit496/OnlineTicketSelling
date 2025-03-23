@extends('admin.layouts.index')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
                <h4 class="page-title">Category</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>Category List</h3>
                    <a href="{{ route('category.create') }}" class="btn btn-gradient-warning waves-effect waves-light">Add Category</a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-dark mb-0">
                            <thead class="bg-dark">
                                <tr>
                                    <th>S No</th>
                                    <th>Image</th>
                                    <th>Category Name (EN)</th>
                                    <th>Category Name (CN)</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $index => $category)
                                    <tr>
                                        <td>{{ $data->firstItem() + $index }}</td>
                                        <td>
                                            <img src="{{ asset($category->image ?? 'placeholder.png') }}" alt="Image" class="rounded-circle thumb-sm">
                                        </td>
                                        <td>{{ $category->en_name }}</td>
                                        <td>{{ $category->cn_name }}</td>
                                        <td>
                                            <a href="{{ route('category.edit', Crypt::encrypt($category->uuid)) }}" class="btn btn-sm btn-success">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form action="#" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No categories found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <!-- Pagination Links -->
                        <div class="mt-3">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
