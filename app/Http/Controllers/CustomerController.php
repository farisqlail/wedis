<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Developer;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::join('developers as dev', 'dev.id', '=', 'customers.id_developer')->get();

        return view('admin.customer.index', [
            'customer' => $customer
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $developer = Developer::all();

        return view('admin.customer.create', [
            'developer' => $developer
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
            'nama_project' => 'required',
            'nama_customer' => 'required',
            'id_developer' => 'required',
            'harga' => 'required'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Gagal menambahkan data customer',
            ];

            return response()->json($response, 200);
        } else {

            try {
                Alert::success('success', 'Berhasil Menambah Customer');

                $customer = new Customer();
                $customer->nama_project  = $request->nama_project;
                $customer->nama_customer = $request->nama_customer;
                $customer->id_developer = $request->id_developer;
                $customer->harga = $request->harga;
                $customer->total = $request->total;

                $customer->save();
            } catch (\Throwable $th) {
                throw $th;
            }

            return redirect()->route('customer.index');
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
        $customer = Customer::findOrFail($id);
        $developer = Developer::all();

        return view('admin.customer.edit', [
            'developer' => $developer,
            'customer' => $customer
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
            'nama_project' => 'required',
            'nama_customer' => 'required',
            'id_developer' => 'required',
            'harga' => 'required'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Gagal mengedit data customer',
            ];

            return response()->json($response, 200);
        } else {

            try {
                Alert::success('success', 'Berhasil Edit Customer');

                $customer = Customer::findOrFail($id);
                $customer->nama_project  = $request->nama_project;
                $customer->nama_customer = $request->nama_customer;
                $customer->id_developer = $request->id_developer;
                $customer->harga = $request->harga;
                $customer->total = $request->total;

                $customer->save();
            } catch (\Throwable $th) {
                throw $th;
            }

            return redirect()->route('customer.index');
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
            $customer = Customer::findOrFail($id);
            $response = [
                'success' => false,
                'message' => 'Gagal menghapus data Customer',
            ];

            (!$customer ?? $response);

            $customer->delete();

        } catch (\Throwable $th) {
            throw $th;
        }

        return redirect()->back();
    }
}
