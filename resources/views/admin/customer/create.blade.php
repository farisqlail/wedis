@extends('admin.layouts.app')

@section('title', 'Tambah Customer')

@section('admin.content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-0 text-gray-800">Halaman Tambah Customer</h1>
        </div>
        <div class="col-md-6" align="right">
            <a href="{{ route('admin.customer.index') }}" class="btn btn-danger">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>
    </div>

    <div class="card shadow rounded mt-4" style="border: none;">
        <div class="card-body">
            <form action="{{ route('admin.customer.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Nama Project</label>
                            <input type="text" class="form-control" id="title" name="nama_project"
                                placeholder="Aplikasi Keuangan ...">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="description">Nama Customer</label>
                            <input type="text" class="form-control" id="title" name="nama_customer"
                                placeholder="Jokowi ...">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Developer</label>
                            <select name="id_developer" class="form-control">
                                <option value="">Pilih Developer</option>
                                @foreach ($developer as $item)
                                    <Option value="{{ $item->id }}">{{ $item->nama_developer }}</Option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Dana</label>
                            <input type="text" class="form-control" name="dana" id="harga" placeholder="100,000">
                        </div>
                    </div>
                </div>

                <div align="right">
                    <button type="submit" class="btn btn-success mt-3">Tambah</button>
                </div>
            </form>
        </div>
    </div>

@endsection

{{-- @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script>
        $('#harga').mask('000.000.000.000', {
            reverse: true
        });
        $('#total').mask('000.000.000.000', {
            reverse: true
        });
    </script>
@endpush --}}
