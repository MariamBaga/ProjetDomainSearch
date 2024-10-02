<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // Attributs qui peuvent être remplis lors de la création ou la mise à jour du modèle
    protected $fillable = [
        'order_id',
        'transaction_id',
        'amount',
        'status',
        'callback_data',
        'user_email', // Ajoutez 'user_email' ici''
        'actions',
    ];

    // Relation avec le modèle Order (une commande peut avoir plusieurs paiements)

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }


    /**
     * Assure que l'order_id a toujours le préfixe 'ORD'
     */

        // Si l'order_id ne commence pas par 'ORD', on le préfixe
        public function setOrderIdAttribute($value)
{
    // Enlève le préfixe 'ORD' pour stocker uniquement l'ID
    $this->attributes['order_id'] = str_replace('ORD', '', $value);
}



    /**
     * Récupère les données du callback sous forme d'objet PHP
     */
    public function getCallbackDataAttribute($value)
    {
        return json_decode($value, true);
    }

    /**
     * Définit les données du callback sous forme de JSON
     */
    public function setCallbackDataAttribute($value)
    {
        $this->attributes['callback_data'] = json_encode($value);
    }
}
