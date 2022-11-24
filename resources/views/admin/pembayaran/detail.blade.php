@extends('admin.layouts.app')

@section('title', 'Data Pembayaran List')

@section('admin.content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-0 text-gray-800">Halaman Pembayaran</h1>
        </div>
        <div class="col-md-6" align="right">
            <a href="{{ route('admin.pembayaran.index') }}" class="btn btn-danger">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
            @if ($pembayaran->count() != 0)
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#keuntungan">
                    <i class="fas fa-plus"></i>
                    Tambah Pembayaran
                </button>
            @else
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    <i class="fas fa-plus"></i>
                    Tambah Pembayaran
                </button>
            @endif
        </div>
    </div>

    <div class="modal fade" id="keuntungan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pembayaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.pembayaran.store') }}" method="POST" enctype="multipart/form-data">
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
                            <input type="text" name="harga" id="harga2" class="form-control"
                                placeholder="Rp. 800000">
                        </div>

                        <div class="form-group">
                            <label for="title">Total</label>
                            <input type="text" name="total" id="total2" class="form-control" readonly>
                        </div>

                        <div align="right">
                            <button type="submit" class="btn btn-success mt-3">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
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
                    <form action="{{ route('admin.pembayaran.store') }}" method="POST" enctype="multipart/form-data">
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
                        @if (!empty($pembayaran))
                            @foreach ($pembayaran as $item)
                                <div class="modal fade" id="exampleModalUpdate{{ $item->id }}" tabindex="-1"
                                    aria-labelledby="judulModal" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="judulModal">Edit Pembayaran</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('admin.pembayaran.update', $item->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    {{ method_field('PUT') }}
                                                    @csrf

                                                    <div class="form-group">
                                                        <label for="">Nama Developer</label>
                                                        <select name="id_developer" id="" class="form-control">
                                                            <option value="">Pilih Developer</option>
                                                            @foreach ($developer as $data)
                                                                <option value="{{ $data->id }}"
                                                                    {{ $data->id == $data->id_developer ? 'selected' : '' }}>
                                                                    {{ $data->nama_developer }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <input type="number" name="id_customer" value="{{ $customer->id }}"
                                                        hidden>

                                                    <div class="form-group">
                                                        <label for="title">Harga</label>
                                                        <input type="text" name="harga" id="hargaUpdate"
                                                            class="form-control" placeholder="Rp. 800000"
                                                            value="{{ $item->harga }}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="title">Total</label>
                                                        <input type="text" name="total" id="totalUpdate"
                                                            class="form-control" readonly>
                                                    </div>

                                                    <div align="right">
                                                        <button type="submit" class="btn btn-success mt-3">Edit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_developer }}</td>
                                    <td>Rp. {{ number_format($item->harga) }}</td>
                                    <td>Rp. {{ number_format($item->total) }}</td>
                                    <td>
                                        <a href="" class="btn btn-warning edit" id="modalEdit"
                                            data-toggle="modal" data-id="{{ $item->id }}"
                                            data-target="#exampleModalUpdate{{ $item->id }}"><i
                                                class="fas fa-pen"></i></a>
                                        <a href="#" class="btn btn-danger delete" data-id="{{ $item->id }}"><i
                                                class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td>Data Kosong</td>
                            </tr>
                        @endif
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

        $('.delete').click(function() {
            var pembayaranId = $(this).attr('data-id');
            swal({
                    title: "Apakah kamu yakin ?",
                    text: "Apa kamu yakin ingin menghapus data ini",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/pembayaran/delete/" + pembayaranId + ""
                        swal("Data berhasil dihapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
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

        $('#harga2').on('change', function(e) {
            var harga = e.target.value;
            $.ajax({
                url: '/hitung-keuntungan/' + {{ $customer->id }},
                method: 'GET',
                data: {
                    harga: harga
                },
                success: function(data) {
                    console.log(data);
                    console.log('aku disini')
                    $('#total2').val(data.total);
                }
            })
        });
    </script>
    <script>
        $('#hargaUpdate').on('change', function(e) {
            var harga = e.target.value;
            $.ajax({
                url: '/hitung-total-update/' + {{ $customer->id }},
                method: 'GET',
                data: {
                    harga: harga
                },
                success: function(data) {
                    console.log(data);
                    $('#totalUpdate').val(data.total);
                }
            })
        });
    </script>
@endpush
