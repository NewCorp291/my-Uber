<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\model\panier;

class product extends Model
{
    protected $fillable = ['productName'];

    public function panier(){
        return $this->belongsToMany(panier::class);
    }
}
