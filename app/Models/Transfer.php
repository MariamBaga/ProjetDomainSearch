<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    protected $table = 'transfers';

    /**
     * Les attributs qui sont assignables.
     *
     * @var array
     */
    protected $fillable = [
        'domain_name',
        'auth_code',
        'purchase_price',
        'user_email',
        'status',
    ];

    /**
     * Les attributs qui doivent être castés à un type natif.
     *
     * @var array
     */
    protected $casts = [
        'purchase_price' => 'decimal:2',
    ];

    /**
     * Par défaut, le statut d'un transfert sera 'pending'.
     */
    protected $attributes = [
        'status' => 'pending',
    ];
}
