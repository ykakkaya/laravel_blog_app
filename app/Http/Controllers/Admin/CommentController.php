<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Article;
use App\Models\User;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::where('user_id', auth()->user()->id)->latest()->get();
        $comments = collect();

        foreach ($articles as $article) {
            $comments = $comments->merge($article->comments);
        }

        return view('admin.comments.index',compact('comments'));
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
        $comment=Comment::findOrFail($id);
        return view('admin.comments.show',compact('comment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comment=Comment::findorfail($id);
       return view('admin.comments.edit',compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comment=Comment::findorfail($id);
        $comment->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
        ]);
        $notification = [
            'message'=>'Comment updated successfully!',
            'alert-type'=>'success'
        ];

        return redirect()->route('admin.comment.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
