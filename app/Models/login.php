<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory; // Tambahkan impor untuk HasFactory

class Login extends Authenticatable
{
    use Notifiable;
    use HasFactory; // Gunakan HasFactory trait

    protected $table = 'login';

    protected $fillable = [
        'username', 'password', 'email', 'role',
    ];
}
