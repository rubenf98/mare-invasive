<?php

namespace App\QueryFilters;

use Cerbero\QueryFilters\QueryFilters;

/**
 * Filter records based on query parameters.
 *
 */
class DebrisMaterialFilters extends QueryFilters
{
    public function search($string)
    {
        $this->query->where('name', 'like', '%' . $string . '%');
    }
}
