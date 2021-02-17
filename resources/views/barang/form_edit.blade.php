@extends('layout.v_template')
@section('title', 'Ubah Barang')
@section('tab_name', 'Ubah Barang')

@section('content')

    <div class="card">

        <form action="/barang/{{$detail->id}}" method="POST">
            @csrf
            <div class="card-body">

                <input type="hidden" name="id" value="{{$detail->id}}">

                <div class="form-group row">
                    <label for="nama_barang" class="col-sm-2">Nama Barang</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Isi nama barang" autocomplete="off" value="{{$detail->nama_barang}}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="harga_barang" class="col-sm-2">Harga Barang</label>
                    <div class="col-sm-10">
                        <input type="number" name="harga_barang" id="harga_barang" class="form-control" placeholder="Isi harga barang" autocomplete="off" min="0" value="{{$detail->harga_barang}}">
                    </div>
                </div>
            </div>

            <hr>
            <div class="card-footer">
                <a href="/barang" class="btn btn-sm btn-default">Kembali</a>
                <input type="submit" class="btn btn-primary btn-sm" value="Ubah">
            </div>
        </form>
    </div>

@endsection