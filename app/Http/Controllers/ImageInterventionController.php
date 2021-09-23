<?php

namespace App\Http\Controllers;

use App\Models\Invtimage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class ImageInterventionController extends Controller
{
    public function ImageIntervention(){
        return view('frontEnd.imgIntervention.imgIntervention');
    }
    // Intervention Image Package Laravel
    public function imageupload(Request $request){
        $image = $request->file('imageinput');
        $imageName = $image->getClientOriginalName();
        $directory = 'blog-image/' . $imageName;

        //Intervention Image simple upload
        // $resize_image = Image::make($image)->save(public_path($directory));

        //Intervention Image upload with resize
        $resize_image = Image::make($image)->resize(300,200)->save(public_path($directory));


         $dbImage = new Invtimage();
         $dbImage->imageField   =  $directory;
         $dbImage->save();
         return redirect('image-intervention')->with('message', 'Image save successfully');
    }
}
