<?php

// app/Models/Domain.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
         'extension',
          'price',
          'duration',
          'status',

        'user_email',
        'purchase_date',
        'expiration_date',
        'api_response'


        ];
    // Si vous avez d'autres attributs que vous voulez ajouter ou des relations

    // Si vous avez d'autres attributs que vous voulez ajouter ou des relations

    // Enum for domain status
    const STATUS_AVAILABLE = 'available';
    const STATUS_UNAVAILABLE = 'unavailable';
    const STATUS_RESERVED = 'reserved';

    public function isAvailable()
    {
        return $this->status === self::STATUS_AVAILABLE;
    }

    public function isUnavailable()
    {
        return $this->status === self::STATUS_UNAVAILABLE;
    }

    public function isReserved()
    {
        return $this->status === self::STATUS_RESERVED;
    }

    public function user() {
        return $this->belongsTo(User::class);
    }


}
