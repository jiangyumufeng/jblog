<?php

namespace App\Http\Controllers;

use App\Http\Request;
use Illuminate\Http\Request;
use App\Repository\ArticleRepository;

class HomeController extends Controller
{
    protected $article;

    public function __construct(ArticleRepository $article)
    {
        $this->article = $article;
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function search(Request $request)
    {
        $key = trim($request->get('query'));

        $articles = $this->article->search($key);

        return view('search', compact('articles'));
    }
}
