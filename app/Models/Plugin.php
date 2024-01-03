<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    use HasFactory;
    protected $table = 'plugins';
    protected $fillable = [
        'platformName',
        'platformWebsite',
        'pluginName',
        'priceType',
        'purchaseDate',
        'months',
        'amount',
        'allowed',
        'description'
        ];
}
