<?php

namespace App\Models;

use App\Models\Presenters\OrderPresenter;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $timestamps = [
        'placed_at',
        'packaged_at',
        'shipped_at',
    ];

    public $statuses = [
        'placed_at',
        'packaged_at',
        'shipped_at',
    ];

    public static function booted()
    {
        static::creating(function (Order $order) {
            $order->placed_at = Carbon::now();
            $order->uuid = (string) Str::uuid();
        });
    }

    public function status()
    {
        return collect($this->statuses)
            ->last(fn ($status) => filled($this->{$status}));
    }

    public function presenter()
    {
        return new OrderPresenter($this);
    }

    public function formattedSubtotal()
    {
        return money($this->subtotal);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function shippingType(): BelongsTo
    {
        return $this->belongsTo(ShippingType::class);
    }

    public function shippingAddress(): BelongsTo
    {
        return $this->belongsTo(ShippingAddress::class);
    }

    public function variations(): BelongsToMany
    {
        return $this->belongsToMany(Variation::class)
            ->withPivot(['quantity'])
            ->withTimestamps();
    }
}