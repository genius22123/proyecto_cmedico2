<div class="layout-px-spacing" >
    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Ventas</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Listado</a></li>
            </ol>
        </nav>
    </div>
  resumend eventas

    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget widget-content-area br-4">
                <div class="row">
                    <div class="col">
                       <a href="{{route('ventas.create')}}" class="btn btn-primary">Crear Venta</a>
                    </div>
             
                     <div class="col">   
                         <div class="search-input-group-style input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
                        </div>
                        <input type="text" wire:model="search" class="form-control" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">
              
                    </div>
                </div>
                    <div class="col">
                        <div class="d-flex align-items-center float-right ">
                            <span >Mostrar </span>
                            <select wire:model="cant" class="form-control mx-2 w-50">
                                     <option value="10" >10</option>
                                     <option value="25" >25</option>
                                     <option value="50" >50</option>
                                     <option value="100" >100</option>
                                
                               
                            </select>
                            <span>entradas</span>
                        
                    
                        </div>
                        
                     
                    </div>
                </div> 

         
                <div class="table-responsive">
                    @if (count($sales))
                     <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                        <thead>
                            <tr>
                                <th class="">ID</th>
                                <th class="">Cliente</th>
                                <th class="">Tipo</th>
                                <th class="">Serie y numero</th>
                                <th class="">Fecha</th>
                                <th class="">Monto</th>
                                <th class="">Estado</th>
                         
                                <th class="text-center">Icons</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sales as $item)
                                <tr>
                                <td>{{$item->id}}</td>
                              
                                <td>
                                   {{$item->customer->nombre}}
                                </td>
                                <td>{{$item->comprobante_type}}</td>
                                <td>  <a  href="{{route('ventas.preview',$item)}}" class="mb-0 text-warning">{{$item->comprobante_serie}}-{{$item->comprobante_num}}</a></td>
                                <td>22-12-2001</td>
                                <td>{{$item->total}}</td>

                                <td class=""><span class=" shadow-none badge outline-badge-primary">@if ($item->estado==1)
                                    APROBADO
                                @endif</span></td>
                
                                <td class="text-center">
                    
                                    <div class="dropdown custom-dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>
                
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                            <a class="dropdown-item" href="javascript:void(0);">Download</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Share</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                        </div>
                                    </div>
                
                                </td>
                            </tr>
                            @endforeach
                            
                           
                         
                        </tbody>
                    </table>
                    @else
                    <h6 class="text-center mt-3">Ningun registro encontrado para "{{$search}}"</h6>
                    @endif
                  

                    {{$sales->links()}} 
                </div>
                    
            </div>
        </div>


    </div> 
    
</div>