<?php

namespace App\Http\Livewire\Ventas;

use Livewire\Component;
use App\Models\Customer;
use Livewire\WithPagination;
use App\Models\Sale;
use Illuminate\Support\Facades\Http;
use App\Models\Service;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\DB;

class VentasCreate extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners=['render'];
    public $search;
    public $nombre,$documento_type,$num_documento,$direccion,$telefono,$estado,$lugar;
    public $nombre_x,$num_documento_x,$direccion_x,$telefono_x;
    public $estado_com,$comprobante_type,$comprobante_serie,$comprobante_num,$contenido,$customer_id;
    public $gravada,$impuesto,$subtotal,$total,$pagar,$documento_type_x;
    public $monto_desc;
    public $notas;
    public $rules=[
      
        'nombre'=>'required',
        'documento_type'=>'required',
        'num_documento'=>'required|min:8|max:11',
        'direccion'=>'required',
        'telefono'=>'required' 
    ];
    public $rules2=[
        'nombre_x'=>'required',
        'documento_type_x'=>'required',
        'num_documento_x'=>'required|min:8|max:11',
        'direccion_x'=>'required',
        'telefono_x'=>'required' 
    ];

  

    public function mount()
    {
  
        $this->monto_desc=Cart::discount(0);
        
    }

    public function render()
    {
      
        Cart::setGlobalTax(18);
        $this->impuesto=Cart::Tax();
        $this->subtotal=Cart::subtotal();
        $this->gravada=Cart::subtotal()-Cart::Tax();
        $this->total=Cart::subtotal();
        $this->pagar=Cart::subtotal(1);
        $clientes=Customer::where('nombre','like','%' . $this->search .'%')
        ->orWhere('num_documento','like','%' . $this->search .'%')->paginate(5);

        $servicios=Service::select('id','nombre','codigo','descripcion','precio','cantidad',DB::raw("0 as checked"))->get();
            /*      ->where('nombre','like','%' . $this->search .'%')
                    ->orWhere('codigo','like','%' . $this->search .'%')
                    ->orWhere('id','like','%' . $this->search .'%') */
            
       foreach($servicios as $key => $servicio){
        $cart=Cart::content();
        $item =$cart->where('id',$servicio->id)->first();
        if($item){

            if(!is_null(Cart::get($item->rowId))){
                                $servicio->checked=1;
                          
                            } 
        }             
        } 
        $x=Sale::orderBy('id','desc')->first();
        $y=$x->id+1;
        $numero = str_pad($y,6, "0", STR_PAD_LEFT);
        $serie='C001-'.str_pad($y,3, "0", STR_PAD_LEFT);
       $this->comprobante_serie=$serie;
       $this->comprobante_num=$numero;
        


        return view('livewire.ventas.ventas-create',compact('clientes','numero','serie','servicios'))->extends('layouts.theme.app')->section('content');
    }

    public function importar(Customer $customer)
    {
        $this->customer=$customer;
        $this->customer_id=$this->customer->id;
        $this->nombre_x=$this->customer->nombre;
        $this->documento_type_x=$this->customer->documento_type;
        $this->num_documento_x=$this->customer->num_documento;
        $this->direccion_x=$this->customer->direccion;
        $this->telefono_x=$this->customer->telefono;
        if($this->documento_type_x=='DNI'){
            $this->comprobante_type='BOLETA';
        }else{
            $this->comprobante_type='FACTURA';
        }


        $this->emit('cliente-importado','EL cliente fue importado Correctamente');
        $this->resetValidation();
       

    }

    public function save()
    {
       $rules=$this->rules;
       if($this->documento_type=="RUC"){
 
           $rules['estado']='required';
           $rules['lugar']='required';
       }

       $this->validate($rules);

        $nuevo=Customer::create([
            'nombre'=>$this->nombre,

            'documento_type'=>$this->documento_type,
            'num_documento'=>$this->num_documento,
            'direccion'=>$this->direccion,
            'telefono'=>$this->telefono,
            'estado'=>$this->estado,
            'lugar'=>$this->lugar
        ]);
        $this->customer_id=$nuevo->id;
        $this->nombre_x=$nuevo->nombre;
        $this->documento_type_x=$nuevo->documento_type;
        $this->num_documento_x=$nuevo->num_documento;
        $this->direccion_x=$nuevo->direccion;
        $this->telefono_x=$nuevo->telefono;
        if($this->documento_type_x=='DNI'){
            $this->comprobante_type='BOLETA';
        }else{
            $this->comprobante_type='FACTURA';
        }
      

        $this->reset([
            'nombre',
            'documento_type',
            'num_documento',
            'direccion',
            'telefono',
            'estado'
            ,   'lugar'
        ]);

        $this->emit('customer-agregado','EL cliente fue Agregado Correctamente');
        $this->resetValidation();
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



    public function add_servicio($checked,$id){
   
        $item=Service::find($id);
       
      if($checked){   
        $item->checked=12;
        Cart::add(['id' => $item->id,
        'name' =>  $item->nombre,
         'qty' => 1,
          'price' =>  $item->precio,
           'weight' => 550
       ]);
      }else{

        $cart=Cart::content();
        $item =$cart->where('id',$id)->first();
        Cart::remove($item->rowId);
      }


    }

    public function delete($item)
    {
         Cart::remove($item);
      

    }

     public function aplicar_desc()
    {

        Cart::setGlobalDiscount($this->monto_desc);
     
          
    } 
    public function quitar_desc()
    {
        $this->monto_desc=0;
        Cart::setGlobalDiscount(0);
     
    }

    public function agregar_venta()
    {
      
        if(Cart::count()==0){
            

            $this->emit('error','Debe agregar un producto');
           
        }else{
            $rules=$this->rules2;
            $this->validate($rules);

            $venta=new Sale();

            $venta->estado=1;
            $venta->comprobante_type=$this->comprobante_type;
            $venta->impuesto=$this->impuesto;
            $venta->comprobante_serie=$this->comprobante_serie;
            $venta->comprobante_num=$this->comprobante_num;
            $venta->total=$this->total;
            $venta->contenido=Cart::content();
            $venta->notas=$this->notas;
            $venta->user_id=auth()->user()->id;
            $venta->customer_id=$this->customer_id;
            $venta->descuento=Cart::discount();

            $venta->save();
            Cart::destroy();
            return redirect()->route('ventas.index');


         

        }
    }
  
}
