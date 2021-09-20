<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserApiController extends Controller
{
    public function showUser($id = null)
    {
        if ($id == '') {
            $Users = User::get();
            return response()->json(['users' => $Users], 200);
        } else {
            $Users = User::find($id);
            return response()->json(['users' => $Users], 200);
        }
    }

    public function addUser(Request $request)
    {
    }
}
