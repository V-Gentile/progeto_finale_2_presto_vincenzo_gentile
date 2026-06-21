<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class PublicController extends Controller
{
    public function home()
{
    $articles = Article::latest()->take(4)->get();
    return view('home', compact('articles'));
}
}
