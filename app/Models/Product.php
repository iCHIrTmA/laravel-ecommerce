<?php

namespace App\Models;

use Cknow\Money\Money;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function formattedPrice()
    {
        return money($this->price);
    }

    public function variations(): HasMany
    {
        return $this->hasMany(Variation::class);
    }
}
