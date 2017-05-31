<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\ArticleRepository;

class ArticleController extends Controller
{

    public function __construct(ArticleRepository $article)
    {
        $this->article = $article;
    }

    public function index() 
    {
        $articles = $this->article->page('10', 'desc', 'created_at');
        
        return view('article.index', compact('articles'));
    }

    public function show($slug)
    {
        $article = $this->article->getBySlug($slug);

//        $article->content = collect(json_decode($article->content))->get('html');

        return view('article.show', compact('article'));
    }
}
