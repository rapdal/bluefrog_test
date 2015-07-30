<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Article;

class ArticlesController extends Controller
{
    public function index () {
    	$articles = Article::all();
    	
    	return view('articles.index', compact('articles'));
    }

    public function show ($id) {
    	$findArticle = Article::findOrFail($id);

    	return view('articles.show', compact('findArticle'));
    }
}
