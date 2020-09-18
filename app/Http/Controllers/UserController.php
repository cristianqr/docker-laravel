<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function listUser() {
        $users = User::all(['id', 'name', 'email']);
        return response()->json( $users, 200 );
    }
}
