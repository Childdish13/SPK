@extends('template.main')

@section('container')

<div class="container rounded bg-white mt-5 mb-4">
    <div class="row">
        <div class="p-2 py-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="text-right"><b>Tambah Ebook</b></h4>
            </div>
            <div class="col-sm-6">
                <a href="" class=" btn btn-primary me-1">Export Data</a>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#importexport">
                    Import Data
                </button>
                <a href="#tambahebook" class="btn btn-info" data-toggle="modal"><span>Tambah Ebook</span></a>
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
                    @foreach ($ebooks as $key => $item)
                    <tr class="table">
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $item->kd_ebook }}</td>
                        <td>{{ $item->kd_mediakonten }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->kategori }}</td>
                        <td>{{ $item->pengarang }}</td>
                        <td>{{ $item->penerbit }}</td>
                        <td>{{ $item->bahasa }}</td>
                        <td><a href="tbhebook" class="btn btn-primary me-1">Edit</a></td>
                        <td><a href="" class="btn btn-danger">Hapus</a></td>
                    </tr>
                    @endforeach
                </tbody>
                <!--Table body-->
            </table>
            <!--Table-->
        </div>

    </div>
</div>
<div id="tambahebook" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/ebook" method="post">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Ebook</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Media Konten</label>
                        <input type="text" class="form-control" name="kd_mediakonten" required>
                    </div>
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" class="form-control" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <input type="text" class="form-control" name="kategori" required>
                    </div>
                    <div class="form-group">
                        <label>Pengarang</label>
                        <input type="text" class="form-control" name="pengarang" required>
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" required>
                    </div>
                    <div class="form-group">
                        <label>Bahasa</label>
                        <input type="text" class="form-control" name="bahasa" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="importexport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import CSV</h5>
                <button type="button" class="fa fa-window-close" data-bs-dismiss="modal" aria-label="Close"></button>
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