<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Buildingowner extends Model
{

    
    use HasFactory;

    public function companyprojects(): HasMany
    {
        return $this->hasMany(Companyproject::class);
    }


}
