<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    use HasFactory;

    // Mass assignable fields
    protected $fillable = [
        'user_id',
        'customer_id',
        'food_id',
        'order_id',
        'note',
    ];


    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function food()
    {
        return $this->belongsTo(Food::class,'food_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class,'order_id');
    }
}
