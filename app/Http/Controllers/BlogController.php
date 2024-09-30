<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all()->sortByDesc("created_at");
        return view('blog.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'string|required|max:255',
            'text' => 'string|required',
            'source' => 'string|nullable|max:255',
            'auteur' => 'string|nullable|max:255',
            'url' => 'url|nullable|url|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('article_images', 'public');
            $validatedData['image'] = $imagePath;
        }

        Article::create($validatedData);

        return redirect()->route('actualite.index')->with('success', 'Article créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        
        $article = Article::find($id);
        return view('blog.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('blog.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $validatedData = $request->validate([
            'title' => 'string|required|max:255',
            'text' => 'string|required',
            'source' => 'string|nullable|max:255',
            'auteur' => 'string|nullable|max:255',
            'url' => 'url|nullable|url|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'published_at' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('article_images', 'public');
            $validatedData['image'] = $imagePath;
        }

        $article->update($validatedData);

        return redirect()->route('accueil.index')->with('success', 'Article mis à jour avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('accueil.index')->with('success', 'Article supprimé avec succès.');
    }
}
