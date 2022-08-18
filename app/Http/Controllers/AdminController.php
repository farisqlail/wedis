<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $keuntungan = Customer::sum('keuntungan');
        return view('admin.dashboard', [
            'keuntungan' => $keuntungan
        ]);	
    }
}
