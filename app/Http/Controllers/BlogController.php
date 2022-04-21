<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
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

        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

            $blog = new Blog;
            
            $blog->title = $request->title;
            $blog->slug = $request->slug;
            $blog->description = $request->description;
            $blog->image = $request->image;

            $blog->save();

            $response = [
                'success' => true,
                'message' => 'Berhasil menambahkan data blog',
                'data' => $blog,
            ];

            return response()->json($response, 200);
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
        //
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

            $blog = Blog::findOrFail($id);
            
            $blog->title = $request->title;
            $blog->slug = $request->slug;
            $blog->description = $request->description;
            $blog->image = $request->image;

            $blog->save();

            $response = [
                'success' => true,
                'message' => 'Berhasil mengedit data blog',
                'data' => $blog,
            ];

            return response()->json($response, 200);
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

        return response()->json($response, 200);
    }
}
