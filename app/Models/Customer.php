<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'lastName',
        'add1',
        'city',
        'state',
        'email',
        'status',
    ];

    public function orders(){
        return $this->hasMany(Order::class, 'customerId', 'id');
    }
}
