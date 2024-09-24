<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'email', 'phone', 'first_name', 'last_name',
        'country_id', 'company_name', 'address', 'city',
        'payment_method', 'total_amount','status','user_email',
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id'); // Vérifiez les colonnes ici aussi
    }

}
