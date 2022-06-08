<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Order;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['bulan_tahun', 'lock'];


    public function orders() {
        return $this->belongsTo(Order::class);
    }
}
