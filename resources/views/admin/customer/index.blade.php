@extends('admin.layouts.app')

@section('title', 'Customer List')

@section('admin.content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-0 text-gray-800">Halaman Customer</h1>
        </div>
        <div class="col-md-6" align="right">
            <a href="{{ route('customer.create') }}" class="btn btn-primary">Tambah Customer</a>
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
                            <th>Dveloper</th>
                            <th>harga</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($blog as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{!! \Illuminate\Support\Str::limit($item->description, 50) !!}</td>
                                <td>
                                    <img src="{{ asset('storage/blogs/' . $item->image) }}" class="img-fluid">
                                </td>
                                <td>
                                    <a href="{{ route('blog.edit', $item->id) }}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
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
            $('#tableCustomer').DataTable();
        });

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
                        window.location = "/blog/delete/" + customerId + ""
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
