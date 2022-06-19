@extends('admin.layouts.app')

@section('title', 'Artikel Wedis')

@section('admin.content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-0 text-gray-800">Halaman Artikel</h1>
        </div>
        <div class="col-md-6" align="right">
            <a href="{{ route('blog.create') }}" class="btn btn-primary">Buat Artikel</a>
        </div>
    </div>

    <div class="card shadow rounded mt-4" style="border:none;">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="tableBlog">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Thumbnail</th>
                            <th>Aksi</th>
                        <tr>
                    </thead>
                    <tbody>
                        @foreach ($blog as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->description }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid">
                                </td>
                                <td>

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
            $('#tableBlog').DataTable();
        });
    </script>
@endpush
