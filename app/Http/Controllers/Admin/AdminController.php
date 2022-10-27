<?php

namespace App\Http\Controllers\Admin;

use App\Models\Customer;
use App\Http\Controllers\Controller;
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
