<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Article;
use App\Models\User;
use Mail;

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

        $comment = Comment::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'user_id'=>$request->user_id,
            'article_id'=>$request->article_id,

        ]);
        if ($comment) {
            $notification = [
                'message' => 'your comment is successfully added.',
                'alert-type' => 'success'
            ];

            //email notification

            $article = Article::find($request->article_id);
            Mail::raw("{{$article->user->name}} There is a new Comment Please check and change comment status."

            , function ($message) use ($article) {
                $message->from('info@abc.com', 'Website');
                $message->sender('info@abc.com', 'Website');
                $message->to($article->user->email, $article->user->name);
                $message->subject(' Website Comment Alert');
            });

        } else {
            $notification = [
                'message' => 'your comment is not added.',
                'alert-type' => 'error'
            ];
        }

        return redirect()->back()->with($notification);


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
