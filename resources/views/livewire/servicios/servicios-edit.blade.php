<div wire:ignore.self class="modal fade " data-backdrop="static"  data-keyboard="false" tabindex="-1" style="display: none;" id="editservice" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title"  >Editar Servicio | ID:  </h5>
             
          </div>
          <div class="modal-body">
              <form>
                  <div class="form-row mb-4">
                      <div class="form-group col-md-6">
                          <label for="codigo">Codigo:</label>
                          {{$servicio_id}}
                          <input type="text" class="form-control" id="codigo" placeholder="codigo" wire:model.lazy="servicio.codigo">
                    @error('servicio.codigo')
                   <span class="text-danger ">
                        {{$message}}
                      </span>
                    @enderror
                      </div>
              
                      <div class="form-group col-md-6">
                          <label for="nombre">Nombre:</label>
                          <input type="text" class="form-control" id="nombre" placeholder="Nombre"  wire:model.lazy="servicio.nombre">
                          @error('servicio.nombre')
                          <span class="text-danger ">
                               {{$message}}
                             </span>
                           @enderror
                        </div>
                  </div>
                  <div class="form-row mb-4">
                    <div class="form-group col-md-8">
                       <label for="descripcion">Descripcion:</label>
                       <input type="text" class="form-control" id="descripcion"  wire:model.lazy="servicio.descripcion">
                        @error('servicio.descripcion')
                        <span class="text-danger ">
                             {{$message}}
                           </span>
                         @enderror
                    </div>
                    <div class="form-group col-md-2">
                        <label for="precio">Precio:</label>
                        <input type="text" class="form-control" id="precio"  wire:model.lazy="servicio.precio">
                        @error('servicio.precio')
                        <span class="text-danger ">
                             {{$message}}
                           </span>
                         @enderror
                      </div>
                   
                    <div class="form-group col-md-2">
                        <label for="cantidad">Cantidad</label>
                        <input type="text" class="form-control" id="cantidad"  wire:model.lazy="servicio.cantidad">
                        @error('servicio.cantidad')
                        <span class="text-danger ">
                             {{$message}}
                           </span>
                         @enderror
                      </div>
                </div>
              </form>
          </div>
          <div class="modal-footer">
              <button class="btn btn-danger" data-dismiss="modal"  wire:click="cancelar" ><i class="flaticon-cancel-12"></i> Cancelar</button>
              <button type="button"  wire:click="update" wire:loading.attr="disabled"  class="btn btn-info"   >Aplicar Cambios</button>
            
          </div>
      </div>
  </div>
</div>  

