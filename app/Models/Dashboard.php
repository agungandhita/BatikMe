<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dashboard extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = "dashboards";
    protected $primaryKey = "dashboard_id";

    protected $guarded =[
        'dashboard_id'
    ];
}
