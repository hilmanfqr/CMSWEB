<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Post\CreateRequest;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with(['gallery', 'category'])->get();
        return view('auth.posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('auth.posts.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRequest $request)
    {
        try {

            
            DB::beginTransaction();
            

            if ($request->has('file')) {
                $file = $request->file;
                $fileName = time(). $file->getClientOriginalName();
                $imagePath = public_path('images/posts');
                $file->move($imagePath, $fileName);
    
                $gallery = Gallery::create([
                    'image' => $fileName
                ]);
            }
    
            Post::create([
                'category_id' => $request->category,
                'is_publish' => $request->is_publish,
                'title' => $request->title,
                'description' => $request->description,
                'gallery_id' => $gallery->id
            ]);

            DB::commit();
    
        }
        
        catch(\Exception $ex) {
            DB::rollBack();
            dd($ex->getMessage());
        }

        $request->session()->flash('alert-success', 'Post Created');

        return to_route('posts.index');
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
