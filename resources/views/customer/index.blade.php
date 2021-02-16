@extends('layout.v_template')
@section('title', 'Tampilan Customer')

@section('content')

    <div class="card">
        <div class="card-header">
            <a href="/customer/add" class="btn btn-sm btn-success">+ Tambah Data</a>
        </div>

        <div class="card-body">
            {{-- isinya disini --}}
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telfon</th>
                            <th>Total Point</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = 1;
                        @endphp
                        @foreach ($customer as $item)
                        <tr>
                            <td> {{$no++}} </td>
                            <td> {{$item->nama}} </td>
                            <td> {{$item->alamat}} </td>
                            <td> {{$item->no_telp}} </td>
                            <td> {{$item->total_point}} </td>
                            <td style="width: 15%" class="text-center">
                                <a href="{{ url('customer/'.$item->id. '/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="/customer/delete/{{$item->id}}" onclick="return confirm('Delete data?')" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection