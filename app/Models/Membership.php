<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;
    
    protected $table = "membership";

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
        'dob',
        'member',
    ];
}
