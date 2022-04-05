<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        "full_name",
        "age",
        "city",
        "gender",
        "email_address",
        "date_of_birth"
    ];
}
