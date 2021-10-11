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

        $customMeessage = [
            'mname.required'   => 'Enter Your Name',
            'mname.max'   => 'You can not user five charecter for your name ',
            'memail.required'   => 'Enter Your Email',
            'memail.email'   => 'Email must be valid',
            'mphone.required'   => 'Enter Your Phone',
        ];
        $this->validate($request,$rules,$customMeessage);
        return $request->all();
    }
}
