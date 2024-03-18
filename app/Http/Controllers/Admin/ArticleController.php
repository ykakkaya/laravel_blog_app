<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles=Article::where('user_id', auth()->user()->id)->get();
        return view('admin.article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::where('user_id', auth()->user()->id)->get();
        return view('admin.article.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image='';
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $imageName);
            $image = 'uploads/' . $imageName;
        }


        $article=Article::create([
            'title'=>$request->title,
            'short_description'=>$request->short_description,
            'long_description'=>$request->long_description,
            'category_id'=>$request->category_id,
            'status'=>$request->status,
            'image'=>$image,
            'user_id'=>auth()->user()->id,

        ]);
        return redirect()->route('admin.article.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $article=Article::findorfail($id);
        return view('admin.article.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article=Article::findorfail($id);
        $categories=Category::where('user_id', auth()->user()->id)->get();
        return view('admin.article.edit',compact(['article','categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $article=Article::findorfail($id);
        $image='';
        if ($request->hasFile('image')) {
            $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('uploads'), $imageName);
            $image = 'uploads/' . $imageName;
        };
        $article->update([
            'title'=>$request->title,
            'short_description'=>$request->short_description,
            'long_description'=>$request->long_description,
            'category_id'=>$request->category_id,
            'status'=>$request->status,
            'image'=>$image,

        ]);
        return redirect()->route('admin.article.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $article=Article::findorfail($id);
        $article->delete();
        return redirect()->route('admin.article.index');
    }
}
