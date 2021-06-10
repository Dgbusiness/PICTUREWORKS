<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * This function GET data of the user selected
     * @param int $id
     * @return model $user
     */
    public function getUserById($id = 1)
    {
        $user = User::find($id);
        return view('welcome', compact('user'));
    }

    /**
     * This function POST comments of the user with the $id
     * @param Request $request
     * @return model $user
     */
    public function appendCommentsById(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'password' => 'required',
            'comments' => 'required',
        ]);

        $user = User::find($request->id);
        if ($user->password != $request->password) {
            return view('welcome', compact('user'))->with('error', 'Incorrect password');
        }

        $user->comments .= $request->comments;
        $user->save();

        return view('welcome', compact('user'))->with('success', 'Comments added succesffuly');
    }

    /**
     * This function POST comments of the user with the $id
     * @param Request $request
     * @return model $user
     */
    public function appendCommentsByIdJSON(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'password' => 'required',
            'comments' => 'required',
        ]);
        $jsonRequest = $request;

        $user = User::find($jsonRequest->id);
        if ($user->password != $jsonRequest->password) {
            return view('welcome', compact('user'))->with('error', 'Incorrect password');
        }

        $user->comments .= $jsonRequest->comments;
        $user->save();

        return view('welcome', compact('user'))->with('success', 'Comments added succesffuly');
    }
}
