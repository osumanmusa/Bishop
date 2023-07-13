<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Counsel extends Model
{
    use HasFactory;
    
    protected $table = "counseling";

    protected $fillable = [
        'firstname',
        'lastname',
        'contact',
        'contact_info',
        'activity',
        'message',
    ];

}
