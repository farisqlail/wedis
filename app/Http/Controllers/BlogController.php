<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();

        $response = [
            'success' => true,
            'message' => 'Berhasil mengambil data blog',
            'data' => $blog,
        ];

        return view('admin.blogs.index', [
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Gagal menambahkan data blog',
                'data' => $validator->errors(),
            ];

            return response()->json($response, 400);
        } else {

            try {
                $blog = new Blog;

                $blog->title = $request->title;
                $blog->slug = $request->slug;
                $blog->description = $request->description;
                $blog->image = $request->image->store('blogs');

                $blog->save();

            } catch (\Throwable $th) {
                throw $th;
            }

            return redirect()->route('blog.admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);

        $response = [
            'success' => true,
            'message' => 'Berhasil mengambil data blog',
            'data' => $blog,
        ];

        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('admin.blogs.edit', [
            'blog' => $blog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Gagal mengedit data blog',
                'data' => $validator->errors(),
            ];

            return response()->json($response, 400);
        } else {

            try {
                $blog = Blog::findOrFail($id);
            
                $blog->title = $request->title;
                $blog->slug = $request->slug;
                $blog->description = $request->description;
                $blog->image = $request->image->store('blogs');
    
                $blog->save();

            } catch (\Throwable $th) {
                throw $th;
            }

            return redirect()->route('blog.admin');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        $response = [
            'success' => true,
            'message' => 'Berhasil menghapus data blog',
            'data' => [],
        ];

        return redirect()->back();
    }
}
