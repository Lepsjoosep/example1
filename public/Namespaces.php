<?php

// File 1: Models/Article.php
namespace App\Models;

class Article
{
    public $title;
    public $content;
    public $author;        
}

// File 2: Services/ArticleService.php
namespace App\Services;

function publish($article)
{
    return "Publishing article: " . $article->title;
}

use App\Models\Article;
use App\Services\publish;

// Your code here

// File 3: index.php
// Your code here - import and use both classes