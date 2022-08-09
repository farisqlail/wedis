@extends('admin.layouts.app')

@section('title', 'Data Pembayaran List')

@section('admin.content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-0 text-gray-800">Halaman Pembayaran</h1>
        </div>
        <div class="col-md-6" align="right">
            <a href="{{ route('pembayaran.index') }}" class="btn btn-danger">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fa-plus"></i>
                Tambah Pembayaran
            </button>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Nama Developer</label>
                            <select name="id_developer" id="" class="form-control">
                                <option value="">Pilih Developer</option>
                                @foreach ($developer as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_developer }}</option>
                                @endforeach
                            </select>
                        </div>

                        <input type="number" name="id_customer" value="{{ $customer->id }}" hidden>

                        <div class="form-group">
                            <label for="title">Harga</label>
                            <input type="text" name="harga" id="harga" class="form-control"
                                placeholder="Rp. 800000">
                        </div>

                        <div class="form-group">
                            <label for="title">Total</label>
                            <input type="text" name="total" id="total" class="form-control" readonly>
                        </div>

                        <div align="right">
                            <button type="submit" class="btn btn-success mt-3">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow rounded mt-4" style="border:none;">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="tableDetail">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Developer</th>
                            <th>Harga</th>
                            <th>Keuntungan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pembayaran as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_developer }}</td>
                                <td>Rp. {{ number_format($item->harga) }}</td>
                                <td>Rp. {{ number_format($item->total) }}</td>
                                <td>
                                    {{-- <a href="{{ route('pembayaran.detail', $item->id) }}" class="btn btn-info btn-sm">Detail Project</a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
    <script>
        $(document).ready(function() {
            $('#tableDetail').DataTable();
        });
    </script>
    <script>
        $('#harga').on('change', function(e) {
            var harga = e.target.value;
            $.ajax({
                url: '/hitung-total/' + {{ $customer->id }},
                method: 'GET',
                data: {
                    harga: harga
                },
                success: function(data) {
                    console.log(data);
                    $('#total').val(data.total);
                }
            })
        });
    </script>
@endpush
