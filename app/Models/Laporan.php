<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "keranjangs";
    protected $primaryKey = "keranjang_id";


    protected $guarded =[
        'keranjang_id'
    ];
}
