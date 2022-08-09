@extends('admin.layouts.app')

@section('title', 'Data Developer Wedis')

@section('admin.content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-0 text-gray-800">Halaman Developer</h1>
        </div>
        <div class="col-md-6" align="right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Tambah Developer
            </button>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Developer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('developer.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Nama Developer</label>
                            <input type="text" class="form-control" id="title" name="nama_developer"
                                placeholder="Jokowi ....">
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
            <table class="table" id="tableDeveloper">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Developer</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($developer as $item)
                        <div class="modal fade" id="exampleModalUpdate{{ $item->id }}" tabindex="-1"
                            aria-labelledby="judulModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="judulModal">Edit Developer</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('developer.update', $item->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            {{ method_field('PUT') }}
                                            @csrf

                                            <div class="form-group">
                                                <label for="title">Nama Developer</label>
                                                <input type="text" class="form-control" id="title"
                                                    name="nama_developer" value="{{ $item->nama_developer }}">
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
            $('#tableDeveloper').DataTable();
        });

        $('.delete').click(function() {
            var developerId = $(this).attr('data-id');
            swal({
                    title: "Apakah kamu yakin ?",
                    text: "Apa kamu yakin ingin menghapus data ini",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/developer/delete/" + developerId + ""
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
