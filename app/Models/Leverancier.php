<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    use HasFactory;

    const UPDATED_AT = 'DatumGewijzigd';
    const CREATED_AT = 'DatumAangemaakt';

    public function productPerLeverancier()
    {
        return $this->hasMany(ProductPerLeverancier::class, 'LeverancierId', 'id');
    }

}
