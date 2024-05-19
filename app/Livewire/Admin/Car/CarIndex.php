<?php

namespace App\Livewire\Admin\Car;

use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Car;


class CarIndex extends Component
{
    public function delete($id)
    {
        Car::find($id)->delete();
    }

    #[Layout('admin.layouts.master')]
    public function render()
    {
        return view('livewire.admin.car.car-index', [
            'cars' => Car::all()
        ]);
    }
}
