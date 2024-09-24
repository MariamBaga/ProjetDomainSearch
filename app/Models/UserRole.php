<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable = [
        'user_id',
        'role',
    ];

    // Relation inverse avec le modèle User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
