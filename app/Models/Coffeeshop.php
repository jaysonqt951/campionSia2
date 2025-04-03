<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffeeshop extends Model
{
    protected $table ="coffeeshop";
    protected $fillable = [
        'name',
        'owner_id',
        'address',
        'phone',
        'email',
    ];
    use HasFactory;
}
