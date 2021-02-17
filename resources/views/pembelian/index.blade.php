@extends('layout.v_template')
@section('title', 'Pembelian')
@section('tab_name', 'Pembelian')

@section('content')

    <div class="card">
        <div class="card-header">
            <a href="/pembelian/add" class="btn btn-sm btn-success">+ Tambah Data</a>
        </div>

        <div class="card-body">
            {{-- isinya disini --}}
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pembelian</th>
                            <th>Tanggal Transaksi</th>
                            {{-- <th>ID - Nama Customer</th> --}}
                            <th>Total Pembelian</th>
                            {{-- <th class="text-center">Action</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($data as $item)
                        <tr>
                            <td> {{$no++}} </td>
                            <td> {{$item->id_pembelian}} </td>
                            <td> {{$item->tgl_transaksi}} </td>
                            {{-- <td> {{$item->id_customer}} - {{$item->nama}} </td> --}}
                            <td> {{$item->subtotal}} </td>
                            {{-- <td style="width: 20%" class="text-center"> --}}
                                {{-- <a href="{{ url('customer/'.$item->id. '/edit') }}" class="btn btn-primary btn-sm">Detail</a> --}}
                                {{-- <a href="{{ url('customer/'.$item->id. '/edit') }}" class="btn btn-warning btn-sm">Edit</a> --}}
                                {{-- <a href="/customer/delete/{{$item->id}}" onclick="return confirm('Delete data?')" class="btn btn-danger btn-sm">Delete</a> --}}
                            {{-- </td> --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection