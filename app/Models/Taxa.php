<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxa extends Model
{
    use HasFactory;

    public function maturities()
    {
        return $this->belongsToMany(TaxaMaturity::class, 'taxa_has_maturities');
    }
}
