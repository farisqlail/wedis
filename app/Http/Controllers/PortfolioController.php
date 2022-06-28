<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        $categories = Category::all();

        return view('admin.portfolios.index', [
            'portfolio' => $portfolio,
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.portfolios.create', [
            'categories' => $categories
        ]);
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
            'id_categories' => 'required',
            'portfolio_name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Gagal menambahkan data portfolio',
            ];

            return response()->json($response, 200);
        } else {
            try {
                Alert::success('success', 'Berhasil Menambah Portfolio');
                $portfolio = new Portfolio();

                $portfolio->id_categories = $request->id_categories;
                $portfolio->portfolio_name = $request->portfolio_name;
                $portfolio->description = $request->description;
                $portfolio->image = $request->image->store('portfolios');

                $portfolio->save();
            } catch (\Throwable $th) {
                throw $th;
            }

            return redirect()->route('portfolio.admin');
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
        $portfolio = Portfolio::findOrFail($id);

        $response = [
            'success' => true,
            'message' => 'Berhasil mengambil data portfolio',
            'data' => $portfolio,
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
        $portfolio = Portfolio::findOrFail($id);
        $categories = Category::all();

        return view('admin.portfolios.edit', [
            'portfolio' => $portfolio,
            'categories' => $categories
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
            'id_categories' => 'required',
            'portfolio_name' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Gagal mengedit data portfolio',
            ];

            return response()->json($response, 200);
        } else {
            try {
                Alert::success('success', 'Portfolio Berhasil Terupdate');
                $portfolio = Portfolio::findOrFail($id);

                $portfolio->id_categories = $request->id_categories;
                $portfolio->portfolio_name = $request->portfolio_name;
                $portfolio->description = $request->description;
                $portfolio->image = $request->image->store('portfolios');

                $portfolio->save();
            } catch (\Throwable $th) {
                throw $th;
            }

            return redirect()->route('portfolio.admin');
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
            Alert::success('success', 'Berhasil Menghapus Portfolio');
            $portfolio = Portfolio::findOrFail($id);
            $response = [
                'success' => false,
                'message' => 'Gagal menghapus data Portfolio',
            ];

            (!$portfolio ?? $response);

            if ($portfolio->image) {
                Storage::delete($portfolio->image);
            }
            $portfolio->delete();
        } catch (\Throwable $th) {
            throw $th;
        }

        return redirect()->back();
    }
}
