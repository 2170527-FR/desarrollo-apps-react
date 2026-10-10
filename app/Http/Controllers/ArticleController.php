<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ArticleController extends Controller
{
    public function index()
    {
    $articles = [
            ['id' => 1, 'title' => 'First Article', 'content' => 'Content of the first article.'],
            ['id' => 2, 'title' => 'Second Article', 'content' => 'Content of the second article.'],
            ['id' => 3, 'title' => 'Third Article', 'content' => 'Content of the third article.'],
        ];

        return Inertia::render('articles/index', [
            'articles' => $articles
        ]);
        
    }
}
