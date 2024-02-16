<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancelledProducts extends Model
{
    use HasFactory;
    protected $fillable = ['products', 'user_id'];

    //RELATION TO USERS
    public function users(){
        return $this->belongsTo(User::class);
    }

    //RELATION TO CART
    public function bought_products(){
        return $this->belongsTo(BoughtProducts::class);
    }
}