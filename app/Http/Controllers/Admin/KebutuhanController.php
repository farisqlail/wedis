<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Kebutuhan;
use App\Models\Pemasukan;
use App\Models\Pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class KebutuhanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemasukan = Pemasukan::all();
        $kebutuhan = Kebutuhan::all();

        return view('admin.kebutuhan.index', [
            'pemasukan' => $pemasukan,
            'kebutuhan' => $kebutuhan
        ]);
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
            'nama_kebutuhan' => 'required',
            'pengeluaran' => 'required'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Gagal menambah data kebutuhan',
            ];

            return response()->json($response, 200);
        } else {

            try {
                Alert::success('success', 'Berhasil menambah data kebutuhan');

                $kebutuhan = new Kebutuhan();
                $kebutuhan->nama_kebutuhan = $request->nama_kebutuhan;
                $kebutuhan->pengeluaran = $request->pengeluaran;

                $kebutuhan->save();
            } catch (\Throwable $th) {
                throw $th;
            }

            return redirect()->back();
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
        //
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
            'nama_kebutuhan' => 'required',
            'pengeluaran' => 'required'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Gagal mengedit data kebutuhan',
            ];

            return response()->json($response, 200);
        } else {

            try {
                Alert::success('success', 'Berhasil mengedit data kebutuhan');

                $kebutuhan = Kebutuhan::findOrFail($id);
                $kebutuhan->nama_kebutuhan = $request->nama_kebutuhan;
                $kebutuhan->pengeluaran = $request->pengeluaran;

                $kebutuhan->save();
            } catch (\Throwable $th) {
                throw $th;
            }

            return redirect()->back();
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
            $kebutuhan = Kebutuhan::findOrFail($id);
            $response = [
                'success' => false,
                'message' => 'Gagal menghapus data kebutuhan',
            ];

            (!$kebutuhan ?? $response);

            $kebutuhan->delete();

        } catch (\Throwable $th) {
            throw $th;
        }

        return redirect()->back();
    }
}
