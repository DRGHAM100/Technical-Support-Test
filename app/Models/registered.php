<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registered extends Model
{
    use HasFactory;

    protected $fillable = ['name','position','destination','email','mobile','questions','seat_number'];
}
