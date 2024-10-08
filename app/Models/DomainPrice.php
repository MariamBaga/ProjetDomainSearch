<?php

// app/Models/DomainPrice.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'transfer_price', 'register_price', 'renew_price', 'currency'
    ];
}
