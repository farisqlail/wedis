@extends('admin.layouts.app')

@section('title', 'Data Pembayaran List')

@section('admin.content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-0 text-gray-800">Halaman Pembayaran</h1>
        </div>
        <div class="col-md-6" align="right">
            <a href="{{ route('pembayaran.create') }}" class="btn btn-primary">Tambah Pembayaran</a>
        </div>
    </div>

    <div class="card shadow rounded mt-4" style="border:none;">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="tablePembayaran">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Project</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($customer as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_project }}</td>
                                <td>{{ $item->nama_customer }}</td>
                                <td>{{ $item->nama_developer }}</td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->total }}</td>
                                <td>
                                    <a href="{{ route('customer.edit', $item->id) }}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                    <a href="#" class="btn btn-danger delete" data-id="{{ $item->id }}"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#tablePembayaran').DataTable();
        });
    </script>
    {{-- <script>
        $('.delete').click(function() {
            var customerId = $(this).attr('data-id');
            swal({
                    title: "Apakah kamu yakin ?",
                    text: "Apa kamu yakin ingin menghapus data ini",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/customer/delete/" + customerId + ""
                        swal("Data berhasil dihapus", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi dihapus");
                    }
                });
        });
    </script> --}}
@endpush
