<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::with('user')->latest()->get();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Article $article)
    {
        if (Gate::denies('create-article', $article)) {
            abort(403);
        }
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreArticleRequest $request)
    {

        $imageName = $request->image->store('articles');

        Article::create([

            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageName,
            'price' => $request->price
        ]);

        return redirect()->route('dashboard')->with('success', 'Votre produit a bien été créé');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {

        if (Gate::denies('update-article', $article)) {
            abort(403);
        }

        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreArticleRequest $request, Article $article)
    {
        $arrayUpdate = [
            'title' => $request->title,
            'content' => $request->content,
            'price' => $request->price
        ];

        if ($request->image != null) {
            $imageName = $request->image->store('articles');
            $arrayUpdate = array_merge($arrayUpdate, [
                'image' => $imageName
            ]);
        }

        $article->update($arrayUpdate);

        return redirect()->route('dashboard')->with('success', 'Votre produit a bien été modifié');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        if (Gate::denies('destroy-article', $article)) {
            abort(403);
        }


        $article->delete();

        return redirect()->route('dashboard')->with('success', 'Votre produit a bien été supprimé');

    }
}
