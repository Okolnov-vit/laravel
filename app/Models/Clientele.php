<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientele extends Model
{
    protected $fillable = [
        'phoneNumber', 'deliveryAddress', 'total'
    ];
}