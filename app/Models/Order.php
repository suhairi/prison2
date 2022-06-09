<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Setting;
use App\Models\Delay;
use App\Models\Product;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'setting_id'];

    public function users() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function settings() {
        return $this->belongsTo(Setting::class, 'setting_id', 'id');
    }

    public function delays() {
        return $this->hasMany(Delay::class);
    }

    public function products() {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    
}
