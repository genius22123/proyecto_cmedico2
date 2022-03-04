<?php

namespace App\Http\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Illuminate\Support\Facades\Http;


class ClientesCreate extends Component
{
    public $nombre,$documento_type,$num_documento,$direccion,$telefono,$estado,$lugar;
    public $rules=[
      
            'nombre'=>'required',
            'documento_type'=>'required',
            'num_documento'=>'required|min:8|max:11',
            'direccion'=>'required',
            'telefono'=>'required' 
    ];

    public function render()
    {
        return view('livewire.clientes-create');
    }

    public function save()
    {
       $rules=$this->rules;
       if($this->documento_type=="RUC"){
 
           $rules['estado']='required';
           $rules['lugar']='required';
       }
       $this->validate($rules);

        Customer::create([
            'nombre'=>$this->nombre,

            'documento_type'=>$this->documento_type,
            'num_documento'=>$this->num_documento,
            'direccion'=>$this->direccion,
            'telefono'=>$this->telefono,
            'estado'=>$this->estado,
            'lugar'=>$this->lugar
        ]);
        $this->reset([
            'nombre',
            'documento_type',
            'num_documento',
            'direccion',
            'telefono',
            'estado'
            ,   'lugar'
        ]);

        $this->emit('cliente-agregado','EL cliente fue Agregado Correctamente');
    }

    public function cancelar()
    {
        $this->resetValidation();
        $this->reset([
            'nombre',
            'documento_type',
            'num_documento',
            'direccion',
            'telefono',
            'estado'
            ,   'lugar'
        ]);

    }

    public function cancelar2()
    {
        $this->resetValidation();
        $this->reset([
            'nombre',
  
            'num_documento',
            'direccion',
            'telefono',
            'estado'
            ,   'lugar'
        ]);

    }

    public function searchCustomer()
    {
        $this->validate([
            'documento_type'=>'required',
            'num_documento'=>'required|min:8|max:11',
        ]);


        $token=config('services.apisunat.token');
        $urldni=config('services.apisunat.urldni');
        $urlruc=config('services.apisunat.urlruc');

        if ($this->documento_type=='DNI') {
           $response= Http::withHeaders([
                'Referer' => 'https://apis.net.pe/consulta-dni-api',
                'Authorization' => 'Bearer ' . $token
            ])->get($urldni.$this->num_documento);
        }
        else if($this->documento_type=='RUC') {
            $response=Http::withHeaders([
                'Referer' => 'http://apis.net.pe/api-ruc',
                'Authorization' => 'Bearer ' . $token
            ])->get($urlruc.$this->num_documento);
        }

        $persona=json_decode($response);


        if ($this->documento_type=='DNI') {
           $this->nombre = $persona->nombre;
       
         }else if($this->documento_type=='RUC') {
           $this->nombre = $persona->nombre; 
              $this->nombre = $persona->nombre; 
            $this->direccion = $persona->direccion; 
            $this->estado = $persona->estado; 

            $this->lugar = $persona->departamento.'-'.$persona->provincia.'-'.$persona->distrito; 
        
         }        
                

        

        }
}
