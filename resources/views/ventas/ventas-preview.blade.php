@extends('layouts.theme.app')
@section('content')
<div class="layout-px-spacing">
    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">Invoice</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Preview</a></li>
            </ol>
        </nav>
    </div>
    
    <div class="row invoice  layout-spacing layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <div class="doc-container">

                <div class="row">

                    <div class="col-xl-9">

                        <div class="invoice-container">
                            <div class="invoice-inbox">
                                
                                <div id="ct" class="">
                                    
                                    <div class="invoice-00001">
                                        <div class="content-section">

                                            <div class="inv--head-section inv--detail-section">
                                            
                                                <div class="row">
                                                
                                                    <div class="col-sm-6 col-12 mr-auto">
                                                      
                                                            <img src="{{asset('images/logo5.png')}}" height="150" alt="company">
                                                      
                                                    
                                                    </div>

                                                    <div class="col-sm-6 text-sm-right">
                                                        <p class="inv-list-number"><span class="inv-title">Comprobante : </span> <span class="inv-number">{{$venta->comprobante_serie}}-{{$venta->comprobante_num}}</span></p>
                                                    </div>

                                                    <div class="col-sm-6 align-self-center mt-3">
                                                        <p class="inv-street-addr">CENTRO MEDICO SAN JOSE</p>
                                                        <p class="inv-email-address">Jr: Lima 123</p>
                                                        <p class="inv-email-address">PUNO - PUNO - PUNO</p>
                                                    </div>
                                                    <div class="col-sm-6 align-self-center mt-3 text-sm-right">
                                                        <p class="inv-created-date"><span class="inv-title">FECHA EMISION: </span> <span class="inv-date">20 Aug 2020</span></p>
                                                        <p class="inv-due-date"><span class="inv-title">FECHA DE VENC. : </span> <span class="inv-date">26 Aug 2020</span></p>
                                                    </div>
                                                
                                                </div>
                                                
                                            </div>

                                            <div class="inv--detail-section inv--customer-detail-section">

                                                <div class="row">

                                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                        <p class="inv-to">Cliente:</p>
                                                    </div>

                                                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 inv--payment-info">
                                                        <h6 class=" inv-title">Pago Info:</h6>
                                                    </div>
                                                    
                                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                        <p class="inv-email-address">{{$venta->customer->documento_type}}: {{$venta->customer->num_documento}}</p>
                                                        <p class="inv-customer-name">{{$venta->customer->nombre}}</p>
                                                        <p class="inv-street-addr">Telefono: {{$venta->customer->telefono}}</p>
                                                        <p class="inv-email-address">Direcion: {{$venta->customer->direccion}}</p>
                                                        <p class="inv-email-address">Lugar:{{$venta->customer->lugar}}</p>
                                                    </div>
                                                    
                                                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 order-sm-0 order-1">
                                                        <div class="inv--payment-info">
                                                            <p><span class=" inv-subtitle">Moneda:</span> <span>SOLES</span></p>
                                                            <p><span class=" inv-subtitle">Tipo </span> <span>Efectivo</span></p>
                                                    
                                                            <p><span class=" inv-subtitle">Pais: </span> <span>Peru</span></p>

                                                        </div>
                                                    </div>

                                                </div>
                                                
                                            </div>

                                            <div class="inv--product-table-section">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th  scope="col">Descripcion</th>
                                                                <th scope="col">UM</th>
                                                                <th class="text-right" scope="col">Cantidad</th>
                                                                <th class="text-right" scope="col">Precio</th>
                                                                <th class="text-right" scope="col">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($items as $item)
                                                            <tr>
                                                                <td>{{$item->name}}</td>
                                                                <td>YT</td>
                                                                <td class="text-right">{{$item->qty}}</td>
                                                                <td class="text-right">{{$item->price}}</td>
                                                                <td class="text-right">{{{$item->subtotal}}}</td>
                                                            </tr>
                                                            @endforeach
                                                           
                                                      
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            
                                            <div class="inv--total-amounts">
                                            
                                                <div class="row mt-4">
                                                    <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                    </div>
                                                    <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                        <div class="text-sm-right">
                                                            <div class="row">
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Gravada: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">S/. {{$venta->total- $venta->impuesto}}</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Descuento: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">S/. {{$venta->descuento}}</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p >Igv : <span >18%</span> </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">S/. {{$venta->impuesto}}</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7 grand-total-title">
                                                                    <h4 class="text-white">Total : </h4>
                                                                </div>
                                                                <div class="col-sm-4 col-5 grand-total-amount">
                                                                    <h4 class="text-white">S/. {{$venta->total}}</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="inv--note">

                                                <div class="row mt-4">
                                                    <div class="col-sm-12 col-12 order-sm-0 order-1">
                                                        <p>Note: Thank you for doing Business with us.</p>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div> 
                                    
                                </div>


                            </div>

                        </div>

                    </div>

                    <div class="col-xl-3">

                        <div class="invoice-actions-btn">

                            <div class="invoice-action-btn">

                                <div class="row">
                                    <div class="col-xl-12 col-md-3 col-sm-6">
                                        <a href="javascript:void(0);" class="btn btn-primary btn-send">Enviar a Sunat</a>
                                    </div>
                                    <div class="col-xl-12 col-md-3 col-sm-6">
                                        <a href="javascript:void(0);" class="btn btn-secondary btn-print  action-print">Imprimir</a>
                                    </div>
                                    <div class="col-xl-12 col-md-3 col-sm-6">
                                        <a href="{{route('ventas.preview.pdf',$venta->id)}}" class="btn btn-success btn-download">Descargar</a>
                                    </div>
                                    <div class="col-xl-12 col-md-3 col-sm-6">
                                        <a href="apps_invoice-edit.html" class="btn btn-danger btn-edit">Anular</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>


                </div>
                
                
            </div>

        </div>
    </div>
    
</div>
@endsection