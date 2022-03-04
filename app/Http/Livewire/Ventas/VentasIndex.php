<?php

namespace App\Http\Livewire\Ventas;

use Livewire\Component;
use App\Models\Sale;
use Livewire\WithPagination;

class VentasIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $cant=10;


    public function render()
    {
        $sales=Sale::where('comprobante_type','like','%' . $this->search .'%')
        ->orWhere('comprobante_serie','like','%' . $this->search .'%')->paginate($this->cant);

       

        return view('livewire.ventas.ventas-index', compact('sales'))->extends('layouts.theme.app')->section('content');
    }
   
}
