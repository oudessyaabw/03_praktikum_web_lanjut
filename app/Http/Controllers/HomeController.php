<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view("home", ["books" => Books::index()]);
    }
    public function detail($id)
    {
        return view('detail', ["book" => Books::getById($id)]);
    }
    public function contact()
    {
        return view("contact");
    }
}
