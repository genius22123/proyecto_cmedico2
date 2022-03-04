<div class="d-flex justify-content-center align-items-center" x-data>
        <button class="btn btn-primary btn-sm "
            disabled
            x-bind:disabled="$wire.qty <= 1"
            wire:loading.attr="disabled"
            wire:target="decrement"
            wire:click="decrement"
        >
            -
        </button>
        <Span class="mx-2">{{$qty}}</Span>
        <button class="btn btn-primary btn-sm "
       
        x-bind:disabled="$wire.qty >= $wire.quantity"
        wire:loading.attr="disabled"
        wire:target="increment"
        wire:click="increment"
        
        >
           +
        </button>
</div>