@extends('admin.layouts.app')

@section('title', 'Customer List')

@section('admin.content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-0 text-gray-800">Halaman Customer</h1>
        </div>
        <div class="col-md-6" align="right">
            <a href="{{ route('admin.customer.create') }}" class="btn btn-primary">Tambah Customer</a>
        </div>
    </div>

    <div class="card shadow rounded mt-4" style="border:none;">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="tableCustomer">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Project</th>
                            <th>Nama Customer</th>
                            <th>Developer</th>
                            <th>Dana</th>
                            <th>Status</th>
                            <th>Keuntungan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customer as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_project }}</td>
                                <td>{{ $item->nama_customer }}</td>
                                <td>{{ $item->nama_developer }}</td>
                                <td>Rp. {{ number_format($item->dana) }}</td>
                                <td>
                                    @if ($item->status == 'Progress')
                                    <span class="badge badge-warning">Progress</span>
                                    @else
                                    <span class="badge badge-danger">Done</span>
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($item->keuntungan) }}</td>
                                <td>
                                    @if ($item->status == 'Progress')
                                        <a href="{{ route('admin.customer.edit', $item->id) }}" class="btn btn-warning"><i
                                                class="fas fa-pen"></i></a>
                                        <a href="#" class="btn btn-danger delete" data-id="{{ $item->id }}"><i
                                                class="fas fa-power-off"></i></a>
                                    @else
                                        <span class="badge badge-success">Project Done</span>
                                    @endif
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
    <script>
        $(document).ready(function() {
            $('#tableCustomer').DataTable();
        });
    </script>
    <script>
        $('.delete').click(function() {
            var customerId = $(this).attr('data-id');
            swal({
                    title: "Apakah kamu yakin ?",
                    text: "Apa kamu yakin ingin project ini selesai",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/customer/delete/" + customerId + ""
                        swal("Data berhasil ubah status", {
                            icon: "success",
                        });
                    } else {
                        swal("Data tidak jadi ubah status");
                    }
                });
        });
    </script>
@endpush
