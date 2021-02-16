<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MasterdataModel extends Model
{
    use HasFactory;

    public function getUser()
    {
        # code...
        return DB::table('users')->get();
    }

    public function getCustomer()
    {
        # code...
        return DB::table('customers')->get();
    }

    public function getPoint()
    {
        # code...
        return DB::table('points')->get();
    }
}
