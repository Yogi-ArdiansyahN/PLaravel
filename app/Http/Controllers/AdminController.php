<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Book;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin/home');
    } 

    public function books(){
        $user = Auth::user();
        $books = Book::all();
        return view('book', compact('user', 'books'));
    }
}
