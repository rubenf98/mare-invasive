<?php

namespace App\Models;

use Cerbero\QueryFilters\FiltersRecords;
use Illuminate\Database\Eloquent\Model;

class TaxaPopulationStatus extends Model
{
    use FiltersRecords;

    protected $fillable = ['name'];

    public function taxas()
    {
        return $this->hasMany(Taxa::class);
    }
}
