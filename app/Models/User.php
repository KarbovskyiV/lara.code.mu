<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $email
 * @property string $avatar
 * @property string $password
 * @property bool $active
 * @property bool $admin
 */
class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'avatar',
        'active',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
