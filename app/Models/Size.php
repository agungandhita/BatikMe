<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "produk_images";
    protected $primaryKey = "gambarproduk_id";

    protected $guarded =[
        'gambarproduk_id'
    ];

    public function produk(){
        return $this->belongsTo(Produk::class, 'produk_id');
    }
}
