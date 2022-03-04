<div>
   <!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
    Launch static backdrop modal
  </button> --}}

  <button  type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#themodal">AGREGAR <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></button>
  
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="themodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">AGREGAR | Cliente </h5>
  
        </div>
        <div class="modal-body" >
            <form>
                 <div class="form-row mb-4">
                    <div class="form-group col-md-4">
                        <label for="documento_type">Tipo Documento:</label>
                        <select wire:click="cancelar2" id="documento_type" class="form-control" name="documento_type"  wire:model.lazy="documento_type">
                            <option selected>Seleccione...</option>
                            <option value="DNI">DNI</option>
                            <option value="RUC">RUC</option>
                        </select>
                        @error('documento_type')
                        <span class="text-danger ">
                            {{$message}}
                          </span>
                        @enderror
                    </div>

             
                <div class="form-group col-md-8">
               
                  <label for="num_documento">Numero Documento:</label>
                  <div class="d-flex ">
                  <input type="text" class="form-control w-full" id="num_documento"  wire:model.lazy="num_documento"> 
        

                  
                  <button type="button" class="btn btn-primary"  wire:click="searchCustomer"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search toggle-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
                    </div>
                    @error('num_documento')
                    <span class="text-danger ">
                         {{$message}}
                       </span>
                     @enderror
                  </div> 
               
             
                </div>
           
                    <div class="form-group ">
                        <label for="nombres">Nombre:</label>
                                <input type="text" class="form-control" id="nombres" placeholder="Nombres" wire:model.lazy="nombre">
                          @error('nombre')
                        <span class="text-danger ">
                              {{$message}}
                            </span>
                          @enderror
                    </div>
            
          
     
             
                <div class="form-row mb-4 ">
  

                    <div class="form-group col-md-6">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" id="direccion" placeholder="1234 Main St"  wire:model.lazy="direccion">
                        @error('direccion')
                        <span class="text-danger ">
                             {{$message}}
                           </span>
                         @enderror
                      </div>

                      <div class="form-group col-md-6">
                        <label for="telefono">Telefono</label>
                         <input type="text" class="form-control" id="telefono"  wire:model.lazy="telefono">
                         @error('telefono')
                         <span class="text-danger ">
                              {{$message}}
                            </span>
                          @enderror 
                     
                       </div>
                   
                   
                </div>


                <div class="form-row mb-4 d-none  @if($documento_type=='RUC') d-flex @endif " >
                  <div class="form-group col-md-6">
                      <label for="estado"> Estado:</label>
                      <input type="text" class="form-control" id="estado" placeholder="Estado de la empresa"  wire:model.lazy="estado">
                      @error('estado')
                      <span class="text-danger ">
                           {{$message}}
                         </span>
                       @enderror
                    </div>

                    <div class="form-group col-md-6">
                      <label for="lugar">Lugar</label>
                       <input type="lugar" class="form-control" id="Lugar"  wire:model.lazy="lugar">
                       @error('lugar')
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
