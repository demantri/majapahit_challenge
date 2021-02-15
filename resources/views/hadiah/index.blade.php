@extends('layout.v_template')
@section('title', 'Tampilan Hadiah')

@section('content')

    <div class="card">
        <div class="card-header">
            <a href="/hadiah/add" class="btn btn-sm btn-success">+ Tambah Data</a>
        </div>

        <div class="card-body">
            {{-- isinya disini --}}
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Description</th>
                            <th>Min Point</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($hadiah as $item)
                        <tr>
                            <td> {{$item->id}} </td>
                            <td> {{$item->desc_hadiah}} </td>
                            <td> {{$item->min_point}} </td>
                            <td style="width: 15%" class="text-center">
                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection