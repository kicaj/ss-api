<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Manufacturer extends Model
{
    public function batteries(): HasMany
    {
        return $this->hasMany(Battery::class);
    }

    public function connectors(): HasMany
    {
        return $this->hasMany(Connector::class);
    }

    public function panels(): HasMany
    {
        return $this->hasMany(Panel::class);
    }
}
