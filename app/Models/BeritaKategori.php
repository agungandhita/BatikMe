<?php

namespace App\Models;

use App\Models\Berita;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BeritaKategori extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "berita_kategoris";
    protected $primaryKey = "berita_kategori_id";

    protected $guarded =[
        'berita_kategori_id'
    ];

    public function berita()
    {
        return $this->hasMany(Berita::class);
    }
}

