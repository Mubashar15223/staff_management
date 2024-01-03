<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;
    protected $table = 'softwares';
    protected $fillable = [
        'companyName',
        'platformWebsite',
        'pluginName',
        'priceType',
        'purchaseDate',
        'months',
        'amount',
        'allowed',
        'description',
        'renewalAmount',
        'tags'
        ];
}
