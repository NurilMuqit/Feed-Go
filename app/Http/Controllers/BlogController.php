<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $featuredArticles = Blog::with(['category','user'])->where('status', 'published')->latest()->take(4)->get();
        $popularArticles = Blog::with(['category','user'])->where('status', 'published')->inRandomOrder()->take(3)->get();
        $trendingArticles = Blog::with(['category','user'])->where('status', 'published')->latest()->take(3)->get();
        return view('layouts.blogs', compact('popularArticles', 'trendingArticles', 'featuredArticles'));
    }

    public function search(Request $request)
    {
        $query = $request->input('search');

        $articles = Blog::with(['category', 'user'])
            ->where('status', 'published')
            ->where(function($q) use ($query) {
                $q->where('title', 'like', '%' . $query . '%')
                  ->orWhere('short_description', 'like', '%' . $query . '%')
                  ->orWhereHas('category', function($cat) use ($query) {
                      $cat->where('category', 'like', '%' . $query . '%');
                  });
            })
            ->latest()
            ->paginate(12);

        return view('articles.search', compact('articles', 'query'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $blog = Blog::with(['category', 'user'])
            ->where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('layouts.blog-detail', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
