<?php

namespace App\Models;

use Cerbero\QueryFilters\FiltersRecords;
use Illuminate\Database\Eloquent\Model;

class DebrisRugosity extends Model
{
    use FiltersRecords;

    protected $fillable = ['name'];

    public function debris()
    {
        return $this->hasMany(Debris::class);
    }
}
