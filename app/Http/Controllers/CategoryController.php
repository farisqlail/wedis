<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();

        return view('admin.categories.index', [
            'category' => $category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_name' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Gagal menambahkan data category',
            ];

            return response()->json($response, 200);
        } else {

            try {
                Alert::success('success', 'Berhasil Menambah Kategori');

                $category = new Category;
                $category->category_name = $request->category_name;

                $category->save();
            } catch (\Throwable $th) {
                throw $th;
            }

            return redirect()->route('category.admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {}

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
            'category_name' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Gagal mengedit data category',
            ];

            return response()->json($response, 200);
        } else {

            try {
                Alert::success('success', 'Berhasil mengedit data category');

                $category = Category::find($id);
                $category->category_name = $request->category_name;

                $category->save();
            } catch (\Throwable $th) {
                throw $th;
            }

            return redirect()->route('category.admin');
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


        try {
            $category = Category::findOrFail($id);
            $response = [
                'success' => false,
                'message' => 'Gagal menghapus data Kategori',
            ];

            (!$category ?? $response);

            $category->delete();
        } catch (\Throwable $th) {
            throw $th;
        }

        return redirect()->back();
    }
}
