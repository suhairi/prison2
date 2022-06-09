<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Delay;
use App\Models\Order;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'status'];

    public function delays() {
        return $this->hasOne(Delay::class);
    }

    public function order() {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }
}
