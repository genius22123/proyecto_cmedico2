<div>
  
 
   <button  type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#servicecreate">AGREGAR <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
   
   <!-- Modal -->
   <div wire:ignore.self class="modal fade" id="servicecreate" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="staticBackdropLabel">AGREGAR | Cliente </h5>
   
         </div>
         <div class="modal-body">
             <form>
                 <div class="form-row mb-4">
                     <div class="form-group col-md-6">
                         <label for="codigo">Codigo:</label>
                         <input type="text" class="form-control" id="codigo" placeholder="Codigo" wire:model.lazy="codigo">
                   @error('codigo')
                  <span class="text-danger ">
                       {{$message}}
                     </span>
                   @enderror
                     </div>
             
                     <div class="form-group col-md-6">
                         <label for="nombre">Nombre</label>
                         <input type="text" class="form-control" id="nombre" placeholder="Nombre"  wire:model.lazy="nombre">
                         @error('nombre')
                         <span class="text-danger ">
                              {{$message}}
                            </span>
                          @enderror
                       </div>
                 </div>
                 <div class="form-row mb-4">
                     <div class="form-group col-md-8">
                        <label for="descripcion">Descripcion:</label>
                        <input type="text" class="form-control" id="descripcion"  wire:model.lazy="descripcion">
                         @error('descripcion')
                         <span class="text-danger ">
                              {{$message}}
                            </span>
                          @enderror
                     </div>
                     <div class="form-group col-md-2">
                         <label for="precio">Precio:</label>
                         <input type="text" class="form-control" id="precio"  wire:model.lazy="precio">
                         @error('precio')
                         <span class="text-danger ">
                              {{$message}}
                            </span>
                          @enderror
                       </div>
                    
                     <div class="form-group col-md-2">
                         <label for="cantidad">Cantidad</label>
                         <input type="text" class="form-control" id="cantidad"  wire:model.lazy="cantidad">
                         @error('cantidad')
                         <span class="text-danger ">
                              {{$message}}
                            </span>
                          @enderror
                       </div>
                 </div>
               
             </form>
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary"  wire:click="cancelar" data-dismiss="modal">Cerrar</button>
           <button type="button"  wire:click="save"  wire:loading.attr="disabled" class="btn btn-primary">Agregar</button>
         </div>
       </div>
     </div>
   </div>
 
 </div>
 