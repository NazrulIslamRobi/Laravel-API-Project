<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class ArticleController extends Controller
{
    function getAllArticles(){
        return Article::all();
    }

    function getArticle($id){
        return Article::findOrFail($id);
    }
}
