<?php

namespace App\Http\Controllers\ventas;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class VentasPreview extends Controller
{
public function preview(Sale $venta)
{
    $items= json_decode($venta->contenido);
    return view('ventas.ventas-preview',compact('venta','items'));
}
public function pdf(Sale $venta)

{ 
    $items= json_decode($venta->contenido);
     $pdf = PDF::loadView('ventas.ventas-preview-pdf', ['venta'=>$venta,'items'=>$items]);
    return $pdf->stream(); 
   
   /*  return view('ventas.ventas-preview-pdf',compact('venta','items'));   */
}
}
