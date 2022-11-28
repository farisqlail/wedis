@extends('admin.layouts.app')

@section('title', 'Data Pembayaran List')

@section('admin.content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-0 text-gray-800">Halaman Pembayaran</h1>
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
                        @foreach ($customer as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_project }}</td>
                                <td>
                                    <span class="badge badge-info">Development</span>
                                </td>
                                <td>
                                    <a href="{{ route('admin.pembayaran.detail', $item->id) }}" class="btn btn-info btn-sm">Detail Project</a>
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
            $('#tablePembayaran').DataTable();
        });
    </script>
@endpush
