<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    // /articles/creer
    public function create()
    {
        Article::create([
            'title' => 'L’IA soigne mieux',
            'description' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.'
        ]);

        Article::create([
            'title' => 'Villes vertes',
            'description' => 'Les métropoles deviennent plus écologiques et durables.'
        ]);

        Article::create([
            'title' => 'Télétravail',
            'description' => 'Plus de liberté, mais aussi plus de solitude.'
        ]);

        return 'Articles créés';
    }

    // /articles/modifier/{id}
    public function update($id)
    {
        $article = Article::findOrFail($id);

        $article->update([
            'title' => 'Article modifié',
            'description' => 'Description modifiée'
        ]);

        return 'Article modifié';
    }

    // /articles/supprimer/{id}
    public function delete($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return 'Article supprimé';
    }

    // /articles/{id}
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('pages.article-details', [
            'article' => $article
        ]);
    }
}
