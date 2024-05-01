<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class PostController extends Controller
{
    //
    public function create(Request $request)
    {
        return view('create-category');
    }
    public function createCategory(Request $request)
    {
        $title = $request->title;

        $slug = trim(str_replace(" ", "-", strtolower($title)), " ");
        $description = $request->description;


        $category = new Categories;
        $category->title = $title;
        $category->slug = $slug;
        $category->description = $description;
        $category->save();

        return redirect('/create-category');
    }

    public function listCategory()
    {
        $categories = Categories::all();  //select * from categories
        return view('categories', ['categories' => $categories]);
    }

    public function editCategory($id)
    {
        $category = Categories::find($id);
        return view('edit-category', ['category' => $category]);
    }

    public function updateCategory(Request $request)
    {
        $category = Categories::find($request->id);
        $category->title = $request->title;
        $category->slug = trim(str_replace(" ", "-", strtolower($request->title)), " ");
        $category->description = $request->description;
        $category->save();

        return redirect('/categories');
    }

    public function deleteCategory($id){
        $category = Categories::find($id);
        $category->delete();
        return redirect('/categories');
    }
}
