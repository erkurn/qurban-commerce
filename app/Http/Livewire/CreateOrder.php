<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class CreateOrder extends Component
{

    public $customer_name = "";

    protected $rules = [
        'customer_name' => 'required|min:6'
    ];

    public function updated($property_name)
    {
        $this->validateOnly($property_name);
    }

    public function submit()
    {
        Order::create($this->validate());
    }


    public function render()
    {
        return view('livewire.create-order');
    }
}
