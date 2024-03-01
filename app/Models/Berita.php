<?php

namespace App\Models;

use App\Models\BeritaKategori;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Berita extends Model
{
    use HasFactory;

    use HasFactory,SoftDeletes,Sluggable;
    protected $table = "beritas";
    protected $primaryKey = "berita_id";

    protected $guarded =[
        'berita_id'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

// public function beritakategori()
// {
//     return $this->belongsTo(BeritaKategori::class, 'BeritaKategori', 'berita_id');
// }

}
