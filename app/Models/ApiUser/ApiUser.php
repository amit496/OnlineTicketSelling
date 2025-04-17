<?php

namespace App\Models\ApiUser;

use Illuminate\Database\Eloquent\Model;
use App\Enum\ApiUser\ApiUserEnum;

class ApiUser extends Model
{
    protected $table = 'api_users';

    protected $fillable = [
        'uuid',
        'name',
        'email',
        'url',
        'status',
        'password',
    ];

    protected $casts = [
        'status' => ApiUserEnum::class,
    ];
}
