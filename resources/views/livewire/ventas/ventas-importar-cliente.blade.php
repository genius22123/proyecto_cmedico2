
   <div wire:ignore.self class="modal fade" id="importarcliente" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="staticBackdropLabel">Importar Cliente </h5>
   
         </div>
         <div class="modal-body">
          <div class="search-input-group-style input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></span>
            </div>
            <input type="text" wire:model="search" class="form-control" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">
  
        </div>
        <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
          <thead>
             <tr>
               
           
                 <th class="">Nombre</th>
                 <th class="">Tipo Document.</th>
                 <th class="">Numero Document.</th>
                
            
                 <th class="text-center">Icons</th>
             </tr>
             </thead>
             <tbody>

             @foreach ($clientes as $item)
             <tr>

         
                 <td> <p class="mb-0">{{$item->nombre}}</p>  </td>
 
                 <td>{{$item->documento_type}}</td>
                 <td>{{$item->num_documento}}</td>
            
         

                 <td class="text-center">
                     <ul class="table-controls">
                         <li><a href="javascript:void(0);" wire:click="importar({{$item}})">   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check  text-success"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg></a></li>
                      
                        
                     </ul>
                 </td>  
     

            
             </tr>

             @endforeach
    
                 </tbody>
         </table> 
         {{$clientes->links()}}
           
         </div>
         <div class="modal-footer">
           <button type="button" class="btn btn-secondary"   data-dismiss="modal">Cerrar</button>
           
         </div>
       </div>
     </div>
   </div>
 

 