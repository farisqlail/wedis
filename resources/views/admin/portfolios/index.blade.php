@extends('admin.layouts.app')

@section('title', 'Portfolio Wedis')

@section('admin.content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-md-6">
            <h1 class="h3 mb-0 text-gray-800">Halaman Portfoolio</h1>
        </div>
        <div class="col-md-6" align="right">
            <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary">Tambah Portfolio</a>
        </div>
    </div>

    <div class="card shadow rounded mt-4" style="border: none;">
        <div class="card-body">
            <table class="table" id="tablePortfolio">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Thumbnail</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($portfolio as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->portfolio_name }}</td>
                            <td>{!! \Illuminate\Support\Str::limit($item->description, 50) !!}</td>
                            <td>
                                <img src="{{ asset('storage/portfolios/' . $item->image) }}" class="img-fluid">
                            </td>
                            <td>
                                <a href="{{ route('admin.portfolio.edit', $item->id) }}" class="btn btn-warning"><i class="fas fa-pen"></i></a>
                                <a href="#" class="btn btn-danger delete" data-id="{{ $item->id }}"><i class="fas fa-trash-alt"></i></a>
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
        $('#tablePortfolio').DataTable();
    });

    $('.delete').click(function() {
        var portfolioId = $(this).attr('data-id');
        swal({
                title: "Apakah kamu yakin ?",
                text: "Apa kamu yakin ingin menghapus data ini",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/portfolio/delete/" + portfolioId + ""
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