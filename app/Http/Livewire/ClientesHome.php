<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class ClientesHome extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners=[
        'cliente-agregado'=>'render',
        'delete'
    ];
    public $search;
    public $customer;
    public $cant=10;

    protected $rules=[
      
        'customer.nombre'=>'required',

        'customer.documento_type'=>'required',
        'customer.num_documento'=>'required|min:8|max:11',
        'customer.direccion'=>'required',
        'customer.telefono'=>'required'
   
];
public function updated($propertyName)
{
    $this->validateOnly($propertyName);
} 
    public function render()
    {
     
         $clientes=Customer::where('nombre','like','%' . $this->search .'%')
                            ->orWhere('num_documento','like','%' . $this->search .'%')->paginate($this->cant);
       
      
        return view('livewire.clientes-home',compact('clientes'))->extends('layouts.theme.app')->section('content');
    }
    public function updatingSearch()
    {   
            $this->resetPage();
    }

    public function edit(Customer $customer)
    {
           $this->customer=$customer;
    }

    public function update(){ 
        $this->validate();

        $this->customer->save();

        $this->resetValidation();

        $this->emit('cliente-editado',"EL cliente Editado Correctamente");
  }

  public function cancelar()
  {
      $this->resetValidation();

  }

  public function delete(Customer $customer)
  {
      
    $customer->delete();
  }

    
}
