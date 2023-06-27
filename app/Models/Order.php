<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Order extends Model
{
    protected $guarded=['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'added_by');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class, 'payment_id');
    }

    public function last_updates_by()
    {
        return $this->belongsTo(User::class, 'last_updates_by');
    }


    use HasFactory;
}
