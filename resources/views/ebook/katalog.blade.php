@extends('template.main')

@section('container')

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right"><b>Tambah Katalog Ebook</b></h4>
            </div>
            <div class="col-sm-6">
                <a href="" class="btn btn-primary me-1">Export Data</a>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Import Data
                </button>
                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambah Katalog Ebook</span></a>
            </div>
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <!--Table-->
            <table class="table table-striped w-auto">

                <!--Table head-->
                <thead style="text-align:center">
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Media Konten</th>
                        <th>Judul</th>
                        <th>Kategori</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Bahasa</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <!--Table head-->

                <!--Table body-->
                <tbody>
                    @foreach ($ebook as $key => $item)
                    <tr class="table">
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $item->id_ebook }}</td>
                        <td>{{ $item->id_mediakonten }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->pengarang }}</td>
                        <td>{{ $item->penerbit }}</td>
                        <td>{{ $item->bahasa }}</td>
                        <td><span><a href="" class="btn btn-primary me-1">Edit</a></span><a href="" class="btn btn-success">Hapus</a></td>
                    </tr>
                    @endforeach
                </tbody>
                <!--Table body-->
            </table>
            <!--Table-->
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import CSV</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="import" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" name="file" class="form-control">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection