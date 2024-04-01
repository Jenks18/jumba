<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Building extends Model
{

    use HasFactory;


    public function units(): HasMany
    {
        return $this->hasMany(Unit::class);
    }

    public function companyproject(): BelongsTo
    {
        return $this->belongsTo(Companyproject::class);
    }

}
