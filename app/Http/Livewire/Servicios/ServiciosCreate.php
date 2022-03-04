<?php

namespace App\Http\Livewire\Servicios;

use App\Models\Service;
use Livewire\Component;

class ServiciosCreate extends Component
{
    public $codigo,$nombre,$descripcion,$precio,$cantidad;

    protected $rules=[
      
        'codigo'=>'required|unique:services',
        'nombre'=>'required',
        'descripcion'=>'required',
        'precio'=>'required',
        'cantidad'=>'required',
    
   
];

public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    } 
    public function render()
    {
        return view('livewire.servicios.servicios-create');
    }

    public function save()
    {
        $this->validate();

        Service::create([
            'codigo'=>$this->codigo,
            'nombre'=>$this->nombre,
            'descripcion'=>$this->descripcion,
            'precio'=>$this->precio,
            'cantidad'=>$this->cantidad,
        ]);
        $this->reset([
            'codigo',
            'nombre',
            'descripcion',
            'precio',
            'cantidad',
        ]);

        $this->emit('servicio-agregado','EL Servicio fue Agregado Correctamente');
    }

    public function cancelar()
    {
        $this->resetValidation();

    }
}
