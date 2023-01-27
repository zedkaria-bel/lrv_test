<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wilaya extends Model
{
    use HasFactory;

    public function communes(){
        return $this->hasMany(Commune::class, 'wilaya_id');
    }

    public function productions(){
        return $this->hasMany(Production::class, 'wilaya_id');
    }
}
