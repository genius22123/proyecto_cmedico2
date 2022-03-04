<div class="layout-px-spacing">
    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Ventas</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Crear</a></li>
            </ol>
        </nav>
    </div>
    @include('livewire.ventas.ventas-importar-cliente') 
    @include('livewire.ventas.ventas-agregar-cliente') 
    @include('livewire.ventas.ventas-importar-servicio') 
    <div class="row invoice layout-spacing layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <div class="doc-container">

                <div class="row">
                    <div class="col-xl-9">

                        <div class="invoice-content">

                            <div class="invoice-detail-body">

                                <div class="invoice-detail-title">

                                    <div class="invoice-logo">
                                        <img src="{{asset('images/logo5.png')}}"  height="200px" alt="">
                                    </div>
                                    
                                    <div class="invoice-title w-25">
                                        <input type="text" class="form-control" disabled  value="Centro medico San Jose">
                                    </div>

                                </div>

                                <div class="invoice-detail-header">

                                    <div class="row justify-content-between">
                                        <div class="col-xl-5 invoice-address-company">

                                            <h4>De:</h4>

                                            <div class="invoice-address-company-fields">

                                                <div class="form-group row">
                                                    <label for="company-name" class="col-sm-3 col-form-label col-form-label-sm">Nombre:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control form-control-sm" id="company-name" value="Centro medico San Jose" disabled>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-email" class="col-sm-3 col-form-label col-form-label-sm">Email:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control form-control-sm" id="company-email" value="name@company.com" disabled>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-address" class="col-sm-3 col-form-label col-form-label-sm">Direccion:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control form-control-sm" id="company-address" value="Jr: Lima 123" disabled>
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="company-phone" class="col-sm-3 col-form-label col-form-label-sm">Celular:</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control form-control-sm" id="company-phone" disabled value="+51 987 654 321">
                                                    </div>
                                                </div>                                                                
                                                
                                            </div>
                                            
                                        </div>


                                        <div class="col-xl-5 invoice-address-client">
                                            <div class="d-flex align-items-center mb-3 ">
                                            <h4 class="mr-auto">Para:</h4>
                                            <a data-toggle="modal" data-target="#importarcliente" class="btn btn-success mr-2">Importar <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg></a>
                                            <a  data-toggle="modal" data-target="#agregarcliente" class="btn btn-info ">Agregar <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg></a>
                                            </div>
                                            <div class="invoice-address-client-fields">

                                                <div class="form-group row">
                                                    <label for="client-name" class="col-sm-3 col-form-label col-form-label-sm">Nombre</label>
                                                    <div class="col-sm-9">
                                                        
                                                        <input wire:model.lazy="nombre_x" type="text" disabled class="form-control form-control-sm" id="client-name" placeholder="Nombre del cliente" >
                                                        @error('nombre_x')
                                                        <span class="text-danger ">
                                                            {{$message}}
                                                          </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="client-email" class="col-sm-3 col-form-label col-form-label-sm">Documento:</label>
                                                    <div class="col-sm-3">
                                                        <input wire:model.lazy="documento_type_x" type="text" disabled class="form-control form-control-sm" id="client-email" placeholder="Tipo" >
                                                        @error('documento_type_x')
                                                        <span class="text-danger ">
                                                            {{$message}}
                                                          </span>
                                                        @enderror
                                                    </div>
                       

                                                    <div class="col-sm-6">
                                                        <input wire:model.lazy="num_documento_x" type="text"  disabled class="form-control form-control-sm" id="client-email" placeholder="Numero" >
                                                        @error('num_documento_x')
                                                        <span class="text-danger ">
                                                            {{$message}}
                                                          </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="client-address" class="col-sm-3 col-form-label col-form-label-sm">Direccion:</label>
                                                    <div class="col-sm-9">
                                                        <input wire:model.lazy="direccion_x" type="text" disabled class="form-control form-control-sm" id="client-address" placeholder="Jr: Lorem 123" >
                                                        @error('direccion_x')
                                                        <span class="text-danger ">
                                                            {{$message}}
                                                          </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="client-phone" class="col-sm-3 col-form-label col-form-label-sm">Celular:</label>
                                                    <div class="col-sm-9">
                                                        <input wire:model.lazy="telefono_x" type="text" disabled class="form-control form-control-sm" id="client-phone" placeholder="951 456 789" >
                                                        @error('telefono_x')
                                                        <span class="text-danger ">
                                                            {{$message}}
                                                          </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>

                                <div class="invoice-detail-terms">

                                    <div class="row justify-content-between">

                                        <div class="col-md-3">

                                            <div class="form-group mb-4">
                                                <label for="number">Serie</label>
                                                <input type="text" class="form-control form-control-sm" id="number" value="{{$serie}}" disabled>
                                            </div>
                                            

                                        </div>
                                        <div class="col-md-3">

                                            <div class="form-group mb-4">
                                                <label for="number">Numero</label>
                                                <input type="text" class="form-control form-control-sm" id="number" value="{{$numero}}" disabled >
                                            </div>
                                            

                                        </div>

                                        <div class="col-md-3">

                                            <div class="form-group mb-4">
                                                <label for="date">Invoice Date</label>
                                                <input type="text" class="form-control form-control-sm" id="date"  placeholder="Add date picker">
                                            </div>
                                        </div>

                              
                                    </div>
                                    
                                </div>


                                <div class="invoice-detail-items">

                                    <div class="table-responsive">
                                        <table class="table table-bordered item-table">
                                            <thead>
                                                <tr>
                                                    <th class=""></th>
                                                    <th>Descripcion</th>
                                                    <th class="">Costo</th>
                                                    <th class="text-center">Cantidad</th>
                                                    <th class="text-right">Amount</th>
                                        
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                    @foreach (Cart::content() as $item)
                                                    <tr class="">
                                                         <td class="delete-item-row">
                                                            <ul class="table-controls">
                                                                <li><a  wire:click="delete('{{$item->rowId}}')"  class="delete-item" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg></a></li>
                                                            </ul>
                                                        </td>
                                                            <td class="description">
                                                                <input type="text" class="form-control form-control-sm"  value="{{$item->name}}" placeholder="Nombre"> 
                                                                <textarea class="form-control" placeholder="Detalles"></textarea>
                                                            </td>
                                                            <td class="rate">
                                                                <input type="text" class="form-control form-control-sm"  value="{{$item->price}}" placeholder="Price">
                                                            </td>
                                                            <td class="text-right qty">
                                                             {{--    <input type="text" class="form-control form-control-sm" placeholder="Quantity" value="{{$item->qty}}"> --}}
                                                             @livewire('ventas.add-item', ['rowId' => $item->rowId], key($item->rowId))
                                                            </td>
                                                            <td class="text-right amount"><span class="editable-amount"><span class="currency">S/.</span> <span class="amount">{{$item->price*$item->qty}}</span></td>
                                                            <td class="text-center tax">
                                                        
                                                             </td>
                                                            </tr>
                                                    @endforeach
                                                  
                                                
                                                
                                            </tbody>
                                        </table>
                                    </div>
                       
                                    <a data-toggle="modal" data-target="#importarcervicio" class="btn btn-dark additem btn-sm">Agregar Item</a>
                                    
                                </div>


                                <div class="invoice-detail-total">

                                    <div class="row">

                                        <div class="col-md-6">
                                            
                                            <div class="form-group row invoice-created-by">
                                                <label for="payment-method-account" class="col-sm-3 col-form-label col-form-label-sm">Pedio de Pago</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-control-sm" id="payment-method-account" value="Efectivo" disabled>
                                                </div>
                                            </div>

                                            <div class="form-group row invoice-created-by">
                                                <label for="payment-method-bank-name" class="col-sm-3 col-form-label col-form-label-sm">Total a pagar</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control form-control-sm" id="payment-method-bank-name"  value="S/. {{$pagar}}0" disabled>
                                                </div>
                                            </div>


                                          
                                            
                                        </div>

                                        <div class="col-md-6">
                                            <div class="totals-row " style="max-width: 20rem;">
                                             
                                                
                                                <div class="invoice-totals-row invoice-summary-total">

                                                    <div class="invoice-summary-label ">Gravada</div>

                                                    <div class="invoice-summary-value">
                                                        <div class="total-amount ">
                                                            <span class="currency">S/.</span><span>{{$gravada}}</span>
                                                        </div>
                                                    </div>

                                                </div>
                                                

                                                <div class="invoice-totals-row invoice-summary-total">

                                                    <div class="invoice-summary-label">Descuento({{$monto_desc}}%)</div>

                                                    <div class="invoice-summary-value">
                                                        <div class="total-amount">
                                                            <span class="currency">S/.</span><span>{{Cart::discount()}}</span>
                                                        </div>
                                                    </div>

                                                </div> 

                                                <div class="invoice-totals-row invoice-summary-tax">

                                                    <div class="invoice-summary-label">Igv (18%)</div>

                                                    <div class="invoice-summary-value">
                                                        <div class="tax-amount">
                                                            <span>{{$impuesto}}</span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="invoice-totals-row invoice-summary-balance-due ">

                                                    <div class="invoice-summary-label   " style="color: #888ea8;">Total</div>

                                                    <div class="invoice-summary-value">
                                                        <div class="balance-due-amount">
                                                            <span class="currency e">S/.</span><span >{{$total}}</span>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="invoice-totals-row invoice-summary-total">

                                                    <div class="invoice-summary-label text-white ">Total a pagar</div>

                                                    <div class="invoice-summary-value">
                                                        <div class="total-amount ">
                                                            <span class="currency text-white">S/.</span><span class="text-white">{{$pagar}}0</span>
                                                        </div>
                                                    </div>

                                                </div>
                                   


                                            </div>
                                        </div>

                                    </div>
                                    
                                </div>

                                <div class="invoice-detail-note">

                                    <div class="row">
                                    
                                        <div class="col-md-12 align-self-center">

                                            <div class="form-group row invoice-note">
                                                <label for="invoice-detail-notes" class="col-sm-12 col-form-label col-form-label-sm">Observaciones o notas:</label>
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" id="invoice-detail-notes" placeholder='Redacte en este lugar algunas posibles observacions importamtes de la venta' wire:model.defer="notas" style="height: 88px;"></textarea>
                                                </div>
                                            </div>
                                            
                                        </div>

                                    </div>

                                </div>
                                
                                
                            </div>
                            
                        </div>
                        
                    </div>

                    <div class="col-xl-3">
                        
                        <div class="invoice-actions">

                            <div class="invoice-action-tax mt-0 pt-0">
                            
                                <h5>Impuesto</h5>

                                <div class="invoice-action-tax-fields">

                                    <div class="row">
                                
                                        <div class="col-6">

                                            <div class="form-group mb-0">


                                                @if ($comprobante_type==null)
                                    
                                                <span >Seleccione cliente</span>   
                                                @else
                                                <label >Tipo:</label>
                                                <span class="badge badge-primary">{{$comprobante_type}}</span>    
                                                @endif
                                               
                                               


                                            </div>

                                        </div>
                                        <div class="col-6">

                                            <div class="form-group mb-0">
                                                <label >Cantidad:</label>

                                                <span class="badge badge-primary">18% </span>


                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="invoice-action-discount">

                                <h5>Descuento:</h5>
                               

                                <div class="invoice-action-discount-fields">
                                 {{--    <div class="d-flex justify-content-between ">
                                        <label class="ml-5" for="type">Monto</label>
                                        <label for="type">Aplicar</label>
                                      </div> --}}
                                    <div class="input-group input-group-sm mb-4">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text">%</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Monto" wire:model.defer="monto_desc" >
                                        <div class="input-group-append">
                                            @if ($monto_desc>0)
                                            <button class="btn btn-danger" wire:click="quitar_desc" type="button">Quitar</button>
                                               @else 
                                               <button class="btn btn-primary" wire:click="aplicar_desc" type="button">Aplicar</button>
                                            @endif
                                
                                        </div>
                                      </div>
                                   {{--  <div class="row">

                                        <div class="col-6 text-center">
                                            <div>
                                              <label for="type">Aplicar:</label>
                                            </div>
                                              <label class="switch s-info  mb-4 mr-2">
                                                  <input type="checkbox" >
                                                  <span class="slider"></span>
                                              </label>
                                          
                                          </div>
                                
                                        <div class="col-6">
                                            <div class="form-group mb-0">
                                                <label for="type">Monto:</label>
                                                <div class="input-group input-group-sm mb-4">
                                                    <div class="input-group-prepend">
                                                      <span class="input-group-text" id="inputGroup-sizing-sm">S/.</span>
                                                    </div>
                                                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                                  </div>

                                                
                                            </div>
                                        
                                        </div>

                                      

                         

                                    </div> --}}
                                    
                                </div> 

                            </div>

                        </div>

                        <div class="invoice-actions-btn">

                            <div class="invoice-action-btn">

                                <div class="row">
                                
                               
                                    <div class="col-xl-12 col-md-4">
                                        <a wire:click="agregar_venta" class="btn btn-success btn-download">Listo</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
                
                
            </div>

        </div>
    </div>
    
</div>