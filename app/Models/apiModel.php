<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class apiModel extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $table = 'hadiahs';
    // protected $table = 'hadiahs';
    
    public $timestamps = false;

}
