 <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
 <script src="{{asset('theme/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
 <script src="{{asset('theme/bootstrap/js/popper.min.js')}}"></script>
 <script src="{{asset('theme/bootstrap/js/bootstrap.min.js')}}"></script>
 <script src="{{asset('theme/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
 <script src="{{asset('theme/assets/js/app.js')}}"></script>
 <script src="{{asset('theme/assets/js/scrollspyNav.js')}}"></script>
 <script src="{{asset('theme/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
 <script src="{{asset('theme/plugins/sweetalerts/custom-sweetalert.js')}}"></script>
 <script>
     $(document).ready(function() {
         App.init();
     });
 </script>

<script defer src="https://unpkg.com/alpinejs@3.8.1/dist/cdn.min.js"></script>

@livewireScripts
 <script src="{{asset('theme/assets/js/custom.js')}}"></script>

 <script src="{{asset('theme/plugins/highlight/highlight.pack.js')}}"></script>

 
 <script src="{{asset('theme/plugins/dropify/dropify.min.js')}}"></script>
 <script src="{{asset('theme/plugins/flatpickr/flatpickr.js')}}"></script>
 <script src="{{asset('theme/assets/js/apps/invoice-add.js')}}"></script>

 <!-- END GLOBAL MANDATORY SCRIPTS -->

 <!-- BEGIN PAGE LEVEL CUSTOM SCRIPTS -->
 <script src="{{asset('theme/assets/js/scrollspyNav.js')}}"></script>
 <script>
   
     $('[data-toggle="tooltip"]').tooltip()
 </script>
 <!-- END GLOBAL MANDATORY SCRIPTS -->

 <script>
    window.livewire.on('cliente-agregado',msg=>{
        $('#themodal').modal('hide')
    })

    window.livewire.on('customer-agregado',msg=>{
        $('#agregarcliente').modal('hide')
    })
</script>

<script>
    window.livewire.on('cliente-editado',msg=>{
        $('#editmodal').modal('hide')
    })

    window.livewire.on('servicio-agregado',msg=>{
        $('#servicecreate').modal('hide')
    })

    window.livewire.on('servicio-editado',msg=>{
        $('#editservice').modal('hide')
    })

    
    window.livewire.on('cliente-importado',msg=>{
        $('#importarcliente').modal('hide')
    })
    
   


</script>

@stack('js')

<script>
    Livewire.on('cliente-agregado',function(message){
    
       swal({
     title: 'Exelente',
     text: message,
     type: 'success',
     padding: '2em'
   })

    });

    Livewire.on('customer-agregado',function(message){
    
    swal({
  title: 'Exelente',
  text: message,
  type: 'success',
  padding: '2em'
})

 });

    Livewire.on('cliente-editado',function(message){
    
    swal({
  title: 'Exelente',
  text: message,
  type: 'success',
  padding: '2em'
})

 });


 Livewire.on('servicio-agregado',function(message){
    
    swal({
  title: 'Exelente',
  text: message,
  type: 'success',
  padding: '2em'
})

 });

 
 Livewire.on('servicio-editado',function(message){
    
    swal({
  title: 'Exelente',
  text: message,
  type: 'success',
  padding: '2em'
})

 });

 Livewire.on('cliente-importado',function(message){
    
    swal({
  title: 'Exelente',
  text: message,
  type: 'success',
  padding: '2em'
})

 });

 
 Livewire.on('add_servicio',function(message){
    
    swal({
  title: 'Exelente',
  text: message,
  type: 'success',
  padding: '2em'
})

 });

 Livewire.on('error',function(message){
    
  swal({
    type: 'error',
    title: 'Oops...',
    text: message,

    padding: '2em'
  })

 });
</script>

