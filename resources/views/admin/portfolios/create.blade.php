@extends('admin.layouts.app')

@section('title', 'Tambah Portfolio Wedis')

@section('admin.content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-0 text-gray-800">Halaman Portfolio</h1>
        </div>
        <div class="col-md-6" align="right">
            <a href="{{ route('portfolio.admin') }}" class="btn btn-danger">
                <i class="fas fa-arrow-left"></i>
                Kembali
            </a>
        </div>
    </div>

    <div class="card shadow rounded mt-4" style="border: none;">
        <div class="card-body">
            <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="">Kategori Portfolio</label>
                    <select class="form-control" name="id_categories" id="exampleFormControlSelect1" required>
                        <option>Pilih Kategori</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" id="portfolio_name" name="portfolio_name" placeholder="Judul" required>
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea id="description" name="description" rows="3" required></textarea>
                </div>

                <div class="form-group">
                    <label for="image">Thumbnail</label>
                    <input type="file" class="form-control" id="image" name="image" style="border:none;" required>
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
