<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Kebutuhan;
use Illuminate\Http\Request;

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
        $customer = Customer::sum('keuntungan');        
        $kebutuhan = Kebutuhan::sum('pengeluaran');
        $keuntungan = $customer - $kebutuhan;

        return view('admin.dashboard', [
            'keuntungan' => $keuntungan,
            'kebutuhan' => $kebutuhan
        ]);	
    }
}
