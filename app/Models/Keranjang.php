<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Keranjang extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "keranjangs";
    protected $primaryKey = "keranjang_id";


    protected $guarded =[
        'keranjang_id'
    ];

    public function produk()
    {
        return $this->hasMany(Produk::class, 'produk_id', 'produk_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id'  );
    }
}
