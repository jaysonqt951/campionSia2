<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $table = "owner";
    protected $fillable = ["names", "contact_phone"];
    use HasFactory;
}
