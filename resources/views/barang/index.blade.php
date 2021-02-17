@extends('layout.v_template')
@section('title', 'Tampilan Barang')
@section('tab_name', 'Barang')

@section('content')

    <div class="card">
        <div class="card-header">
            <a href="/barang/add" class="btn btn-sm btn-success">+ Tambah Data</a>
        </div>

        <div class="card-body">
            {{-- isinya disini --}}
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Harga Satuan</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($barang as $item)
                        <tr>
                            <td> {{$no++}} </td>
                            <td> {{$item->nama_barang}} </td>
                            <td> {{$item->harga_barang}} </td>
                            <td style="width: 15%" class="text-center">
                                <a href="{{ url('barang/'.$item->id. '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/barang/delete/{{$item->id}}" onclick="return confirm('Delete data?')" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection