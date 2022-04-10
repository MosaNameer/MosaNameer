<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car as modelCar;
class Car extends Component
{

    
protected $listeners = [
    '$refresh',
];
    
public $name,  $model , $price , $editId = null;

public function delete($id)
    {
        modelCar::findOrFail($id)->delete();
        $this->emitTo('Car', '$refresh');
    }

public function edit($id)
    {
        $cars = modelCar::findOrFail($id);
        $this->editId = $cars->id;
        $this->name = $cars->name;
        $this->price = $cars->price;
        $this->model = $cars->model;
    }
    public function update($id)
    {
        $cars = modelCar::findOrFail($id);
        $cars->update([
            'name' => $this->name,
            'price' => $this->price,
            'model' => $this->model
        ]);
        $editId = null;
        $this->emitTo('Car.show', '$refresh');
    }

public function add()
{
    modelCar::create([
        'name' => $this->name,
        'model' => $this->model,
        'price' => $this->price,
    ]);
    
    $this->emitTo('Car','$refresh');
}

    public function render()
    {
        $cars = modelCar::get();
        return view('livewire.car' , [
            'cars' => $cars,
        ]);
    }
}