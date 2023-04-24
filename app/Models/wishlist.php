<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wishlist extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'product_id'];

    protected $casts = [
        'images' => 'array',
    ];
    
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class) ;
    }
}
