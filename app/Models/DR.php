<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DR extends Model
{
    use HasFactory;

    public function wilayas(){
        return $this->hasMany(Wilaya::class, 'wilaya_id');
    }
}
