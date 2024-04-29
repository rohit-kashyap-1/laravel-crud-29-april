<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class PostController extends Controller
{
    //
    public function create(Request $request){
        return view('create-category');
    }
    public function createCategory(Request $request){
         $title = $request->title;
         $description = $request->description;

         
         $category = new Categories;
         $category->title=$title;
         $category->description=$description;
         $category->save();
    }
}
