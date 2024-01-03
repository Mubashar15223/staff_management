<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdsPay extends Model
{
    use HasFactory;
    protected $table = 'ads_pay';
    protected $fillable = [
        'company',
        'adsWebsite',
        'month',
        'paidMonth',
        'engagedTraffic',
        'promotedWebsite',
        ];

}
