<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    public static function booted()
    {
        static::creating(function (Order $order) {
            $order->placed_at = Carbon::now();
            $order->uuid = (string) Str::uuid();
        });
    }
}
