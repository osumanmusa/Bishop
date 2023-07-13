<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    
    protected $table = "events";

    protected $fillable = [
        'title',
        'firstname',
        'lastname',
        'city',
        'town',
        'region',
        'country',
        'email',
        'phone',
        'website',
        'age',
        'gender',
        'activity',
        'mode',
    ];
}
