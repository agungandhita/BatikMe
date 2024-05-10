<?php

namespace App\Models;

use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = "categories";
    protected $primaryKey = "kategori_id";


    protected $guarded =[
        'kategori_id'
    ];
    

   

    public function produk()
    {
        return $this->hasMany(Produk::class,'kategori_id', 'kategori_id');
    }

}
