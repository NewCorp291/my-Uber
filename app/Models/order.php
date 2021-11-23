<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\model\panier;

class order extends Model
{
    public function panier(){
        return $this->belongsTo(panier::class);
    }
}
