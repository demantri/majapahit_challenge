<?php

namespace App\Http\Controllers;

use App\Models\HomeModel;
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

    public function hadiah_save()
    {
        # code...
        redirect('/hadiah');
    }

}
