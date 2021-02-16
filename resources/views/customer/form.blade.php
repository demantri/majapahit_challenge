@extends('layout.v_template')
@section('title', 'Add new customer')

@section('content')

    <div class="card">

        <form action="/customer/save" method="POST">
            @csrf
            <div class="card-body">

                <div class="form-group row">
                    <label for="nama" class="col-sm-2">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Isi nama lengkap" autocomplete="off">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" id="alamat" cols="10" rows="5" placeholder="Isi alamat lengkap" autocomplete="off"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_telp" class="col-sm-2">No. Telepon</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="no_telp" id="no_telp" placeholder="Isi nomor telepon">
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-footer">
                <a href="/customer" class="btn btn-sm btn-default">Kembali</a>
                <input type="submit" class="btn btn-primary btn-sm" value="Simpan data">
            </div>
        </form>
    </div>

@endsection