<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = Blog::all();
        return view('posts', [
            "title" => 'Blog',
            "data" => $all
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('store-form', [
            'title' => 'Post'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => ['required'],
            'desc' => ['required']
        ]);

        $validate['user_id'] = auth()->user()->id;

        Blog::create($validate);

        return redirect()->route('profile');
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
