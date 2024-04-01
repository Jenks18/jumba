<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Companyproject extends Model
{
    use HasFactory;

    public function buildingowner(): BelongsTo
    {
        return $this->belongsTo(Buildingowner::class);
    }

    public function buildings(): HasMany
    {
        return $this->hasMany(Building::class);
    }

}
