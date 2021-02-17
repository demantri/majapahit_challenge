<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\detail_pembelian;
use App\Models\HomeModel;
use App\Models\hadiah;
use App\Models\customer;
use App\Models\point;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->Home_model = new HomeModel();
    }

    public function home()
    {
        # code...
        return view('home.index');
    }

    public function index_hadiah()
    {
        // ambil data dimari
        $data = [
            'hadiah' => $this->Home_model->getDetail(),
        ];
        // dd($data);exit;
        return view('hadiah.index', $data);
    }

    public function hadiah_form()
    {
        return view('hadiah.form');
    }

    public function hadiah_form_edit($id)
    {
        $hadiah = $this->Home_model->editData($id)->first();  
        // dd($hadiah);
        return view('hadiah.form_edit', compact('id', 'hadiah'));
    }

    public function hadiah_update(Request $request, $id)
    {
        # code...
        hadiah::where('id', $id)
        ->update([
            'id'            => $request->id,
            'desc_hadiah'   => $request->desc_hadiah,
            'min_point'     => $request->min_point,
        ]);
        return redirect('/hadiah');
    }

    public function hadiah_save(Request $request)
    {
        hadiah::create($request->all());
        return redirect('/hadiah');
    }

    public function hadiah_delete($id)
    {
        // return 'delete';
        hadiah::where('id', $id)
        ->delete();
        return redirect('/hadiah');
    }

    // customer masterdata
    public function customer()
    {
        // $customer = customer::select('*')
        //             ->from('customers')
        //             ->get();
        $customer = $this->Home_model->detail_cust();
        // dd($customer);
        return view('customer.index', compact('customer'));
    }

    public function customer_form()
    {
        return view('customer.form');
    }

    public function customer_save(Request $request)
    {
        # code...
        customer::create($request->all());
        return redirect('/customer');
    }

    public function customer_form_edit($id)
    {
        # code...
        $detail = customer::where('id', $id)->first();
        return view('customer.form_edit', compact('detail'));
    }

    public function customer_update(Request $request, $id)
    {
        # code...
        customer::where('id', $id)
        ->update([
            'id'            => $request->id,
            'nama'            => $request->nama,
            'alamat'   => $request->alamat,
            'no_telp'     => $request->no_telp,
        ]);
        return redirect('/customer');
    }

    public function customer_delete($id)
    {
        # code...
        customer::where('id', $id)
        ->delete();
        return redirect('/customer');
    }

    // point masterdata
    public function barang()
    {
        $barang = barang::select('*')
                    ->from('barangs')
                    ->get();
        // dd($customer);
        return view('barang.index', compact('barang'));
    }

    public function barang_form ()
    {
        return view('barang.form');
    }

    public function barang_save(Request $request)
    {
        # code...
        barang::create($request->all());
        return redirect('/barang');
    }

    public function barang_form_edit($id)
    {
        # code...
        $detail = barang::where('id', $id)->first();
        return view('barang.form_edit', compact('detail'));
    }

    public function barang_update(Request $request, $id)
    {
        # code...
        barang::where('id', $id)
        ->update([
            'id'            => $request->id,
            'nama_barang'            => $request->nama_barang,
            'harga_barang'   => $request->harga_barang,
        ]);
        return redirect('/barang');
    }

    public function barang_delete($id)
    {
        # code...
        barang::where('id', $id)
        ->delete();
        return redirect('/barang');
    }

    public function pembelian()
    {
        $data = $this->Home_model->detail_pemb();
        return view('pembelian.index', compact('data'));
    }

    public function pembelian_form()
    {

        $id_pembelian = $this->Home_model->id_pembelian();
        // dd($id_pembelian);
        $customer = customer::select('*')->from('customers')->get();
        $barang = barang::select('*')->from('barangs')->get();

        return view('pembelian.form', compact('customer', 'barang', 'id_pembelian'));
    }

    public function pembelian_save(Request $request)
    {
        # code...
        detail_pembelian::create($request->all());
        return redirect('/pembelian');
    }

    public function getHarga($id_barang)
    {
        # code...
        $barang = barang::where('id', $id_barang)->get();
        return $barang;
    }

    public function last_point($id_customer)
    {
        $customer = customer::where('id', $id_customer)->get();
        return $customer;
    }

    // public function point_form_edit($id)
    // {
    //     # code...
    //     $detail = point::where('id', $id)->first();
    //     return view('point.form_edit', compact('detail'));
    // }

    // public function pembelian_update(Request $request, $id)
    // {
    //     # code...
    //     point::where('id', $id)
    //     ->update([
    //         // 'id'            => $request->id,
    //         // 'nama'            => $request->nama,
    //         // 'alamat'   => $request->alamat,
    //         // 'no_telp'     => $request->no_telp,
    //     ]);
    //     return redirect('/point');
    // }

    // public function point_delete($id)
    // {
    //     # code...
    //     point::where('id', $id)
    //     ->delete();
    //     return redirect('/point');
    // }

}
