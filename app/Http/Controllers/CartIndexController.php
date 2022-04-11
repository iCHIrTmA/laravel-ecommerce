<?php

namespace App\Http\Controllers;

use App\Cart\Contracts\CartInterface;
use App\Cart\Exceptions\QuantityNoLongerAvailable;
use Illuminate\Http\Request;

class CartIndexController extends Controller
{
    public function __invoke(CartInterface $cart)
    {
        try {
            $cart->verifyAvailableQuantities();
        } catch (QuantityNoLongerAvailable $e) {
            session()->flash('notification', 'Some of the quantities in your cart items have changed.');
            $cart->syncAvailableQuantities();
        }

        return view('cart.index');
    }
}
