<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Server extends Model
{
    use HasFactory;
    protected $fillable = [
        'company',
        'name',
        'website',
        'pakageName',
        'storage',
        'purchaseDate',
        'months',
        'amount',
        'allowed',
        'location',
        'description'
        ];

}
