<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Developer;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;


class ProjekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'nama_project' => 'required',
            'nama_customer' => 'required',
            'dana' => 'required'
        ]);
        
        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Gagal merequest projek',
            ];

            return response()->json($response, 200);
        } else {

            try {
                Alert::success('Hey Projek mu telah dikirim', 'Tunggu balasan dari kami');

                $customer = new Customer();
                $customer->nama_project     = $request->nama_project;
                $customer->nama_customer    = $request->nama_customer;
                $customer->dana             = $request->dana;
                $customer->kategori         = $request->kategori;
                $customer->status           = 'Progress';

                $customer->save();
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
