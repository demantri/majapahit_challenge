@extends('layout.v_template')
@section('title', 'Transaksi Pembelian')
@section('tab_name', 'Pembelian')

@section('content')

    <div class="card">

        <form action="/pembelian/save" method="POST">
            @csrf
            <div class="card-body">

                {{-- <input type="hidden" name="point" value="5"> --}}
                
                <div class="form-group row">
                    <label for="id_pembelian" class="col-sm-2">ID Pembelian</label>
                    <div class="col-sm-3">
                        <input type="text" name="id_pembelian" class="form-control" id="id_pembelian" autocomplete="off" value="{{$id_pembelian}}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tgl_transaksi" class="col-sm-2">Tanggal Transaksi</label>
                    <div class="col-sm-2">
                        <input type="text" name="tgl_transaksi" class="form-control" id="tgl_transaksi" autocomplete="off" value="{{ date('Y-m-d') }}" readonly>
                    </div>
                </div>

                <hr>
                
                <div class="form-group row">
                    <label for="customer" class="col-sm-2">Customer</label>
                    <div class="col-sm-4">
                        <select name="id_customer" id="customer" class="form-control">
                            <option value="">Pilih Customer</option>
                            @foreach ($customer as $item)
                                <option value="{{$item->id}}">{{$item->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="point" id="last_point" value="5">
                </div>

                <div class="form-group row">
                    <label for="id_barang" class="col-sm-2">Barang</label>
                    <div class="col-sm-4">
                        <select name="id_barang" id="id_barang" class="form-control">
                             <option value="">Pilih Barang</option>
                             @foreach ($barang as $item)
                                <option value="{{$item->id}}">{{$item->nama_barang}}</option>
                             @endforeach
                        </select>
                    </div>

                    <div class="col-sm-3">
                        <input type="text" id="harga" name="harga" class="form-control" placeholder="Harga satuan" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2">Jumlah Barang</label>
                    <div class="col-sm-4">
                        <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Masukan Jumlah" min="1">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-2">Subtotal</label>
                    <div class="col-sm-4">
                        <input type="number" id="subtotal" name="subtotal" class="form-control" readonly>
                    </div>
                </div>
            </div>
            <p>NOTE: Setiap pembelian, customer akan mendapatkan 5 point</p>
            <hr>
            <div class="card-footer">
                <a href="/pembelian" class="btn btn-default">Kembali</a>
                <input type="submit" class="btn btn-success" id="btn-save" value="Lanjutkan">
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function(){
            var subtotal = $('#subtotal').val();
            var jumlah = $('#jumlah').val();
            var harga = $('#harga').val();

            // alert(jumlah)
            $('#jumlah').prop('disabled', true)
            $('#btn-save').prop('disabled', true)

            $('#id_barang').change(function() {
                // alert('dede ganteng')
                var id_barang = $(this).val();
                // console.log(id_barang);

                $.ajax({
                    url: "/pembelian/details/"+id_barang,
                    method: "GET",
                    dataType: "json",
    			    data:{ 
                        id_barang:id_barang, 
                        _token: '{{ csrf_token() }}'
                    },
                    success:function(data){
                        // console.log(data)
                        $('#harga').val(data[0].harga_barang);
                        $('#jumlah').prop('disabled', false);
                        $('#btn-save').prop('disabled', false);
                        var harga = $('#harga').val()
                        // var jumlah = $('#jumlah').val($(this).val())
                        $('#jumlah').keyup(function() {
                            var subTotal = $(this).val() * harga
                            // console.log(subTotal)
                            $('#subtotal').val(subTotal)
                        })
                    }
                });
            });

            // $('#customer').change(function() {
            //     // alert('dede ganteng')
            //     var id_customer = $(this).val();
            //     // alert(id_customer);

            //     $.ajax({
            //         url: "/pembelian/last_point/"+id_customer,
            //         method: "GET",
            //         dataType: "json",
    		// 	    data:{ 
            //             id_customer:id_customer, 
            //             _token: '{{ csrf_token() }}'
            //         },
            //         success:function(data){
            //             // console.log(data)
            //             $('#last_point').val(data[0].total_point);
            //         }
            //     });
            // });
        });
    </script>
    {{-- taro disini --}}
@endsection