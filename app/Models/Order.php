<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'food_id',
        'quantity',
        'price'
    ];


    public function User(){
        return $this->belongsTo(User::class);
    }

}
