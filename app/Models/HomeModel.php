<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HomeModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [];
    //  
    public function getDetail()
    {
        # code...
        return DB::table('hadiahs')->get();
    }

    public function editData($id)
    {
        # code...
        return DB::table('hadiahs')->where('id', $id)->get();
    }

    public function id_pembelian()
    {
        # code...
        $q=DB::table('detail_pembelians')->select(DB::raw('MAX(RIGHT(id,3)) as kd_max'));
        // $prx=$prefix.Dateindo::convertdate();
        if($q->count()>0)
        {
            foreach($q->get() as $k)
            {
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%06s", $tmp);
            }
        }
        else
        {
            $kd = "000001";
        }
        $datenow = date('Ymd');
        $kd_otomatis = "PMB-".$datenow.$kd;

        return $kd_otomatis;

        // return $no_trans;
    }

    public function detail_pemb()
    {
        $data = DB::table('detail_pembelians')
        ->join('customers', 'customers.id', '=', 'detail_pembelians.id_customer')
        ->select('detail_pembelians.*', 'customers.nama')
        ->get();
        return $data;
    }
    
    public function detail_cust()
    {
        // subquery customer - get point tb_detail_pembelian
        $customer = DB::table('customers')
        ->select('customers.*', 'detail_pembelians.total')

        ->join(DB::raw('(
            SELECT 
                SUM(point) as total, 
                id_customer
            FROM `detail_pembelians` 
            GROUP BY id_customer
            )
            detail_pembelians'), 
        function($join)
        {
           $join->on('customers.id', '=', 'detail_pembelians.id_customer');
        })
        // ->orderBy('detail_pembelians.id_customer', 'DESC')
        ->get();
        
        return $customer;
    }
}
