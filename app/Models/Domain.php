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
          'status'];
    // Si vous avez d'autres attributs que vous voulez ajouter ou des relations
}
