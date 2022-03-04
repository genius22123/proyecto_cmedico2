<?php

namespace App\Http\Livewire\Servicios;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithPagination;

class ServiciosIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    protected $listeners=[
        'servicio-agregado'=>'render',
        'delete'
    ];


    public $search;
    public $servicio;
    public $cant=10;
    public $servicio_id;


    
    protected $rules=[
      
        'servicio.codigo'=>'required',
        'servicio.nombre'=>'required',
        'servicio.descripcion'=>'required',
        'servicio.precio'=>'required',
        'servicio.cantidad'=>'required'
    
   
];
  
public function updated($propertyName)
{
    $this->validateOnly($propertyName);
} 
    public function render()
    {
        $services=Service::where('nombre','like','%' . $this->search .'%')
        ->orWhere('descripcion','like','%' . $this->search .'%')->paginate($this->cant);

        return view('livewire.servicios.servicios-index', compact('services'))->extends('layouts.theme.app')->section('content');
    }

    public function updatingSearch()
    {   
            $this->resetPage();
    }

    public function edit(Service $servicio)
    {
        
           $this->servicio=$servicio;
           $this->servicio_id=$servicio->codigo;
    }

    
    public function update(){ 
        $this->validate();

        $this->servicio->save();

        $this->resetValidation();

        $this->emit('servicio-editado',"EL cliente Editado Correctamente");
  }

  public function cancelar()
  {
      $this->resetValidation();

  }

  public function delete(Service $servicio)
  {
      
    $servicio->delete();
  }
}
