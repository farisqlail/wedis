@extends('userView.layout.app')

@section('title.user', 'Dashboard User')

@section('user.content')

    <div class="container mb-5">
        <div class="title-user mb-5" align="center">
            <h3>
                @if (date('H:i:m') < '12:00:00')
                    Pagi ... 
                @elseif(date('H:i:m') < '16:00:00')
                    Siang ... 
                @elseif(date('H:i:m') != '04:00:00')
                    Malam ... 
                @endif
                {{ Auth::user()->name }}
            </h3>
        </div>
        <div class="row d-flex justify-content-between" align="center">
            <div class="col-md-6">
                <div class="card shadow" style="border: none; width: 80%; border-radius: 10px;" align="left">
                    <div class="card-body">
                        <h5>Total Projek</h3>
                            <span class="text-success">5</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow" style="border: none; width: 80%; border-radius: 10px;" align="left">
                    <div class="card-body">
                        <h5>Status Projek</h5>
                        <span class="text-warning">Tahap Development</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- card --}}


    </div>

@endsection
