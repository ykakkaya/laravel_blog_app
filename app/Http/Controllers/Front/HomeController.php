<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //if article has not a comment and created_at is older than 1 year, soft delete it
        $postsToDelete = Article::whereDoesntHave('comments')
        ->where('created_at', '<=', now()->subYear())
        ->get();
        foreach ($postsToDelete as $post) {
            $post->delete();
        }

        //get all articles from database
        $articles = Article::latest()->where('status','1')->paginate(10);
        return view('front.index', compact('articles'));
    }

    public function search(Request $request)
    {
        $search = strtolower($request->search);

        $articles = Article::where('title','like','%'.$search.'%')
        ->orwhere('short_description','like','%'.$search.'%')
        ->orwhere('long_description','like','%'.$search.'%')
        ->orWhereHas('user', function($q) use ($search){
            $q->where('name', 'like', '%'.$search.'%');
        })
        ->paginate(10);

        return view('front.index', compact('articles'));

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
    public function show(string $id)
    {
        $article=Article::findOrFail($id);
        return view('front.post',compact('article'));
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
