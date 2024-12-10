<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function index()
    {
        $articles = Article::where('status', 1)->get();
        return view('index', compact('articles'));
    }
    public function profile()
    {
        $user = Auth::user();
        return view('profile',compact('user'));
    }
    public function category()
    {
        return view('category');
    }
}
