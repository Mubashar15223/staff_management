<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'code',
        'category_id',
        'description',
        'server_id',
        'first_year_amount_of_domain',
        'recurring_amount_of_domain',
        'plugin_id',
        'paid_plugin',
        'key_features',
        'image',
        'review',
        ];

}
