@extends('admin.layouts.app')

@section('title', 'Data Kebutuhan Wedis')

@section('admin.content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-0 text-gray-800">Halaman Kebutuhan</h1>
        </div>
        <div class="col-md-6" align="right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Kebutuhan
            </button>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Kebutuhan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.kebutuhan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Nama Kebutuhan</label>
                            <input type="text" class="form-control" id="title" name="nama_kebutuhan"
                                placeholder="Domain ...">
                        </div>

                        <div class="form-group">
                            <label for="title">Pengeluaran</label>
                            <input type="number" class="form-control" id="title" name="pengeluaran"
                                placeholder="Rp. 8000">
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
            <table class="table" id="tableKebutuhan">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kebutuhan</th>
                        <th>Pengeluaran</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kebutuhan as $item)
                        <div class="modal fade" id="exampleModalUpdate{{ $item->id }}" tabindex="-1"
                            aria-labelledby="judulModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="judulModal">Edit Kebutuhan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.kebutuhan.update', $item->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            {{ method_field('PUT') }}
                                            @csrf

                                            <div class="form-group">
                                                <label for="title">Nama Kebutuhan</label>
                                                <input type="text" class="form-control" id="title"
                                                    name="nama_kebutuhan" value="{{ $item->nama_kebutuhan }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="title">Pengeluaran</label>
                                                <input type="number" class="form-control" id="title"
                                                    name="pengeluaran" value="{{ $item->pengeluaran }}">
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
                            <td>{{ $item->nama_kebutuhan }}</td>
                            <td>Rp. {{ number_format($item->pengeluaran) }}</td>
                            <td>
                                <a href="" class="btn btn-warning edit" id="modalEdit" data-toggle="modal"
                                    data-id="{{ $item->id }}" data-target="#exampleModalUpdate{{ $item->id }}"><i
                                        class="fas fa-pen"></i></a>
                                <a href="#" class="btn btn-danger delete" data-id="{{ $item->id }}"><i
                                        class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#tableKebutuhan').DataTable();
        });

        $('.delete').click(function() {
            var kebutuhanId = $(this).attr('data-id');
            swal({
                    title: "Apakah kamu yakin ?",
                    text: "Apa kamu yakin ingin menghapus data ini",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/kebutuhan/delete/" + kebutuhanId + ""
                        swal("Data berhasil dihapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
        });
    </script>
@endpush
