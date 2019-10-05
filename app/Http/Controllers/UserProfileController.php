<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    //

    public function index($id)
    {
        $user = User::find($id);
        return view('profile', [
            'user' => $user
        ]);
    }
}
