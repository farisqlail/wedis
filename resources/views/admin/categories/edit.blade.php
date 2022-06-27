@extends('admin.layouts.app')

@section('title', 'Edit Kategori Portfolio')

@section('admin.content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-0 text-gray-800">Halaman Kategori</h1>
        </div>
        <div class="col-md-6" align="right">
            <a href="{{ route('categories.admin') }}" class="btn btn-danger">
                <i class="fas fa-arrow-left"></i>
                Kembai
            </a>
        </div>
    </div>

    <div class="card shadow rounded mt-4" style="border: none;">
        <div class="card-body">
            <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="title">Nama Kategori Portfolio</label>
                    <input type="text" class="form-control" id="title" name="category_name" value="{{ $category->categoru_name }}">
                </div>

                <div align="right">
                    <button type="submit" class="btn btn-success mt-3">Upload</button>
                </div>
            </form>
        </div>
    </div>

@endsection