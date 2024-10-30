<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Admin extends Authenticate
{
    protected $table = 'admin';
    public static function attemptLogin($email, $password, $remember)
    {
        $user = static::whereRaw('BINARY `email` = ?', [$email])->first();
        if ($user && Hash::check($password, $user->password)) {
            Auth::login($user, $remember);
            return true;
        }

        return false;
    }
}
