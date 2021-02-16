@extends('layout.v_template')
@section('title', 'Edit customer')

@section('content')

    <div class="card">

        <form action="{{ url('customer/'.$detail->id) }}" method="POST">
            {{-- @method('PUT') --}}
            @csrf
            <div class="card-body">

                <input type="hidden" name="id" value="{{$detail->id}}">

                <div class="form-group row">
                    <label for="nama" class="col-sm-2">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Isi nama lengkap" autocomplete="off" value="{{$detail->nama}}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat" class="form-control" id="alamat" cols="10" rows="5" placeholder="Isi alamat lengkap" autocomplete="off">{{htmlspecialchars($detail->alamat)}}</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_telp" class="col-sm-2">No. Telepon</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="no_telp" id="no_telp" placeholder="Isi nomor telepon"  value="{{$detail->no_telp}}">
                    </div>
                </div>
            </div>
            <hr>
            <div class="card-footer">
                <a href="/customer" class="btn btn-sm btn-default">Kembali</a>
                <input type="submit" class="btn btn-success btn-sm" value="Update data">
            </div>
        </form>
    </div>

@endsection