<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    
    protected $table = "contact";

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
