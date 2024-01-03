<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiServer extends Model
{
    use HasFactory;
    protected $table = 'api_server';
    protected $fillable = [
        'company',
        'name',
        'website',
        'pakageName',
        'purchaseDate',
        'months',
        'amount',
        'allowed',
        'description'
        ];

}
