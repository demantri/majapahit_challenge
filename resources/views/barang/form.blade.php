@extends('layout.v_template')
@section('title', 'Tambah Barang Baru')
@section('tab_name', 'Tambah Barang')

@section('content')

    <div class="card">

        <form action="/barang/save" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="nama_barang" class="col-sm-2">Nama Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Isi nama barang" autocomplete="off">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="harga_barang" class="col-sm-2">Harga Barang</label>
                    <div class="col-sm-10">
                        <input type="number" name="harga_barang" id="harga_barang" class="form-control" placeholder="Isi harga barang" autocomplete="off" min="0">
                    </div>
                </div>
            </div>

            <hr>
            <div class="card-footer">
                <a href="/barang" class="btn btn-sm btn-default">Kembali</a>
                <input type="submit" class="btn btn-primary btn-sm" value="Simpan">
            </div>
        </form>
    </div>

@endsection