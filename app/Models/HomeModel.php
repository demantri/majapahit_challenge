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
}
