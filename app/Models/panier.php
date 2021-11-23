<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class panier extends Model
{
    public function profile(){
        return $this->hasOne('Profile');
    }

    public function order(){
        return $this->hasOne('Order');
    }

    public function product(){
        return $this->belongsToMany('Product');
    }
}
