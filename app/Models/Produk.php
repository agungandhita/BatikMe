<?php

namespace App\Models;

use App\Models\Category;
use App\Models\ProdukImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Produk extends Model
{
    use HasFactory, SoftDeletes;

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
}
