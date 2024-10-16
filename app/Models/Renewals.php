<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renewals extends Model
{
    use HasFactory;

    protected $table = 'renewals';

    protected $fillable = [
        'domain_id',
        'domain_name',
        'renewal_duration',
        'renewal_price',
        'user_email',
        'status',
    ];

    /**
     * Relation avec le modèle Domain.
     * Un renouvellement appartient à un domaine.
     */
    public function domain()
    {
        return $this->belongsTo(Domain::class);
    }

    /**
     * Récupère l'utilisateur lié au renouvellement via son email.
     */
    public function user()
    {
        return $this->hasOne(User::class, 'email', 'user_email');
    }
}
