<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Developer;
use App\Models\Pemasukan;
use App\Models\Pembayaran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer  = Customer::where('status', 'Progress')->get();

        return view('admin.pembayaran.index', [
            'customer' => $customer
        ]);
    }

    public function history()
    {
        $customer = Customer::where('status', 'Done')->get();

        return view('admin.history.index', [
            'customer' => $customer
        ]);
    }

    public function detail($id)
    {

        $customer = Customer::findOrFail($id);
        $developer = Developer::all();
        $pembayaran = Pembayaran::join('customers as cs', 'cs.id', '=', 'pembayarans.id_customer')
            ->join('developers as dev', 'dev.id', '=', 'pembayarans.id_developer')
            ->where('pembayarans.id_customer', $id)
            ->get();

        // if (empty($pembayaran)) {
            if ($pembayaran->count() != 0) {
                $pemasukan = [
                    'keterangan' => $customer->nama_project,
                    'pemasukan' => $customer->keuntungan,
                    'created_at' => Carbon::now()
                ];

                $keterangan = Pemasukan::where('keterangan', $customer->nama_project)->first();
                if (!$keterangan) {
                    Pemasukan::insert($pemasukan);
                }
            }

            return view('admin.pembayaran.detail', [
                'pembayaran' => $pembayaran,
                'developer' => $developer,
                'customer' => $customer
            ]);
        // } 
        // else {
        //     return view('admin.pembayaran.detail', [
        //         'pembayaran' => $pembayaran,
        //         'developer' => $developer,
        //         'customer' => $customer
        //     ]);
        // }
    }

    public function hitungTotal(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $hargaDev = $request->harga;

        $total = $customer->dana - $hargaDev;
        return response()->json([
            'total' => $total
        ]);
    }

    public function hitungKeuntungan(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $hargaDev = $request->harga;

        $total = $customer->keuntungan - $hargaDev;
        return response()->json([
            'total' => $total
        ]);
    }

    public function hitungTotalUpdate(Request $request, $id)
    {
        $data = Pembayaran::findOrFail($id);
        $hargaDev = $request->harga;

        $total = $data->total - $hargaDev;

        return response()->json([
            'total' => $total
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
            'id_developer' => 'required',
            'harga' => 'required'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Gagal menambah data pembayaran',
            ];

            return response()->json($response, 200);
        } else {

            try {
                Alert::success('success', 'Berhasil menambah data pembayaran');

                $pembayaran = new Pembayaran();
                $pembayaran->id_developer = $request->id_developer;
                $pembayaran->id_customer = $request->id_customer;
                $pembayaran->harga = $request->harga;
                $pembayaran->total = $request->total;

                $keuntungan = [
                    'keuntungan' => $request->total
                ];
                Customer::where('id', $request->id_customer)->update($keuntungan);

                $pembayaran->save();
            } catch (\Throwable $th) {
                throw $th;
            }

            return redirect()->back();
        }
    }


    public function pemasukan()
    {
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
            'id_developer' => 'required',
            'harga' => 'required'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'message' => 'Gagal mengedit data pembayaran',
            ];

            return response()->json($response, 200);
        } else {

            try {
                Alert::success('success', 'Berhasil mengedit data pembayaran');

                $pembayaran = Pembayaran::findOrFail($id);
                $pembayaran->id_developer = $request->id_developer;
                $pembayaran->id_customer = $request->id_customer;
                $pembayaran->harga = $request->harga;
                $pembayaran->total = $request->total;

                $keuntungan = [
                    'keuntungan' => $request->total
                ];
                Customer::where('id', $request->id_customer)->update($keuntungan);

                $pembayaran->save();
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
            $pembayaran = Pembayaran::findOrFail($id);
            $response = [
                'success' => false,
                'message' => 'Gagal menghapus data pembayaran',
            ];

            (!$pembayaran ?? $response);

            if ($pembayaran->count() == 0) {
                $keuntungan = [
                    'keuntungan' => 0
                ];
                Customer::where('id', $id)->update($keuntungan);
            }

            $pembayaran->delete();
        } catch (\Throwable $th) {
            throw $th;
        }

        return redirect()->back();
    }
}
