<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pemasukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PemasukanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemasukan = Pemasukan::all();

        return view('admin.pemasukan.index', [
            'pemasukan' => $pemasukan
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
            'keterangan' => 'required',
            'pemasukan' => 'required'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Gagal menambah data pemasukan',
            ];

            return response()->json($response, 200);
        } else {

            try {
                Alert::success('success', 'Berhasil menambah data pemasukan');

                $pemasukan = new Pemasukan();
                $pemasukan->keterangan = $request->keterangan;
                $pemasukan->pemasukan = $request->pemasukan;

                $pemasukan->save();
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
            'keterangan' => 'required',
            'pemasukan' => 'required'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Gagal mengubah data pemasukan',
            ];

            return response()->json($response, 200);
        } else {

            try {
                Alert::success('success', 'Berhasil mengubah data pemasukan');

                $pemasukan = Pemasukan::findOrFail($id);
                $pemasukan->keterangan = $request->keterangan;
                $pemasukan->pemasukan = $request->pemasukan;

                $pemasukan->save();
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
            $pemasukan = Pemasukan::findOrFail($id);
            $response = [
                'success' => false,
                'message' => 'Gagal menghapus data pemasukan',
            ];

            (!$pemasukan ?? $response);

            $pemasukan->delete();

        } catch (\Throwable $th) {
            throw $th;
        }

        return redirect()->back();
    }
}
