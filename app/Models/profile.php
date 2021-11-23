<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\model\panier;

class profile extends Model
{
    protected $fillable = ['nom', 'adresse', 'telephone'];

    public function panier(){
        return $this->belongsTo(panier::class);
    }
}
