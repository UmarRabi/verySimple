<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeletedOrderLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderId',
        'customerId',
        'productId',
        'orderDate',
        'orderTotal',
        'quantityOrdered',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customerId', 'id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'productId', 'id');
    }
}
