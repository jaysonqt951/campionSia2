<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraction extends Model
{
        protected $table = "infraction";
         protected $fillable = [ "descr", 'health_grade', 'penalty_points' ];
    use HasFactory;
}
