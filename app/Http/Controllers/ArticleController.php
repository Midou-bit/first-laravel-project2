<?php

namespace App\Http\Controllers;

class ArticleController extends Controller
{
    public function show($id): string
    {
        return "Article portant l’identifiant $id";
    }
}
