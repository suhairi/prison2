<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Setting;
use App\Models\Delay;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'setting_id'];

    public function users() {
        return $this->hasOne(User::class);
    }

    public function settings() {
        return $this->hasOne(Setting::class);
    }

    public function delays() {
        return $this->hasOne(Delay::class);
    }

    
}
