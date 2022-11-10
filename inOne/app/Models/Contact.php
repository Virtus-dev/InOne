<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'first_last_name',
        'second_last_name',
        'phone_number',
        'email',
        'gender',
        'birth_date'
    ];
}
