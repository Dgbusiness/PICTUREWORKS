<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * This fucntion get data of the user selected
     * @param int $id
     * @return model $user
     */
    public function getUserById($id = 1)
    {
        $user = User::find($id);
        return view('welcome', compact('user'));
    }
}
