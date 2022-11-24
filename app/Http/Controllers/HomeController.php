<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Kebutuhan;
use App\Models\Pemasukan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->role == 'admin') {
            $pemasukan = Pemasukan::sum('pemasukan');
            $kebutuhan = Kebutuhan::sum('pengeluaran');
            $keuntungan = $pemasukan - $kebutuhan;

            return view('admin.dashboard', [
                'keuntungan' => $keuntungan,
                'kebutuhan' => $kebutuhan
            ]);
        } elseif (Auth::user()->role == 'user') {

            $projek      = Customer::where('id_user', Auth::user()->id)->first();
            $projekCount = Customer::where('id_user', Auth::user()->id)->where('status', 'Selesai')->get();
            $countProjek = count($projekCount);

            return view('userView.index', [
                'projek' => $projek,
                'countProjek' => $countProjek
            ]);
        }
    }
}
