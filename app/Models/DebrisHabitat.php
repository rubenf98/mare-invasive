<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DebrisHabitat extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function debris()
    {
        return $this->hasMany(Debris::class);
    }
}
