<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index($id){
        $books = Book::all();
        $user = User::find($id);

        return view("home", compact("books","user"));
    }

    public function show($id, $idBook){
        $book = Book::find($id);
        $user = User::find($id);

        return view("detail" ,compact("book","user"));
    }
}
