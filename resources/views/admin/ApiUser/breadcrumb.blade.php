@php
    $routeName = Route::currentRouteName();
@endphp

@if ($routeName === 'apiuser.index')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item text-white"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active text-white">List</li>
                    </ol>
                </div>
                <h4 class="page-title text-white" >API User</h4>
            </div>
        </div>
    </div>
@elseif ($routeName === 'apiuser.create')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('apiuser.index') }}">List</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
                <h4 class="page-title">API User</h4>
            </div>
        </div>
    </div>
@elseif ($routeName === 'category.create')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group float-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('category.index') }}">Category</a></li>
                        <li class="breadcrumb-item active">Add</li>
                    </ol>
                </div>
                <h4 class="page-title">Add Category</h4>
            </div>
        </div>
    </div>
@endif
