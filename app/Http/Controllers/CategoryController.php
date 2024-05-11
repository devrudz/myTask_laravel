<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    function index(){
        return view('category');
    }

    function store(Request $req) {

        $newCategory = Category::create([
            'category_name' => $req->category_name,
            'status' =>$req->status
        ]);
    }
}
