<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createPost(Request $r)
    {
        $r->validate([
            'title' => 'required|min:10|max:100',
            'slug' => 'required|unique:articles',
            'content' => 'required|min:30|max:1000'
        ], [
            'title.required' => 'The title is required.',
            'title.min' => 'The title must be at least :min characters.',
            'title.max' => 'The title may not be greater than :max characters.',
            'slug.required' => 'The slug is required.',
            'slug.unique' => 'The slug must be unique.',
            'content.required' => 'The content is required.',
            'content.min' => 'The content must be at least :min characters.',
            'content.max' => 'The content may not be greater than :max characters.'
        ]);
    

            $article = Article::create([
                'title' => $r->title,
                'slug' => $r->slug,
                'content' => $r->content
            ]);
    
            if (!$article) {
                return redirect()->intended(route('create'))->with("error", "Article creation failed. Please try again.");
            }
            
            return redirect()->intended(route('articles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(article $article)
    {
        //
    }
}
