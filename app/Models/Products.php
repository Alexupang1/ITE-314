<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'photo',
        'price',
        'details',
        'category'
      ];

    public function cart(){
      return $this->belongsTo(Cart::class);
    }

}