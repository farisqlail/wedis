@extends('admin.layouts.app')

@section('title', 'History Project')

@section('admin.content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-0 text-gray-800">Halaman History</h1>
        </div>
    </div>

    <div class="card shadow rounded mt-4" style="border:none;">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="tableHistory">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Project</th>
                            <th>Nama Customer</th>
                            <th>Dana</th>
                            <th>Status</th>
                            <th>Keuntungan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customer as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_project }}</td>
                                <td>{{ $item->nama_customer }}</td>
                                <td>Rp. {{ number_format($item->dana) }}</td>
                                <td>
                                    <span class="badge badge-success">Project Done</span>
                                </td>
                                <td>Rp. {{ number_format($item->keuntungan) }}</td>
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
            $('#tableHistory').DataTable();
        });
    </script>
@endpush
