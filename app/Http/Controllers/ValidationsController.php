<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationsController extends Controller
{
    public function createForm() {
        return view('formValidation.validationForm');
    }

    public function formSubmit(Request $request){
        $rules = [
            'mname'     =>    'required|max:5',
            'memail'    =>    'required|email',
            'mphone'    =>    'required',
        ];
        $this->validate($request,$rules);
        return $request->all();
    }
}
