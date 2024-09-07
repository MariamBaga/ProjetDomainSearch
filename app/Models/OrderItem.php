<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'domain_name',
        'domain_extension',
        'price',
        'duration',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
