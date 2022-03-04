<?php
use App\Models\Service;
use Gloudemans\Shoppingcart\Facades\Cart;

function quantity($product_id)
    {
        $product=Service::find($product_id);
        $quantity=$product->cantidad;
        return $quantity;
    }
    function qty_added($product_id){

        $cart=Cart::content();

        $item =$cart->where('id',$product_id)->first();

        if($item){
            return $item->qty;
        }else{
            return 0;
        }
    }

    function qty_available($product_id){
        return quantity($product_id) - qty_added($product_id);
    }

