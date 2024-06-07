<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pemesanan extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded =[
        'pemesanan_id'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id'); // Pastikan foreign key benar
    }

   
}