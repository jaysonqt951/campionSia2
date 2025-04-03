<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluations extends Model
{
    use HasFactory;

    protected $table = "evaluations";
    protected $fillable = ['DATE', 'TIME', 'inspector_id', 'infraction_id', 'coffeeshop_id'];

    // Define the relationships
    public function inspector()
    {
        return $this->belongsTo(Inspector::class);
    }


    public function coffeeshop()
    {
        return $this->belongsTo(Coffeeshop::class);
    }

    public function infraction()
    {
        return $this->belongsTo(Infraction::class);
    }

    public function owner()
    {
        return $this->hasOneThrough(Owner::class, Coffeeshop::class, 'id', 'id', 'coffeeshop_id', 'owner_id');
    }
}
