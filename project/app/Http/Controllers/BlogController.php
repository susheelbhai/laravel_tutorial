<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\File;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.resources.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        // return $request;
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->file_type = $request->file_type;
        switch ($request->file_type) {
            case 'image':
                $ext = $request->file('image')->getClientOriginalExtension();
                $file_name = uniqid() . '.' . $ext;
                $request->file('image')->move(storage_path('image'), $file_name);
                $blog->image = $file_name;
                break;

            case 'pdf':
                $ext = $request->file('pdf')->getClientOriginalExtension();
                $file_name = uniqid() . '.' . $ext;
                $request->file('pdf')->move(storage_path('documents'), $file_name);
                $blog->pdf = $file_name;
                // return 'pdf';
                break;

            case 'color':
                $blog->color = $request->color;

                break;

            default:
                return 'default';
                break;
        }
        $blog->save();
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
