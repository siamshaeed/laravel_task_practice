<?php

namespace App\Http\Controllers;
use App\Models\Images;
use App\Models\Posts;

use Illuminate\Http\Request;

class PolymorphicRelationshipController extends Controller
{
    public function oneToOne(){

    $image = Images::find(6);
    // return $image->imageable;
    $post = Posts::find(2);
    return $post->image;


    // $user = Posts::find(2);
    // $image = new Images();
    // $image->url = 'test url';

    // $image->imageable()->associate($user);
    // return $image->save();
    // return $user;
    }
}
