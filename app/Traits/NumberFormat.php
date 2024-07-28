<?php
namespace App\Traits;

trait NumberFormat
{
    public function numberFormat($number){
        return number_format($number,0,',','.');
    }
}
