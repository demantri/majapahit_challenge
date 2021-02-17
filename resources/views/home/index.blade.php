@extends('layout.v_template')
@section('title', 'Home')
@section('tab_name', 'Home')

@section('content')

    <div class="card">
        <div class="card-header">
            {{-- <a href="/hadiah/add" class="btn btn-sm btn-success">+ Tambah Data</a> --}}
            <h3 class="text-center">Jawaban Majapahit Challenge</h3>
        </div>

        <div class="card-body">
            <p>1. Git merupakan software atau tools yang berguna untuk memonitoring/memanajemen kode program yang sedang/sudah dibuat. Tools/software ini dapat mempermudah programer/developer. Karena dapat membackup dengan mudah dengan perintah yang sudah disediakan. </p>
            <p>2. Hubungan yang terjadi antara tabel 1 dengan tabel yang lainnya. </p>
            <p>3. OOP merupakan memprograman yang berdasarkan konsep Object, yang dapat berisi data didalam field tertentu atau atribut. Serta kode yang mempunyai fungsi atau prosedur/method.</p>
            <p>4. REST Api merupakan design arsitektur yang terdapat dalam API itu sendiri. API merupakan software yang mengintegrasikan aplikasi/software yang dibuat dengan aplikasi lain. Tujuannya itu untuk mempermudah developer atau saling berbagi data aplikasi yang dapat di integrasikan.</p>
            <p>5. Validasi parameter, gunakan SSL/TLS untuk semua API, mengidentifikasikan identitas user (Auth) yang menggunakan API. </p>
        </div>
    </div>

@endsection