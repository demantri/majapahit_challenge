<?php

namespace App\Http\Controllers;

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
        $customer = customer::select('*')
                    ->from('customers')
                    ->get();
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
    public function point()
    {
        $point = point::select('*')
                    ->from('points')
                    ->get();
        // dd($customer);
        return view('point.index', compact('point'));
    }

    public function point_form()
    {
        return view('point.form');
    }

    public function point_save(Request $request)
    {
        # code...
        point::create($request->all());
        return redirect('/point');
    }

    public function point_form_edit($id)
    {
        # code...
        $detail = point::where('id', $id)->first();
        return view('point.form_edit', compact('detail'));
    }

    public function point_update(Request $request, $id)
    {
        # code...
        point::where('id', $id)
        ->update([
            // 'id'            => $request->id,
            // 'nama'            => $request->nama,
            // 'alamat'   => $request->alamat,
            // 'no_telp'     => $request->no_telp,
        ]);
        return redirect('/point');
    }

    public function point_delete($id)
    {
        # code...
        point::where('id', $id)
        ->delete();
        return redirect('/point');
    }

}
