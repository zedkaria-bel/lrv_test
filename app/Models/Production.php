<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Production extends Model
{
    use HasFactory;
    protected $guarded = ['brute_j', 'brute_m', 'taux_real', 'taux_rebut'];
    // protected $fillable = []

    // with property : for the eager load for every view which call the prods, and all the relationships that comes with it
    protected $with = ['category', 'user'];

    public function scopeFilter($query, array $filters){
        // dd($filters);
        $query->when($filters['search'] ?? false, function($query, $search){
            $query->where('line', 'like', '%' . Str::upper($search) . '%');
        });
        $query->when($filters['category'] ?? false, function($query, $category){
            $query->whereHas('category', fn($query) => $query->where('slug', $category));
        });
        $query->when($filters['user'] ?? false, function($query, $user){
            $query->whereHas('user', fn($query) => $query->where('username', $user));
        });
        $query->when($filters['wilaya'] ?? false, function($query, $wilaya){
            $query->whereHas('wilaya', fn($query) => $query->where('wilaya_id', $wilaya));
        });
        $query->when($filters['from'] ?? false, function($query, $from){
            $query->where('date', '>=', $from);
        });
        $query->when($filters['to'] ?? false, function($query, $to){
            $query->where('date', '<=', $to);
        });
    }

    public function category(){
        return $this->belongsTo(Category::class, 'cateogry_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function unit(){
        return $this->belongsTo(Unit::class, 'unit_id');
    }

    public function wilaya(){
        return $this->belongsTo(Wilaya::class, 'wilaya_id');
    }

}
