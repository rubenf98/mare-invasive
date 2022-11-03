<?php

namespace App\Models;

use Cerbero\QueryFilters\FiltersRecords;
use Illuminate\Database\Eloquent\Model;

class DebrisCategory extends Model
{
    use FiltersRecords;

    public function subcategories()
    {
        return $this->hasMany(DebrisSubCategory::class);
    }
}
