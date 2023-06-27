<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function order()
    {
        return $this->belongsTo(Order::class, 'status_id');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'status_id');
    }
    use HasFactory;
}
