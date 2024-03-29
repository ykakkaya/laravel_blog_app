<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Category::where('user_id', auth()->user()->id)->latest()->get();
        return view('admin.category.index',compact('categories'));;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $category=Category::create([
            'user_id'=>auth()->user()->id,
            'title'=>$request->title,
            'status'=>$request->status,
        ]);
        $notification = [
            'message'=>'Category created successfully!',
            'alert-type'=>'success'
        ];
        return redirect()->route('admin.category.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category=Category::findorfail($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category=Category::findorfail($id);
        $category->update([
            'title'=>$request->title,
            'status'=>$request->status,
        ]);
        $notification = [
            'message'=>'Category updated successfully!',
            'alert-type'=>'success'
        ];
        return redirect()->route('admin.category.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category=Category::findorfail($id);
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
