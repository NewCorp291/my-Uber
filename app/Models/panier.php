<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\model\profile;
use App\model\order;
use App\model\product;

class panier extends Model
{
    public function profile(){
        return $this->hasOne(profile::class);
    }

    public function order(){
        return $this->hasOne(order::class);
    }

    public function product(){
        return $this->belongsToMany(product::class);
    }
}
