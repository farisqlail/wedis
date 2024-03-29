@extends('admin.layouts.app')

@section('title', 'Dashboard Wedis')

@section('admin.content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Selamat Datang Admin</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Pemasukan</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                @if (empty($keuntungan))
                                    Rp.0
                                @else
                                    Rp. {{ number_format($keuntungan) }}
                                @endif
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-money-bill-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                Pengeluaran</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. {{ number_format($kebutuhan) }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="far fa-money-bill-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
