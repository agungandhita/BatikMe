<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laporan extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "laporans";
    protected $primaryKey = "laporan_id";

    protected $guarded = [
        'laporan_id'
    ];

    // Add relationships if needed
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'pemesanan_id', 'pemesanan_id');
    }
}
