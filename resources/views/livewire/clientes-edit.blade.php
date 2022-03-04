<div wire:ignore.self class="modal fade " data-backdrop="static"  data-keyboard="false" tabindex="-1" style="display: none;" id="editmodal" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title"  >Editar CLIENTE | ID:  </h5>
             
          </div>
          <div class="modal-body">
              <form>
                  <div class="form-row mb-4">
                      <div class="form-group col-md-6">
                          <label for="nombres">Nombres:</label>
                          <input type="text" class="form-control" id="nombres" placeholder="Nombres" wire:model.lazy="customer.nombres">
                    @error('customer.nombres')
                   <span class="text-danger ">
                        {{$message}}
                      </span>
                    @enderror
                      </div>
              
                      <div class="form-group col-md-6">
                          <label for="apellidos">Apellidos</label>
                          <input type="text" class="form-control" id="apellidos" placeholder="Apellidos"  wire:model.lazy="customer.apellidos">
                          @error('customer.apellidos')
                          <span class="text-danger ">
                               {{$message}}
                             </span>
                           @enderror
                        </div>
                  </div>
                  <div class="form-row mb-4">
                      <div class="form-group col-md-3">
                          <label for="documento_type">Tipo Documento:</label>
                          <select id="documento_type" class="form-control"  wire:model.lazy="customer.documento_type">
                              <option selected>Choose...</option>
                              <option>...</option>
                          </select>
                          @error('customer.documento_type')
                          <span class="text-danger ">
                               {{$message}}
                             </span>
                           @enderror
                      </div>
                      <div class="form-group col-md-5">
                          <label for="num_documento">Numero Documento:</label>
                          <input type="text" class="form-control" id="num_documento"  wire:model.lazy="customer.num_documento">
                          @error('customer.num_documento')
                          <span class="text-danger ">
                               {{$message}}
                             </span>
                           @enderror
                        </div>
                     
                      <div class="form-group col-md-4">
                          <label for="telefono">Telefono</label>
                          <input type="text" class="form-control" id="telefono"  wire:model.lazy="customer.telefono">
                          @error('customer.telefono')
                          <span class="text-danger ">
                               {{$message}}
                             </span>
                           @enderror
                        </div>
                  </div>
                  <div class="form-row mb-4">
    
  
                      <div class="form-group col-md-12">
                          <label for="direccion">Direccion</label>
                          <input type="text" class="form-control" id="direccion" placeholder="1234 Main St"  wire:model.lazy="customer.direccion">
                          @error('customer.direccion')
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

