<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request)
    {
        if ($request->session()->has('key')) {
            return $request->session()->get('key');
        } else {
            return 'Session has no value';
        }
    }

    public function sessionStore(Request $request)
    {
        $request->session()->put('key', 'Session Store');
    }

    public function sessionDestroy(Request $request)
    {
        $request->session()->forget('key');
    }
}
