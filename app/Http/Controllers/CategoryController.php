<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id, $idCategory){
        $books = Category::find($idCategory)->Book;
        $user = User::find($id);
        // $books = Book::where("category_id","=",$id)->get();

        return view("home", compact("books","user"));
    }
}
