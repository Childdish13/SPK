@extends('template.main')

@section('container')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-users-cog"></i> Data User</h1>

    <a href="/user" class="btn btn-secondary btn-icon-split"><span class="icon text-white-50"><i class="fas fa-arrow-left"></i></span>
        <span class="text">Kembali</span>
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-info"><i class="fas fa-fw fa-edit"></i> Edit Data User</h6>
    </div>

    <div class="card-body">
        <div class="row">
            <div class="form-group col-md-6">
                <label class="font-weight-bold">E-Mail</label>
                <input autocomplete="off" type="email" name="email" value="" required class="form-control" />
            </div>

            <div class="form-group col-md-6">
                <label class="font-weight-bold">Username</label>
                <input autocomplete="off" type="text" name="username" value="" required class="form-control" />
            </div>

            <div class="form-group col-md-6">
                <label class="font-weight-bold">Password</label>
                <input autocomplete="off" type="password" name="password" required class="form-control" />
            </div>

            <div class="form-group col-md-6">
                <label class="font-weight-bold">Nama Lengkap</label>
                <input autocomplete="off" type="text" name="nama" value="" required class="form-control" />
            </div>

            <div class="form-group col-md-6">
                <label class="font-weight-bold">Level</label>
                <select class="form-control" name="privilege" required>
                </select>
            </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
        <button type="reset" class="btn btn-info"><i class="fa fa-sync-alt"></i> Reset</button>
    </div>
</div>

@endsection