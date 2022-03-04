<div class="layout-px-spacing" >
    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Listado</a></li>
            </ol>
        </nav>
    </div>
  

    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
            <div class="widget widget-content-area br-4">
                <div class="widget-one">
                    <div class="row">
                        <div class="col">
                            @livewire('clientes-create')
                        </div>
                        {{$search}}
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
                
                    @include('livewire.clientes-edit')
        
                    <div class="table-responsive">
                        @if (count($clientes))
        
                            <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                             <thead>
                                <tr>
                                  
                                    <th class="">ID</th>
                                    <th class="">Nombre</th>
                                    <th class="">Tipo Document.</th>
                                    <th class="">Numero Document.</th>
                                    <th class="">Direccion</th>
                                    <th class="">Telefono</th>
                                    <th class="">Estado</th>
                                    <th class="">Lugar</th>
                               
                                    <th class="text-center">Icons</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach ($clientes as $item)
                                <tr>
          
                                    <td>{{$item->id}}</td>
                                    <td> <p class="mb-0">{{$item->nombre}}</p>  </td>
                    
                                    <td>{{$item->documento_type}}</td>
                                    <td>{{$item->num_documento}}</td>
                                    <td>{{$item->direccion}}</td>
                                    <td>{{$item->telefono}}</td>
                                    <td>{{$item->estado}}</td>
                                    <td>{{$item->lugar}}</td>
                            

                                    <td class="text-center">
                                        <ul class="table-controls">
                                            <li><a href="javascript:void(0);" data-toggle="modal" data-target="#editmodal" wire:click="edit({{$item}})"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                            <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" wire:click="$emit('deleteCliente',{{$item->id}})" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                        </ul>
                                    </td>  
                        

                               
                                </tr>

                                @endforeach
                             
                                    </tbody>
                            </table> 
                        @else
                            <h6 class="text-center mt-3">Ningun registro encontrado para "{{$search}}"</h6>
                         
                        @endif
                       
                       {{$clientes->links()}}

                    </div>
                </div>
            </div>
        </div>


    </div>
        @push('js')
        <script>
            Livewire.on('deleteCliente',clientetId=>{
              swal({
                      title: '¿Estas seguro?',
                      text: "¡No podras revertir esta accion!",
                      type: 'warning',
                      showCancelButton: true,
                      confirmButtonText: 'Eliminar',
                      padding: '2em'
                      }).then(function(result) {
                      if (result.value) {

                          Livewire.emitTo('clientes-home','delete',clientetId);


                          swal(
                          'Eliminado!',
                          'El registro fue eliminado correctamente',
                          'success'
                          )
                      }
                      })
            });
                  
                   
         </script>
        @endpush

</div>

