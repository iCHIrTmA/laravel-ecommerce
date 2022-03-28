<?php

namespace App\Http\Livewire;

use App\Cart\Contracts\CartInterface;
use App\Models\ShippingType;
use Livewire\Component;

class Checkout extends Component
{
    public $shippingTypes;

    public $shippingTypeId;

    public $accountForm = [
        'email' => ''
    ];

    protected $validationAttributes = [
        'accountForm.email' => 'email address',
    ];

    protected $messages = [
        'accountForm.email.unique' => 'Seems you already have an account. Please sign in to place an order',
    ];

    public function rules()
    {
        return [
            'accountForm.email' => 'required|email|max:255|unique:users,email' . (auth()->user() ? ',' . auth()->id() : '')
        ];
    }

    public function mount()
    {
        $this->shippingTypes = ShippingType::orderBy('price')->get();

        $this->shippingTypeId = $this->shippingTypes->first()->id;

        if ($user = auth()->user()) {
            $this->accountForm['email'] = $user->email;
        } 
    }

    public function getShippingTypeProperty()
    {
        return $this->shippingTypes->find($this->shippingTypeId);
    }

    public function getTotalProperty(CartInterface $cart)
    {
        return $cart->subTotal() + $this->shippingType->price;
    }

    public function getFormattedTotalProperty()
    {
        return money($this->total);
    }

    public function checkout()
    {
        $this->validate();

        dd('hello');
    }

    public function render(CartInterface $cart)
    {    
        return view('livewire.checkout', [
            'cart' => $cart,
        ]);
    }
}
