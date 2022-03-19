<?php

namespace App\Models;

use Cknow\Money\Money;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;

class Variation extends Model
{
    use HasFactory;
    use HasRecursiveRelationships;

    protected $guarded = [];

    public function formattedPrice(): Money
    {
        return money($this->price);
    }

    public function inStock(): bool
    {
        return $this->stockCount() > 0;
    }

    public function outOfStock(): bool
    {
        return ! $this->inStock();
    }

    public function lowStock(): bool
    {
        return $this->inStock() && $this->stockCount() <= 5;
    }

    public function stockCount(): int
    {
        return $this->descendantsAndSelf->sum(fn ($variation) => $variation->stocks->sum('amount'));
    }

    public function stocks(): HasMany
    {
        return $this->hasMany(Stock::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
