<?php

namespace App\Http\Controllers\ApiUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ApiUser\ApiUser;
use App\Enum\ApiUser\ApiUserEnum;


class ApiUserController extends Controller
{
    public function index(){
        $apiUsers = ApiUser::paginate(2);
        return view('admin.ApiUser.list', compact('apiUsers'));
    }

    public function create(){
        return view('admin.ApiUser.add');
    }

}
