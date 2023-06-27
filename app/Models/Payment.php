<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded=['id'];

    public function order()
    {
        return $this->hasMany(Order::class, 'payment_id');
    }
    public function user()
    {
        return $this->hasMany(User::class, 'payment_id');
    }
    use HasFactory;
}
