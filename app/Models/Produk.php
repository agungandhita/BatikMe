<?php

namespace App\Models;

use App\Models\Category;
use App\Models\ProdukImage;
use App\Traits\NumberFormat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    use HasFactory, SoftDeletes, NumberFormat;

    protected $table = "produks";
    protected $primaryKey = "produk_id";


    protected $guarded = [
        'produk_id'
    ];

   
    public function produkimage()
    {
        return $this->hasMany(ProdukImage::class, 'produk_id', 'produk_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Category::class,'kategori_id','kategori_id');
    }

    public function size(){
        return $this->hasMany( Size::class, 'produk_id', 'produk_id' );
    }

    public function keranjang()
    {
        return $this->belongsTo(Keranjang::class, 'keranjang_id', 'keranjang_id');
    }

    public function produk()
    {
        return $this->hasMany(Produk::class, 'pemesanan_id'); // Pastikan foreign key benar
    }
}
