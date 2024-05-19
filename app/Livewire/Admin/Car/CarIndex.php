<?php

namespace App\Livewire\Admin\Car;

use Livewire\Attributes\Layout;
use Livewire\Component;

class CarIndex extends Component
{

    #[Layout('admin.layouts.master')]
    public function render()
    {
        return view('livewire.admin.car.car-index');
    }
}
