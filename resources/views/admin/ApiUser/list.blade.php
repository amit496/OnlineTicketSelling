@extends('admin.layouts.index')
@section('content')
<div class="container-fluid">

    {{-- <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Api User</li>
                    </ol>
                </div>
                <h4 class="page-title" style="color: #8c9ea9;">Api User</h4>
            </div>
        </div>
    </div> --}}

    @include('admin.ApiUser.breadcrumb')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5>Api User List</h5>
                    <a href="{{ route('apiuser.create') }}" class="btn btn-gradient-warning waves-effect waves-light">Add Api User</a>
                </div>

                {!! SuccessErrorMessage() !!}

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-dark mb-0 table-bordered">
                            <thead class="bg-dark">
                                <tr>
                                    <th>S No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Url</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($apiUsers as $index => $value)
                                    <tr>
                                        <td>{{ $apiUsers->firstItem() + $index }}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->url}}</td>
                                        <td>{!! Status($value->status, route('category.status', Crypt::encrypt($value->uuid))) !!}</td>
                                        <td>
                                            <a href="{{ route('category.edit', Crypt::encrypt($category->uuid)) }}" class="btn btn-sm btn-success">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{ route('category.show', Crypt::encrypt($category->uuid)) }}" class="btn btn-sm btn-info">
                                                <i class="fas fa-eye"></i>
                                            </a>

                                            <form action="{{ route('category.destroy', Crypt::encrypt($category->uuid)) }}" method="POST" class="d-inline">
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
                        {{-- <div class="mt-3">
                            {{ $apiUsers->links() }}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
