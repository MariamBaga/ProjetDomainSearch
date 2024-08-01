<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Webhook extends Model
{
    use HasFactory;



    protected $fillable = ['event', 'payload', 'status', 'domain_id', 'order_id', 'received_at'];

    protected $casts = [
        'payload' => 'array', // Convertit automatiquement le JSON en tableau
    ];

    /**
     * Relation avec le modèle Domain.
     */
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    /**
     * Relation avec le modèle Order.
     */
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
