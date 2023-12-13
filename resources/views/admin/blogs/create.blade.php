@extends('admin.layouts.app')

@section('title', 'Buat Artikel Wedis')

@section('admin.content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-0 text-gray-800">Halaman Artikel</h1>
        </div>
        <div class="col-md-6" align="right">
            <a href="{{ route('admin.blog.admin') }}" class="btn btn-danger">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>
    </div>

    <div class="card shadow rounded mt-4" style="border: none;">
        <div class="card-body">
            <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Judul">
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea id="description" name="description" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="image">Thumbnail</label>
                    <input type="file" class="form-control" id="image" name="image" style="border:none;">
                </div>

                <div align="right">
                    <button type="submit" class="btn btn-success mt-3">Upload</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        CKEDITOR.replace('description');
    </script>
@endpush
