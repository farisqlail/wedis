<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Developer;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Snowfire\Beautymail\Beautymail;

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
            'dana' => 'required'
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

                $customer                   = new Customer();
                $customer->id_developer     = $request->id_developer;
                $customer->nama_project     = $request->nama_project;
                $customer->nama_customer    = $request->nama_customer;
                $customer->id_developer     = $request->id_developer;
                $customer->dana             = $request->dana;
                $customer->status           = 'Progress';

                $customer->save();
            } catch (\Throwable $th) {
                throw $th;
            }

            return redirect()->route('admin.customer.index');
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
            'dana' => 'required'
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

                $customer                   = Customer::findOrFail($id);
                $customer->nama_project     = $request->nama_project;
                $customer->nama_customer    = $request->nama_customer;
                $customer->id_developer     = $request->id_developer;
                $customer->status           = $request->status;
                $customer->dana             = $request->dana;

                $customer->save();
            } catch (\Throwable $th) {
                throw $th;
            }

            return redirect()->route('admin.customer.index');
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

            $status = [
                'status' => 'Done'
            ];
            $customer->update($status);
        } catch (\Throwable $th) {
            throw $th;
        }

        return redirect()->back();
    }
}
