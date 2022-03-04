<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <style>

        /*!
 * Bootstrap v4.6.0 (https://getbootstrap.com/)
 * Copyright 2011-2021 The Bootstrap Authors
 * Copyright 2011-2021 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
 */:root{--blue:#007bff;--indigo:#6610f2;--purple:#6f42c1;--pink:#e83e8c;--red:#dc3545;--orange:#fd7e14;--yellow:#ffc107;--green:#28a745;--teal:#20c997;--cyan:#17a2b8;--white:#fff;--gray:#6c757d;--gray-dark:#343a40;--primary:#007bff;--secondary:#6c757d;--success:#28a745;--info:#17a2b8;--warning:#ffc107;--danger:#dc3545;--light:#f8f9fa;--dark:#343a40;--breakpoint-xs:0;--breakpoint-sm:576px;--breakpoint-md:768px;--breakpoint-lg:992px;--breakpoint-xl:1200px;--font-family-sans-serif:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-family-monospace:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace}*,::after,::before{box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent}article,aside,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}body{margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#212529;text-align:left;background-color:#fff}[tabindex="-1"]:focus:not(:focus-visible){outline:0!important}hr{box-sizing:content-box;height:0;overflow:visible}h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:.5rem}p{margin-top:0;margin-bottom:1rem}abbr[data-original-title],abbr[title]{text-decoration:underline;-webkit-text-decoration:underline dotted;text-decoration:underline dotted;cursor:help;border-bottom:0;-webkit-text-decoration-skip-ink:none;text-decoration-skip-ink:none}address{margin-bottom:1rem;font-style:normal;line-height:inherit}dl,ol,ul{margin-top:0;margin-bottom:1rem}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}dt{font-weight:700}dd{margin-bottom:.5rem;margin-left:0}blockquote{margin:0 0 1rem}b,strong{font-weight:bolder}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}a{color:#007bff;text-decoration:none;background-color:transparent}a:hover{color:#0056b3;text-decoration:underline}a:not([href]):not([class]){color:inherit;text-decoration:none}a:not([href]):not([class]):hover{color:inherit;text-decoration:none}code,kbd,pre,samp{font-family:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;font-size:1em}pre{margin-top:0;margin-bottom:1rem;overflow:auto;-ms-overflow-style:scrollbar}figure{margin:0 0 1rem}img{vertical-align:middle;border-style:none}svg{overflow:hidden;vertical-align:middle}table{border-collapse:collapse}caption{padding-top:.75rem;padding-bottom:.75rem;color:#6c757d;text-align:left;caption-side:bottom}th{text-align:inherit;text-align:-webkit-match-parent}label{display:inline-block;margin-bottom:.5rem}button{border-radius:0}button:focus:not(:focus-visible){outline:0}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button,select{text-transform:none}[role=button]{cursor:pointer}select{word-wrap:normal}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button}[type=button]:not(:disabled),[type=reset]:not(:disabled),[type=submit]:not(:disabled),button:not(:disabled){cursor:pointer}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}input[type=checkbox],input[type=radio]{box-sizing:border-box;padding:0}textarea{overflow:auto;resize:vertical}fieldset{min-width:0;padding:0;margin:0;border:0}legend{display:block;width:100%;max-width:100%;padding:0;margin-bottom:.5rem;font-size:1.5rem;line-height:inherit;color:inherit;white-space:normal}progress{vertical-align:baseline}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:none}[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}output{display:inline-block}summary{display:list-item;cursor:pointer}template{display:none}[hidden]{display:none!important}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{margin-bottom:.5rem;font-weight:500;line-height:1.2}.h1,h1{font-size:2.5rem}.h2,h2{font-size:2rem}.h3,h3{font-size:1.75rem}.h4,h4{font-size:1.5rem}.h5,h5{font-size:1.25rem}.h6,h6{font-size:1rem}.lead{font-size:1.25rem;font-weight:300}.display-1{font-size:6rem;font-weight:300;line-height:1.2}.display-2{font-size:5.5rem;font-weight:300;line-height:1.2}.display-3{font-size:4.5rem;font-weight:300;line-height:1.2}.display-4{font-size:3.5rem;font-weight:300;line-height:1.2}hr{margin-top:1rem;margin-bottom:1rem;border:0;border-top:1px solid rgba(0,0,0,.1)}.small,small{font-size:80%;font-weight:400}.mark,mark{padding:.2em;background-color:#fcf8e3}.list-unstyled{padding-left:0;list-style:none}.list-inline{padding-left:0;list-style:none}.list-inline-item{display:inline-block}.list-inline-item:not(:last-child){margin-right:.5rem}.initialism{font-size:90%;text-transform:uppercase}.blockquote{margin-bottom:1rem;font-size:1.25rem}.blockquote-footer{display:block;font-size:80%;color:#6c757d}.blockquote-footer::before{content:"\2014\00A0"}.img-fluid{max-width:100%;height:auto}.img-thumbnail{padding:.25rem;background-color:#fff;border:1px solid #dee2e6;border-radius:.25rem;max-width:100%;height:auto}.figure{display:inline-block}.figure-img{margin-bottom:.5rem;line-height:1}.figure-caption{font-size:90%;color:#6c757d}code{font-size:87.5%;color:#e83e8c;word-wrap:break-word}a>code{color:inherit}kbd{padding:.2rem .4rem;font-size:87.5%;color:#fff;background-color:#212529;border-radius:.2rem}kbd kbd{padding:0;font-size:100%;font-weight:700}pre{display:block;font-size:87.5%;color:#212529}pre code{font-size:inherit;color:inherit;word-break:normal}.pre-scrollable{max-height:340px;overflow-y:scroll}.container,.container-fluid,.container-lg,.container-md,.container-sm,.container-xl{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}@media (min-width:576px){.container,.container-sm{max-width:540px}}@media (min-width:768px){.container,.container-md,.container-sm{max-width:720px}}@media (min-width:992px){.container,.container-lg,.container-md,.container-sm{max-width:960px}}@media (min-width:1200px){.container,.container-lg,.container-md,.container-sm,.container-xl{max-width:1140px}}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.no-gutters{margin-right:0;margin-left:0}.no-gutters>.col,.no-gutters>[class*=col-]{padding-right:0;padding-left:0}.col,.col-1,.col-10,.col-11,.col-12,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-auto,.col-lg,.col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-auto,.col-md,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-auto,.col-sm,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-auto,.col-xl,.col-xl-1,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-auto{position:relative;width:100%;padding-right:15px;padding-left:15px}.col{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.row-cols-1>*{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.row-cols-2>*{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.row-cols-3>*{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.row-cols-4>*{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.row-cols-5>*{-ms-flex:0 0 20%;flex:0 0 20%;max-width:20%}.row-cols-6>*{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-first{-ms-flex-order:-1;order:-1}.order-last{-ms-flex-order:13;order:13}.order-0{-ms-flex-order:0;order:0}.order-1{-ms-flex-order:1;order:1}.order-2{-ms-flex-order:2;order:2}.order-3{-ms-flex-order:3;order:3}.order-4{-ms-flex-order:4;order:4}.order-5{-ms-flex-order:5;order:5}.order-6{-ms-flex-order:6;order:6}.order-7{-ms-flex-order:7;order:7}.order-8{-ms-flex-order:8;order:8}.order-9{-ms-flex-order:9;order:9}.order-10{-ms-flex-order:10;order:10}.order-11{-ms-flex-order:11;order:11}.order-12{-ms-flex-order:12;order:12}.offset-1{margin-left:8.333333%}.offset-2{margin-left:16.666667%}.offset-3{margin-left:25%}.offset-4{margin-left:33.333333%}.offset-5{margin-left:41.666667%}.offset-6{margin-left:50%}.offset-7{margin-left:58.333333%}.offset-8{margin-left:66.666667%}.offset-9{margin-left:75%}.offset-10{margin-left:83.333333%}.offset-11{margin-left:91.666667%}@media (min-width:576px){.col-sm{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.row-cols-sm-1>*{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.row-cols-sm-2>*{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.row-cols-sm-3>*{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.row-cols-sm-4>*{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.row-cols-sm-5>*{-ms-flex:0 0 20%;flex:0 0 20%;max-width:20%}.row-cols-sm-6>*{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-sm-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-sm-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-sm-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-sm-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-sm-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-sm-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-sm-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-sm-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-sm-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-sm-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-sm-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-sm-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-sm-first{-ms-flex-order:-1;order:-1}.order-sm-last{-ms-flex-order:13;order:13}.order-sm-0{-ms-flex-order:0;order:0}.order-sm-1{-ms-flex-order:1;order:1}.order-sm-2{-ms-flex-order:2;order:2}.order-sm-3{-ms-flex-order:3;order:3}.order-sm-4{-ms-flex-order:4;order:4}.order-sm-5{-ms-flex-order:5;order:5}.order-sm-6{-ms-flex-order:6;order:6}.order-sm-7{-ms-flex-order:7;order:7}.order-sm-8{-ms-flex-order:8;order:8}.order-sm-9{-ms-flex-order:9;order:9}.order-sm-10{-ms-flex-order:10;order:10}.order-sm-11{-ms-flex-order:11;order:11}.order-sm-12{-ms-flex-order:12;order:12}.offset-sm-0{margin-left:0}.offset-sm-1{margin-left:8.333333%}.offset-sm-2{margin-left:16.666667%}.offset-sm-3{margin-left:25%}.offset-sm-4{margin-left:33.333333%}.offset-sm-5{margin-left:41.666667%}.offset-sm-6{margin-left:50%}.offset-sm-7{margin-left:58.333333%}.offset-sm-8{margin-left:66.666667%}.offset-sm-9{margin-left:75%}.offset-sm-10{margin-left:83.333333%}.offset-sm-11{margin-left:91.666667%}}@media (min-width:768px){.col-md{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.row-cols-md-1>*{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.row-cols-md-2>*{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.row-cols-md-3>*{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.row-cols-md-4>*{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.row-cols-md-5>*{-ms-flex:0 0 20%;flex:0 0 20%;max-width:20%}.row-cols-md-6>*{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-md-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-md-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-md-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-md-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-md-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-md-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-md-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-md-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-md-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-md-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-md-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-md-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-md-first{-ms-flex-order:-1;order:-1}.order-md-last{-ms-flex-order:13;order:13}.order-md-0{-ms-flex-order:0;order:0}.order-md-1{-ms-flex-order:1;order:1}.order-md-2{-ms-flex-order:2;order:2}.order-md-3{-ms-flex-order:3;order:3}.order-md-4{-ms-flex-order:4;order:4}.order-md-5{-ms-flex-order:5;order:5}.order-md-6{-ms-flex-order:6;order:6}.order-md-7{-ms-flex-order:7;order:7}.order-md-8{-ms-flex-order:8;order:8}.order-md-9{-ms-flex-order:9;order:9}.order-md-10{-ms-flex-order:10;order:10}.order-md-11{-ms-flex-order:11;order:11}.order-md-12{-ms-flex-order:12;order:12}.offset-md-0{margin-left:0}.offset-md-1{margin-left:8.333333%}.offset-md-2{margin-left:16.666667%}.offset-md-3{margin-left:25%}.offset-md-4{margin-left:33.333333%}.offset-md-5{margin-left:41.666667%}.offset-md-6{margin-left:50%}.offset-md-7{margin-left:58.333333%}.offset-md-8{margin-left:66.666667%}.offset-md-9{margin-left:75%}.offset-md-10{margin-left:83.333333%}.offset-md-11{margin-left:91.666667%}}@media (min-width:992px){.col-lg{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.row-cols-lg-1>*{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.row-cols-lg-2>*{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.row-cols-lg-3>*{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.row-cols-lg-4>*{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.row-cols-lg-5>*{-ms-flex:0 0 20%;flex:0 0 20%;max-width:20%}.row-cols-lg-6>*{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-lg-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-lg-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-lg-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-lg-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-lg-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-lg-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-lg-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-lg-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-lg-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-lg-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-lg-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-lg-first{-ms-flex-order:-1;order:-1}.order-lg-last{-ms-flex-order:13;order:13}.order-lg-0{-ms-flex-order:0;order:0}.order-lg-1{-ms-flex-order:1;order:1}.order-lg-2{-ms-flex-order:2;order:2}.order-lg-3{-ms-flex-order:3;order:3}.order-lg-4{-ms-flex-order:4;order:4}.order-lg-5{-ms-flex-order:5;order:5}.order-lg-6{-ms-flex-order:6;order:6}.order-lg-7{-ms-flex-order:7;order:7}.order-lg-8{-ms-flex-order:8;order:8}.order-lg-9{-ms-flex-order:9;order:9}.order-lg-10{-ms-flex-order:10;order:10}.order-lg-11{-ms-flex-order:11;order:11}.order-lg-12{-ms-flex-order:12;order:12}.offset-lg-0{margin-left:0}.offset-lg-1{margin-left:8.333333%}.offset-lg-2{margin-left:16.666667%}.offset-lg-3{margin-left:25%}.offset-lg-4{margin-left:33.333333%}.offset-lg-5{margin-left:41.666667%}.offset-lg-6{margin-left:50%}.offset-lg-7{margin-left:58.333333%}.offset-lg-8{margin-left:66.666667%}.offset-lg-9{margin-left:75%}.offset-lg-10{margin-left:83.333333%}.offset-lg-11{margin-left:91.666667%}}@media (min-width:1200px){.col-xl{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.row-cols-xl-1>*{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.row-cols-xl-2>*{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.row-cols-xl-3>*{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.row-cols-xl-4>*{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.row-cols-xl-5>*{-ms-flex:0 0 20%;flex:0 0 20%;max-width:20%}.row-cols-xl-6>*{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-xl-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-xl-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-xl-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-xl-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-xl-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-xl-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-xl-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-xl-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-xl-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-xl-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-xl-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-xl-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-xl-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.order-xl-first{-ms-flex-order:-1;order:-1}.order-xl-last{-ms-flex-order:13;order:13}.order-xl-0{-ms-flex-order:0;order:0}.order-xl-1{-ms-flex-order:1;order:1}.order-xl-2{-ms-flex-order:2;order:2}.order-xl-3{-ms-flex-order:3;order:3}.order-xl-4{-ms-flex-order:4;order:4}.order-xl-5{-ms-flex-order:5;order:5}.order-xl-6{-ms-flex-order:6;order:6}.order-xl-7{-ms-flex-order:7;order:7}.order-xl-8{-ms-flex-order:8;order:8}.order-xl-9{-ms-flex-order:9;order:9}.order-xl-10{-ms-flex-order:10;order:10}.order-xl-11{-ms-flex-order:11;order:11}.order-xl-12{-ms-flex-order:12;order:12}.offset-xl-0{margin-left:0}.offset-xl-1{margin-left:8.333333%}.offset-xl-2{margin-left:16.666667%}.offset-xl-3{margin-left:25%}.offset-xl-4{margin-left:33.333333%}.offset-xl-5{margin-left:41.666667%}.offset-xl-6{margin-left:50%}.offset-xl-7{margin-left:58.333333%}.offset-xl-8{margin-left:66.666667%}.offset-xl-9{margin-left:75%}.offset-xl-10{margin-left:83.333333%}.offset-xl-11{margin-left:91.666667%}}.table{width:100%;margin-bottom:1rem;color:#212529}.table td,.table th{padding:.75rem;vertical-align:top;border-top:1px solid #dee2e6}.table thead th{vertical-align:bottom;border-bottom:2px solid #dee2e6}.table tbody+tbody{border-top:2px solid #dee2e6}.table-sm td,.table-sm th{padding:.3rem}.table-bordered{border:1px solid #dee2e6}.table-bordered td,.table-bordered th{border:1px solid #dee2e6}.table-bordered thead td,.table-bordered thead th{border-bottom-width:2px}.table-borderless tbody+tbody,.table-borderless td,.table-borderless th,.table-borderless thead th{border:0}.table-striped tbody tr:nth-of-type(odd){background-color:rgba(0,0,0,.05)}.table-hover tbody tr:hover{color:#212529;background-color:rgba(0,0,0,.075)}.table-primary,.table-primary>td,.table-primary>th{background-color:#b8daff}.table-primary tbody+tbody,.table-primary td,.table-primary th,.table-primary thead th{border-color:#7abaff}.table-hover .table-primary:hover{background-color:#9fcdff}.table-hover .table-primary:hover>td,.table-hover .table-primary:hover>th{background-color:#9fcdff}.table-secondary,.table-secondary>td,.table-secondary>th{background-color:#d6d8db}.table-secondary tbody+tbody,.table-secondary td,.table-secondary th,.table-secondary thead th{border-color:#b3b7bb}.table-hover .table-secondary:hover{background-color:#c8cbcf}.table-hover .table-secondary:hover>td,.table-hover .table-secondary:hover>th{background-color:#c8cbcf}.table-success,.table-success>td,.table-success>th{background-color:#c3e6cb}.table-success tbody+tbody,.table-success td,.table-success th,.table-success thead th{border-color:#8fd19e}.table-hover .table-success:hover{background-color:#b1dfbb}.table-hover .table-success:hover>td,.table-hover .table-success:hover>th{background-color:#b1dfbb}.table-info,.table-info>td,.table-info>th{background-color:#bee5eb}.table-info tbody+tbody,.table-info td,.table-info th,.table-info thead th{border-color:#86cfda}.table-hover .table-info:hover{background-color:#abdde5}.table-hover .table-info:hover>td,.table-hover .table-info:hover>th{background-color:#abdde5}.table-warning,.table-warning>td,.table-warning>th{background-color:#ffeeba}.table-warning tbody+tbody,.table-warning td,.table-warning th,.table-warning thead th{border-color:#ffdf7e}.table-hover .table-warning:hover{background-color:#ffe8a1}.table-hover .table-warning:hover>td,.table-hover .table-warning:hover>th{background-color:#ffe8a1}.table-danger,.table-danger>td,.table-danger>th{background-color:#f5c6cb}.table-danger tbody+tbody,.table-danger td,.table-danger th,.table-danger thead th{border-color:#ed969e}.table-hover .table-danger:hover{background-color:#f1b0b7}.table-hover .table-danger:hover>td,.table-hover .table-danger:hover>th{background-color:#f1b0b7}.table-light,.table-light>td,.table-light>th{background-color:#fdfdfe}.table-light tbody+tbody,.table-light td,.table-light th,.table-light thead th{border-color:#fbfcfc}.table-hover .table-light:hover{background-color:#ececf6}.table-hover .table-light:hover>td,.table-hover .table-light:hover>th{background-color:#ececf6}.table-dark,.table-dark>td,.table-dark>th{background-color:#c6c8ca}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#95999c}.table-hover .table-dark:hover{background-color:#b9bbbe}.table-hover .table-dark:hover>td,.table-hover .table-dark:hover>th{background-color:#b9bbbe}.table-active,.table-active>td,.table-active>th{background-color:rgba(0,0,0,.075)}.table-hover .table-active:hover{background-color:rgba(0,0,0,.075)}.table-hover .table-active:hover>td,.table-hover .table-active:hover>th{background-color:rgba(0,0,0,.075)}.table .thead-dark th{color:#fff;background-color:#343a40;border-color:#454d55}.table .thead-light th{color:#495057;background-color:#e9ecef;border-color:#dee2e6}.table-dark{color:#fff;background-color:#343a40}.table-dark td,.table-dark th,.table-dark thead th{border-color:#454d55}.table-dark.table-bordered{border:0}.table-dark.table-striped tbody tr:nth-of-type(odd){background-color:rgba(255,255,255,.05)}.table-dark.table-hover tbody tr:hover{color:#fff;background-color:rgba(255,255,255,.075)}@media (max-width:575.98px){.table-responsive-sm{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive-sm>.table-bordered{border:0}}@media (max-width:767.98px){.table-responsive-md{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive-md>.table-bordered{border:0}}@media (max-width:991.98px){.table-responsive-lg{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive-lg>.table-bordered{border:0}}@media (max-width:1199.98px){.table-responsive-xl{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive-xl>.table-bordered{border:0}}.table-responsive{display:block;width:100%;overflow-x:auto;-webkit-overflow-scrolling:touch}.table-responsive>.table-bordered{border:0}.form-control{display:block;width:100%;height:calc(1.5em + .75rem + 2px);padding:.375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:.25rem;transition:border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.form-control{transition:none}}.form-control::-ms-expand{background-color:transparent;border:0}.form-control:-moz-focusring{color:transparent;text-shadow:0 0 0 #495057}.form-control:focus{color:#495057;background-color:#fff;border-color:#80bdff;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.form-control::-webkit-input-placeholder{color:#6c757d;opacity:1}.form-control::-moz-placeholder{color:#6c757d;opacity:1}.form-control:-ms-input-placeholder{color:#6c757d;opacity:1}.form-control::-ms-input-placeholder{color:#6c757d;opacity:1}.form-control::placeholder{color:#6c757d;opacity:1}.form-control:disabled,.form-control[readonly]{background-color:#e9ecef;opacity:1}input[type=date].form-control,input[type=datetime-local].form-control,input[type=month].form-control,input[type=time].form-control{-webkit-appearance:none;-moz-appearance:none;appearance:none}select.form-control:focus::-ms-value{color:#495057;background-color:#fff}.form-control-file,.form-control-range{display:block;width:100%}.col-form-label{padding-top:calc(.375rem + 1px);padding-bottom:calc(.375rem + 1px);margin-bottom:0;font-size:inherit;line-height:1.5}.col-form-label-lg{padding-top:calc(.5rem + 1px);padding-bottom:calc(.5rem + 1px);font-size:1.25rem;line-height:1.5}.col-form-label-sm{padding-top:calc(.25rem + 1px);padding-bottom:calc(.25rem + 1px);font-size:.875rem;line-height:1.5}.form-control-plaintext{display:block;width:100%;padding:.375rem 0;margin-bottom:0;font-size:1rem;line-height:1.5;color:#212529;background-color:transparent;border:solid transparent;border-width:1px 0}.form-control-plaintext.form-control-lg,.form-control-plaintext.form-control-sm{padding-right:0;padding-left:0}.form-control-sm{height:calc(1.5em + .5rem + 2px);padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem}.form-control-lg{height:calc(1.5em + 1rem + 2px);padding:.5rem 1rem;font-size:1.25rem;line-height:1.5;border-radius:.3rem}select.form-control[multiple],select.form-control[size]{height:auto}textarea.form-control{height:auto}.form-group{margin-bottom:1rem}.form-text{display:block;margin-top:.25rem}.form-row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-5px;margin-left:-5px}.form-row>.col,.form-row>[class*=col-]{padding-right:5px;padding-left:5px}.form-check{position:relative;display:block;padding-left:1.25rem}.form-check-input{position:absolute;margin-top:.3rem;margin-left:-1.25rem}.form-check-input:disabled~.form-check-label,.form-check-input[disabled]~.form-check-label{color:#6c757d}.form-check-label{margin-bottom:0}.form-check-inline{display:-ms-inline-flexbox;display:inline-flex;-ms-flex-align:center;align-items:center;padding-left:0;margin-right:.75rem}.form-check-inline .form-check-input{position:static;margin-top:0;margin-right:.3125rem;margin-left:0}.valid-feedback{display:none;width:100%;margin-top:.25rem;font-size:80%;color:#28a745}.valid-tooltip{position:absolute;top:100%;left:0;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.875rem;line-height:1.5;color:#fff;background-color:rgba(40,167,69,.9);border-radius:.25rem}.form-row>.col>.valid-tooltip,.form-row>[class*=col-]>.valid-tooltip{left:5px}.is-valid~.valid-feedback,.is-valid~.valid-tooltip,.was-validated :valid~.valid-feedback,.was-validated :valid~.valid-tooltip{display:block}.form-control.is-valid,.was-validated .form-control:valid{border-color:#28a745;padding-right:calc(1.5em + .75rem);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right calc(.375em + .1875rem) center;background-size:calc(.75em + .375rem) calc(.75em + .375rem)}.form-control.is-valid:focus,.was-validated .form-control:valid:focus{border-color:#28a745;box-shadow:0 0 0 .2rem rgba(40,167,69,.25)}.was-validated textarea.form-control:valid,textarea.form-control.is-valid{padding-right:calc(1.5em + .75rem);background-position:top calc(.375em + .1875rem) right calc(.375em + .1875rem)}.custom-select.is-valid,.was-validated .custom-select:valid{border-color:#28a745;padding-right:calc(.75em + 2.3125rem);background:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right .75rem center/8px 10px no-repeat,#fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem) no-repeat}.custom-select.is-valid:focus,.was-validated .custom-select:valid:focus{border-color:#28a745;box-shadow:0 0 0 .2rem rgba(40,167,69,.25)}.form-check-input.is-valid~.form-check-label,.was-validated .form-check-input:valid~.form-check-label{color:#28a745}.form-check-input.is-valid~.valid-feedback,.form-check-input.is-valid~.valid-tooltip,.was-validated .form-check-input:valid~.valid-feedback,.was-validated .form-check-input:valid~.valid-tooltip{display:block}.custom-control-input.is-valid~.custom-control-label,.was-validated .custom-control-input:valid~.custom-control-label{color:#28a745}.custom-control-input.is-valid~.custom-control-label::before,.was-validated .custom-control-input:valid~.custom-control-label::before{border-color:#28a745}.custom-control-input.is-valid:checked~.custom-control-label::before,.was-validated .custom-control-input:valid:checked~.custom-control-label::before{border-color:#34ce57;background-color:#34ce57}.custom-control-input.is-valid:focus~.custom-control-label::before,.was-validated .custom-control-input:valid:focus~.custom-control-label::before{box-shadow:0 0 0 .2rem rgba(40,167,69,.25)}.custom-control-input.is-valid:focus:not(:checked)~.custom-control-label::before,.was-validated .custom-control-input:valid:focus:not(:checked)~.custom-control-label::before{border-color:#28a745}.custom-file-input.is-valid~.custom-file-label,.was-validated .custom-file-input:valid~.custom-file-label{border-color:#28a745}.custom-file-input.is-valid:focus~.custom-file-label,.was-validated .custom-file-input:valid:focus~.custom-file-label{border-color:#28a745;box-shadow:0 0 0 .2rem rgba(40,167,69,.25)}.invalid-feedback{display:none;width:100%;margin-top:.25rem;font-size:80%;color:#dc3545}.invalid-tooltip{position:absolute;top:100%;left:0;z-index:5;display:none;max-width:100%;padding:.25rem .5rem;margin-top:.1rem;font-size:.875rem;line-height:1.5;color:#fff;background-color:rgba(220,53,69,.9);border-radius:.25rem}.form-row>.col>.invalid-tooltip,.form-row>[class*=col-]>.invalid-tooltip{left:5px}.is-invalid~.invalid-feedback,.is-invalid~.invalid-tooltip,.was-validated :invalid~.invalid-feedback,.was-validated :invalid~.invalid-tooltip{display:block}.form-control.is-invalid,.was-validated .form-control:invalid{border-color:#dc3545;padding-right:calc(1.5em + .75rem);background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");background-repeat:no-repeat;background-position:right calc(.375em + .1875rem) center;background-size:calc(.75em + .375rem) calc(.75em + .375rem)}.form-control.is-invalid:focus,.was-validated .form-control:invalid:focus{border-color:#dc3545;box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}.was-validated textarea.form-control:invalid,textarea.form-control.is-invalid{padding-right:calc(1.5em + .75rem);background-position:top calc(.375em + .1875rem) right calc(.375em + .1875rem)}.custom-select.is-invalid,.was-validated .custom-select:invalid{border-color:#dc3545;padding-right:calc(.75em + 2.3125rem);background:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right .75rem center/8px 10px no-repeat,#fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e") center right 1.75rem/calc(.75em + .375rem) calc(.75em + .375rem) no-repeat}.custom-select.is-invalid:focus,.was-validated .custom-select:invalid:focus{border-color:#dc3545;box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}.form-check-input.is-invalid~.form-check-label,.was-validated .form-check-input:invalid~.form-check-label{color:#dc3545}.form-check-input.is-invalid~.invalid-feedback,.form-check-input.is-invalid~.invalid-tooltip,.was-validated .form-check-input:invalid~.invalid-feedback,.was-validated .form-check-input:invalid~.invalid-tooltip{display:block}.custom-control-input.is-invalid~.custom-control-label,.was-validated .custom-control-input:invalid~.custom-control-label{color:#dc3545}.custom-control-input.is-invalid~.custom-control-label::before,.was-validated .custom-control-input:invalid~.custom-control-label::before{border-color:#dc3545}.custom-control-input.is-invalid:checked~.custom-control-label::before,.was-validated .custom-control-input:invalid:checked~.custom-control-label::before{border-color:#e4606d;background-color:#e4606d}.custom-control-input.is-invalid:focus~.custom-control-label::before,.was-validated .custom-control-input:invalid:focus~.custom-control-label::before{box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}.custom-control-input.is-invalid:focus:not(:checked)~.custom-control-label::before,.was-validated .custom-control-input:invalid:focus:not(:checked)~.custom-control-label::before{border-color:#dc3545}.custom-file-input.is-invalid~.custom-file-label,.was-validated .custom-file-input:invalid~.custom-file-label{border-color:#dc3545}.custom-file-input.is-invalid:focus~.custom-file-label,.was-validated .custom-file-input:invalid:focus~.custom-file-label{border-color:#dc3545;box-shadow:0 0 0 .2rem rgba(220,53,69,.25)}.form-inline{display:-ms-flexbox;display:flex;-ms-flex-flow:row wrap;flex-flow:row wrap;-ms-flex-align:center;align-items:center}.form-inline .form-check{width:100%}@media (min-width:576px){.form-inline label{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;margin-bottom:0}.form-inline .form-group{display:-ms-flexbox;display:flex;-ms-flex:0 0 auto;flex:0 0 auto;-ms-flex-flow:row wrap;flex-flow:row wrap;-ms-flex-align:center;align-items:center;margin-bottom:0}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-plaintext{display:inline-block}.form-inline .custom-select,.form-inline .input-group{width:auto}.form-inline .form-check{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;width:auto;padding-left:0}.form-inline .form-check-input{position:relative;-ms-flex-negative:0;flex-shrink:0;margin-top:0;margin-right:.25rem;margin-left:0}.form-inline .custom-control{-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center}.form-inline .custom-control-label{margin-bottom:0}}.btn{display:inline-block;font-weight:400;color:#212529;text-align:center;vertical-align:middle;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding:.375rem .75rem;font-size:1rem;line-height:1.5;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.btn{transition:none}}.btn:hover{color:#212529;text-decoration:none}.btn.focus,.btn:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.btn.disabled,.btn:disabled{opacity:.65}.btn:not(:disabled):not(.disabled){cursor:pointer}a.btn.disabled,fieldset:disabled a.btn{pointer-events:none}.btn-primary{color:#fff;background-color:#007bff;border-color:#007bff}.btn-primary:hover{color:#fff;background-color:#0069d9;border-color:#0062cc}.btn-primary.focus,.btn-primary:focus{color:#fff;background-color:#0069d9;border-color:#0062cc;box-shadow:0 0 0 .2rem rgba(38,143,255,.5)}.btn-primary.disabled,.btn-primary:disabled{color:#fff;background-color:#007bff;border-color:#007bff}.btn-primary:not(:disabled):not(.disabled).active,.btn-primary:not(:disabled):not(.disabled):active,.show>.btn-primary.dropdown-toggle{color:#fff;background-color:#0062cc;border-color:#005cbf}.btn-primary:not(:disabled):not(.disabled).active:focus,.btn-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-primary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(38,143,255,.5)}.btn-secondary{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:hover{color:#fff;background-color:#5a6268;border-color:#545b62}.btn-secondary.focus,.btn-secondary:focus{color:#fff;background-color:#5a6268;border-color:#545b62;box-shadow:0 0 0 .2rem rgba(130,138,145,.5)}.btn-secondary.disabled,.btn-secondary:disabled{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-secondary:not(:disabled):not(.disabled).active,.btn-secondary:not(:disabled):not(.disabled):active,.show>.btn-secondary.dropdown-toggle{color:#fff;background-color:#545b62;border-color:#4e555b}.btn-secondary:not(:disabled):not(.disabled).active:focus,.btn-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(130,138,145,.5)}.btn-success{color:#fff;background-color:#28a745;border-color:#28a745}.btn-success:hover{color:#fff;background-color:#218838;border-color:#1e7e34}.btn-success.focus,.btn-success:focus{color:#fff;background-color:#218838;border-color:#1e7e34;box-shadow:0 0 0 .2rem rgba(72,180,97,.5)}.btn-success.disabled,.btn-success:disabled{color:#fff;background-color:#28a745;border-color:#28a745}.btn-success:not(:disabled):not(.disabled).active,.btn-success:not(:disabled):not(.disabled):active,.show>.btn-success.dropdown-toggle{color:#fff;background-color:#1e7e34;border-color:#1c7430}.btn-success:not(:disabled):not(.disabled).active:focus,.btn-success:not(:disabled):not(.disabled):active:focus,.show>.btn-success.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(72,180,97,.5)}.btn-info{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-info:hover{color:#fff;background-color:#138496;border-color:#117a8b}.btn-info.focus,.btn-info:focus{color:#fff;background-color:#138496;border-color:#117a8b;box-shadow:0 0 0 .2rem rgba(58,176,195,.5)}.btn-info.disabled,.btn-info:disabled{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-info:not(:disabled):not(.disabled).active,.btn-info:not(:disabled):not(.disabled):active,.show>.btn-info.dropdown-toggle{color:#fff;background-color:#117a8b;border-color:#10707f}.btn-info:not(:disabled):not(.disabled).active:focus,.btn-info:not(:disabled):not(.disabled):active:focus,.show>.btn-info.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(58,176,195,.5)}.btn-warning{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-warning:hover{color:#212529;background-color:#e0a800;border-color:#d39e00}.btn-warning.focus,.btn-warning:focus{color:#212529;background-color:#e0a800;border-color:#d39e00;box-shadow:0 0 0 .2rem rgba(222,170,12,.5)}.btn-warning.disabled,.btn-warning:disabled{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-warning:not(:disabled):not(.disabled).active,.btn-warning:not(:disabled):not(.disabled):active,.show>.btn-warning.dropdown-toggle{color:#212529;background-color:#d39e00;border-color:#c69500}.btn-warning:not(:disabled):not(.disabled).active:focus,.btn-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-warning.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(222,170,12,.5)}.btn-danger{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-danger:hover{color:#fff;background-color:#c82333;border-color:#bd2130}.btn-danger.focus,.btn-danger:focus{color:#fff;background-color:#c82333;border-color:#bd2130;box-shadow:0 0 0 .2rem rgba(225,83,97,.5)}.btn-danger.disabled,.btn-danger:disabled{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-danger:not(:disabled):not(.disabled).active,.btn-danger:not(:disabled):not(.disabled):active,.show>.btn-danger.dropdown-toggle{color:#fff;background-color:#bd2130;border-color:#b21f2d}.btn-danger:not(:disabled):not(.disabled).active:focus,.btn-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-danger.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(225,83,97,.5)}.btn-light{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-light:hover{color:#212529;background-color:#e2e6ea;border-color:#dae0e5}.btn-light.focus,.btn-light:focus{color:#212529;background-color:#e2e6ea;border-color:#dae0e5;box-shadow:0 0 0 .2rem rgba(216,217,219,.5)}.btn-light.disabled,.btn-light:disabled{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-light:not(:disabled):not(.disabled).active,.btn-light:not(:disabled):not(.disabled):active,.show>.btn-light.dropdown-toggle{color:#212529;background-color:#dae0e5;border-color:#d3d9df}.btn-light:not(:disabled):not(.disabled).active:focus,.btn-light:not(:disabled):not(.disabled):active:focus,.show>.btn-light.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(216,217,219,.5)}.btn-dark{color:#fff;background-color:#343a40;border-color:#343a40}.btn-dark:hover{color:#fff;background-color:#23272b;border-color:#1d2124}.btn-dark.focus,.btn-dark:focus{color:#fff;background-color:#23272b;border-color:#1d2124;box-shadow:0 0 0 .2rem rgba(82,88,93,.5)}.btn-dark.disabled,.btn-dark:disabled{color:#fff;background-color:#343a40;border-color:#343a40}.btn-dark:not(:disabled):not(.disabled).active,.btn-dark:not(:disabled):not(.disabled):active,.show>.btn-dark.dropdown-toggle{color:#fff;background-color:#1d2124;border-color:#171a1d}.btn-dark:not(:disabled):not(.disabled).active:focus,.btn-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-dark.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(82,88,93,.5)}.btn-outline-primary{color:#007bff;border-color:#007bff}.btn-outline-primary:hover{color:#fff;background-color:#007bff;border-color:#007bff}.btn-outline-primary.focus,.btn-outline-primary:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-outline-primary.disabled,.btn-outline-primary:disabled{color:#007bff;background-color:transparent}.btn-outline-primary:not(:disabled):not(.disabled).active,.btn-outline-primary:not(:disabled):not(.disabled):active,.show>.btn-outline-primary.dropdown-toggle{color:#fff;background-color:#007bff;border-color:#007bff}.btn-outline-primary:not(:disabled):not(.disabled).active:focus,.btn-outline-primary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-primary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.btn-outline-secondary{color:#6c757d;border-color:#6c757d}.btn-outline-secondary:hover{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-outline-secondary.focus,.btn-outline-secondary:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-outline-secondary.disabled,.btn-outline-secondary:disabled{color:#6c757d;background-color:transparent}.btn-outline-secondary:not(:disabled):not(.disabled).active,.btn-outline-secondary:not(:disabled):not(.disabled):active,.show>.btn-outline-secondary.dropdown-toggle{color:#fff;background-color:#6c757d;border-color:#6c757d}.btn-outline-secondary:not(:disabled):not(.disabled).active:focus,.btn-outline-secondary:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-secondary.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.btn-outline-success{color:#28a745;border-color:#28a745}.btn-outline-success:hover{color:#fff;background-color:#28a745;border-color:#28a745}.btn-outline-success.focus,.btn-outline-success:focus{box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-outline-success.disabled,.btn-outline-success:disabled{color:#28a745;background-color:transparent}.btn-outline-success:not(:disabled):not(.disabled).active,.btn-outline-success:not(:disabled):not(.disabled):active,.show>.btn-outline-success.dropdown-toggle{color:#fff;background-color:#28a745;border-color:#28a745}.btn-outline-success:not(:disabled):not(.disabled).active:focus,.btn-outline-success:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-success.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.btn-outline-info{color:#17a2b8;border-color:#17a2b8}.btn-outline-info:hover{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-outline-info.focus,.btn-outline-info:focus{box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.btn-outline-info.disabled,.btn-outline-info:disabled{color:#17a2b8;background-color:transparent}.btn-outline-info:not(:disabled):not(.disabled).active,.btn-outline-info:not(:disabled):not(.disabled):active,.show>.btn-outline-info.dropdown-toggle{color:#fff;background-color:#17a2b8;border-color:#17a2b8}.btn-outline-info:not(:disabled):not(.disabled).active:focus,.btn-outline-info:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-info.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.btn-outline-warning{color:#ffc107;border-color:#ffc107}.btn-outline-warning:hover{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-outline-warning.focus,.btn-outline-warning:focus{box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.btn-outline-warning.disabled,.btn-outline-warning:disabled{color:#ffc107;background-color:transparent}.btn-outline-warning:not(:disabled):not(.disabled).active,.btn-outline-warning:not(:disabled):not(.disabled):active,.show>.btn-outline-warning.dropdown-toggle{color:#212529;background-color:#ffc107;border-color:#ffc107}.btn-outline-warning:not(:disabled):not(.disabled).active:focus,.btn-outline-warning:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-warning.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.btn-outline-danger{color:#dc3545;border-color:#dc3545}.btn-outline-danger:hover{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-outline-danger.focus,.btn-outline-danger:focus{box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.btn-outline-danger.disabled,.btn-outline-danger:disabled{color:#dc3545;background-color:transparent}.btn-outline-danger:not(:disabled):not(.disabled).active,.btn-outline-danger:not(:disabled):not(.disabled):active,.show>.btn-outline-danger.dropdown-toggle{color:#fff;background-color:#dc3545;border-color:#dc3545}.btn-outline-danger:not(:disabled):not(.disabled).active:focus,.btn-outline-danger:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-danger.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.btn-outline-light{color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light:hover{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light.focus,.btn-outline-light:focus{box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-outline-light.disabled,.btn-outline-light:disabled{color:#f8f9fa;background-color:transparent}.btn-outline-light:not(:disabled):not(.disabled).active,.btn-outline-light:not(:disabled):not(.disabled):active,.show>.btn-outline-light.dropdown-toggle{color:#212529;background-color:#f8f9fa;border-color:#f8f9fa}.btn-outline-light:not(:disabled):not(.disabled).active:focus,.btn-outline-light:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-light.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.btn-outline-dark{color:#343a40;border-color:#343a40}.btn-outline-dark:hover{color:#fff;background-color:#343a40;border-color:#343a40}.btn-outline-dark.focus,.btn-outline-dark:focus{box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.btn-outline-dark.disabled,.btn-outline-dark:disabled{color:#343a40;background-color:transparent}.btn-outline-dark:not(:disabled):not(.disabled).active,.btn-outline-dark:not(:disabled):not(.disabled):active,.show>.btn-outline-dark.dropdown-toggle{color:#fff;background-color:#343a40;border-color:#343a40}.btn-outline-dark:not(:disabled):not(.disabled).active:focus,.btn-outline-dark:not(:disabled):not(.disabled):active:focus,.show>.btn-outline-dark.dropdown-toggle:focus{box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.btn-link{font-weight:400;color:#007bff;text-decoration:none}.btn-link:hover{color:#0056b3;text-decoration:underline}.btn-link.focus,.btn-link:focus{text-decoration:underline}.btn-link.disabled,.btn-link:disabled{color:#6c757d;pointer-events:none}.btn-group-lg>.btn,.btn-lg{padding:.5rem 1rem;font-size:1.25rem;line-height:1.5;border-radius:.3rem}.btn-group-sm>.btn,.btn-sm{padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem}.btn-block{display:block;width:100%}.btn-block+.btn-block{margin-top:.5rem}input[type=button].btn-block,input[type=reset].btn-block,input[type=submit].btn-block{width:100%}.fade{transition:opacity .15s linear}@media (prefers-reduced-motion:reduce){.fade{transition:none}}.fade:not(.show){opacity:0}.collapse:not(.show){display:none}.collapsing{position:relative;height:0;overflow:hidden;transition:height .35s ease}@media (prefers-reduced-motion:reduce){.collapsing{transition:none}}.dropdown,.dropleft,.dropright,.dropup{position:relative}.dropdown-toggle{white-space:nowrap}.dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid;border-right:.3em solid transparent;border-bottom:0;border-left:.3em solid transparent}.dropdown-toggle:empty::after{margin-left:0}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding:.5rem 0;margin:.125rem 0 0;font-size:1rem;color:#212529;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);border-radius:.25rem}.dropdown-menu-left{right:auto;left:0}.dropdown-menu-right{right:0;left:auto}@media (min-width:576px){.dropdown-menu-sm-left{right:auto;left:0}.dropdown-menu-sm-right{right:0;left:auto}}@media (min-width:768px){.dropdown-menu-md-left{right:auto;left:0}.dropdown-menu-md-right{right:0;left:auto}}@media (min-width:992px){.dropdown-menu-lg-left{right:auto;left:0}.dropdown-menu-lg-right{right:0;left:auto}}@media (min-width:1200px){.dropdown-menu-xl-left{right:auto;left:0}.dropdown-menu-xl-right{right:0;left:auto}}.dropup .dropdown-menu{top:auto;bottom:100%;margin-top:0;margin-bottom:.125rem}.dropup .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:0;border-right:.3em solid transparent;border-bottom:.3em solid;border-left:.3em solid transparent}.dropup .dropdown-toggle:empty::after{margin-left:0}.dropright .dropdown-menu{top:0;right:auto;left:100%;margin-top:0;margin-left:.125rem}.dropright .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:0;border-bottom:.3em solid transparent;border-left:.3em solid}.dropright .dropdown-toggle:empty::after{margin-left:0}.dropright .dropdown-toggle::after{vertical-align:0}.dropleft .dropdown-menu{top:0;right:100%;left:auto;margin-top:0;margin-right:.125rem}.dropleft .dropdown-toggle::after{display:inline-block;margin-left:.255em;vertical-align:.255em;content:""}.dropleft .dropdown-toggle::after{display:none}.dropleft .dropdown-toggle::before{display:inline-block;margin-right:.255em;vertical-align:.255em;content:"";border-top:.3em solid transparent;border-right:.3em solid;border-bottom:.3em solid transparent}.dropleft .dropdown-toggle:empty::after{margin-left:0}.dropleft .dropdown-toggle::before{vertical-align:0}.dropdown-menu[x-placement^=bottom],.dropdown-menu[x-placement^=left],.dropdown-menu[x-placement^=right],.dropdown-menu[x-placement^=top]{right:auto;bottom:auto}.dropdown-divider{height:0;margin:.5rem 0;overflow:hidden;border-top:1px solid #e9ecef}.dropdown-item{display:block;width:100%;padding:.25rem 1.5rem;clear:both;font-weight:400;color:#212529;text-align:inherit;white-space:nowrap;background-color:transparent;border:0}.dropdown-item:focus,.dropdown-item:hover{color:#16181b;text-decoration:none;background-color:#e9ecef}.dropdown-item.active,.dropdown-item:active{color:#fff;text-decoration:none;background-color:#007bff}.dropdown-item.disabled,.dropdown-item:disabled{color:#adb5bd;pointer-events:none;background-color:transparent}.dropdown-menu.show{display:block}.dropdown-header{display:block;padding:.5rem 1.5rem;margin-bottom:0;font-size:.875rem;color:#6c757d;white-space:nowrap}.dropdown-item-text{display:block;padding:.25rem 1.5rem;color:#212529}.btn-group,.btn-group-vertical{position:relative;display:-ms-inline-flexbox;display:inline-flex;vertical-align:middle}.btn-group-vertical>.btn,.btn-group>.btn{position:relative;-ms-flex:1 1 auto;flex:1 1 auto}.btn-group-vertical>.btn:hover,.btn-group>.btn:hover{z-index:1}.btn-group-vertical>.btn.active,.btn-group-vertical>.btn:active,.btn-group-vertical>.btn:focus,.btn-group>.btn.active,.btn-group>.btn:active,.btn-group>.btn:focus{z-index:1}.btn-toolbar{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-pack:start;justify-content:flex-start}.btn-toolbar .input-group{width:auto}.btn-group>.btn-group:not(:first-child),.btn-group>.btn:not(:first-child){margin-left:-1px}.btn-group>.btn-group:not(:last-child)>.btn,.btn-group>.btn:not(:last-child):not(.dropdown-toggle){border-top-right-radius:0;border-bottom-right-radius:0}.btn-group>.btn-group:not(:first-child)>.btn,.btn-group>.btn:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.dropdown-toggle-split{padding-right:.5625rem;padding-left:.5625rem}.dropdown-toggle-split::after,.dropright .dropdown-toggle-split::after,.dropup .dropdown-toggle-split::after{margin-left:0}.dropleft .dropdown-toggle-split::before{margin-right:0}.btn-group-sm>.btn+.dropdown-toggle-split,.btn-sm+.dropdown-toggle-split{padding-right:.375rem;padding-left:.375rem}.btn-group-lg>.btn+.dropdown-toggle-split,.btn-lg+.dropdown-toggle-split{padding-right:.75rem;padding-left:.75rem}.btn-group-vertical{-ms-flex-direction:column;flex-direction:column;-ms-flex-align:start;align-items:flex-start;-ms-flex-pack:center;justify-content:center}.btn-group-vertical>.btn,.btn-group-vertical>.btn-group{width:100%}.btn-group-vertical>.btn-group:not(:first-child),.btn-group-vertical>.btn:not(:first-child){margin-top:-1px}.btn-group-vertical>.btn-group:not(:last-child)>.btn,.btn-group-vertical>.btn:not(:last-child):not(.dropdown-toggle){border-bottom-right-radius:0;border-bottom-left-radius:0}.btn-group-vertical>.btn-group:not(:first-child)>.btn,.btn-group-vertical>.btn:not(:first-child){border-top-left-radius:0;border-top-right-radius:0}.btn-group-toggle>.btn,.btn-group-toggle>.btn-group>.btn{margin-bottom:0}.btn-group-toggle>.btn input[type=checkbox],.btn-group-toggle>.btn input[type=radio],.btn-group-toggle>.btn-group>.btn input[type=checkbox],.btn-group-toggle>.btn-group>.btn input[type=radio]{position:absolute;clip:rect(0,0,0,0);pointer-events:none}.input-group{position:relative;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:stretch;align-items:stretch;width:100%}.input-group>.custom-file,.input-group>.custom-select,.input-group>.form-control,.input-group>.form-control-plaintext{position:relative;-ms-flex:1 1 auto;flex:1 1 auto;width:1%;min-width:0;margin-bottom:0}.input-group>.custom-file+.custom-file,.input-group>.custom-file+.custom-select,.input-group>.custom-file+.form-control,.input-group>.custom-select+.custom-file,.input-group>.custom-select+.custom-select,.input-group>.custom-select+.form-control,.input-group>.form-control+.custom-file,.input-group>.form-control+.custom-select,.input-group>.form-control+.form-control,.input-group>.form-control-plaintext+.custom-file,.input-group>.form-control-plaintext+.custom-select,.input-group>.form-control-plaintext+.form-control{margin-left:-1px}.input-group>.custom-file .custom-file-input:focus~.custom-file-label,.input-group>.custom-select:focus,.input-group>.form-control:focus{z-index:3}.input-group>.custom-file .custom-file-input:focus{z-index:4}.input-group>.custom-select:not(:first-child),.input-group>.form-control:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.input-group>.custom-file{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center}.input-group>.custom-file:not(:first-child) .custom-file-label,.input-group>.custom-file:not(:last-child) .custom-file-label{border-top-left-radius:0;border-bottom-left-radius:0}.input-group:not(.has-validation)>.custom-file:not(:last-child) .custom-file-label::after,.input-group:not(.has-validation)>.custom-select:not(:last-child),.input-group:not(.has-validation)>.form-control:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}.input-group.has-validation>.custom-file:nth-last-child(n+3) .custom-file-label::after,.input-group.has-validation>.custom-select:nth-last-child(n+3),.input-group.has-validation>.form-control:nth-last-child(n+3){border-top-right-radius:0;border-bottom-right-radius:0}.input-group-append,.input-group-prepend{display:-ms-flexbox;display:flex}.input-group-append .btn,.input-group-prepend .btn{position:relative;z-index:2}.input-group-append .btn:focus,.input-group-prepend .btn:focus{z-index:3}.input-group-append .btn+.btn,.input-group-append .btn+.input-group-text,.input-group-append .input-group-text+.btn,.input-group-append .input-group-text+.input-group-text,.input-group-prepend .btn+.btn,.input-group-prepend .btn+.input-group-text,.input-group-prepend .input-group-text+.btn,.input-group-prepend .input-group-text+.input-group-text{margin-left:-1px}.input-group-prepend{margin-right:-1px}.input-group-append{margin-left:-1px}.input-group-text{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;padding:.375rem .75rem;margin-bottom:0;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;text-align:center;white-space:nowrap;background-color:#e9ecef;border:1px solid #ced4da;border-radius:.25rem}.input-group-text input[type=checkbox],.input-group-text input[type=radio]{margin-top:0}.input-group-lg>.custom-select,.input-group-lg>.form-control:not(textarea){height:calc(1.5em + 1rem + 2px)}.input-group-lg>.custom-select,.input-group-lg>.form-control,.input-group-lg>.input-group-append>.btn,.input-group-lg>.input-group-append>.input-group-text,.input-group-lg>.input-group-prepend>.btn,.input-group-lg>.input-group-prepend>.input-group-text{padding:.5rem 1rem;font-size:1.25rem;line-height:1.5;border-radius:.3rem}.input-group-sm>.custom-select,.input-group-sm>.form-control:not(textarea){height:calc(1.5em + .5rem + 2px)}.input-group-sm>.custom-select,.input-group-sm>.form-control,.input-group-sm>.input-group-append>.btn,.input-group-sm>.input-group-append>.input-group-text,.input-group-sm>.input-group-prepend>.btn,.input-group-sm>.input-group-prepend>.input-group-text{padding:.25rem .5rem;font-size:.875rem;line-height:1.5;border-radius:.2rem}.input-group-lg>.custom-select,.input-group-sm>.custom-select{padding-right:1.75rem}.input-group.has-validation>.input-group-append:nth-last-child(n+3)>.btn,.input-group.has-validation>.input-group-append:nth-last-child(n+3)>.input-group-text,.input-group:not(.has-validation)>.input-group-append:not(:last-child)>.btn,.input-group:not(.has-validation)>.input-group-append:not(:last-child)>.input-group-text,.input-group>.input-group-append:last-child>.btn:not(:last-child):not(.dropdown-toggle),.input-group>.input-group-append:last-child>.input-group-text:not(:last-child),.input-group>.input-group-prepend>.btn,.input-group>.input-group-prepend>.input-group-text{border-top-right-radius:0;border-bottom-right-radius:0}.input-group>.input-group-append>.btn,.input-group>.input-group-append>.input-group-text,.input-group>.input-group-prepend:first-child>.btn:not(:first-child),.input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child),.input-group>.input-group-prepend:not(:first-child)>.btn,.input-group>.input-group-prepend:not(:first-child)>.input-group-text{border-top-left-radius:0;border-bottom-left-radius:0}.custom-control{position:relative;z-index:1;display:block;min-height:1.5rem;padding-left:1.5rem;-webkit-print-color-adjust:exact;color-adjust:exact}.custom-control-inline{display:-ms-inline-flexbox;display:inline-flex;margin-right:1rem}.custom-control-input{position:absolute;left:0;z-index:-1;width:1rem;height:1.25rem;opacity:0}.custom-control-input:checked~.custom-control-label::before{color:#fff;border-color:#007bff;background-color:#007bff}.custom-control-input:focus~.custom-control-label::before{box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.custom-control-input:focus:not(:checked)~.custom-control-label::before{border-color:#80bdff}.custom-control-input:not(:disabled):active~.custom-control-label::before{color:#fff;background-color:#b3d7ff;border-color:#b3d7ff}.custom-control-input:disabled~.custom-control-label,.custom-control-input[disabled]~.custom-control-label{color:#6c757d}.custom-control-input:disabled~.custom-control-label::before,.custom-control-input[disabled]~.custom-control-label::before{background-color:#e9ecef}.custom-control-label{position:relative;margin-bottom:0;vertical-align:top}.custom-control-label::before{position:absolute;top:.25rem;left:-1.5rem;display:block;width:1rem;height:1rem;pointer-events:none;content:"";background-color:#fff;border:#adb5bd solid 1px}.custom-control-label::after{position:absolute;top:.25rem;left:-1.5rem;display:block;width:1rem;height:1rem;content:"";background:50%/50% 50% no-repeat}.custom-checkbox .custom-control-label::before{border-radius:.25rem}.custom-checkbox .custom-control-input:checked~.custom-control-label::after{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26l2.974 2.99L8 2.193z'/%3e%3c/svg%3e")}.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::before{border-color:#007bff;background-color:#007bff}.custom-checkbox .custom-control-input:indeterminate~.custom-control-label::after{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e")}.custom-checkbox .custom-control-input:disabled:checked~.custom-control-label::before{background-color:rgba(0,123,255,.5)}.custom-checkbox .custom-control-input:disabled:indeterminate~.custom-control-label::before{background-color:rgba(0,123,255,.5)}.custom-radio .custom-control-label::before{border-radius:50%}.custom-radio .custom-control-input:checked~.custom-control-label::after{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e")}.custom-radio .custom-control-input:disabled:checked~.custom-control-label::before{background-color:rgba(0,123,255,.5)}.custom-switch{padding-left:2.25rem}.custom-switch .custom-control-label::before{left:-2.25rem;width:1.75rem;pointer-events:all;border-radius:.5rem}.custom-switch .custom-control-label::after{top:calc(.25rem + 2px);left:calc(-2.25rem + 2px);width:calc(1rem - 4px);height:calc(1rem - 4px);background-color:#adb5bd;border-radius:.5rem;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-transform .15s ease-in-out;transition:transform .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:transform .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-transform .15s ease-in-out}@media (prefers-reduced-motion:reduce){.custom-switch .custom-control-label::after{transition:none}}.custom-switch .custom-control-input:checked~.custom-control-label::after{background-color:#fff;-webkit-transform:translateX(.75rem);transform:translateX(.75rem)}.custom-switch .custom-control-input:disabled:checked~.custom-control-label::before{background-color:rgba(0,123,255,.5)}.custom-select{display:inline-block;width:100%;height:calc(1.5em + .75rem + 2px);padding:.375rem 1.75rem .375rem .75rem;font-size:1rem;font-weight:400;line-height:1.5;color:#495057;vertical-align:middle;background:#fff url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") right .75rem center/8px 10px no-repeat;border:1px solid #ced4da;border-radius:.25rem;-webkit-appearance:none;-moz-appearance:none;appearance:none}.custom-select:focus{border-color:#80bdff;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.custom-select:focus::-ms-value{color:#495057;background-color:#fff}.custom-select[multiple],.custom-select[size]:not([size="1"]){height:auto;padding-right:.75rem;background-image:none}.custom-select:disabled{color:#6c757d;background-color:#e9ecef}.custom-select::-ms-expand{display:none}.custom-select:-moz-focusring{color:transparent;text-shadow:0 0 0 #495057}.custom-select-sm{height:calc(1.5em + .5rem + 2px);padding-top:.25rem;padding-bottom:.25rem;padding-left:.5rem;font-size:.875rem}.custom-select-lg{height:calc(1.5em + 1rem + 2px);padding-top:.5rem;padding-bottom:.5rem;padding-left:1rem;font-size:1.25rem}.custom-file{position:relative;display:inline-block;width:100%;height:calc(1.5em + .75rem + 2px);margin-bottom:0}.custom-file-input{position:relative;z-index:2;width:100%;height:calc(1.5em + .75rem + 2px);margin:0;overflow:hidden;opacity:0}.custom-file-input:focus~.custom-file-label{border-color:#80bdff;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.custom-file-input:disabled~.custom-file-label,.custom-file-input[disabled]~.custom-file-label{background-color:#e9ecef}.custom-file-input:lang(en)~.custom-file-label::after{content:"Browse"}.custom-file-input~.custom-file-label[data-browse]::after{content:attr(data-browse)}.custom-file-label{position:absolute;top:0;right:0;left:0;z-index:1;height:calc(1.5em + .75rem + 2px);padding:.375rem .75rem;overflow:hidden;font-weight:400;line-height:1.5;color:#495057;background-color:#fff;border:1px solid #ced4da;border-radius:.25rem}.custom-file-label::after{position:absolute;top:0;right:0;bottom:0;z-index:3;display:block;height:calc(1.5em + .75rem);padding:.375rem .75rem;line-height:1.5;color:#495057;content:"Browse";background-color:#e9ecef;border-left:inherit;border-radius:0 .25rem .25rem 0}.custom-range{width:100%;height:1.4rem;padding:0;background-color:transparent;-webkit-appearance:none;-moz-appearance:none;appearance:none}.custom-range:focus{outline:0}.custom-range:focus::-webkit-slider-thumb{box-shadow:0 0 0 1px #fff,0 0 0 .2rem rgba(0,123,255,.25)}.custom-range:focus::-moz-range-thumb{box-shadow:0 0 0 1px #fff,0 0 0 .2rem rgba(0,123,255,.25)}.custom-range:focus::-ms-thumb{box-shadow:0 0 0 1px #fff,0 0 0 .2rem rgba(0,123,255,.25)}.custom-range::-moz-focus-outer{border:0}.custom-range::-webkit-slider-thumb{width:1rem;height:1rem;margin-top:-.25rem;background-color:#007bff;border:0;border-radius:1rem;-webkit-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-webkit-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.custom-range::-webkit-slider-thumb{-webkit-transition:none;transition:none}}.custom-range::-webkit-slider-thumb:active{background-color:#b3d7ff}.custom-range::-webkit-slider-runnable-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.custom-range::-moz-range-thumb{width:1rem;height:1rem;background-color:#007bff;border:0;border-radius:1rem;-moz-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;-moz-appearance:none;appearance:none}@media (prefers-reduced-motion:reduce){.custom-range::-moz-range-thumb{-moz-transition:none;transition:none}}.custom-range::-moz-range-thumb:active{background-color:#b3d7ff}.custom-range::-moz-range-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:#dee2e6;border-color:transparent;border-radius:1rem}.custom-range::-ms-thumb{width:1rem;height:1rem;margin-top:0;margin-right:.2rem;margin-left:.2rem;background-color:#007bff;border:0;border-radius:1rem;-ms-transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;appearance:none}@media (prefers-reduced-motion:reduce){.custom-range::-ms-thumb{-ms-transition:none;transition:none}}.custom-range::-ms-thumb:active{background-color:#b3d7ff}.custom-range::-ms-track{width:100%;height:.5rem;color:transparent;cursor:pointer;background-color:transparent;border-color:transparent;border-width:.5rem}.custom-range::-ms-fill-lower{background-color:#dee2e6;border-radius:1rem}.custom-range::-ms-fill-upper{margin-right:15px;background-color:#dee2e6;border-radius:1rem}.custom-range:disabled::-webkit-slider-thumb{background-color:#adb5bd}.custom-range:disabled::-webkit-slider-runnable-track{cursor:default}.custom-range:disabled::-moz-range-thumb{background-color:#adb5bd}.custom-range:disabled::-moz-range-track{cursor:default}.custom-range:disabled::-ms-thumb{background-color:#adb5bd}.custom-control-label::before,.custom-file-label,.custom-select{transition:background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.custom-control-label::before,.custom-file-label,.custom-select{transition:none}}.nav{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.nav-link{display:block;padding:.5rem 1rem}.nav-link:focus,.nav-link:hover{text-decoration:none}.nav-link.disabled{color:#6c757d;pointer-events:none;cursor:default}.nav-tabs{border-bottom:1px solid #dee2e6}.nav-tabs .nav-link{margin-bottom:-1px;border:1px solid transparent;border-top-left-radius:.25rem;border-top-right-radius:.25rem}.nav-tabs .nav-link:focus,.nav-tabs .nav-link:hover{border-color:#e9ecef #e9ecef #dee2e6}.nav-tabs .nav-link.disabled{color:#6c757d;background-color:transparent;border-color:transparent}.nav-tabs .nav-item.show .nav-link,.nav-tabs .nav-link.active{color:#495057;background-color:#fff;border-color:#dee2e6 #dee2e6 #fff}.nav-tabs .dropdown-menu{margin-top:-1px;border-top-left-radius:0;border-top-right-radius:0}.nav-pills .nav-link{border-radius:.25rem}.nav-pills .nav-link.active,.nav-pills .show>.nav-link{color:#fff;background-color:#007bff}.nav-fill .nav-item,.nav-fill>.nav-link{-ms-flex:1 1 auto;flex:1 1 auto;text-align:center}.nav-justified .nav-item,.nav-justified>.nav-link{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;text-align:center}.tab-content>.tab-pane{display:none}.tab-content>.active{display:block}.navbar{position:relative;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;-ms-flex-pack:justify;justify-content:space-between;padding:.5rem 1rem}.navbar .container,.navbar .container-fluid,.navbar .container-lg,.navbar .container-md,.navbar .container-sm,.navbar .container-xl{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;-ms-flex-pack:justify;justify-content:space-between}.navbar-brand{display:inline-block;padding-top:.3125rem;padding-bottom:.3125rem;margin-right:1rem;font-size:1.25rem;line-height:inherit;white-space:nowrap}.navbar-brand:focus,.navbar-brand:hover{text-decoration:none}.navbar-nav{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .nav-link{padding-right:0;padding-left:0}.navbar-nav .dropdown-menu{position:static;float:none}.navbar-text{display:inline-block;padding-top:.5rem;padding-bottom:.5rem}.navbar-collapse{-ms-flex-preferred-size:100%;flex-basis:100%;-ms-flex-positive:1;flex-grow:1;-ms-flex-align:center;align-items:center}.navbar-toggler{padding:.25rem .75rem;font-size:1.25rem;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:.25rem}.navbar-toggler:focus,.navbar-toggler:hover{text-decoration:none}.navbar-toggler-icon{display:inline-block;width:1.5em;height:1.5em;vertical-align:middle;content:"";background:50%/100% 100% no-repeat}.navbar-nav-scroll{max-height:75vh;overflow-y:auto}@media (max-width:575.98px){.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid,.navbar-expand-sm>.container-lg,.navbar-expand-sm>.container-md,.navbar-expand-sm>.container-sm,.navbar-expand-sm>.container-xl{padding-right:0;padding-left:0}}@media (min-width:576px){.navbar-expand-sm{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-sm .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-sm .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-sm .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid,.navbar-expand-sm>.container-lg,.navbar-expand-sm>.container-md,.navbar-expand-sm>.container-sm,.navbar-expand-sm>.container-xl{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-sm .navbar-nav-scroll{overflow:visible}.navbar-expand-sm .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-sm .navbar-toggler{display:none}}@media (max-width:767.98px){.navbar-expand-md>.container,.navbar-expand-md>.container-fluid,.navbar-expand-md>.container-lg,.navbar-expand-md>.container-md,.navbar-expand-md>.container-sm,.navbar-expand-md>.container-xl{padding-right:0;padding-left:0}}@media (min-width:768px){.navbar-expand-md{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-md .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-md .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-md .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-md>.container,.navbar-expand-md>.container-fluid,.navbar-expand-md>.container-lg,.navbar-expand-md>.container-md,.navbar-expand-md>.container-sm,.navbar-expand-md>.container-xl{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-md .navbar-nav-scroll{overflow:visible}.navbar-expand-md .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-md .navbar-toggler{display:none}}@media (max-width:991.98px){.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid,.navbar-expand-lg>.container-lg,.navbar-expand-lg>.container-md,.navbar-expand-lg>.container-sm,.navbar-expand-lg>.container-xl{padding-right:0;padding-left:0}}@media (min-width:992px){.navbar-expand-lg{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-lg .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-lg .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-lg .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid,.navbar-expand-lg>.container-lg,.navbar-expand-lg>.container-md,.navbar-expand-lg>.container-sm,.navbar-expand-lg>.container-xl{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-lg .navbar-nav-scroll{overflow:visible}.navbar-expand-lg .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-lg .navbar-toggler{display:none}}@media (max-width:1199.98px){.navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid,.navbar-expand-xl>.container-lg,.navbar-expand-xl>.container-md,.navbar-expand-xl>.container-sm,.navbar-expand-xl>.container-xl{padding-right:0;padding-left:0}}@media (min-width:1200px){.navbar-expand-xl{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand-xl .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand-xl .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-xl .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid,.navbar-expand-xl>.container-lg,.navbar-expand-xl>.container-md,.navbar-expand-xl>.container-sm,.navbar-expand-xl>.container-xl{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand-xl .navbar-nav-scroll{overflow:visible}.navbar-expand-xl .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand-xl .navbar-toggler{display:none}}.navbar-expand{-ms-flex-flow:row nowrap;flex-flow:row nowrap;-ms-flex-pack:start;justify-content:flex-start}.navbar-expand>.container,.navbar-expand>.container-fluid,.navbar-expand>.container-lg,.navbar-expand>.container-md,.navbar-expand>.container-sm,.navbar-expand>.container-xl{padding-right:0;padding-left:0}.navbar-expand .navbar-nav{-ms-flex-direction:row;flex-direction:row}.navbar-expand .navbar-nav .dropdown-menu{position:absolute}.navbar-expand .navbar-nav .nav-link{padding-right:.5rem;padding-left:.5rem}.navbar-expand>.container,.navbar-expand>.container-fluid,.navbar-expand>.container-lg,.navbar-expand>.container-md,.navbar-expand>.container-sm,.navbar-expand>.container-xl{-ms-flex-wrap:nowrap;flex-wrap:nowrap}.navbar-expand .navbar-nav-scroll{overflow:visible}.navbar-expand .navbar-collapse{display:-ms-flexbox!important;display:flex!important;-ms-flex-preferred-size:auto;flex-basis:auto}.navbar-expand .navbar-toggler{display:none}.navbar-light .navbar-brand{color:rgba(0,0,0,.9)}.navbar-light .navbar-brand:focus,.navbar-light .navbar-brand:hover{color:rgba(0,0,0,.9)}.navbar-light .navbar-nav .nav-link{color:rgba(0,0,0,.5)}.navbar-light .navbar-nav .nav-link:focus,.navbar-light .navbar-nav .nav-link:hover{color:rgba(0,0,0,.7)}.navbar-light .navbar-nav .nav-link.disabled{color:rgba(0,0,0,.3)}.navbar-light .navbar-nav .active>.nav-link,.navbar-light .navbar-nav .nav-link.active,.navbar-light .navbar-nav .nav-link.show,.navbar-light .navbar-nav .show>.nav-link{color:rgba(0,0,0,.9)}.navbar-light .navbar-toggler{color:rgba(0,0,0,.5);border-color:rgba(0,0,0,.1)}.navbar-light .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.navbar-light .navbar-text{color:rgba(0,0,0,.5)}.navbar-light .navbar-text a{color:rgba(0,0,0,.9)}.navbar-light .navbar-text a:focus,.navbar-light .navbar-text a:hover{color:rgba(0,0,0,.9)}.navbar-dark .navbar-brand{color:#fff}.navbar-dark .navbar-brand:focus,.navbar-dark .navbar-brand:hover{color:#fff}.navbar-dark .navbar-nav .nav-link{color:rgba(255,255,255,.5)}.navbar-dark .navbar-nav .nav-link:focus,.navbar-dark .navbar-nav .nav-link:hover{color:rgba(255,255,255,.75)}.navbar-dark .navbar-nav .nav-link.disabled{color:rgba(255,255,255,.25)}.navbar-dark .navbar-nav .active>.nav-link,.navbar-dark .navbar-nav .nav-link.active,.navbar-dark .navbar-nav .nav-link.show,.navbar-dark .navbar-nav .show>.nav-link{color:#fff}.navbar-dark .navbar-toggler{color:rgba(255,255,255,.5);border-color:rgba(255,255,255,.1)}.navbar-dark .navbar-toggler-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")}.navbar-dark .navbar-text{color:rgba(255,255,255,.5)}.navbar-dark .navbar-text a{color:#fff}.navbar-dark .navbar-text a:focus,.navbar-dark .navbar-text a:hover{color:#fff}.card{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;min-width:0;word-wrap:break-word;background-color:#fff;background-clip:border-box;border:1px solid rgba(0,0,0,.125);border-radius:.25rem}.card>hr{margin-right:0;margin-left:0}.card>.list-group{border-top:inherit;border-bottom:inherit}.card>.list-group:first-child{border-top-width:0;border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card>.list-group:last-child{border-bottom-width:0;border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card>.card-header+.list-group,.card>.list-group+.card-footer{border-top:0}.card-body{-ms-flex:1 1 auto;flex:1 1 auto;min-height:1px;padding:1.25rem}.card-title{margin-bottom:.75rem}.card-subtitle{margin-top:-.375rem;margin-bottom:0}.card-text:last-child{margin-bottom:0}.card-link:hover{text-decoration:none}.card-link+.card-link{margin-left:1.25rem}.card-header{padding:.75rem 1.25rem;margin-bottom:0;background-color:rgba(0,0,0,.03);border-bottom:1px solid rgba(0,0,0,.125)}.card-header:first-child{border-radius:calc(.25rem - 1px) calc(.25rem - 1px) 0 0}.card-footer{padding:.75rem 1.25rem;background-color:rgba(0,0,0,.03);border-top:1px solid rgba(0,0,0,.125)}.card-footer:last-child{border-radius:0 0 calc(.25rem - 1px) calc(.25rem - 1px)}.card-header-tabs{margin-right:-.625rem;margin-bottom:-.75rem;margin-left:-.625rem;border-bottom:0}.card-header-pills{margin-right:-.625rem;margin-left:-.625rem}.card-img-overlay{position:absolute;top:0;right:0;bottom:0;left:0;padding:1.25rem;border-radius:calc(.25rem - 1px)}.card-img,.card-img-bottom,.card-img-top{-ms-flex-negative:0;flex-shrink:0;width:100%}.card-img,.card-img-top{border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.card-img,.card-img-bottom{border-bottom-right-radius:calc(.25rem - 1px);border-bottom-left-radius:calc(.25rem - 1px)}.card-deck .card{margin-bottom:15px}@media (min-width:576px){.card-deck{display:-ms-flexbox;display:flex;-ms-flex-flow:row wrap;flex-flow:row wrap;margin-right:-15px;margin-left:-15px}.card-deck .card{-ms-flex:1 0 0%;flex:1 0 0%;margin-right:15px;margin-bottom:0;margin-left:15px}}.card-group>.card{margin-bottom:15px}@media (min-width:576px){.card-group{display:-ms-flexbox;display:flex;-ms-flex-flow:row wrap;flex-flow:row wrap}.card-group>.card{-ms-flex:1 0 0%;flex:1 0 0%;margin-bottom:0}.card-group>.card+.card{margin-left:0;border-left:0}.card-group>.card:not(:last-child){border-top-right-radius:0;border-bottom-right-radius:0}.card-group>.card:not(:last-child) .card-header,.card-group>.card:not(:last-child) .card-img-top{border-top-right-radius:0}.card-group>.card:not(:last-child) .card-footer,.card-group>.card:not(:last-child) .card-img-bottom{border-bottom-right-radius:0}.card-group>.card:not(:first-child){border-top-left-radius:0;border-bottom-left-radius:0}.card-group>.card:not(:first-child) .card-header,.card-group>.card:not(:first-child) .card-img-top{border-top-left-radius:0}.card-group>.card:not(:first-child) .card-footer,.card-group>.card:not(:first-child) .card-img-bottom{border-bottom-left-radius:0}}.card-columns .card{margin-bottom:.75rem}@media (min-width:576px){.card-columns{-webkit-column-count:3;-moz-column-count:3;column-count:3;-webkit-column-gap:1.25rem;-moz-column-gap:1.25rem;column-gap:1.25rem;orphans:1;widows:1}.card-columns .card{display:inline-block;width:100%}}.accordion{overflow-anchor:none}.accordion>.card{overflow:hidden}.accordion>.card:not(:last-of-type){border-bottom:0;border-bottom-right-radius:0;border-bottom-left-radius:0}.accordion>.card:not(:first-of-type){border-top-left-radius:0;border-top-right-radius:0}.accordion>.card>.card-header{border-radius:0;margin-bottom:-1px}.breadcrumb{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;padding:.75rem 1rem;margin-bottom:1rem;list-style:none;background-color:#e9ecef;border-radius:.25rem}.breadcrumb-item+.breadcrumb-item{padding-left:.5rem}.breadcrumb-item+.breadcrumb-item::before{float:left;padding-right:.5rem;color:#6c757d;content:"/"}.breadcrumb-item+.breadcrumb-item:hover::before{text-decoration:underline}.breadcrumb-item+.breadcrumb-item:hover::before{text-decoration:none}.breadcrumb-item.active{color:#6c757d}.pagination{display:-ms-flexbox;display:flex;padding-left:0;list-style:none;border-radius:.25rem}.page-link{position:relative;display:block;padding:.5rem .75rem;margin-left:-1px;line-height:1.25;color:#007bff;background-color:#fff;border:1px solid #dee2e6}.page-link:hover{z-index:2;color:#0056b3;text-decoration:none;background-color:#e9ecef;border-color:#dee2e6}.page-link:focus{z-index:3;outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)}.page-item:first-child .page-link{margin-left:0;border-top-left-radius:.25rem;border-bottom-left-radius:.25rem}.page-item:last-child .page-link{border-top-right-radius:.25rem;border-bottom-right-radius:.25rem}.page-item.active .page-link{z-index:3;color:#fff;background-color:#007bff;border-color:#007bff}.page-item.disabled .page-link{color:#6c757d;pointer-events:none;cursor:auto;background-color:#fff;border-color:#dee2e6}.pagination-lg .page-link{padding:.75rem 1.5rem;font-size:1.25rem;line-height:1.5}.pagination-lg .page-item:first-child .page-link{border-top-left-radius:.3rem;border-bottom-left-radius:.3rem}.pagination-lg .page-item:last-child .page-link{border-top-right-radius:.3rem;border-bottom-right-radius:.3rem}.pagination-sm .page-link{padding:.25rem .5rem;font-size:.875rem;line-height:1.5}.pagination-sm .page-item:first-child .page-link{border-top-left-radius:.2rem;border-bottom-left-radius:.2rem}.pagination-sm .page-item:last-child .page-link{border-top-right-radius:.2rem;border-bottom-right-radius:.2rem}.badge{display:inline-block;padding:.25em .4em;font-size:75%;font-weight:700;line-height:1;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:.25rem;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out}@media (prefers-reduced-motion:reduce){.badge{transition:none}}a.badge:focus,a.badge:hover{text-decoration:none}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.badge-pill{padding-right:.6em;padding-left:.6em;border-radius:10rem}.badge-primary{color:#fff;background-color:#007bff}a.badge-primary:focus,a.badge-primary:hover{color:#fff;background-color:#0062cc}a.badge-primary.focus,a.badge-primary:focus{outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.5)}.badge-secondary{color:#fff;background-color:#6c757d}a.badge-secondary:focus,a.badge-secondary:hover{color:#fff;background-color:#545b62}a.badge-secondary.focus,a.badge-secondary:focus{outline:0;box-shadow:0 0 0 .2rem rgba(108,117,125,.5)}.badge-success{color:#fff;background-color:#28a745}a.badge-success:focus,a.badge-success:hover{color:#fff;background-color:#1e7e34}a.badge-success.focus,a.badge-success:focus{outline:0;box-shadow:0 0 0 .2rem rgba(40,167,69,.5)}.badge-info{color:#fff;background-color:#17a2b8}a.badge-info:focus,a.badge-info:hover{color:#fff;background-color:#117a8b}a.badge-info.focus,a.badge-info:focus{outline:0;box-shadow:0 0 0 .2rem rgba(23,162,184,.5)}.badge-warning{color:#212529;background-color:#ffc107}a.badge-warning:focus,a.badge-warning:hover{color:#212529;background-color:#d39e00}a.badge-warning.focus,a.badge-warning:focus{outline:0;box-shadow:0 0 0 .2rem rgba(255,193,7,.5)}.badge-danger{color:#fff;background-color:#dc3545}a.badge-danger:focus,a.badge-danger:hover{color:#fff;background-color:#bd2130}a.badge-danger.focus,a.badge-danger:focus{outline:0;box-shadow:0 0 0 .2rem rgba(220,53,69,.5)}.badge-light{color:#212529;background-color:#f8f9fa}a.badge-light:focus,a.badge-light:hover{color:#212529;background-color:#dae0e5}a.badge-light.focus,a.badge-light:focus{outline:0;box-shadow:0 0 0 .2rem rgba(248,249,250,.5)}.badge-dark{color:#fff;background-color:#343a40}a.badge-dark:focus,a.badge-dark:hover{color:#fff;background-color:#1d2124}a.badge-dark.focus,a.badge-dark:focus{outline:0;box-shadow:0 0 0 .2rem rgba(52,58,64,.5)}.jumbotron{padding:2rem 1rem;margin-bottom:2rem;background-color:#e9ecef;border-radius:.3rem}@media (min-width:576px){.jumbotron{padding:4rem 2rem}}.jumbotron-fluid{padding-right:0;padding-left:0;border-radius:0}.alert{position:relative;padding:.75rem 1.25rem;margin-bottom:1rem;border:1px solid transparent;border-radius:.25rem}.alert-heading{color:inherit}.alert-link{font-weight:700}.alert-dismissible{padding-right:4rem}.alert-dismissible .close{position:absolute;top:0;right:0;z-index:2;padding:.75rem 1.25rem;color:inherit}.alert-primary{color:#004085;background-color:#cce5ff;border-color:#b8daff}.alert-primary hr{border-top-color:#9fcdff}.alert-primary .alert-link{color:#002752}.alert-secondary{color:#383d41;background-color:#e2e3e5;border-color:#d6d8db}.alert-secondary hr{border-top-color:#c8cbcf}.alert-secondary .alert-link{color:#202326}.alert-success{color:#155724;background-color:#d4edda;border-color:#c3e6cb}.alert-success hr{border-top-color:#b1dfbb}.alert-success .alert-link{color:#0b2e13}.alert-info{color:#0c5460;background-color:#d1ecf1;border-color:#bee5eb}.alert-info hr{border-top-color:#abdde5}.alert-info .alert-link{color:#062c33}.alert-warning{color:#856404;background-color:#fff3cd;border-color:#ffeeba}.alert-warning hr{border-top-color:#ffe8a1}.alert-warning .alert-link{color:#533f03}.alert-danger{color:#721c24;background-color:#f8d7da;border-color:#f5c6cb}.alert-danger hr{border-top-color:#f1b0b7}.alert-danger .alert-link{color:#491217}.alert-light{color:#818182;background-color:#fefefe;border-color:#fdfdfe}.alert-light hr{border-top-color:#ececf6}.alert-light .alert-link{color:#686868}.alert-dark{color:#1b1e21;background-color:#d6d8d9;border-color:#c6c8ca}.alert-dark hr{border-top-color:#b9bbbe}.alert-dark .alert-link{color:#040505}@-webkit-keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}@keyframes progress-bar-stripes{from{background-position:1rem 0}to{background-position:0 0}}.progress{display:-ms-flexbox;display:flex;height:1rem;overflow:hidden;line-height:0;font-size:.75rem;background-color:#e9ecef;border-radius:.25rem}.progress-bar{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;-ms-flex-pack:center;justify-content:center;overflow:hidden;color:#fff;text-align:center;white-space:nowrap;background-color:#007bff;transition:width .6s ease}@media (prefers-reduced-motion:reduce){.progress-bar{transition:none}}.progress-bar-striped{background-image:linear-gradient(45deg,rgba(255,255,255,.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,.15) 50%,rgba(255,255,255,.15) 75%,transparent 75%,transparent);background-size:1rem 1rem}.progress-bar-animated{-webkit-animation:1s linear infinite progress-bar-stripes;animation:1s linear infinite progress-bar-stripes}@media (prefers-reduced-motion:reduce){.progress-bar-animated{-webkit-animation:none;animation:none}}.media{display:-ms-flexbox;display:flex;-ms-flex-align:start;align-items:flex-start}.media-body{-ms-flex:1;flex:1}.list-group{display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;padding-left:0;margin-bottom:0;border-radius:.25rem}.list-group-item-action{width:100%;color:#495057;text-align:inherit}.list-group-item-action:focus,.list-group-item-action:hover{z-index:1;color:#495057;text-decoration:none;background-color:#f8f9fa}.list-group-item-action:active{color:#212529;background-color:#e9ecef}.list-group-item{position:relative;display:block;padding:.75rem 1.25rem;background-color:#fff;border:1px solid rgba(0,0,0,.125)}.list-group-item:first-child{border-top-left-radius:inherit;border-top-right-radius:inherit}.list-group-item:last-child{border-bottom-right-radius:inherit;border-bottom-left-radius:inherit}.list-group-item.disabled,.list-group-item:disabled{color:#6c757d;pointer-events:none;background-color:#fff}.list-group-item.active{z-index:2;color:#fff;background-color:#007bff;border-color:#007bff}.list-group-item+.list-group-item{border-top-width:0}.list-group-item+.list-group-item.active{margin-top:-1px;border-top-width:1px}.list-group-horizontal{-ms-flex-direction:row;flex-direction:row}.list-group-horizontal>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal>.list-group-item.active{margin-top:0}.list-group-horizontal>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}@media (min-width:576px){.list-group-horizontal-sm{-ms-flex-direction:row;flex-direction:row}.list-group-horizontal-sm>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-sm>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-sm>.list-group-item.active{margin-top:0}.list-group-horizontal-sm>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-sm>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:768px){.list-group-horizontal-md{-ms-flex-direction:row;flex-direction:row}.list-group-horizontal-md>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-md>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-md>.list-group-item.active{margin-top:0}.list-group-horizontal-md>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-md>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:992px){.list-group-horizontal-lg{-ms-flex-direction:row;flex-direction:row}.list-group-horizontal-lg>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-lg>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-lg>.list-group-item.active{margin-top:0}.list-group-horizontal-lg>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-lg>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}@media (min-width:1200px){.list-group-horizontal-xl{-ms-flex-direction:row;flex-direction:row}.list-group-horizontal-xl>.list-group-item:first-child{border-bottom-left-radius:.25rem;border-top-right-radius:0}.list-group-horizontal-xl>.list-group-item:last-child{border-top-right-radius:.25rem;border-bottom-left-radius:0}.list-group-horizontal-xl>.list-group-item.active{margin-top:0}.list-group-horizontal-xl>.list-group-item+.list-group-item{border-top-width:1px;border-left-width:0}.list-group-horizontal-xl>.list-group-item+.list-group-item.active{margin-left:-1px;border-left-width:1px}}.list-group-flush{border-radius:0}.list-group-flush>.list-group-item{border-width:0 0 1px}.list-group-flush>.list-group-item:last-child{border-bottom-width:0}.list-group-item-primary{color:#004085;background-color:#b8daff}.list-group-item-primary.list-group-item-action:focus,.list-group-item-primary.list-group-item-action:hover{color:#004085;background-color:#9fcdff}.list-group-item-primary.list-group-item-action.active{color:#fff;background-color:#004085;border-color:#004085}.list-group-item-secondary{color:#383d41;background-color:#d6d8db}.list-group-item-secondary.list-group-item-action:focus,.list-group-item-secondary.list-group-item-action:hover{color:#383d41;background-color:#c8cbcf}.list-group-item-secondary.list-group-item-action.active{color:#fff;background-color:#383d41;border-color:#383d41}.list-group-item-success{color:#155724;background-color:#c3e6cb}.list-group-item-success.list-group-item-action:focus,.list-group-item-success.list-group-item-action:hover{color:#155724;background-color:#b1dfbb}.list-group-item-success.list-group-item-action.active{color:#fff;background-color:#155724;border-color:#155724}.list-group-item-info{color:#0c5460;background-color:#bee5eb}.list-group-item-info.list-group-item-action:focus,.list-group-item-info.list-group-item-action:hover{color:#0c5460;background-color:#abdde5}.list-group-item-info.list-group-item-action.active{color:#fff;background-color:#0c5460;border-color:#0c5460}.list-group-item-warning{color:#856404;background-color:#ffeeba}.list-group-item-warning.list-group-item-action:focus,.list-group-item-warning.list-group-item-action:hover{color:#856404;background-color:#ffe8a1}.list-group-item-warning.list-group-item-action.active{color:#fff;background-color:#856404;border-color:#856404}.list-group-item-danger{color:#721c24;background-color:#f5c6cb}.list-group-item-danger.list-group-item-action:focus,.list-group-item-danger.list-group-item-action:hover{color:#721c24;background-color:#f1b0b7}.list-group-item-danger.list-group-item-action.active{color:#fff;background-color:#721c24;border-color:#721c24}.list-group-item-light{color:#818182;background-color:#fdfdfe}.list-group-item-light.list-group-item-action:focus,.list-group-item-light.list-group-item-action:hover{color:#818182;background-color:#ececf6}.list-group-item-light.list-group-item-action.active{color:#fff;background-color:#818182;border-color:#818182}.list-group-item-dark{color:#1b1e21;background-color:#c6c8ca}.list-group-item-dark.list-group-item-action:focus,.list-group-item-dark.list-group-item-action:hover{color:#1b1e21;background-color:#b9bbbe}.list-group-item-dark.list-group-item-action.active{color:#fff;background-color:#1b1e21;border-color:#1b1e21}.close{float:right;font-size:1.5rem;font-weight:700;line-height:1;color:#000;text-shadow:0 1px 0 #fff;opacity:.5}.close:hover{color:#000;text-decoration:none}.close:not(:disabled):not(.disabled):focus,.close:not(:disabled):not(.disabled):hover{opacity:.75}button.close{padding:0;background-color:transparent;border:0}a.close.disabled{pointer-events:none}.toast{-ms-flex-preferred-size:350px;flex-basis:350px;max-width:350px;font-size:.875rem;background-color:rgba(255,255,255,.85);background-clip:padding-box;border:1px solid rgba(0,0,0,.1);box-shadow:0 .25rem .75rem rgba(0,0,0,.1);opacity:0;border-radius:.25rem}.toast:not(:last-child){margin-bottom:.75rem}.toast.showing{opacity:1}.toast.show{display:block;opacity:1}.toast.hide{display:none}.toast-header{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;padding:.25rem .75rem;color:#6c757d;background-color:rgba(255,255,255,.85);background-clip:padding-box;border-bottom:1px solid rgba(0,0,0,.05);border-top-left-radius:calc(.25rem - 1px);border-top-right-radius:calc(.25rem - 1px)}.toast-body{padding:.75rem}.modal-open{overflow:hidden}.modal-open .modal{overflow-x:hidden;overflow-y:auto}.modal{position:fixed;top:0;left:0;z-index:1050;display:none;width:100%;height:100%;overflow:hidden;outline:0}.modal-dialog{position:relative;width:auto;margin:.5rem;pointer-events:none}.modal.fade .modal-dialog{transition:-webkit-transform .3s ease-out;transition:transform .3s ease-out;transition:transform .3s ease-out,-webkit-transform .3s ease-out;-webkit-transform:translate(0,-50px);transform:translate(0,-50px)}@media (prefers-reduced-motion:reduce){.modal.fade .modal-dialog{transition:none}}.modal.show .modal-dialog{-webkit-transform:none;transform:none}.modal.modal-static .modal-dialog{-webkit-transform:scale(1.02);transform:scale(1.02)}.modal-dialog-scrollable{display:-ms-flexbox;display:flex;max-height:calc(100% - 1rem)}.modal-dialog-scrollable .modal-content{max-height:calc(100vh - 1rem);overflow:hidden}.modal-dialog-scrollable .modal-footer,.modal-dialog-scrollable .modal-header{-ms-flex-negative:0;flex-shrink:0}.modal-dialog-scrollable .modal-body{overflow-y:auto}.modal-dialog-centered{display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;min-height:calc(100% - 1rem)}.modal-dialog-centered::before{display:block;height:calc(100vh - 1rem);height:-webkit-min-content;height:-moz-min-content;height:min-content;content:""}.modal-dialog-centered.modal-dialog-scrollable{-ms-flex-direction:column;flex-direction:column;-ms-flex-pack:center;justify-content:center;height:100%}.modal-dialog-centered.modal-dialog-scrollable .modal-content{max-height:none}.modal-dialog-centered.modal-dialog-scrollable::before{content:none}.modal-content{position:relative;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;width:100%;pointer-events:auto;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem;outline:0}.modal-backdrop{position:fixed;top:0;left:0;z-index:1040;width:100vw;height:100vh;background-color:#000}.modal-backdrop.fade{opacity:0}.modal-backdrop.show{opacity:.5}.modal-header{display:-ms-flexbox;display:flex;-ms-flex-align:start;align-items:flex-start;-ms-flex-pack:justify;justify-content:space-between;padding:1rem 1rem;border-bottom:1px solid #dee2e6;border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.modal-header .close{padding:1rem 1rem;margin:-1rem -1rem -1rem auto}.modal-title{margin-bottom:0;line-height:1.5}.modal-body{position:relative;-ms-flex:1 1 auto;flex:1 1 auto;padding:1rem}.modal-footer{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;-ms-flex-align:center;align-items:center;-ms-flex-pack:end;justify-content:flex-end;padding:.75rem;border-top:1px solid #dee2e6;border-bottom-right-radius:calc(.3rem - 1px);border-bottom-left-radius:calc(.3rem - 1px)}.modal-footer>*{margin:.25rem}.modal-scrollbar-measure{position:absolute;top:-9999px;width:50px;height:50px;overflow:scroll}@media (min-width:576px){.modal-dialog{max-width:500px;margin:1.75rem auto}.modal-dialog-scrollable{max-height:calc(100% - 3.5rem)}.modal-dialog-scrollable .modal-content{max-height:calc(100vh - 3.5rem)}.modal-dialog-centered{min-height:calc(100% - 3.5rem)}.modal-dialog-centered::before{height:calc(100vh - 3.5rem);height:-webkit-min-content;height:-moz-min-content;height:min-content}.modal-sm{max-width:300px}}@media (min-width:992px){.modal-lg,.modal-xl{max-width:800px}}@media (min-width:1200px){.modal-xl{max-width:1140px}}.tooltip{position:absolute;z-index:1070;display:block;margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;opacity:0}.tooltip.show{opacity:.9}.tooltip .arrow{position:absolute;display:block;width:.8rem;height:.4rem}.tooltip .arrow::before{position:absolute;content:"";border-color:transparent;border-style:solid}.bs-tooltip-auto[x-placement^=top],.bs-tooltip-top{padding:.4rem 0}.bs-tooltip-auto[x-placement^=top] .arrow,.bs-tooltip-top .arrow{bottom:0}.bs-tooltip-auto[x-placement^=top] .arrow::before,.bs-tooltip-top .arrow::before{top:0;border-width:.4rem .4rem 0;border-top-color:#000}.bs-tooltip-auto[x-placement^=right],.bs-tooltip-right{padding:0 .4rem}.bs-tooltip-auto[x-placement^=right] .arrow,.bs-tooltip-right .arrow{left:0;width:.4rem;height:.8rem}.bs-tooltip-auto[x-placement^=right] .arrow::before,.bs-tooltip-right .arrow::before{right:0;border-width:.4rem .4rem .4rem 0;border-right-color:#000}.bs-tooltip-auto[x-placement^=bottom],.bs-tooltip-bottom{padding:.4rem 0}.bs-tooltip-auto[x-placement^=bottom] .arrow,.bs-tooltip-bottom .arrow{top:0}.bs-tooltip-auto[x-placement^=bottom] .arrow::before,.bs-tooltip-bottom .arrow::before{bottom:0;border-width:0 .4rem .4rem;border-bottom-color:#000}.bs-tooltip-auto[x-placement^=left],.bs-tooltip-left{padding:0 .4rem}.bs-tooltip-auto[x-placement^=left] .arrow,.bs-tooltip-left .arrow{right:0;width:.4rem;height:.8rem}.bs-tooltip-auto[x-placement^=left] .arrow::before,.bs-tooltip-left .arrow::before{left:0;border-width:.4rem 0 .4rem .4rem;border-left-color:#000}.tooltip-inner{max-width:200px;padding:.25rem .5rem;color:#fff;text-align:center;background-color:#000;border-radius:.25rem}.popover{position:absolute;top:0;left:0;z-index:1060;display:block;max-width:276px;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-style:normal;font-weight:400;line-height:1.5;text-align:left;text-align:start;text-decoration:none;text-shadow:none;text-transform:none;letter-spacing:normal;word-break:normal;word-spacing:normal;white-space:normal;line-break:auto;font-size:.875rem;word-wrap:break-word;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,.2);border-radius:.3rem}.popover .arrow{position:absolute;display:block;width:1rem;height:.5rem;margin:0 .3rem}.popover .arrow::after,.popover .arrow::before{position:absolute;display:block;content:"";border-color:transparent;border-style:solid}.bs-popover-auto[x-placement^=top],.bs-popover-top{margin-bottom:.5rem}.bs-popover-auto[x-placement^=top]>.arrow,.bs-popover-top>.arrow{bottom:calc(-.5rem - 1px)}.bs-popover-auto[x-placement^=top]>.arrow::before,.bs-popover-top>.arrow::before{bottom:0;border-width:.5rem .5rem 0;border-top-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=top]>.arrow::after,.bs-popover-top>.arrow::after{bottom:1px;border-width:.5rem .5rem 0;border-top-color:#fff}.bs-popover-auto[x-placement^=right],.bs-popover-right{margin-left:.5rem}.bs-popover-auto[x-placement^=right]>.arrow,.bs-popover-right>.arrow{left:calc(-.5rem - 1px);width:.5rem;height:1rem;margin:.3rem 0}.bs-popover-auto[x-placement^=right]>.arrow::before,.bs-popover-right>.arrow::before{left:0;border-width:.5rem .5rem .5rem 0;border-right-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=right]>.arrow::after,.bs-popover-right>.arrow::after{left:1px;border-width:.5rem .5rem .5rem 0;border-right-color:#fff}.bs-popover-auto[x-placement^=bottom],.bs-popover-bottom{margin-top:.5rem}.bs-popover-auto[x-placement^=bottom]>.arrow,.bs-popover-bottom>.arrow{top:calc(-.5rem - 1px)}.bs-popover-auto[x-placement^=bottom]>.arrow::before,.bs-popover-bottom>.arrow::before{top:0;border-width:0 .5rem .5rem .5rem;border-bottom-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=bottom]>.arrow::after,.bs-popover-bottom>.arrow::after{top:1px;border-width:0 .5rem .5rem .5rem;border-bottom-color:#fff}.bs-popover-auto[x-placement^=bottom] .popover-header::before,.bs-popover-bottom .popover-header::before{position:absolute;top:0;left:50%;display:block;width:1rem;margin-left:-.5rem;content:"";border-bottom:1px solid #f7f7f7}.bs-popover-auto[x-placement^=left],.bs-popover-left{margin-right:.5rem}.bs-popover-auto[x-placement^=left]>.arrow,.bs-popover-left>.arrow{right:calc(-.5rem - 1px);width:.5rem;height:1rem;margin:.3rem 0}.bs-popover-auto[x-placement^=left]>.arrow::before,.bs-popover-left>.arrow::before{right:0;border-width:.5rem 0 .5rem .5rem;border-left-color:rgba(0,0,0,.25)}.bs-popover-auto[x-placement^=left]>.arrow::after,.bs-popover-left>.arrow::after{right:1px;border-width:.5rem 0 .5rem .5rem;border-left-color:#fff}.popover-header{padding:.5rem .75rem;margin-bottom:0;font-size:1rem;background-color:#f7f7f7;border-bottom:1px solid #ebebeb;border-top-left-radius:calc(.3rem - 1px);border-top-right-radius:calc(.3rem - 1px)}.popover-header:empty{display:none}.popover-body{padding:.5rem .75rem;color:#212529}.carousel{position:relative}.carousel.pointer-event{-ms-touch-action:pan-y;touch-action:pan-y}.carousel-inner{position:relative;width:100%;overflow:hidden}.carousel-inner::after{display:block;clear:both;content:""}.carousel-item{position:relative;display:none;float:left;width:100%;margin-right:-100%;-webkit-backface-visibility:hidden;backface-visibility:hidden;transition:-webkit-transform .6s ease-in-out;transition:transform .6s ease-in-out;transition:transform .6s ease-in-out,-webkit-transform .6s ease-in-out}@media (prefers-reduced-motion:reduce){.carousel-item{transition:none}}.carousel-item-next,.carousel-item-prev,.carousel-item.active{display:block}.active.carousel-item-right,.carousel-item-next:not(.carousel-item-left){-webkit-transform:translateX(100%);transform:translateX(100%)}.active.carousel-item-left,.carousel-item-prev:not(.carousel-item-right){-webkit-transform:translateX(-100%);transform:translateX(-100%)}.carousel-fade .carousel-item{opacity:0;transition-property:opacity;-webkit-transform:none;transform:none}.carousel-fade .carousel-item-next.carousel-item-left,.carousel-fade .carousel-item-prev.carousel-item-right,.carousel-fade .carousel-item.active{z-index:1;opacity:1}.carousel-fade .active.carousel-item-left,.carousel-fade .active.carousel-item-right{z-index:0;opacity:0;transition:opacity 0s .6s}@media (prefers-reduced-motion:reduce){.carousel-fade .active.carousel-item-left,.carousel-fade .active.carousel-item-right{transition:none}}.carousel-control-next,.carousel-control-prev{position:absolute;top:0;bottom:0;z-index:1;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;-ms-flex-pack:center;justify-content:center;width:15%;color:#fff;text-align:center;opacity:.5;transition:opacity .15s ease}@media (prefers-reduced-motion:reduce){.carousel-control-next,.carousel-control-prev{transition:none}}.carousel-control-next:focus,.carousel-control-next:hover,.carousel-control-prev:focus,.carousel-control-prev:hover{color:#fff;text-decoration:none;outline:0;opacity:.9}.carousel-control-prev{left:0}.carousel-control-next{right:0}.carousel-control-next-icon,.carousel-control-prev-icon{display:inline-block;width:20px;height:20px;background:50%/100% 100% no-repeat}.carousel-control-prev-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5L4.25 4l2.5-2.5L5.25 0z'/%3e%3c/svg%3e")}.carousel-control-next-icon{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' width='8' height='8' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5L3.75 4l-2.5 2.5L2.75 8l4-4-4-4z'/%3e%3c/svg%3e")}.carousel-indicators{position:absolute;right:0;bottom:0;left:0;z-index:15;display:-ms-flexbox;display:flex;-ms-flex-pack:center;justify-content:center;padding-left:0;margin-right:15%;margin-left:15%;list-style:none}.carousel-indicators li{box-sizing:content-box;-ms-flex:0 1 auto;flex:0 1 auto;width:30px;height:3px;margin-right:3px;margin-left:3px;text-indent:-999px;cursor:pointer;background-color:#fff;background-clip:padding-box;border-top:10px solid transparent;border-bottom:10px solid transparent;opacity:.5;transition:opacity .6s ease}@media (prefers-reduced-motion:reduce){.carousel-indicators li{transition:none}}.carousel-indicators .active{opacity:1}.carousel-caption{position:absolute;right:15%;bottom:20px;left:15%;z-index:10;padding-top:20px;padding-bottom:20px;color:#fff;text-align:center}@-webkit-keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes spinner-border{to{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}.spinner-border{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;border:.25em solid currentColor;border-right-color:transparent;border-radius:50%;-webkit-animation:.75s linear infinite spinner-border;animation:.75s linear infinite spinner-border}.spinner-border-sm{width:1rem;height:1rem;border-width:.2em}@-webkit-keyframes spinner-grow{0%{-webkit-transform:scale(0);transform:scale(0)}50%{opacity:1;-webkit-transform:none;transform:none}}@keyframes spinner-grow{0%{-webkit-transform:scale(0);transform:scale(0)}50%{opacity:1;-webkit-transform:none;transform:none}}.spinner-grow{display:inline-block;width:2rem;height:2rem;vertical-align:text-bottom;background-color:currentColor;border-radius:50%;opacity:0;-webkit-animation:.75s linear infinite spinner-grow;animation:.75s linear infinite spinner-grow}.spinner-grow-sm{width:1rem;height:1rem}@media (prefers-reduced-motion:reduce){.spinner-border,.spinner-grow{-webkit-animation-duration:1.5s;animation-duration:1.5s}}.align-baseline{vertical-align:baseline!important}.align-top{vertical-align:top!important}.align-middle{vertical-align:middle!important}.align-bottom{vertical-align:bottom!important}.align-text-bottom{vertical-align:text-bottom!important}.align-text-top{vertical-align:text-top!important}.bg-primary{background-color:#007bff!important}a.bg-primary:focus,a.bg-primary:hover,button.bg-primary:focus,button.bg-primary:hover{background-color:#0062cc!important}.bg-secondary{background-color:#6c757d!important}a.bg-secondary:focus,a.bg-secondary:hover,button.bg-secondary:focus,button.bg-secondary:hover{background-color:#545b62!important}.bg-success{background-color:#28a745!important}a.bg-success:focus,a.bg-success:hover,button.bg-success:focus,button.bg-success:hover{background-color:#1e7e34!important}.bg-info{background-color:#17a2b8!important}a.bg-info:focus,a.bg-info:hover,button.bg-info:focus,button.bg-info:hover{background-color:#117a8b!important}.bg-warning{background-color:#ffc107!important}a.bg-warning:focus,a.bg-warning:hover,button.bg-warning:focus,button.bg-warning:hover{background-color:#d39e00!important}.bg-danger{background-color:#dc3545!important}a.bg-danger:focus,a.bg-danger:hover,button.bg-danger:focus,button.bg-danger:hover{background-color:#bd2130!important}.bg-light{background-color:#f8f9fa!important}a.bg-light:focus,a.bg-light:hover,button.bg-light:focus,button.bg-light:hover{background-color:#dae0e5!important}.bg-dark{background-color:#343a40!important}a.bg-dark:focus,a.bg-dark:hover,button.bg-dark:focus,button.bg-dark:hover{background-color:#1d2124!important}.bg-white{background-color:#fff!important}.bg-transparent{background-color:transparent!important}.border{border:1px solid #dee2e6!important}.border-top{border-top:1px solid #dee2e6!important}.border-right{border-right:1px solid #dee2e6!important}.border-bottom{border-bottom:1px solid #dee2e6!important}.border-left{border-left:1px solid #dee2e6!important}.border-0{border:0!important}.border-top-0{border-top:0!important}.border-right-0{border-right:0!important}.border-bottom-0{border-bottom:0!important}.border-left-0{border-left:0!important}.border-primary{border-color:#007bff!important}.border-secondary{border-color:#6c757d!important}.border-success{border-color:#28a745!important}.border-info{border-color:#17a2b8!important}.border-warning{border-color:#ffc107!important}.border-danger{border-color:#dc3545!important}.border-light{border-color:#f8f9fa!important}.border-dark{border-color:#343a40!important}.border-white{border-color:#fff!important}.rounded-sm{border-radius:.2rem!important}.rounded{border-radius:.25rem!important}.rounded-top{border-top-left-radius:.25rem!important;border-top-right-radius:.25rem!important}.rounded-right{border-top-right-radius:.25rem!important;border-bottom-right-radius:.25rem!important}.rounded-bottom{border-bottom-right-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.rounded-left{border-top-left-radius:.25rem!important;border-bottom-left-radius:.25rem!important}.rounded-lg{border-radius:.3rem!important}.rounded-circle{border-radius:50%!important}.rounded-pill{border-radius:50rem!important}.rounded-0{border-radius:0!important}.clearfix::after{display:block;clear:both;content:""}.d-none{display:none!important}.d-inline{display:inline!important}.d-inline-block{display:inline-block!important}.d-block{display:block!important}.d-table{display:table!important}.d-table-row{display:table-row!important}.d-table-cell{display:table-cell!important}.d-flex{display:-ms-flexbox!important;display:flex!important}.d-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}@media (min-width:576px){.d-sm-none{display:none!important}.d-sm-inline{display:inline!important}.d-sm-inline-block{display:inline-block!important}.d-sm-block{display:block!important}.d-sm-table{display:table!important}.d-sm-table-row{display:table-row!important}.d-sm-table-cell{display:table-cell!important}.d-sm-flex{display:-ms-flexbox!important;display:flex!important}.d-sm-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:768px){.d-md-none{display:none!important}.d-md-inline{display:inline!important}.d-md-inline-block{display:inline-block!important}.d-md-block{display:block!important}.d-md-table{display:table!important}.d-md-table-row{display:table-row!important}.d-md-table-cell{display:table-cell!important}.d-md-flex{display:-ms-flexbox!important;display:flex!important}.d-md-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:992px){.d-lg-none{display:none!important}.d-lg-inline{display:inline!important}.d-lg-inline-block{display:inline-block!important}.d-lg-block{display:block!important}.d-lg-table{display:table!important}.d-lg-table-row{display:table-row!important}.d-lg-table-cell{display:table-cell!important}.d-lg-flex{display:-ms-flexbox!important;display:flex!important}.d-lg-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media (min-width:1200px){.d-xl-none{display:none!important}.d-xl-inline{display:inline!important}.d-xl-inline-block{display:inline-block!important}.d-xl-block{display:block!important}.d-xl-table{display:table!important}.d-xl-table-row{display:table-row!important}.d-xl-table-cell{display:table-cell!important}.d-xl-flex{display:-ms-flexbox!important;display:flex!important}.d-xl-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}@media print{.d-print-none{display:none!important}.d-print-inline{display:inline!important}.d-print-inline-block{display:inline-block!important}.d-print-block{display:block!important}.d-print-table{display:table!important}.d-print-table-row{display:table-row!important}.d-print-table-cell{display:table-cell!important}.d-print-flex{display:-ms-flexbox!important;display:flex!important}.d-print-inline-flex{display:-ms-inline-flexbox!important;display:inline-flex!important}}.embed-responsive{position:relative;display:block;width:100%;padding:0;overflow:hidden}.embed-responsive::before{display:block;content:""}.embed-responsive .embed-responsive-item,.embed-responsive embed,.embed-responsive iframe,.embed-responsive object,.embed-responsive video{position:absolute;top:0;bottom:0;left:0;width:100%;height:100%;border:0}.embed-responsive-21by9::before{padding-top:42.857143%}.embed-responsive-16by9::before{padding-top:56.25%}.embed-responsive-4by3::before{padding-top:75%}.embed-responsive-1by1::before{padding-top:100%}.flex-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-center{-ms-flex-align:center!important;align-items:center!important}.align-items-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}@media (min-width:576px){.flex-sm-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-sm-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-sm-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-sm-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-sm-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-sm-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-sm-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-sm-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-sm-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-sm-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-sm-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-sm-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-sm-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-sm-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-sm-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-sm-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-sm-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-sm-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-sm-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-sm-center{-ms-flex-align:center!important;align-items:center!important}.align-items-sm-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-sm-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-sm-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-sm-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-sm-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-sm-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-sm-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-sm-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-sm-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-sm-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-sm-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-sm-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-sm-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-sm-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}@media (min-width:768px){.flex-md-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-md-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-md-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-md-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-md-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-md-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-md-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-md-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-md-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-md-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-md-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-md-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-md-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-md-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-md-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-md-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-md-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-md-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-md-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-md-center{-ms-flex-align:center!important;align-items:center!important}.align-items-md-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-md-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-md-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-md-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-md-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-md-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-md-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-md-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-md-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-md-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-md-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-md-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-md-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-md-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}@media (min-width:992px){.flex-lg-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-lg-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-lg-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-lg-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-lg-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-lg-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-lg-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-lg-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-lg-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-lg-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-lg-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-lg-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-lg-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-lg-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-lg-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-lg-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-lg-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-lg-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-lg-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-lg-center{-ms-flex-align:center!important;align-items:center!important}.align-items-lg-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-lg-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-lg-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-lg-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-lg-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-lg-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-lg-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-lg-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-lg-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-lg-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-lg-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-lg-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-lg-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-lg-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}@media (min-width:1200px){.flex-xl-row{-ms-flex-direction:row!important;flex-direction:row!important}.flex-xl-column{-ms-flex-direction:column!important;flex-direction:column!important}.flex-xl-row-reverse{-ms-flex-direction:row-reverse!important;flex-direction:row-reverse!important}.flex-xl-column-reverse{-ms-flex-direction:column-reverse!important;flex-direction:column-reverse!important}.flex-xl-wrap{-ms-flex-wrap:wrap!important;flex-wrap:wrap!important}.flex-xl-nowrap{-ms-flex-wrap:nowrap!important;flex-wrap:nowrap!important}.flex-xl-wrap-reverse{-ms-flex-wrap:wrap-reverse!important;flex-wrap:wrap-reverse!important}.flex-xl-fill{-ms-flex:1 1 auto!important;flex:1 1 auto!important}.flex-xl-grow-0{-ms-flex-positive:0!important;flex-grow:0!important}.flex-xl-grow-1{-ms-flex-positive:1!important;flex-grow:1!important}.flex-xl-shrink-0{-ms-flex-negative:0!important;flex-shrink:0!important}.flex-xl-shrink-1{-ms-flex-negative:1!important;flex-shrink:1!important}.justify-content-xl-start{-ms-flex-pack:start!important;justify-content:flex-start!important}.justify-content-xl-end{-ms-flex-pack:end!important;justify-content:flex-end!important}.justify-content-xl-center{-ms-flex-pack:center!important;justify-content:center!important}.justify-content-xl-between{-ms-flex-pack:justify!important;justify-content:space-between!important}.justify-content-xl-around{-ms-flex-pack:distribute!important;justify-content:space-around!important}.align-items-xl-start{-ms-flex-align:start!important;align-items:flex-start!important}.align-items-xl-end{-ms-flex-align:end!important;align-items:flex-end!important}.align-items-xl-center{-ms-flex-align:center!important;align-items:center!important}.align-items-xl-baseline{-ms-flex-align:baseline!important;align-items:baseline!important}.align-items-xl-stretch{-ms-flex-align:stretch!important;align-items:stretch!important}.align-content-xl-start{-ms-flex-line-pack:start!important;align-content:flex-start!important}.align-content-xl-end{-ms-flex-line-pack:end!important;align-content:flex-end!important}.align-content-xl-center{-ms-flex-line-pack:center!important;align-content:center!important}.align-content-xl-between{-ms-flex-line-pack:justify!important;align-content:space-between!important}.align-content-xl-around{-ms-flex-line-pack:distribute!important;align-content:space-around!important}.align-content-xl-stretch{-ms-flex-line-pack:stretch!important;align-content:stretch!important}.align-self-xl-auto{-ms-flex-item-align:auto!important;align-self:auto!important}.align-self-xl-start{-ms-flex-item-align:start!important;align-self:flex-start!important}.align-self-xl-end{-ms-flex-item-align:end!important;align-self:flex-end!important}.align-self-xl-center{-ms-flex-item-align:center!important;align-self:center!important}.align-self-xl-baseline{-ms-flex-item-align:baseline!important;align-self:baseline!important}.align-self-xl-stretch{-ms-flex-item-align:stretch!important;align-self:stretch!important}}.float-left{float:left!important}.float-right{float:right!important}.float-none{float:none!important}@media (min-width:576px){.float-sm-left{float:left!important}.float-sm-right{float:right!important}.float-sm-none{float:none!important}}@media (min-width:768px){.float-md-left{float:left!important}.float-md-right{float:right!important}.float-md-none{float:none!important}}@media (min-width:992px){.float-lg-left{float:left!important}.float-lg-right{float:right!important}.float-lg-none{float:none!important}}@media (min-width:1200px){.float-xl-left{float:left!important}.float-xl-right{float:right!important}.float-xl-none{float:none!important}}.user-select-all{-webkit-user-select:all!important;-moz-user-select:all!important;user-select:all!important}.user-select-auto{-webkit-user-select:auto!important;-moz-user-select:auto!important;-ms-user-select:auto!important;user-select:auto!important}.user-select-none{-webkit-user-select:none!important;-moz-user-select:none!important;-ms-user-select:none!important;user-select:none!important}.overflow-auto{overflow:auto!important}.overflow-hidden{overflow:hidden!important}.position-static{position:static!important}.position-relative{position:relative!important}.position-absolute{position:absolute!important}.position-fixed{position:fixed!important}.position-sticky{position:-webkit-sticky!important;position:sticky!important}.fixed-top{position:fixed;top:0;right:0;left:0;z-index:1030}.fixed-bottom{position:fixed;right:0;bottom:0;left:0;z-index:1030}@supports ((position:-webkit-sticky) or (position:sticky)){.sticky-top{position:-webkit-sticky;position:sticky;top:0;z-index:1020}}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0}.sr-only-focusable:active,.sr-only-focusable:focus{position:static;width:auto;height:auto;overflow:visible;clip:auto;white-space:normal}.shadow-sm{box-shadow:0 .125rem .25rem rgba(0,0,0,.075)!important}.shadow{box-shadow:0 .5rem 1rem rgba(0,0,0,.15)!important}.shadow-lg{box-shadow:0 1rem 3rem rgba(0,0,0,.175)!important}.shadow-none{box-shadow:none!important}.w-25{width:25%!important}.w-50{width:50%!important}.w-75{width:75%!important}.w-100{width:100%!important}.w-auto{width:auto!important}.h-25{height:25%!important}.h-50{height:50%!important}.h-75{height:75%!important}.h-100{height:100%!important}.h-auto{height:auto!important}.mw-100{max-width:100%!important}.mh-100{max-height:100%!important}.min-vw-100{min-width:100vw!important}.min-vh-100{min-height:100vh!important}.vw-100{width:100vw!important}.vh-100{height:100vh!important}.m-0{margin:0!important}.mt-0,.my-0{margin-top:0!important}.mr-0,.mx-0{margin-right:0!important}.mb-0,.my-0{margin-bottom:0!important}.ml-0,.mx-0{margin-left:0!important}.m-1{margin:.25rem!important}.mt-1,.my-1{margin-top:.25rem!important}.mr-1,.mx-1{margin-right:.25rem!important}.mb-1,.my-1{margin-bottom:.25rem!important}.ml-1,.mx-1{margin-left:.25rem!important}.m-2{margin:.5rem!important}.mt-2,.my-2{margin-top:.5rem!important}.mr-2,.mx-2{margin-right:.5rem!important}.mb-2,.my-2{margin-bottom:.5rem!important}.ml-2,.mx-2{margin-left:.5rem!important}.m-3{margin:1rem!important}.mt-3,.my-3{margin-top:1rem!important}.mr-3,.mx-3{margin-right:1rem!important}.mb-3,.my-3{margin-bottom:1rem!important}.ml-3,.mx-3{margin-left:1rem!important}.m-4{margin:1.5rem!important}.mt-4,.my-4{margin-top:1.5rem!important}.mr-4,.mx-4{margin-right:1.5rem!important}.mb-4,.my-4{margin-bottom:1.5rem!important}.ml-4,.mx-4{margin-left:1.5rem!important}.m-5{margin:3rem!important}.mt-5,.my-5{margin-top:3rem!important}.mr-5,.mx-5{margin-right:3rem!important}.mb-5,.my-5{margin-bottom:3rem!important}.ml-5,.mx-5{margin-left:3rem!important}.p-0{padding:0!important}.pt-0,.py-0{padding-top:0!important}.pr-0,.px-0{padding-right:0!important}.pb-0,.py-0{padding-bottom:0!important}.pl-0,.px-0{padding-left:0!important}.p-1{padding:.25rem!important}.pt-1,.py-1{padding-top:.25rem!important}.pr-1,.px-1{padding-right:.25rem!important}.pb-1,.py-1{padding-bottom:.25rem!important}.pl-1,.px-1{padding-left:.25rem!important}.p-2{padding:.5rem!important}.pt-2,.py-2{padding-top:.5rem!important}.pr-2,.px-2{padding-right:.5rem!important}.pb-2,.py-2{padding-bottom:.5rem!important}.pl-2,.px-2{padding-left:.5rem!important}.p-3{padding:1rem!important}.pt-3,.py-3{padding-top:1rem!important}.pr-3,.px-3{padding-right:1rem!important}.pb-3,.py-3{padding-bottom:1rem!important}.pl-3,.px-3{padding-left:1rem!important}.p-4{padding:1.5rem!important}.pt-4,.py-4{padding-top:1.5rem!important}.pr-4,.px-4{padding-right:1.5rem!important}.pb-4,.py-4{padding-bottom:1.5rem!important}.pl-4,.px-4{padding-left:1.5rem!important}.p-5{padding:3rem!important}.pt-5,.py-5{padding-top:3rem!important}.pr-5,.px-5{padding-right:3rem!important}.pb-5,.py-5{padding-bottom:3rem!important}.pl-5,.px-5{padding-left:3rem!important}.m-n1{margin:-.25rem!important}.mt-n1,.my-n1{margin-top:-.25rem!important}.mr-n1,.mx-n1{margin-right:-.25rem!important}.mb-n1,.my-n1{margin-bottom:-.25rem!important}.ml-n1,.mx-n1{margin-left:-.25rem!important}.m-n2{margin:-.5rem!important}.mt-n2,.my-n2{margin-top:-.5rem!important}.mr-n2,.mx-n2{margin-right:-.5rem!important}.mb-n2,.my-n2{margin-bottom:-.5rem!important}.ml-n2,.mx-n2{margin-left:-.5rem!important}.m-n3{margin:-1rem!important}.mt-n3,.my-n3{margin-top:-1rem!important}.mr-n3,.mx-n3{margin-right:-1rem!important}.mb-n3,.my-n3{margin-bottom:-1rem!important}.ml-n3,.mx-n3{margin-left:-1rem!important}.m-n4{margin:-1.5rem!important}.mt-n4,.my-n4{margin-top:-1.5rem!important}.mr-n4,.mx-n4{margin-right:-1.5rem!important}.mb-n4,.my-n4{margin-bottom:-1.5rem!important}.ml-n4,.mx-n4{margin-left:-1.5rem!important}.m-n5{margin:-3rem!important}.mt-n5,.my-n5{margin-top:-3rem!important}.mr-n5,.mx-n5{margin-right:-3rem!important}.mb-n5,.my-n5{margin-bottom:-3rem!important}.ml-n5,.mx-n5{margin-left:-3rem!important}.m-auto{margin:auto!important}.mt-auto,.my-auto{margin-top:auto!important}.mr-auto,.mx-auto{margin-right:auto!important}.mb-auto,.my-auto{margin-bottom:auto!important}.ml-auto,.mx-auto{margin-left:auto!important}@media (min-width:576px){.m-sm-0{margin:0!important}.mt-sm-0,.my-sm-0{margin-top:0!important}.mr-sm-0,.mx-sm-0{margin-right:0!important}.mb-sm-0,.my-sm-0{margin-bottom:0!important}.ml-sm-0,.mx-sm-0{margin-left:0!important}.m-sm-1{margin:.25rem!important}.mt-sm-1,.my-sm-1{margin-top:.25rem!important}.mr-sm-1,.mx-sm-1{margin-right:.25rem!important}.mb-sm-1,.my-sm-1{margin-bottom:.25rem!important}.ml-sm-1,.mx-sm-1{margin-left:.25rem!important}.m-sm-2{margin:.5rem!important}.mt-sm-2,.my-sm-2{margin-top:.5rem!important}.mr-sm-2,.mx-sm-2{margin-right:.5rem!important}.mb-sm-2,.my-sm-2{margin-bottom:.5rem!important}.ml-sm-2,.mx-sm-2{margin-left:.5rem!important}.m-sm-3{margin:1rem!important}.mt-sm-3,.my-sm-3{margin-top:1rem!important}.mr-sm-3,.mx-sm-3{margin-right:1rem!important}.mb-sm-3,.my-sm-3{margin-bottom:1rem!important}.ml-sm-3,.mx-sm-3{margin-left:1rem!important}.m-sm-4{margin:1.5rem!important}.mt-sm-4,.my-sm-4{margin-top:1.5rem!important}.mr-sm-4,.mx-sm-4{margin-right:1.5rem!important}.mb-sm-4,.my-sm-4{margin-bottom:1.5rem!important}.ml-sm-4,.mx-sm-4{margin-left:1.5rem!important}.m-sm-5{margin:3rem!important}.mt-sm-5,.my-sm-5{margin-top:3rem!important}.mr-sm-5,.mx-sm-5{margin-right:3rem!important}.mb-sm-5,.my-sm-5{margin-bottom:3rem!important}.ml-sm-5,.mx-sm-5{margin-left:3rem!important}.p-sm-0{padding:0!important}.pt-sm-0,.py-sm-0{padding-top:0!important}.pr-sm-0,.px-sm-0{padding-right:0!important}.pb-sm-0,.py-sm-0{padding-bottom:0!important}.pl-sm-0,.px-sm-0{padding-left:0!important}.p-sm-1{padding:.25rem!important}.pt-sm-1,.py-sm-1{padding-top:.25rem!important}.pr-sm-1,.px-sm-1{padding-right:.25rem!important}.pb-sm-1,.py-sm-1{padding-bottom:.25rem!important}.pl-sm-1,.px-sm-1{padding-left:.25rem!important}.p-sm-2{padding:.5rem!important}.pt-sm-2,.py-sm-2{padding-top:.5rem!important}.pr-sm-2,.px-sm-2{padding-right:.5rem!important}.pb-sm-2,.py-sm-2{padding-bottom:.5rem!important}.pl-sm-2,.px-sm-2{padding-left:.5rem!important}.p-sm-3{padding:1rem!important}.pt-sm-3,.py-sm-3{padding-top:1rem!important}.pr-sm-3,.px-sm-3{padding-right:1rem!important}.pb-sm-3,.py-sm-3{padding-bottom:1rem!important}.pl-sm-3,.px-sm-3{padding-left:1rem!important}.p-sm-4{padding:1.5rem!important}.pt-sm-4,.py-sm-4{padding-top:1.5rem!important}.pr-sm-4,.px-sm-4{padding-right:1.5rem!important}.pb-sm-4,.py-sm-4{padding-bottom:1.5rem!important}.pl-sm-4,.px-sm-4{padding-left:1.5rem!important}.p-sm-5{padding:3rem!important}.pt-sm-5,.py-sm-5{padding-top:3rem!important}.pr-sm-5,.px-sm-5{padding-right:3rem!important}.pb-sm-5,.py-sm-5{padding-bottom:3rem!important}.pl-sm-5,.px-sm-5{padding-left:3rem!important}.m-sm-n1{margin:-.25rem!important}.mt-sm-n1,.my-sm-n1{margin-top:-.25rem!important}.mr-sm-n1,.mx-sm-n1{margin-right:-.25rem!important}.mb-sm-n1,.my-sm-n1{margin-bottom:-.25rem!important}.ml-sm-n1,.mx-sm-n1{margin-left:-.25rem!important}.m-sm-n2{margin:-.5rem!important}.mt-sm-n2,.my-sm-n2{margin-top:-.5rem!important}.mr-sm-n2,.mx-sm-n2{margin-right:-.5rem!important}.mb-sm-n2,.my-sm-n2{margin-bottom:-.5rem!important}.ml-sm-n2,.mx-sm-n2{margin-left:-.5rem!important}.m-sm-n3{margin:-1rem!important}.mt-sm-n3,.my-sm-n3{margin-top:-1rem!important}.mr-sm-n3,.mx-sm-n3{margin-right:-1rem!important}.mb-sm-n3,.my-sm-n3{margin-bottom:-1rem!important}.ml-sm-n3,.mx-sm-n3{margin-left:-1rem!important}.m-sm-n4{margin:-1.5rem!important}.mt-sm-n4,.my-sm-n4{margin-top:-1.5rem!important}.mr-sm-n4,.mx-sm-n4{margin-right:-1.5rem!important}.mb-sm-n4,.my-sm-n4{margin-bottom:-1.5rem!important}.ml-sm-n4,.mx-sm-n4{margin-left:-1.5rem!important}.m-sm-n5{margin:-3rem!important}.mt-sm-n5,.my-sm-n5{margin-top:-3rem!important}.mr-sm-n5,.mx-sm-n5{margin-right:-3rem!important}.mb-sm-n5,.my-sm-n5{margin-bottom:-3rem!important}.ml-sm-n5,.mx-sm-n5{margin-left:-3rem!important}.m-sm-auto{margin:auto!important}.mt-sm-auto,.my-sm-auto{margin-top:auto!important}.mr-sm-auto,.mx-sm-auto{margin-right:auto!important}.mb-sm-auto,.my-sm-auto{margin-bottom:auto!important}.ml-sm-auto,.mx-sm-auto{margin-left:auto!important}}@media (min-width:768px){.m-md-0{margin:0!important}.mt-md-0,.my-md-0{margin-top:0!important}.mr-md-0,.mx-md-0{margin-right:0!important}.mb-md-0,.my-md-0{margin-bottom:0!important}.ml-md-0,.mx-md-0{margin-left:0!important}.m-md-1{margin:.25rem!important}.mt-md-1,.my-md-1{margin-top:.25rem!important}.mr-md-1,.mx-md-1{margin-right:.25rem!important}.mb-md-1,.my-md-1{margin-bottom:.25rem!important}.ml-md-1,.mx-md-1{margin-left:.25rem!important}.m-md-2{margin:.5rem!important}.mt-md-2,.my-md-2{margin-top:.5rem!important}.mr-md-2,.mx-md-2{margin-right:.5rem!important}.mb-md-2,.my-md-2{margin-bottom:.5rem!important}.ml-md-2,.mx-md-2{margin-left:.5rem!important}.m-md-3{margin:1rem!important}.mt-md-3,.my-md-3{margin-top:1rem!important}.mr-md-3,.mx-md-3{margin-right:1rem!important}.mb-md-3,.my-md-3{margin-bottom:1rem!important}.ml-md-3,.mx-md-3{margin-left:1rem!important}.m-md-4{margin:1.5rem!important}.mt-md-4,.my-md-4{margin-top:1.5rem!important}.mr-md-4,.mx-md-4{margin-right:1.5rem!important}.mb-md-4,.my-md-4{margin-bottom:1.5rem!important}.ml-md-4,.mx-md-4{margin-left:1.5rem!important}.m-md-5{margin:3rem!important}.mt-md-5,.my-md-5{margin-top:3rem!important}.mr-md-5,.mx-md-5{margin-right:3rem!important}.mb-md-5,.my-md-5{margin-bottom:3rem!important}.ml-md-5,.mx-md-5{margin-left:3rem!important}.p-md-0{padding:0!important}.pt-md-0,.py-md-0{padding-top:0!important}.pr-md-0,.px-md-0{padding-right:0!important}.pb-md-0,.py-md-0{padding-bottom:0!important}.pl-md-0,.px-md-0{padding-left:0!important}.p-md-1{padding:.25rem!important}.pt-md-1,.py-md-1{padding-top:.25rem!important}.pr-md-1,.px-md-1{padding-right:.25rem!important}.pb-md-1,.py-md-1{padding-bottom:.25rem!important}.pl-md-1,.px-md-1{padding-left:.25rem!important}.p-md-2{padding:.5rem!important}.pt-md-2,.py-md-2{padding-top:.5rem!important}.pr-md-2,.px-md-2{padding-right:.5rem!important}.pb-md-2,.py-md-2{padding-bottom:.5rem!important}.pl-md-2,.px-md-2{padding-left:.5rem!important}.p-md-3{padding:1rem!important}.pt-md-3,.py-md-3{padding-top:1rem!important}.pr-md-3,.px-md-3{padding-right:1rem!important}.pb-md-3,.py-md-3{padding-bottom:1rem!important}.pl-md-3,.px-md-3{padding-left:1rem!important}.p-md-4{padding:1.5rem!important}.pt-md-4,.py-md-4{padding-top:1.5rem!important}.pr-md-4,.px-md-4{padding-right:1.5rem!important}.pb-md-4,.py-md-4{padding-bottom:1.5rem!important}.pl-md-4,.px-md-4{padding-left:1.5rem!important}.p-md-5{padding:3rem!important}.pt-md-5,.py-md-5{padding-top:3rem!important}.pr-md-5,.px-md-5{padding-right:3rem!important}.pb-md-5,.py-md-5{padding-bottom:3rem!important}.pl-md-5,.px-md-5{padding-left:3rem!important}.m-md-n1{margin:-.25rem!important}.mt-md-n1,.my-md-n1{margin-top:-.25rem!important}.mr-md-n1,.mx-md-n1{margin-right:-.25rem!important}.mb-md-n1,.my-md-n1{margin-bottom:-.25rem!important}.ml-md-n1,.mx-md-n1{margin-left:-.25rem!important}.m-md-n2{margin:-.5rem!important}.mt-md-n2,.my-md-n2{margin-top:-.5rem!important}.mr-md-n2,.mx-md-n2{margin-right:-.5rem!important}.mb-md-n2,.my-md-n2{margin-bottom:-.5rem!important}.ml-md-n2,.mx-md-n2{margin-left:-.5rem!important}.m-md-n3{margin:-1rem!important}.mt-md-n3,.my-md-n3{margin-top:-1rem!important}.mr-md-n3,.mx-md-n3{margin-right:-1rem!important}.mb-md-n3,.my-md-n3{margin-bottom:-1rem!important}.ml-md-n3,.mx-md-n3{margin-left:-1rem!important}.m-md-n4{margin:-1.5rem!important}.mt-md-n4,.my-md-n4{margin-top:-1.5rem!important}.mr-md-n4,.mx-md-n4{margin-right:-1.5rem!important}.mb-md-n4,.my-md-n4{margin-bottom:-1.5rem!important}.ml-md-n4,.mx-md-n4{margin-left:-1.5rem!important}.m-md-n5{margin:-3rem!important}.mt-md-n5,.my-md-n5{margin-top:-3rem!important}.mr-md-n5,.mx-md-n5{margin-right:-3rem!important}.mb-md-n5,.my-md-n5{margin-bottom:-3rem!important}.ml-md-n5,.mx-md-n5{margin-left:-3rem!important}.m-md-auto{margin:auto!important}.mt-md-auto,.my-md-auto{margin-top:auto!important}.mr-md-auto,.mx-md-auto{margin-right:auto!important}.mb-md-auto,.my-md-auto{margin-bottom:auto!important}.ml-md-auto,.mx-md-auto{margin-left:auto!important}}@media (min-width:992px){.m-lg-0{margin:0!important}.mt-lg-0,.my-lg-0{margin-top:0!important}.mr-lg-0,.mx-lg-0{margin-right:0!important}.mb-lg-0,.my-lg-0{margin-bottom:0!important}.ml-lg-0,.mx-lg-0{margin-left:0!important}.m-lg-1{margin:.25rem!important}.mt-lg-1,.my-lg-1{margin-top:.25rem!important}.mr-lg-1,.mx-lg-1{margin-right:.25rem!important}.mb-lg-1,.my-lg-1{margin-bottom:.25rem!important}.ml-lg-1,.mx-lg-1{margin-left:.25rem!important}.m-lg-2{margin:.5rem!important}.mt-lg-2,.my-lg-2{margin-top:.5rem!important}.mr-lg-2,.mx-lg-2{margin-right:.5rem!important}.mb-lg-2,.my-lg-2{margin-bottom:.5rem!important}.ml-lg-2,.mx-lg-2{margin-left:.5rem!important}.m-lg-3{margin:1rem!important}.mt-lg-3,.my-lg-3{margin-top:1rem!important}.mr-lg-3,.mx-lg-3{margin-right:1rem!important}.mb-lg-3,.my-lg-3{margin-bottom:1rem!important}.ml-lg-3,.mx-lg-3{margin-left:1rem!important}.m-lg-4{margin:1.5rem!important}.mt-lg-4,.my-lg-4{margin-top:1.5rem!important}.mr-lg-4,.mx-lg-4{margin-right:1.5rem!important}.mb-lg-4,.my-lg-4{margin-bottom:1.5rem!important}.ml-lg-4,.mx-lg-4{margin-left:1.5rem!important}.m-lg-5{margin:3rem!important}.mt-lg-5,.my-lg-5{margin-top:3rem!important}.mr-lg-5,.mx-lg-5{margin-right:3rem!important}.mb-lg-5,.my-lg-5{margin-bottom:3rem!important}.ml-lg-5,.mx-lg-5{margin-left:3rem!important}.p-lg-0{padding:0!important}.pt-lg-0,.py-lg-0{padding-top:0!important}.pr-lg-0,.px-lg-0{padding-right:0!important}.pb-lg-0,.py-lg-0{padding-bottom:0!important}.pl-lg-0,.px-lg-0{padding-left:0!important}.p-lg-1{padding:.25rem!important}.pt-lg-1,.py-lg-1{padding-top:.25rem!important}.pr-lg-1,.px-lg-1{padding-right:.25rem!important}.pb-lg-1,.py-lg-1{padding-bottom:.25rem!important}.pl-lg-1,.px-lg-1{padding-left:.25rem!important}.p-lg-2{padding:.5rem!important}.pt-lg-2,.py-lg-2{padding-top:.5rem!important}.pr-lg-2,.px-lg-2{padding-right:.5rem!important}.pb-lg-2,.py-lg-2{padding-bottom:.5rem!important}.pl-lg-2,.px-lg-2{padding-left:.5rem!important}.p-lg-3{padding:1rem!important}.pt-lg-3,.py-lg-3{padding-top:1rem!important}.pr-lg-3,.px-lg-3{padding-right:1rem!important}.pb-lg-3,.py-lg-3{padding-bottom:1rem!important}.pl-lg-3,.px-lg-3{padding-left:1rem!important}.p-lg-4{padding:1.5rem!important}.pt-lg-4,.py-lg-4{padding-top:1.5rem!important}.pr-lg-4,.px-lg-4{padding-right:1.5rem!important}.pb-lg-4,.py-lg-4{padding-bottom:1.5rem!important}.pl-lg-4,.px-lg-4{padding-left:1.5rem!important}.p-lg-5{padding:3rem!important}.pt-lg-5,.py-lg-5{padding-top:3rem!important}.pr-lg-5,.px-lg-5{padding-right:3rem!important}.pb-lg-5,.py-lg-5{padding-bottom:3rem!important}.pl-lg-5,.px-lg-5{padding-left:3rem!important}.m-lg-n1{margin:-.25rem!important}.mt-lg-n1,.my-lg-n1{margin-top:-.25rem!important}.mr-lg-n1,.mx-lg-n1{margin-right:-.25rem!important}.mb-lg-n1,.my-lg-n1{margin-bottom:-.25rem!important}.ml-lg-n1,.mx-lg-n1{margin-left:-.25rem!important}.m-lg-n2{margin:-.5rem!important}.mt-lg-n2,.my-lg-n2{margin-top:-.5rem!important}.mr-lg-n2,.mx-lg-n2{margin-right:-.5rem!important}.mb-lg-n2,.my-lg-n2{margin-bottom:-.5rem!important}.ml-lg-n2,.mx-lg-n2{margin-left:-.5rem!important}.m-lg-n3{margin:-1rem!important}.mt-lg-n3,.my-lg-n3{margin-top:-1rem!important}.mr-lg-n3,.mx-lg-n3{margin-right:-1rem!important}.mb-lg-n3,.my-lg-n3{margin-bottom:-1rem!important}.ml-lg-n3,.mx-lg-n3{margin-left:-1rem!important}.m-lg-n4{margin:-1.5rem!important}.mt-lg-n4,.my-lg-n4{margin-top:-1.5rem!important}.mr-lg-n4,.mx-lg-n4{margin-right:-1.5rem!important}.mb-lg-n4,.my-lg-n4{margin-bottom:-1.5rem!important}.ml-lg-n4,.mx-lg-n4{margin-left:-1.5rem!important}.m-lg-n5{margin:-3rem!important}.mt-lg-n5,.my-lg-n5{margin-top:-3rem!important}.mr-lg-n5,.mx-lg-n5{margin-right:-3rem!important}.mb-lg-n5,.my-lg-n5{margin-bottom:-3rem!important}.ml-lg-n5,.mx-lg-n5{margin-left:-3rem!important}.m-lg-auto{margin:auto!important}.mt-lg-auto,.my-lg-auto{margin-top:auto!important}.mr-lg-auto,.mx-lg-auto{margin-right:auto!important}.mb-lg-auto,.my-lg-auto{margin-bottom:auto!important}.ml-lg-auto,.mx-lg-auto{margin-left:auto!important}}@media (min-width:1200px){.m-xl-0{margin:0!important}.mt-xl-0,.my-xl-0{margin-top:0!important}.mr-xl-0,.mx-xl-0{margin-right:0!important}.mb-xl-0,.my-xl-0{margin-bottom:0!important}.ml-xl-0,.mx-xl-0{margin-left:0!important}.m-xl-1{margin:.25rem!important}.mt-xl-1,.my-xl-1{margin-top:.25rem!important}.mr-xl-1,.mx-xl-1{margin-right:.25rem!important}.mb-xl-1,.my-xl-1{margin-bottom:.25rem!important}.ml-xl-1,.mx-xl-1{margin-left:.25rem!important}.m-xl-2{margin:.5rem!important}.mt-xl-2,.my-xl-2{margin-top:.5rem!important}.mr-xl-2,.mx-xl-2{margin-right:.5rem!important}.mb-xl-2,.my-xl-2{margin-bottom:.5rem!important}.ml-xl-2,.mx-xl-2{margin-left:.5rem!important}.m-xl-3{margin:1rem!important}.mt-xl-3,.my-xl-3{margin-top:1rem!important}.mr-xl-3,.mx-xl-3{margin-right:1rem!important}.mb-xl-3,.my-xl-3{margin-bottom:1rem!important}.ml-xl-3,.mx-xl-3{margin-left:1rem!important}.m-xl-4{margin:1.5rem!important}.mt-xl-4,.my-xl-4{margin-top:1.5rem!important}.mr-xl-4,.mx-xl-4{margin-right:1.5rem!important}.mb-xl-4,.my-xl-4{margin-bottom:1.5rem!important}.ml-xl-4,.mx-xl-4{margin-left:1.5rem!important}.m-xl-5{margin:3rem!important}.mt-xl-5,.my-xl-5{margin-top:3rem!important}.mr-xl-5,.mx-xl-5{margin-right:3rem!important}.mb-xl-5,.my-xl-5{margin-bottom:3rem!important}.ml-xl-5,.mx-xl-5{margin-left:3rem!important}.p-xl-0{padding:0!important}.pt-xl-0,.py-xl-0{padding-top:0!important}.pr-xl-0,.px-xl-0{padding-right:0!important}.pb-xl-0,.py-xl-0{padding-bottom:0!important}.pl-xl-0,.px-xl-0{padding-left:0!important}.p-xl-1{padding:.25rem!important}.pt-xl-1,.py-xl-1{padding-top:.25rem!important}.pr-xl-1,.px-xl-1{padding-right:.25rem!important}.pb-xl-1,.py-xl-1{padding-bottom:.25rem!important}.pl-xl-1,.px-xl-1{padding-left:.25rem!important}.p-xl-2{padding:.5rem!important}.pt-xl-2,.py-xl-2{padding-top:.5rem!important}.pr-xl-2,.px-xl-2{padding-right:.5rem!important}.pb-xl-2,.py-xl-2{padding-bottom:.5rem!important}.pl-xl-2,.px-xl-2{padding-left:.5rem!important}.p-xl-3{padding:1rem!important}.pt-xl-3,.py-xl-3{padding-top:1rem!important}.pr-xl-3,.px-xl-3{padding-right:1rem!important}.pb-xl-3,.py-xl-3{padding-bottom:1rem!important}.pl-xl-3,.px-xl-3{padding-left:1rem!important}.p-xl-4{padding:1.5rem!important}.pt-xl-4,.py-xl-4{padding-top:1.5rem!important}.pr-xl-4,.px-xl-4{padding-right:1.5rem!important}.pb-xl-4,.py-xl-4{padding-bottom:1.5rem!important}.pl-xl-4,.px-xl-4{padding-left:1.5rem!important}.p-xl-5{padding:3rem!important}.pt-xl-5,.py-xl-5{padding-top:3rem!important}.pr-xl-5,.px-xl-5{padding-right:3rem!important}.pb-xl-5,.py-xl-5{padding-bottom:3rem!important}.pl-xl-5,.px-xl-5{padding-left:3rem!important}.m-xl-n1{margin:-.25rem!important}.mt-xl-n1,.my-xl-n1{margin-top:-.25rem!important}.mr-xl-n1,.mx-xl-n1{margin-right:-.25rem!important}.mb-xl-n1,.my-xl-n1{margin-bottom:-.25rem!important}.ml-xl-n1,.mx-xl-n1{margin-left:-.25rem!important}.m-xl-n2{margin:-.5rem!important}.mt-xl-n2,.my-xl-n2{margin-top:-.5rem!important}.mr-xl-n2,.mx-xl-n2{margin-right:-.5rem!important}.mb-xl-n2,.my-xl-n2{margin-bottom:-.5rem!important}.ml-xl-n2,.mx-xl-n2{margin-left:-.5rem!important}.m-xl-n3{margin:-1rem!important}.mt-xl-n3,.my-xl-n3{margin-top:-1rem!important}.mr-xl-n3,.mx-xl-n3{margin-right:-1rem!important}.mb-xl-n3,.my-xl-n3{margin-bottom:-1rem!important}.ml-xl-n3,.mx-xl-n3{margin-left:-1rem!important}.m-xl-n4{margin:-1.5rem!important}.mt-xl-n4,.my-xl-n4{margin-top:-1.5rem!important}.mr-xl-n4,.mx-xl-n4{margin-right:-1.5rem!important}.mb-xl-n4,.my-xl-n4{margin-bottom:-1.5rem!important}.ml-xl-n4,.mx-xl-n4{margin-left:-1.5rem!important}.m-xl-n5{margin:-3rem!important}.mt-xl-n5,.my-xl-n5{margin-top:-3rem!important}.mr-xl-n5,.mx-xl-n5{margin-right:-3rem!important}.mb-xl-n5,.my-xl-n5{margin-bottom:-3rem!important}.ml-xl-n5,.mx-xl-n5{margin-left:-3rem!important}.m-xl-auto{margin:auto!important}.mt-xl-auto,.my-xl-auto{margin-top:auto!important}.mr-xl-auto,.mx-xl-auto{margin-right:auto!important}.mb-xl-auto,.my-xl-auto{margin-bottom:auto!important}.ml-xl-auto,.mx-xl-auto{margin-left:auto!important}}.stretched-link::after{position:absolute;top:0;right:0;bottom:0;left:0;z-index:1;pointer-events:auto;content:"";background-color:rgba(0,0,0,0)}.text-monospace{font-family:SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace!important}.text-justify{text-align:justify!important}.text-wrap{white-space:normal!important}.text-nowrap{white-space:nowrap!important}.text-truncate{overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.text-left{text-align:left!important}.text-right{text-align:right!important}.text-center{text-align:center!important}@media (min-width:576px){.text-sm-left{text-align:left!important}.text-sm-right{text-align:right!important}.text-sm-center{text-align:center!important}}@media (min-width:768px){.text-md-left{text-align:left!important}.text-md-right{text-align:right!important}.text-md-center{text-align:center!important}}@media (min-width:992px){.text-lg-left{text-align:left!important}.text-lg-right{text-align:right!important}.text-lg-center{text-align:center!important}}@media (min-width:1200px){.text-xl-left{text-align:left!important}.text-xl-right{text-align:right!important}.text-xl-center{text-align:center!important}}.text-lowercase{text-transform:lowercase!important}.text-uppercase{text-transform:uppercase!important}.text-capitalize{text-transform:capitalize!important}.font-weight-light{font-weight:300!important}.font-weight-lighter{font-weight:lighter!important}.font-weight-normal{font-weight:400!important}.font-weight-bold{font-weight:700!important}.font-weight-bolder{font-weight:bolder!important}.font-italic{font-style:italic!important}.text-white{color:#fff!important}.text-primary{color:#007bff!important}a.text-primary:focus,a.text-primary:hover{color:#0056b3!important}.text-secondary{color:#6c757d!important}a.text-secondary:focus,a.text-secondary:hover{color:#494f54!important}.text-success{color:#28a745!important}a.text-success:focus,a.text-success:hover{color:#19692c!important}.text-info{color:#17a2b8!important}a.text-info:focus,a.text-info:hover{color:#0f6674!important}.text-warning{color:#ffc107!important}a.text-warning:focus,a.text-warning:hover{color:#ba8b00!important}.text-danger{color:#dc3545!important}a.text-danger:focus,a.text-danger:hover{color:#a71d2a!important}.text-light{color:#f8f9fa!important}a.text-light:focus,a.text-light:hover{color:#cbd3da!important}.text-dark{color:#343a40!important}a.text-dark:focus,a.text-dark:hover{color:#121416!important}.text-body{color:#212529!important}.text-muted{color:#6c757d!important}.text-black-50{color:rgba(0,0,0,.5)!important}.text-white-50{color:rgba(255,255,255,.5)!important}.text-hide{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0}.text-decoration-none{text-decoration:none!important}.text-break{word-break:break-word!important;word-wrap:break-word!important}.text-reset{color:inherit!important}.visible{visibility:visible!important}.invisible{visibility:hidden!important}@media print{*,::after,::before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}abbr[title]::after{content:" (" attr(title) ")"}pre{white-space:pre-wrap!important}blockquote,pre{border:1px solid #adb5bd;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}body{min-width:992px!important}.container{min-width:992px!important}.navbar{display:none}.badge{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #dee2e6!important}.table-dark{color:inherit}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#dee2e6}.table .thead-dark th{color:inherit;border-color:#dee2e6}}

/*
	===============================
			@Import	Function
	===============================
*/
/*
	===============================
			@Import	Mixins
	===============================
*/
html {
  min-height: 100%; }

body {
  color: #888ea8;
  height: 100%;
  font-size: 0.875rem;
  background: #f1f2f3;
  overflow-x: hidden;
  overflow-y: auto;
  letter-spacing: 0.0312rem;
  font-family: 'Quicksand', sans-serif; }

h1, h2, h3, h4, h5, h6 {
  color: #3b3f5c; }

:focus {
  outline: none; }

::-moz-selection {
  /* Code for Firefox */
  color: #4361ee;
  background: transparent; }

::selection {
  color: #4361ee;
  background: transparent; }

p {
  margin-top: 0;
  margin-bottom: 0.625rem;
  color: #515365; }

hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border-top: 1px solid #f1f2f3; }

strong {
  font-weight: 600; }

code {
  color: #e7515a; }

select.form-custom::-ms-expand {
  display: none; }

.custom-file-input:focus ~ .custom-file-label {
  border: 1px solid #ced4da;
  box-shadow: none; }
  .custom-file-input:focus ~ .custom-file-label::after {
    border: none;
    border-left: 1px solid #ced4da; }

.lead a.btn.btn-primary.btn-lg {
  margin-top: 15px;
  border-radius: 4px; }

.jumbotron {
  background-color: #f1f2f3; }

.mark, mark {
  background-color: #fff9ed; }

.code-section-container {
  margin-top: 20px;
  text-align: left; }

.toggle-code-snippet {
  border: none;
  background-color: transparent !important;
  padding: 0px !important;
  box-shadow: none !important;
  color: #888ea8 !important;
  margin-bottom: -24px;
  border-bottom: 1px dashed #bfc9d4;
  border-radius: 0; }
  .toggle-code-snippet svg {
    color: #4361ee; }

.code-section {
  padding: 0;
  height: 0; }

.code-section-container.show-code .code-section {
  margin-top: 20px;
  height: auto; }

.code-section pre {
  margin-bottom: 0;
  height: 0;
  padding: 0;
  border-radius: 6px; }

.code-section-container.show-code .code-section pre {
  height: auto;
  padding: 22px; }

.code-section code {
  color: #fff; }

/*blockquote*/
blockquote.blockquote {
  color: #0e1726;
  padding: 20px 20px 20px 14px;
  font-size: 0.875rem;
  background-color: #ffffff;
  border-bottom-right-radius: 8px;
  border-top-right-radius: 8px;
  border: 1px solid #e0e6ed;
  border-left: 2px solid #4361ee;
  -webkit-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07);
  -moz-box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07);
  box-shadow: 0 4px 6px 0 rgba(85, 85, 85, 0.08), 0 1px 20px 0 rgba(0, 0, 0, 0.07), 0px 1px 11px 0px rgba(0, 0, 0, 0.07); }
  blockquote.blockquote > p {
    margin-bottom: 0; }

blockquote .small:before, blockquote footer:before, blockquote small:before {
  content: '\2014 \00A0'; }

blockquote .small, blockquote footer, blockquote small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #777; }

blockquote.media-object.m-o-border-right {
  border-right: 4px solid #4361ee;
  border-left: none; }

blockquote.media-object .media .usr-img img {
  width: 55px; }

/* Icon List */
.list-icon {
  list-style: none;
  padding: 0;
  margin-bottom: 0; }
  .list-icon li:not(:last-child) {
    margin-bottom: 15px; }
  .list-icon svg {
    width: 18px;
    height: 18px;
    color: #4361ee;
    margin-right: 2px;
    vertical-align: sub; }
  .list-icon .list-text {
    font-size: 14px;
    font-weight: 600;
    color: #515365;
    letter-spacing: 1px; }

a {
  color: #515365;
  outline: none; }
  a:hover {
    color: #555555;
    text-decoration: none; }
  a:focus {
    outline: none;
    text-decoration: none; }

button:focus {
  outline: none; }

textarea {
  outline: none; }
  textarea:focus {
    outline: none; }

.btn-link:hover {
  text-decoration: none; }

span.blue {
  color: #4361ee; }

span.green {
  color: #1abc9c; }

span.red {
  color: #e7515a; }

/*      Form Group Label       */
.form-group label, label {
  font-size: 15px;
  color: #888ea8;
  letter-spacing: 1px; }

/*  Disable forms     */
.custom-control-input:disabled ~ .custom-control-label {
  color: #d3d3d3; }

/*      Form Control       */
.form-control {
  height: auto;
  border: 1px solid #bfc9d4;
  color: #3b3f5c;
  font-size: 15px;
  padding: 8px 10px;
  letter-spacing: 1px;
  height: calc(1.4em + 1.4rem + 2px);
  padding: .75rem 1.25rem;
  border-radius: 6px; }
  .form-control[type="range"] {
    padding: 0; }
  .form-control:focus {
    box-shadow: 0 0 5px 2px rgba(194, 213, 255, 0.619608);
    border-color: #4361ee;
    color: #3b3f5c; }
  .form-control::-webkit-input-placeholder, .form-control::-ms-input-placeholder, .form-control::-moz-placeholder {
    color: #bfc9d4;
    font-size: 15px; }
  .form-control:focus::-webkit-input-placeholder, .form-control:focus::-ms-input-placeholder, .form-control:focus::-moz-placeholder {
    color: #d3d3d3;
    font-size: 15px; }
  .form-control.form-control-lg {
    font-size: 19px;
    padding: 11px 20px; }
  .form-control.form-control-sm {
    padding: 7px 16px;
    font-size: 13px; }

/*      Custom Select       */
.custom-select {
  height: auto;
  border: 1px solid #f1f2f3;
  color: #3b3f5c;
  font-size: 15px;
  padding: 8px 10px;
  letter-spacing: 1px;
  background-color: #f1f2f3; }
  .custom-select.custom-select-lg {
    font-size: 18px;
    padding: 16px 20px; }
  .custom-select.custom-select-sm {
    font-size: 13px;
    padding: 7px 16px; }
  .custom-select:focus {
    box-shadow: none;
    border-color: #4361ee;
    color: #3b3f5c; }

/*      Form Control File       */
.form-control-file {
  width: 100%;
  color: #805dca; }
  .form-control-file::-webkit-file-upload-button {
    letter-spacing: 1px;
    padding: 9px 20px;
    text-shadow: none;
    font-size: 12px;
    color: #fff;
    font-weight: normal;
    white-space: normal;
    word-wrap: break-word;
    transition: .2s ease-out;
    touch-action: manipulation;
    cursor: pointer;
    background-color: #805dca;
    box-shadow: 0px 0px 15px 1px rgba(113, 106, 202, 0.2);
    will-change: opacity, transform;
    transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    border-radius: 4px;
    border: transparent;
    outline: none; }
  .form-control-file::-ms-file-upload-button {
    letter-spacing: 1px;
    padding: 9px 20px;
    text-shadow: none;
    font-size: 14px;
    color: #fff;
    font-weight: normal;
    white-space: normal;
    word-wrap: break-word;
    transition: .2s ease-out;
    touch-action: manipulation;
    cursor: pointer;
    background-color: #805dca;
    box-shadow: 0px 0px 15px 1px rgba(113, 106, 202, 0.2);
    will-change: opacity, transform;
    transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    border-radius: 4px;
    border: transparent;
    outline: none; }
  .form-control-file.form-control-file-rounded::-webkit-file-upload-button {
    -webkit-border-radius: 1.875rem !important;
    -moz-border-radius: 1.875rem !important;
    -ms-border-radius: 1.875rem !important;
    -o-border-radius: 1.875rem !important;
    border-radius: 1.875rem !important; }

select.form-control.form-custom {
  display: inline-block;
  width: 100%;
  height: calc(2.25rem + 2px);
  vertical-align: middle;
  background: #fff url(../img/arrow-down.png) no-repeat right 0.75rem center;
  background-size: 13px 14px;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none; }

/*      Form Control Custom File       */
.custom-file {
  height: auto; }
  .custom-file input {
    height: auto; }

.custom-file-label {
  height: auto;
  border: 1px solid #f1f2f3;
  color: #3b3f5c;
  font-size: 15px;
  padding: 8px 10px;
  letter-spacing: 1px;
  background-color: #f1f2f3; }
  .custom-file-label::after {
    height: auto;
    padding: 8px 12px;
    color: #515365; }

/*      Input Group      */
.input-group button:hover, .input-group .btn:hover, .input-group button:focus, .input-group .btn:focus {
  transform: none; }

.input-group .dropdown-menu {
  border: none;
  border: 1px solid #e0e6ed;
  z-index: 1028;
  box-shadow: none;
  padding: 10px;
  padding: .35rem 0;
  top: 0 !important;
  right: auto;
  border-radius: 8px; }
  .input-group .dropdown-menu a.dropdown-item {
    border-radius: 5px;
    width: 100%;
    padding: 6px 17px;
    clear: both;
    font-weight: 500;
    color: #030305;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
    font-size: 13px; }
    .input-group .dropdown-menu a.dropdown-item:hover {
      color: #2196f3; }
  .input-group .dropdown-menu .dropdown-item:hover {
    color: #2196f3; }

.input-group .dropdown-divider {
  height: 0;
  margin: .5rem 0;
  overflow: hidden;
  border-top: 1px solid #e9ecef; }

.input-group .input-group-prepend .input-group-text {
  border: 1px solid #bfc9d4;
  background-color: #f1f2f3; }
  .input-group .input-group-prepend .input-group-text svg {
    color: #888ea8; }

.input-group:hover .input-group-prepend .input-group-text svg {
  color: #4361ee;
  fill: rgba(27, 85, 226, 0.239216); }

.input-group .input-group-append .input-group-text {
  border: 1px solid #bfc9d4;
  background-color: #f1f2f3; }
  .input-group .input-group-append .input-group-text svg {
    color: #888ea8; }

.input-group:hover .input-group-append .input-group-text svg {
  color: #4361ee;
  fill: rgba(27, 85, 226, 0.239216); }

/*      Input Group append       */
/*      Input Group Append       */
/*      Validation Customization      */
.invalid-feedback {
  color: #e7515a;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 1px; }

.valid-feedback {
  color: #1abc9c;
  font-size: 13px;
  font-weight: 700;
  letter-spacing: 1px; }

.valid-tooltip {
  background-color: #1abc9c; }

.invalid-tooltip {
  background-color: #e7515a; }

.custom-select.is-valid, .form-control.is-valid {
  border-color: #1abc9c;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%231abc9c' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-check'%3e%3cpolyline points='20 6 9 17 4 12'%3e%3c/polyline%3e%3c/svg%3e"); }

.was-validated .custom-select:valid, .was-validated .form-control:valid {
  border-color: #1abc9c;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%231abc9c' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-check'%3e%3cpolyline points='20 6 9 17 4 12'%3e%3c/polyline%3e%3c/svg%3e"); }

.custom-control-input.is-valid ~ .custom-control-label, .was-validated .custom-control-input:valid ~ .custom-control-label {
  color: #1abc9c; }

.form-control.is-invalid, .was-validated .form-control:invalid {
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23e7515a' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-x'%3e%3cline x1='18' y1='6' x2='6' y2='18'%3e%3c/line%3e%3cline x1='6' y1='6' x2='18' y2='18'%3e%3c/line%3e%3c/svg%3e"); }

.custom-control-input.is-invalid ~ .custom-control-label, .was-validated .custom-control-input:invalid ~ .custom-control-label {
  color: #e7515a; }

.dropdown-toggle:after, .dropup .dropdown-toggle::after, .dropright .dropdown-toggle::after, .dropleft .dropdown-toggle::before {
  display: none; }

.dropdown-toggle svg.feather[class*="feather-chevron-"] {
  width: 15px;
  height: 15px;
  vertical-align: middle; }

.btn {
  padding: 0.4375rem 1.25rem;
  text-shadow: none;
  font-size: 14px;
  color: #3b3f5c;
  font-weight: normal;
  white-space: normal;
  word-wrap: break-word;
  transition: .2s ease-out;
  touch-action: manipulation;
  cursor: pointer;
  background-color: #f1f2f3;
  box-shadow: 0px 5px 20px 0 rgba(0, 0, 0, 0.1);
  will-change: opacity, transform;
  transition: all 0.3s ease-out;
  -webkit-transition: all 0.3s ease-out; }
  .btn svg {
    width: 20px;
    height: 20px;
    vertical-align: bottom; }
  .btn.rounded-circle {
    height: 40px;
    width: 40px;
    padding: 8px 8px; }
  .btn:hover, .btn:focus {
    color: #3b3f5c;
    background-color: #f1f2f3;
    border-color: #d3d3d3;
    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 5px 0 #e0e6ed,0 2px 10px 0 #e0e6ed;
    -webkit-transform: translateY(-3px);
    transform: translateY(-3px); }

.btn-group .btn:hover, .btn-group .btn:focus {
  -webkit-transform: none;
  transform: none; }

.btn.disabled, .btn.btn[disabled] {
  background-color: #f1f2f3;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  border: 1px solid rgba(0, 0, 0, 0.13); }

.btn.disabled:hover, .btn.btn[disabled]:hover {
  cursor: not-allowed; }

.btn .caret {
  border-top-color: #0e1726;
  margin-top: 0;
  margin-left: 3px;
  vertical-align: middle; }

.btn + .caret, .btn + .dropdown-toggle .caret {
  margin-left: 0; }

.btn-group > .btn, .btn-group .btn {
  padding: 8px 14px; }

.btn-group-lg > .btn, .btn-group-lg .btn {
  font-size: 1.125rem; }

.btn-group-lg > .btn {
  padding: .625rem 1.5rem;
  font-size: 16px; }

.btn-lg {
  padding: .625rem 1.5rem;
  font-size: 16px; }

.btn-group > .btn.btn-lg, .btn-group .btn.btn-lg {
  padding: .625rem 1.5rem;
  font-size: 16px; }

.btn-group-lg > .btn, .btn-group-lg .btn {
  font-size: 1.125rem; }

.btn-group-sm > .btn, .btn-sm {
  font-size: 0.6875rem; }

.btn-group > .btn.btn-sm, .btn-group .btn.btn-sm {
  font-size: 0.6875rem; }

.btn-group .dropdown-menu {
  border: none;
  border: 1px solid #e0e6ed;
  z-index: 1028;
  box-shadow: none;
  padding: 10px;
  padding: .35rem 0;
  top: 0 !important;
  right: auto;
  border-radius: 8px; }
  .btn-group .dropdown-menu a.dropdown-item {
    border-radius: 5px;
    width: 100%;
    padding: 6px 17px;
    clear: both;
    font-weight: 500;
    color: #030305;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
    font-size: 13px; }
    .btn-group .dropdown-menu a.dropdown-item:hover {
      color: #2196f3; }
    .btn-group .dropdown-menu a.dropdown-item svg {
      cursor: pointer;
      color: #888ea8;
      margin-right: 6px;
      vertical-align: middle;
      width: 20px;
      height: 20px;
      fill: rgba(0, 23, 55, 0.08); }
    .btn-group .dropdown-menu a.dropdown-item:hover svg {
      color: #4361ee; }

.dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu {
  border: none;
  border: 1px solid #e0e6ed;
  z-index: 899;
  box-shadow: none;
  padding: 10px;
  padding: .35rem 0;
  transition: top 0.3s ease-in-out 0s, opacity 0.3s ease-in-out 0s, visibility 0.3s ease-in-out 0s;
  opacity: 0;
  visibility: hidden;
  display: block !important;
  transform: none !important;
  top: 0 !important;
  right: 0;
  left: auto !important;
  border-radius: 8px; }
  .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu.right {
    right: auto;
    left: auto !important; }
  .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu.left {
    right: 0;
    left: auto !important; }
  .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu.show {
    opacity: 1;
    visibility: visible;
    top: 21px !important; }
  .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu a.dropdown-item {
    border-radius: 5px;
    display: block;
    width: 100%;
    padding: 6px 17px;
    clear: both;
    font-weight: 500;
    color: #030305;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
    font-size: 13px; }
    .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu a.dropdown-item svg {
      width: 18px;
      height: 18px;
      margin-right: 4px;
      vertical-align: bottom;
      color: #888ea8; }
    .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu a.dropdown-item:hover svg {
      color: #2196f3; }
    .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu a.dropdown-item.active, .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu a.dropdown-item:active {
      background-color: transparent;
      color: #3b3f5c;
      font-weight: 700; }
    .dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu a.dropdown-item:hover {
      color: #2196f3; }

.btn-primary:not(:disabled):not(.disabled).active:focus, .btn-primary:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-primary.dropdown-toggle:focus {
  box-shadow: none; }

.btn-secondary:not(:disabled):not(.disabled).active:focus, .btn-secondary:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: none; }

.btn-success:not(:disabled):not(.disabled).active:focus, .btn-success:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-success.dropdown-toggle:focus {
  box-shadow: none; }

.btn-info:not(:disabled):not(.disabled).active:focus, .btn-info:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-info.dropdown-toggle:focus {
  box-shadow: none; }

.btn-danger:not(:disabled):not(.disabled).active:focus, .btn-danger:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-danger.dropdown-toggle:focus {
  box-shadow: none; }

.btn-warning:not(:disabled):not(.disabled).active:focus, .btn-warning:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-warning.dropdown-toggle:focus {
  box-shadow: none; }

.btn-secondary:not(:disabled):not(.disabled).active:focus, .btn-secondary:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-secondary.dropdown-toggle:focus {
  box-shadow: none; }

.btn-dark:not(:disabled):not(.disabled).active:focus, .btn-dark:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-dark.dropdown-toggle:focus {
  box-shadow: none; }

.btn-outline-primary:not(:disabled):not(.disabled).active:focus, .btn-outline-primary:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-outline-primary.dropdown-toggle:focus {
  box-shadow: none; }

.btn-outline-success:not(:disabled):not(.disabled).active:focus, .btn-outline-success:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-outline-success.dropdown-toggle:focus {
  box-shadow: none; }

.btn-outline-info:not(:disabled):not(.disabled).active:focus, .btn-outline-info:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-outline-info.dropdown-toggle:focus {
  box-shadow: none; }

.btn-outline-danger:not(:disabled):not(.disabled).active:focus, .btn-outline-danger:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-outline-danger.dropdown-toggle:focus {
  box-shadow: none; }

.btn-outline-warning:not(:disabled):not(.disabled).active:focus, .btn-outline-warning:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-outline-warning.dropdown-toggle:focus {
  box-shadow: none; }

.btn-outline-secondary:not(:disabled):not(.disabled).active:focus, .btn-outline-secondary:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-outline-secondary.dropdown-toggle:focus {
  box-shadow: none; }

.btn-outline-dark:not(:disabled):not(.disabled).active:focus, .btn-outline-dark:not(:disabled):not(.disabled):active:focus {
  box-shadow: none; }

.show > .btn-outline-dark.dropdown-toggle:focus {
  box-shadow: none; }

.btn.focus, .btn:focus {
  box-shadow: none; }

.btn-success:focus, .btn-info:focus, .btn-danger:focus, .btn-warning:focus, .btn-secondary:focus, .btn-dark:focus, .btn-outline-success:focus, .btn-outline-info:focus, .btn-outline-danger:focus, .btn-outline-warning:focus, .btn-outline-secondary:focus, .btn-outline-dark:focus .btn-light-default:focus, .btn-light-primary:focus, .btn-light-success:focus, .btn-light-info:focus, .btn-light-danger:focus, .btn-light-warning:focus, .btn-light-secondary:focus, .btn-light-dark:focus {
  box-shadow: none; }

/*      Default Buttons       */
.btn-primary {
  color: #fff !important;
  background-color: #4361ee !important;
  border-color: #4361ee;
  box-shadow: 0 10px 20px -10px #4361ee; }
  .btn-primary:hover, .btn-primary:focus {
    color: #fff !important;
    background-color: #4361ee;
    box-shadow: none;
    border-color: #4361ee; }
  .btn-primary:active, .btn-primary.active {
    background-color: #4361ee;
    border-top: 1px solid #4361ee; }
  .btn-primary.disabled, .btn-primary.btn[disabled], .btn-primary:disabled {
    background-color: #4361ee;
    border-color: #4361ee;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none; }
  .btn-primary.active.focus, .btn-primary.active:focus, .btn-primary.active:hover {
    color: #fff !important;
    background-color: #2aebcb;
    border-color: #2aebcb; }
  .btn-primary.focus:active {
    color: #fff !important;
    background-color: #2aebcb;
    border-color: #2aebcb; }
  .btn-primary:active:focus, .btn-primary:active:hover {
    color: #fff !important;
    background-color: #2aebcb;
    border-color: #2aebcb; }

.open > .dropdown-toggle.btn-primary.focus, .open > .dropdown-toggle.btn-primary:focus, .open > .dropdown-toggle.btn-primary:hover {
  color: #fff !important;
  background-color: #2aebcb;
  border-color: #2aebcb; }

.btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active {
  color: #fff !important;
  background-color: #4361ee;
  border-color: #4361ee; }

.show > .btn-primary.dropdown-toggle {
  color: #fff !important;
  background-color: #4361ee;
  border-color: #4361ee; }

.btn-primary .caret {
  border-top-color: #fff; }

.btn-group.open .btn-primary.dropdown-toggle {
  background-color: #eaf1ff; }

.btn-secondary {
  color: #fff !important;
  background-color: #805dca;
  border-color: #805dca;
  box-shadow: 0 10px 20px -10px #805dca; }
  .btn-secondary:hover, .btn-secondary:focus {
    color: #fff !important;
    background-color: #805dca;
    box-shadow: none;
    border-color: #805dca; }
  .btn-secondary:active, .btn-secondary.active {
    background-color: #805dca;
    border-top: 1px solid #805dca; }
  .btn-secondary:not(:disabled):not(.disabled).active, .btn-secondary:not(:disabled):not(.disabled):active {
    color: #fff !important;
    background-color: #805dca;
    border-color: #805dca; }

.show > .btn-secondary.dropdown-toggle {
  color: #fff !important;
  background-color: #805dca;
  border-color: #805dca; }

.btn-secondary.disabled, .btn-secondary.btn[disabled], .btn-secondary:disabled {
  background-color: #805dca;
  border-color: #805dca;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none; }

.btn-secondary .caret {
  border-top-color: #fff; }

.btn-info {
  color: #fff !important;
  background-color: #2196f3;
  border-color: #2196f3;
  box-shadow: 0 10px 20px -10px #2196f3; }
  .btn-info:hover, .btn-info:focus {
    color: #fff !important;
    background-color: #2196f3;
    box-shadow: none;
    border-color: #2196f3; }
  .btn-info:active, .btn-info.active {
    background-color: #2196f3;
    border-top: 1px solid #2196f3; }
  .btn-info:not(:disabled):not(.disabled).active, .btn-info:not(:disabled):not(.disabled):active {
    color: #fff !important;
    background-color: #2196f3;
    border-color: #2196f3; }

.show > .btn-info.dropdown-toggle {
  color: #fff !important;
  background-color: #2196f3;
  border-color: #2196f3; }

.btn-info.disabled, .btn-info.btn[disabled], .btn-info:disabled {
  background-color: #2196f3;
  border-color: #2196f3;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none; }

.btn-info.active.focus, .btn-info.active:focus, .btn-info.active:hover {
  color: #fff !important;
  background-color: #2196f3;
  border-color: #2196f3; }

.btn-info.focus:active {
  color: #fff !important;
  background-color: #2196f3;
  border-color: #2196f3; }

.btn-info:active:focus, .btn-info:active:hover {
  color: #fff !important;
  background-color: #2196f3;
  border-color: #2196f3; }

.open > .dropdown-toggle.btn-info.focus, .open > .dropdown-toggle.btn-info:focus, .open > .dropdown-toggle.btn-info:hover {
  color: #fff !important;
  background-color: #2196f3;
  border-color: #2196f3; }

.btn-info .caret {
  border-top-color: #fff; }

.btn-group.open .btn-info.dropdown-toggle {
  background-color: #e7f7ff; }

.btn-warning {
  color: #fff !important;
  background-color: #e2a03f;
  border-color: #e2a03f;
  box-shadow: 0 10px 20px -10px #e2a03f; }
  .btn-warning:hover, .btn-warning:focus {
    color: #fff !important;
    background-color: #e2a03f;
    box-shadow: none;
    border-color: #e2a03f; }
  .btn-warning:active, .btn-warning.active {
    background-color: #e2a03f;
    border-top: 1px solid #e2a03f; }
  .btn-warning:not(:disabled):not(.disabled).active, .btn-warning:not(:disabled):not(.disabled):active {
    color: #0e1726;
    background-color: #e2a03f;
    border-color: #e2a03f; }

.show > .btn-warning.dropdown-toggle {
  color: #0e1726;
  background-color: #e2a03f;
  border-color: #e2a03f; }

.btn-warning.disabled, .btn-warning.btn[disabled], .btn-warning:disabled {
  background-color: #e2a03f;
  border-color: #e2a03f;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none; }

.btn-warning.active.focus, .btn-warning.active:focus, .btn-warning.active:hover {
  color: #fff !important;
  background-color: #e2a03f;
  border-color: #e2a03f; }

.btn-warning.focus:active {
  color: #fff !important;
  background-color: #e2a03f;
  border-color: #e2a03f; }

.btn-warning:active:focus, .btn-warning:active:hover {
  color: #fff !important;
  background-color: #e2a03f;
  border-color: #e2a03f; }

.open > .dropdown-toggle.btn-warning.focus, .open > .dropdown-toggle.btn-warning:focus, .open > .dropdown-toggle.btn-warning:hover {
  color: #fff !important;
  background-color: #e2a03f;
  border-color: #e2a03f; }

.btn-warning .caret {
  border-top-color: #fff; }

.btn-group.open .btn-warning.dropdown-toggle {
  background-color: #df8505; }

.btn-danger {
  color: #fff !important;
  background-color: #e7515a;
  border-color: #e7515a;
  box-shadow: 0 10px 20px -10px #e7515a; }
  .btn-danger:hover, .btn-danger:focus {
    color: #fff !important;
    background-color: #e7515a;
    box-shadow: none;
    border-color: #e7515a; }
  .btn-danger:active, .btn-danger.active {
    background-color: #e7515a;
    border-top: 1px solid #e7515a; }
  .btn-danger:not(:disabled):not(.disabled).active, .btn-danger:not(:disabled):not(.disabled):active {
    color: #fff !important;
    background-color: #e7515a;
    border-color: #e7515a; }

.show > .btn-danger.dropdown-toggle {
  color: #fff !important;
  background-color: #e7515a;
  border-color: #e7515a; }

.btn-danger.disabled, .btn-danger.btn[disabled], .btn-danger:disabled {
  background-color: #e7515a;
  border-color: #e7515a;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none; }

.btn-danger.active.focus, .btn-danger.active:focus, .btn-danger.active:hover {
  color: #fff !important;
  background-color: #c00;
  border-color: #c00; }

.btn-danger.focus:active {
  color: #fff !important;
  background-color: #c00;
  border-color: #c00; }

.btn-danger:active:focus, .btn-danger:active:hover {
  color: #fff !important;
  background-color: #c00;
  border-color: #c00; }

.open > .dropdown-toggle.btn-danger.focus, .open > .dropdown-toggle.btn-danger:focus, .open > .dropdown-toggle.btn-danger:hover {
  color: #fff !important;
  background-color: #c00;
  border-color: #c00; }

.btn-danger .caret {
  border-top-color: #fff; }

.btn-group.open .btn-danger.dropdown-toggle {
  background-color: #a9302a; }

.btn-dark {
  color: #fff !important;
  background-color: #3b3f5c;
  border-color: #3b3f5c;
  box-shadow: 0 10px 20px -10px #3b3f5c; }
  .btn-dark:hover, .btn-dark:focus {
    color: #fff !important;
    background-color: #3b3f5c;
    box-shadow: none;
    border-color: #3b3f5c; }
  .btn-dark:active, .btn-dark.active {
    background-color: #3b3f5c;
    border-top: 1px solid #3b3f5c; }
  .btn-dark:not(:disabled):not(.disabled).active, .btn-dark:not(:disabled):not(.disabled):active {
    color: #fff !important;
    background-color: #3b3f5c;
    border-color: #3b3f5c; }

.show > .btn-dark.dropdown-toggle {
  color: #fff !important;
  background-color: #3b3f5c;
  border-color: #3b3f5c; }

.btn-dark.disabled, .btn-dark.btn[disabled], .btn-dark:disabled {
  background-color: #3b3f5c;
  border-color: #3b3f5c;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none; }

.btn-dark .caret {
  border-top-color: #fff; }

.btn-group.open .btn-dark.dropdown-toggle {
  background-color: #484848; }

.btn-success {
  color: #fff !important;
  background-color: #1abc9c;
  border-color: #1abc9c;
  box-shadow: 0 10px 20px -10px #1abc9c; }
  .btn-success:hover, .btn-success:focus {
    color: #fff !important;
    background-color: #1abc9c;
    box-shadow: none;
    border-color: #1abc9c; }
  .btn-success:active, .btn-success.active {
    background-color: #1abc9c;
    border-top: 1px solid #1abc9c; }
  .btn-success:not(:disabled):not(.disabled).active, .btn-success:not(:disabled):not(.disabled):active {
    color: #fff !important;
    background-color: #1abc9c;
    border-color: #1abc9c; }

.show > .btn-success.dropdown-toggle {
  color: #fff !important;
  background-color: #1abc9c;
  border-color: #1abc9c; }

.btn-success.disabled, .btn-success.btn[disabled], .btn-success:disabled {
  background-color: #1abc9c;
  border-color: #1abc9c;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none; }

.btn-success.active.focus, .btn-success.active:focus, .btn-success.active:hover {
  color: #fff !important;
  background-color: #17c678;
  border-color: #17c678; }

.btn-success.focus:active {
  color: #fff !important;
  background-color: #17c678;
  border-color: #17c678; }

.btn-success:active:focus, .btn-success:active:hover {
  color: #fff !important;
  background-color: #17c678;
  border-color: #17c678; }

.open > .dropdown-toggle.btn-success.focus, .open > .dropdown-toggle.btn-success:focus, .open > .dropdown-toggle.btn-success:hover {
  color: #fff !important;
  background-color: #17c678;
  border-color: #17c678; }

.btn-success .caret {
  border-top-color: #fff; }

/*-----/Button Light Colors------*/
.btn.box-shadow-none {
  border: none; }
  .btn.box-shadow-none:hover, .btn.box-shadow-none:focus {
    border: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    background-color: transparent; }

.box-shadow-none {
  -webkit-box-shadow: none !important;
  -moz-box-shadow: none !important;
  box-shadow: none !important; }

.btn.box-shadow-none:not(:disabled):not(.disabled).active, .btn.box-shadow-none:not(:disabled):not(.disabled):active {
  border: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  background-color: transparent; }

.show > .btn.box-shadow-none.dropdown-toggle {
  border: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  background-color: transparent; }

.btn-group.open .btn-success.dropdown-toggle {
  background-color: #499249; }

.btn-dismiss {
  color: #0e1726;
  background-color: #fff !important;
  border-color: #fff;
  padding: 3px 7px; }
  .btn-dismiss:hover, .btn-dismiss:focus {
    color: #0e1726;
    background-color: #fff; }
  .btn-dismiss:active, .btn-dismiss.active {
    background-color: #fff;
    border-top: 1px solid #fff; }

.btn-group > .btn i {
  margin-right: 3px; }

.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
  -webkit-box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.16), 0 0px 0px 0 rgba(0, 0, 0, 0.12);
  -moz-box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.16), 0 0px 0px 0 rgba(0, 0, 0, 0.12);
  box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.16), 0 0px 0px 0 rgba(0, 0, 0, 0.12); }

.btn-group > .btn + .dropdown-toggle {
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none; }
  .btn-group > .btn + .dropdown-toggle.btn-primary {
    border-left: 1px solid #4468fd; }
  .btn-group > .btn + .dropdown-toggle.btn-success {
    border-left: 1px solid #a3c66f; }
  .btn-group > .btn + .dropdown-toggle.btn-info {
    border-left: 1px solid #49acfb; }
  .btn-group > .btn + .dropdown-toggle.btn-warning {
    border-left: 1px solid #f5b455; }
  .btn-group > .btn + .dropdown-toggle.btn-danger {
    border-left: 1px solid #f1848b; }
  .btn-group > .btn + .dropdown-toggle.btn-dark {
    border-left: 1px solid #70767a; }
  .btn-group > .btn + .dropdown-toggle.btn-secondary {
    border-left: 1px solid #8353dc; }

.btn-group.dropleft .dropdown-toggle-split {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.btn-group.dropleft .btn-primary:not(.dropdown-toggle-split) {
  border-left: 1px solid #4468fd; }

.btn-group.dropleft .btn-success:not(.dropdown-toggle-split) {
  border-left: 1px solid #a3c66f; }

.btn-group.dropleft .btn-info:not(.dropdown-toggle-split) {
  border-left: 1px solid #49acfb; }

.btn-group.dropleft .btn-warning:not(.dropdown-toggle-split) {
  border-left: 1px solid #f5b455; }

.btn-group.dropleft .btn-danger:not(.dropdown-toggle-split) {
  border-left: 1px solid #f1848b; }

.btn-group.dropleft .btn-dark:not(.dropdown-toggle-split) {
  border-left: 1px solid #70767a; }

.btn-group.dropleft .btn-secondary:not(.dropdown-toggle-split) {
  border-left: 1px solid #8353dc; }

/*
    Btn group dropdown-toggle
*/
.btn .badge.badge-align-right {
  position: absolute;
  top: -1px;
  right: 8px; }

.dropup .btn .caret {
  border-bottom-color: #0e1726; }

.btn-outline-primary:not(:disabled):not(.disabled).active, .btn-outline-primary:not(:disabled):not(.disabled):active {
  background-color: #4361ee;
  color: #fff !important; }

.show > .btn-outline-primary.dropdown-toggle {
  background-color: #4361ee;
  color: #fff !important; }

.btn-outline-success:not(:disabled):not(.disabled).active, .btn-outline-success:not(:disabled):not(.disabled):active {
  background-color: #1abc9c;
  color: #fff !important; }

.show > .btn-outline-success.dropdown-toggle {
  background-color: #1abc9c;
  color: #fff !important; }

.btn-outline-info:not(:disabled):not(.disabled).active, .btn-outline-info:not(:disabled):not(.disabled):active {
  background-color: #2196f3;
  color: #fff !important; }

.show > .btn-outline-info.dropdown-toggle {
  background-color: #2196f3;
  color: #fff !important; }

.btn-outline-danger:not(:disabled):not(.disabled).active, .btn-outline-danger:not(:disabled):not(.disabled):active {
  background-color: #e7515a;
  color: #fff !important; }

.show > .btn-outline-danger.dropdown-toggle {
  background-color: #e7515a;
  color: #fff !important; }

.btn-outline-warning:not(:disabled):not(.disabled).active, .btn-outline-warning:not(:disabled):not(.disabled):active {
  background-color: #e2a03f;
  color: #fff !important; }

.show > .btn-outline-warning.dropdown-toggle {
  background-color: #e2a03f;
  color: #fff !important; }

.btn-outline-secondary:not(:disabled):not(.disabled).active, .btn-outline-secondary:not(:disabled):not(.disabled):active {
  background-color: #805dca;
  color: #fff !important; }

.show > .btn-outline-secondary.dropdown-toggle {
  background-color: #805dca;
  color: #fff !important; }

.btn-outline-dark:not(:disabled):not(.disabled).active, .btn-outline-dark:not(:disabled):not(.disabled):active {
  background-color: #3b3f5c;
  color: #fff !important; }

.show > .btn-outline-dark.dropdown-toggle {
  background-color: #3b3f5c;
  color: #fff !important; }

.show > .btn-outline-primary.dropdown-toggle:after, .show > .btn-outline-success.dropdown-toggle:after, .show > .btn-outline-info.dropdown-toggle:after, .show > .btn-outline-danger.dropdown-toggle:after, .show > .btn-outline-warning.dropdown-toggle:after, .show > .btn-outline-secondary.dropdown-toggle:after, .show > .btn-outline-dark.dropdown-toggle:after, .show > .btn-outline-primary.dropdown-toggle:before, .show > .btn-outline-success.dropdown-toggle:before, .show > .btn-outline-info.dropdown-toggle:before, .show > .btn-outline-danger.dropdown-toggle:before, .show > .btn-outline-warning.dropdown-toggle:before, .show > .btn-outline-secondary.dropdown-toggle:before, .show > .btn-outline-dark.dropdown-toggle:before {
  color: #fff !important; }

.btn-outline-primary {
  border: 1px solid #4361ee !important;
  color: #4361ee !important;
  background-color: transparent;
  box-shadow: none; }

.btn-outline-info {
  border: 1px solid #2196f3 !important;
  color: #2196f3 !important;
  background-color: transparent;
  box-shadow: none; }

.btn-outline-warning {
  border: 1px solid #e2a03f !important;
  color: #e2a03f !important;
  background-color: transparent;
  box-shadow: none; }

.btn-outline-success {
  border: 1px solid #1abc9c !important;
  color: #1abc9c !important;
  background-color: transparent;
  box-shadow: none; }

.btn-outline-danger {
  border: 1px solid #e7515a !important;
  color: #e7515a !important;
  background-color: transparent;
  box-shadow: none; }

.btn-outline-secondary {
  border: 1px solid #805dca !important;
  color: #805dca !important;
  background-color: transparent;
  box-shadow: none; }

.btn-outline-dark {
  border: 1px solid #3b3f5c !important;
  color: #3b3f5c !important;
  background-color: transparent;
  box-shadow: none; }

.btn-outline-primary:hover, .btn-outline-info:hover, .btn-outline-warning:hover, .btn-outline-success:hover, .btn-outline-danger:hover, .btn-outline-secondary:hover, .btn-outline-dark:hover {
  box-shadow: 0px 5px 20px 0 rgba(0, 0, 0, 0.1); }

.btn-outline-primary:hover {
  color: #fff !important;
  background-color: #4361ee;
  box-shadow: 0 10px 20px -10px #4361ee; }

.btn-outline-info:hover {
  color: #fff !important;
  background-color: #2196f3;
  box-shadow: 0 10px 20px -10px #2196f3; }

.btn-outline-warning:hover {
  color: #fff !important;
  background-color: #e2a03f;
  box-shadow: 0 10px 20px -10px #e2a03f; }

.btn-outline-success:hover {
  color: #fff !important;
  background-color: #1abc9c;
  box-shadow: 0 10px 20px -10px #1abc9c; }

.btn-outline-danger:hover {
  color: #fff !important;
  background-color: #e7515a;
  box-shadow: 0 10px 20px -10px #e7515a; }

.btn-outline-secondary:hover {
  color: #fff !important;
  background-color: #805dca;
  box-shadow: 0 10px 20px -10px #805dca; }

.btn-outline-dark:hover {
  color: #fff !important;
  background-color: #3b3f5c;
  box-shadow: 0 10px 20px -10px #3b3f5c; }

/*      Dropdown Toggle       */
.btn-rounded {
  -webkit-border-radius: 1.875rem !important;
  -moz-border-radius: 1.875rem !important;
  -ms-border-radius: 1.875rem !important;
  -o-border-radius: 1.875rem !important;
  border-radius: 1.875rem !important; }

/*
    ===========================
        Data Marker ( dot )
    ===========================
*/
.data-marker {
  padding: 2px;
  border-radius: 50%;
  font-size: 18px;
  display: inline-flex;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  align-items: center;
  justify-content: center; }

.data-marker-success {
  background-color: #1abc9c; }

.data-marker-warning {
  background-color: #e2a03f; }

.data-marker-danger, .data-marker-info, .data-marker-dark {
  background-color: #e7515a; }

.badge {
  font-weight: 600;
  line-height: 1.4;
  padding: 3px 6px;
  font-size: 12px;
  font-weight: 600;
  transition: all 0.3s ease-out;
  -webkit-transition: all 0.3s ease-out; }
  .badge:hover {
    transition: all 0.3s ease-out;
    -webkit-transition: all 0.3s ease-out;
    -webkit-transform: translateY(-3px);
    transform: translateY(-3px); }
  .badge.badge-enabled {
    background-color: #1abc9c;
    color: #fff; }
  .badge.badge-disable {
    background-color: #e7515a;
    color: #fff; }

.badge-pills {
  border-radius: 30px; }

.badge-classic {
  border-radius: 0; }

.badge-collapsed-img img {
  width: 40px;
  height: 40px;
  border-radius: 20px;
  border: 2px solid #ffffff;
  box-shadow: 0px 0px 15px 1px rgba(113, 106, 202, 0.3);
  margin-left: -21px; }

.badge-collapsed-img.badge-tooltip img {
  width: 40px;
  height: 40px;
  border-radius: 20px;
  border: 2px solid #ffffff;
  box-shadow: 0px 0px 15px 1px rgba(113, 106, 202, 0.3);
  margin-left: -21px;
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease; }
  .badge-collapsed-img.badge-tooltip img:hover {
    -webkit-transform: translateY(-5px) scale(1.02);
    transform: translateY(-5px) scale(1.02); }

.badge-collapsed-img.translateY-axis img {
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease; }
  .badge-collapsed-img.translateY-axis img:hover {
    -webkit-transform: translateY(-5px) scale(1.02);
    transform: translateY(-5px) scale(1.02); }

.badge-collapsed-img.rectangle-collapsed img {
  width: 45px;
  height: 32px; }

.badge-collapsed-img.translateX-axis img {
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease; }
  .badge-collapsed-img.translateX-axis img:hover {
    -webkit-transform: translateX(5px) scale(1.02);
    transform: translateX(5px) scale(1.02); }

.badge-primary {
  color: #fff;
  background-color: #4361ee; }

.badge-info {
  color: #fff;
  background-color: #2196f3; }

.badge-success {
  color: #fff;
  background-color: #1abc9c; }

.badge-danger {
  color: #fff;
  background-color: #e7515a; }

.badge-warning {
  color: #fff;
  background-color: #e2a03f; }

.badge-dark {
  color: #fff;
  background-color: #3b3f5c; }

.badge-secondary {
  background-color: #805dca; }

.outline-badge-primary {
  color: #4361ee;
  background-color: transparent;
  border: 1px solid #4361ee; }

.outline-badge-info {
  color: #2196f3;
  background-color: transparent;
  border: 1px solid #2196f3; }

.outline-badge-success {
  color: #1abc9c;
  background-color: transparent;
  border: 1px solid #1abc9c; }

.outline-badge-danger {
  color: #e7515a;
  background-color: transparent;
  border: 1px solid #e7515a; }

.outline-badge-warning {
  color: #e2a03f;
  background-color: transparent;
  border: 1px solid #e2a03f; }

.outline-badge-dark {
  color: #3b3f5c;
  background-color: transparent;
  border: 1px solid #3b3f5c; }

.outline-badge-secondary {
  color: #805dca;
  background-color: transparent;
  border: 1px solid #805dca; }

.outline-badge-primary:focus, .outline-badge-primary:hover {
  background-color: #eaf1ff;
  color: #4361ee; }

.outline-badge-secondary:focus, .outline-badge-secondary:hover {
  color: #805dca;
  background-color: #f3effc; }

.outline-badge-success:focus, .outline-badge-success:hover {
  color: #1abc9c;
  background-color: #ddf5f0; }

.outline-badge-danger:focus, .outline-badge-danger:hover {
  color: #e7515a;
  background-color: #fff5f5; }

.outline-badge-warning:focus, .outline-badge-warning:hover {
  color: #e2a03f;
  background-color: #fff9ed; }

.outline-badge-info:focus, .outline-badge-info:hover {
  color: #2196f3;
  background-color: #e7f7ff; }

.outline-badge-dark:focus, .outline-badge-dark:hover {
  color: #3b3f5c;
  background-color: #e3e4eb; }

/*      Link     */
.badge[class*="link-badge-"] {
  cursor: pointer; }

.link-badge-primary {
  color: #4361ee;
  background-color: transparent;
  border: 1px solid transparent; }

.link-badge-info {
  color: #2196f3;
  background-color: transparent;
  border: 1px solid transparent; }

.link-badge-success {
  color: #1abc9c;
  background-color: transparent;
  border: 1px solid transparent; }

.link-badge-danger {
  color: #e7515a;
  background-color: transparent;
  border: 1px solid transparent; }

.link-badge-warning {
  color: #e2a03f;
  background-color: transparent;
  border: 1px solid transparent; }

.link-badge-dark {
  color: #3b3f5c;
  background-color: transparent;
  border: 1px solid transparent; }

.link-badge-secondary {
  color: #805dca;
  background-color: transparent;
  border: 1px solid transparent; }

.link-badge-primary:focus, .link-badge-primary:hover {
  color: #4361ee;
  background-color: transparent; }

.link-badge-secondary:focus, .link-badge-secondary:hover {
  color: #6f51ea;
  background-color: transparent; }

.link-badge-success:focus, .link-badge-success:hover {
  color: #2ea37d;
  background-color: transparent; }

.link-badge-danger:focus, .link-badge-danger:hover {
  color: #e7515a;
  background-color: transparent; }

.link-badge-warning:focus, .link-badge-warning:hover {
  color: #dea82a;
  background-color: transparent; }

.link-badge-info:focus, .link-badge-info:hover {
  color: #009eda;
  background-color: transparent; }

.link-badge-dark:focus, .link-badge-dark:hover {
  color: #454656;
  background-color: transparent; }

/* Custom Dropdown*/
.custom-dropdown .dropdown-toggle::after, .custom-dropdown-icon .dropdown-toggle::after, .custom-dropdown .dropdown-toggle::before, .custom-dropdown-icon .dropdown-toggle::before {
  display: none; }

.custom-dropdown .dropdown-menu, .custom-dropdown-icon .dropdown-menu {
  min-width: 11rem;
  border-radius: 4px;
  border: none;
  border: 1px solid #e0e6ed;
  z-index: 899;
  -webkit-box-shadow: 0 10px 30px 0 rgba(31, 45, 61, 0.1);
  box-shadow: 0 10px 30px 0 rgba(31, 45, 61, 0.1);
  top: 15px !important;
  padding: 10px;
  border-width: initial;
  border-style: none;
  border-color: initial;
  border-image: initial; }

.custom-dropdown .dropdown-item.active, .custom-dropdown .dropdown-item:active, .custom-dropdown .dropdown-item:hover {
  color: #888ea8;
  background-color: #f1f2f3; }

.custom-dropdown-icon .dropdown-item.active, .custom-dropdown-icon .dropdown-item:active, .custom-dropdown-icon .dropdown-item:hover {
  color: #888ea8;
  background-color: #f1f2f3; }

.custom-dropdown .dropdown-item {
  font-size: 13px;
  color: #888ea8;
  display: block;
  font-weight: 700;
  padding: 11px 8px;
  font-size: 12px; }

.custom-dropdown-icon .dropdown-item {
  font-size: 13px;
  color: #888ea8;
  display: block;
  font-weight: 700;
  padding: 11px 8px;
  font-size: 12px; }

.custom-dropdown-icon .dropdown-menu .dropdown-item svg {
  width: 20px;
  height: 20px;
  margin-right: 3px;
  color: #888ea8; }

.custom-dropdown .dropdown-item.active svg, .custom-dropdown .dropdown-item:active svg, .custom-dropdown .dropdown-item:hover svg {
  color: #4361ee; }

.custom-dropdown-icon .dropdown-item.active svg, .custom-dropdown-icon .dropdown-item:active svg, .custom-dropdown-icon .dropdown-item:hover svg {
  color: #4361ee; }

.status.rounded-tooltip .tooltip-inner {
  border-radius: 20px;
  padding: 8px 20px; }

.tooltip-inner {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0; }

.popover {
  z-index: 999;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
  border-bottom-color: #b3b3b3; }

input[disabled], select[disabled], textarea[disabled], input[readonly], select[readonly], textarea[readonly] {
  cursor: not-allowed;
  background-color: #f1f2f3 !important;
  color: #bfc9d4; }

.help-block, .help-inline {
  color: #555555; }

.controls {
  position: relative; }

.search-form-control {
  border-radius: .25rem; }

/*  Table   */
.table-bordered {
  border: 1px solid #f1f2f3; }

.table-striped tbody tr:nth-of-type(odd) {
  background-color: #f1f2f3 !important; }

.table > tbody > tr > td {
  vertical-align: middle;
  color: #515365;
  font-size: 13px;
  letter-spacing: 1px; }

.table > thead > tr > th {
  color: #4361ee;
  font-weight: 700;
  font-size: 13px;
  letter-spacing: 1px;
  text-transform: uppercase; }

.table > tbody > tr > td .usr-img-frame {
  background-color: #ebedf2;
  padding: 2px;
  width: 35px;
  height: 35px; }
  .table > tbody > tr > td .usr-img-frame img {
    width: 35px;
    margin: 0; }

.table > tbody > tr > td .admin-name {
  font-weight: 700;
  color: #515365; }

.table > tbody > tr > td .progress {
  width: 135px;
  height: 6px;
  margin: auto 0; }

.table > tbody > tr > td svg.icon {
  width: 21px; }

.table > tbody > tr > td .t-dot {
  background-color: #000;
  height: 11px;
  width: 11px;
  border-radius: 50%;
  cursor: pointer;
  margin: 0 auto; }

.table > tbody > tr > td svg.t-icon {
  padding: 5px;
  border-radius: 50%;
  font-size: 11px;
  vertical-align: sub;
  cursor: pointer; }
  .table > tbody > tr > td svg.t-icon.t-hover-icon:hover {
    background-color: #e7515a;
    color: #fff; }

.table-bordered td, .table-bordered th {
  border: 1px solid #ebedf2; }

.table thead th {
  vertical-align: bottom;
  border-bottom: none; }

.table-hover:not(.table-dark) tbody tr:hover {
  background-color: #f1f2f3 !important; }

.table-controls > li > a svg {
  color: #25d5e4; }

.table tr td .custom-dropdown.t-custom-dropdown a.dropdown-toggle, .table tr td .custom-dropdown-icon.t-custom-dropdown a.dropdown-toggle {
  border-radius: 5px;
  border: 1px solid #d3d3d3; }

.table-controls > li > a svg {
  color: #888ea8;
  width: 21px; }

/*  Table Dark      */
.table.table-dark > thead > tr > th {
  color: #d3d3d3; }

.table.table-dark > tbody > tr > td {
  color: #ffffff; }

.table-dark {
  background-color: #060818; }
  .table-dark.table-hover tbody tr {
    background-color: #060818; }
  .table-dark td, .table-dark th, .table-dark thead th {
    border-color: #191e3a !important; }
  .table-dark.table-hover tbody tr:hover {
    background-color: rgba(25, 30, 58, 0.631373); }

.table.table-dark > tbody > tr > td i.t-icon {
  padding: 5px;
  border-radius: 50%;
  font-size: 14px;
  vertical-align: sub;
  cursor: pointer;
  color: #0e1726 !important; }

table .badge-success, table .badge-primary, table .badge-warning, table .badge-danger, table .badge-info, table .badge-secondary, table .badge-dark {
  box-shadow: 0px 5px 20px 0 rgba(0, 0, 0, 0.2);
  will-change: opacity, transform;
  transition: all 0.3s ease-out;
  -webkit-transition: all 0.3s ease-out; }

.table > tfoot > tr > th {
  color: #3b3f5c; }

.table-vertical-align tr, .table-vertical-align th, .table-vertical-align td {
  vertical-align: middle !important; }

.statbox .widget-content:before, .statbox .widget-content:after {
  display: table;
  content: "";
  line-height: 0;
  clear: both; }

.nav-tabs > li > a {
  -webkit-border-radius: 0 !important;
  -moz-border-radius: 0 !important;
  border-radius: 0 !important; }

.btn-toolbar {
  margin-left: 0px; }

@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .input-group > .form-control {
    flex: 1 1 auto;
    width: 1%; } }

.spin {
  -webkit-animation: spin 2s infinite linear;
  animation: spin 2s infinite linear; }

@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg); } }

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(359deg);
    transform: rotate(359deg); } }

.toast-primary {
  background: #4361ee; }

.toast-header {
  background: #4361ee;
  color: #fff;
  border-bottom: 1px solid rgba(33, 150, 243, 0.341176); }
  .toast-header .meta-time {
    color: #f1f2f3; }
  .toast-header .close {
    color: #f1f2f3;
    opacity: 1;
    text-shadow: none; }

.toast-body {
  padding: 16px 12px;
  color: #fff; }

/*  
    ==========================
        Background Colors  
    ==========================
*/
/*  
    Default  
*/
.bg-primary {
  background-color: #4361ee !important;
  border-color: #4361ee;
  color: #fff; }

.bg-success {
  background-color: #1abc9c !important;
  border-color: #1abc9c;
  color: #fff; }

.bg-info {
  background-color: #2196f3 !important;
  border-color: #2196f3;
  color: #fff; }

.bg-warning {
  background-color: #e2a03f !important;
  border-color: #e2a03f;
  color: #fff; }

.bg-danger {
  background-color: #e7515a !important;
  border-color: #e7515a;
  color: #fff; }

.bg-secondary {
  background-color: #805dca !important;
  border-color: #805dca;
  color: #fff; }

.bg-dark {
  background-color: #fff;
  border-color: #3b3f5c;
  color: #fff; }

/*  
    Light Background  
*/
.bg-light-primary {
  background-color: #eaf1ff !important;
  border-color: #eaf1ff;
  color: #2196f3; }

.bg-light-success {
  background-color: #ddf5f0 !important;
  border-color: #ddf5f0;
  color: #1abc9c; }

.bg-light-info {
  background-color: #e7f7ff !important;
  border-color: #e7f7ff;
  color: #2196f3; }

.bg-light-warning {
  background-color: #fff9ed !important;
  border-color: #fff9ed;
  color: #e2a03f; }

.bg-light-danger {
  background-color: #fff5f5 !important;
  border-color: #fff5f5;
  color: #e7515a; }

.bg-light-secondary {
  background-color: #f3effc !important;
  border-color: #f3effc;
  color: #805dca; }

.bg-light-dark {
  background-color: #e3e4eb;
  border-color: #e3e4eb;
  color: #fff; }

/*  
    Progress Bar
*/
.progress {
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  border-radius: 0;
  background-color: #ebedf2;
  margin-bottom: 1.25rem;
  height: 16px;
  box-shadow: 1px 3px 20px 3px #f1f2f3; }
  .progress.progress-bar-stack .progress-bar:last-child {
    border-top-right-radius: 16px;
    border-bottom-right-radius: 16px; }
  .progress .progress-bar {
    font-size: 10px;
    font-weight: 700;
    box-shadow: 0 2px 4px rgba(0, 69, 255, 0.15), 0 8px 16px rgba(0, 69, 255, 0.2);
    font-size: 12px;
    letter-spacing: 1px;
    font-weight: 100; }
  .progress:not(.progress-bar-stack) .progress-bar {
    border-radius: 16px; }

.progress-sm {
  height: 4px; }

.progress-md {
  height: 10px; }

.progress-lg {
  height: 20px; }

.progress-xl {
  height: 25px; }

.progress-striped .progress-bar {
  background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent); }

.progress .progress-title {
  display: flex;
  justify-content: space-between;
  padding: 15px; }
  .progress .progress-title span {
    align-self: center; }

.progress .progress-bar.bg-gradient-primary {
  background-color: #4361ee;
  background: linear-gradient(to right, #0081ff 0%, #0045ff 100%); }

.progress .progress-bar.bg-gradient-info {
  background-color: #4361ee;
  background-image: linear-gradient(to right, #04befe 0%, #4481eb 100%); }

.progress .progress-bar.bg-gradient-success {
  background-color: #4361ee;
  background-image: linear-gradient(to right, #3cba92 0%, #0ba360 100%); }

.progress .progress-bar.bg-gradient-warning {
  background-color: #4361ee;
  background-image: linear-gradient(to right, #f09819 0%, #ff5858 100%); }

.progress .progress-bar.bg-gradient-secondary {
  background-color: #4361ee;
  background-image: linear-gradient(to right, #7579ff 0%, #b224ef 100%); }

.progress .progress-bar.bg-gradient-danger {
  background-color: #4361ee;
  background-image: linear-gradient(to right, #d09693 0%, #c71d6f 100%); }

.progress .progress-bar.bg-gradient-dark {
  background-color: #4361ee;
  background-image: linear-gradient(to right, #2b5876 0%, #4e4376 100%); }

.br-0 {
  border-radius: 0 !important; }

.br-4 {
  border-radius: 4px !important; }

.br-6 {
  border-radius: 6px !important; }

.br-30 {
  border-radius: 30px !important; }

.br-50 {
  border-radius: 50px !important; }

.br-left-30 {
  border-top-left-radius: 30px !important;
  border-bottom-left-radius: 30px !important; }

.br-right-30 {
  border-top-right-radius: 30px !important;
  border-bottom-right-radius: 30px !important; }

.bx-top-6 {
  border-top-right-radius: 6px !important;
  border-top-left-radius: 6px !important; }

.bx-bottom-6 {
  border-bottom-right-radius: 6px !important;
  border-bottom-left-radius: 6px !important; }

/*      Badge Custom      */
.badge.counter {
  position: absolute;
  z-index: 2;
  right: 0;
  top: -10px;
  font-weight: 600;
  width: 19px;
  height: 19px;
  border-radius: 50%;
  padding: 2px 0px;
  font-size: 12px; }

.badge-chip {
  display: inline-block;
  padding: 0 25px;
  font-size: 16px;
  line-height: 42px;
  border-radius: 25px; }
  .badge-chip img {
    float: left;
    margin: 0px 10px 0px -26px;
    height: 44px;
    width: 44px;
    border-radius: 50%; }
  .badge-chip .closebtn {
    color: #f1f2f3;
    font-weight: bold;
    float: right;
    font-size: 20px;
    cursor: pointer; }
    .badge-chip .closebtn:hover {
      color: #fff; }

/*-------text-colors------*/
.text-primary {
  color: #4361ee !important; }

.text-success {
  color: #1abc9c !important; }

.text-info {
  color: #2196f3 !important; }

.text-danger {
  color: #e7515a !important; }

.text-warning {
  color: #e2a03f !important; }

.text-secondary {
  color: #805dca !important; }

.text-dark {
  color: #3b3f5c !important; }

.text-muted {
  color: #888ea8 !important; }

.text-white {
  color: #fff !important; }

.text-black {
  color: #000 !important; }

/*-----border main------*/
.border {
  border: 1px solid !important; }

.border-bottom {
  border-bottom: 1px solid !important; }

.border-top {
  border-top: 1px solid !important; }

.border-right {
  border-right: 1px solid !important; }

.border-left {
  border-left: 1px solid !important; }

.border-primary {
  border-color: #4361ee !important; }

.border-info {
  border-color: #2196f3 !important; }

.border-warning {
  border-color: #e2a03f !important; }

.border-success {
  border-color: #1abc9c !important; }

.border-danger {
  border-color: #e7515a !important; }

.border-secondary {
  border-color: #805dca !important; }

.border-dark {
  border-color: #3b3f5c !important; }

/*-----border style------*/
.border-dotted {
  border-style: dotted !important; }

.border-dashed {
  border-style: dashed !important; }

.border-solid {
  border-style: solid !important; }

.border-double {
  border-style: double !important; }

/*-----border width------*/
.border-width-1px {
  border-width: 1px !important; }

.border-width-2px {
  border-width: 2px !important; }

.border-width-3px {
  border-width: 3px !important; }

.border-width-4px {
  border-width: 4px !important; }

.border-width-5px {
  border-width: 5px !important; }

.border-width-6px {
  border-width: 6px !important; }

/*-----transform-position------*/
.position-absolute {
  position: absolute; }

.position-static {
  position: static; }

.position-fixed {
  position: fixed; }

.position-inherit {
  position: inherit; }

.position-initial {
  position: initial; }

.position-relative {
  position: relative; }

  /*
	===============================
			@Import	Function
	===============================
*/
/*
	===============================
			@Import	Mixins
	===============================
*/
html {
  min-height: 100%; }

body {
  color: #888ea8;
  height: 100%;
  font-size: 0.875rem;
  background: #f1f2f3;
  overflow-x: hidden;
  overflow-y: auto;
  letter-spacing: 0.0312rem;
  font-family: 'Quicksand', sans-serif; }

h1, h2, h3, h4, h5, h6 {
  color: #3b3f5c; }

:focus {
  outline: none; }

::-moz-selection {
  /* Code for Firefox */
  color: #4361ee;
  background: transparent; }

::selection {
  color: #4361ee;
  background: transparent; }

p {
  margin-top: 0;
  margin-bottom: 0.625rem;
  color: #515365; }

hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border-top: 1px solid #f1f2f3; }

strong {
  font-weight: 600; }

code {
  color: #e7515a; }

/*Page title*/
.navbar .navbar-item .nav-item.page-heading {
  margin-left: 20px; }

.navbar.expand-header .navbar-item .nav-item.page-heading {
  margin-left: 25px; }

.main-container {
  min-height: auto;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
  -ms-flex-direction: row;
  flex-direction: row;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-pack: start;
  -ms-flex-pack: start;
  justify-content: flex-start; }

#container.fixed-header {
  margin-top: 56px; }

#content {
  margin-top: 0;
  max-width: 100%;
  margin-right: auto;
  margin-left: auto;
  width: 100%;
  min-height: auto;
  border-bottom-right-radius: 6px;
  border-bottom-left-radius: 6px;
  max-width: 1600px;
  margin: 0 auto;
  margin-top: 128px; }

.main-container-fluid > .main-content > .container {
  float: left;
  width: 100%; }

#content > .wrapper {
  -webkit-transition: margin ease-in-out .1s;
  -moz-transition: margin ease-in-out .1s;
  -o-transition: margin ease-in-out .1s;
  transition: margin ease-in-out .1s;
  position: relative; }

.widget {
  padding: 0;
  margin-top: 0;
  margin-bottom: 0;
  border-radius: 6px;
  border: 1px solid #e0e6ed;
  box-shadow: 0 0 40px 0 rgba(94, 92, 154, 0.06); }

.layout-top-spacing {
  margin-top: 20px; }

.layout-spacing {
  padding-bottom: 40px; }

.layout-px-spacing {
  padding: 0 20px 0 20px !important;
  min-height: calc(100vh - 170px) !important; }

.widget.box .widget-header {
  background: #fff;
  padding: 0px 8px 0px;
  border-top-right-radius: 6px;
  border-top-left-radius: 6px; }

.row [class*="col-"] .widget .widget-header h4 {
  color: #3b3f5c;
  font-size: 17px;
  font-weight: 600;
  margin: 0;
  padding: 16px 15px; }

.seperator-header {
  background: transparent;
  box-shadow: none;
  margin-bottom: 40px;
  border-radius: 0; }
  .seperator-header h4 {
    margin-bottom: 0;
    line-height: 1.4;
    padding: 5px 8px;
    font-size: 15px;
    border-radius: 4px;
    letter-spacing: 1px;
    display: inline-block;
    background: rgba(0, 150, 136, 0.26);
    color: #009688;
    font-weight: 500; }

.widget .widget-header {
  border-bottom: 0px solid #f1f2f3; }
  .widget .widget-header:before {
    display: table;
    content: "";
    line-height: 0; }
  .widget .widget-header:after {
    display: table;
    content: "";
    line-height: 0;
    clear: both; }

.widget-content-area {
  padding: 20px;
  position: relative;
  background-color: #fff;
  border-bottom-left-radius: 6px;
  border-bottom-right-radius: 6px; }

.dropdown-item {
  line-height: 1.8;
  padding: 0.625rem 1rem; }

.dropdown-menu {
  border-radius: 6px;
  border-color: #e0e6ed; }

.layout-px-spacing {
  padding: 0 39px !important; }

/* 
=====================
    Navigation Bar
=====================
*/
.header-container {
  max-height: 64px;
  background: #31113a;
  position: fixed;
  top: 0;
  right: 0;
  left: 0;
  z-index: 1032; }
  .header-container .header {
    max-width: 1600px;
    margin: 0 auto;
    padding: 12px 32px 12px 32px;
    max-height: 64px; }

.navbar {
  z-index: 1030;
  padding: 12px 0 12px 0;
  background: transparent;
  margin: 0 32px; }
  .navbar.expand-header {
    margin: 0; }
  .navbar .nav-logo a.navbar-brand img {
    vertical-align: top;
    width: 34px;
    height: 34px; border-radius: 6px; }
  .navbar .nav-logo a.navbar-brand .navbar-brand-name {
    font-size: 24px !important;
    color: #e0e6ed !important;
    padding: 0 0.8rem;
    font-weight: 700;
    margin-right: 47px; }

.navbar-brand {
  padding-top: 0.0rem;
  padding-bottom: 0.0rem;
  margin-right: 0.0rem; }

.navbar-expand-sm .navbar-item .nav-link {
  padding: 0.39rem 0.6rem;
  text-transform: initial;
  position: unset; }

.navbar .toggle-sidebar {
  display: inline-block;
  position: relative;
  color: #fff;
  padding: 8px 16px 8px 0; }

.navbar .sidebarCollapse {
  display: inline-block;
  position: relative;
  color: #fff;
  padding: 8px 16px 8px 0; }
  .navbar .sidebarCollapse svg {
    width: 20px;
    height: 20px; }

.navbar .dropdown-menu {
  border-radius: 6px;
  border-color: #e0e6ed; }

.navbar .dropdown-item {
  line-height: 1.8;
  font-size: 0.96rem;
  padding: 15px 0 15px 0;
  word-wrap: normal; }

.navbar .navbar-item .nav-item.dropdown.show a.nav-link span.badge {
  background-color: #888ea8; }

.navbar .navbar-item .nav-item .dropdown-item.active, .navbar .navbar-item .nav-item .dropdown-item:active {
  background-color: transparent;
  color: #16181b; }

.navbar .navbar-item .nav-item.dropdown .dropdown-menu {
  top: 95%;
  border-radius: 0;
  border: none;
  border-radius: 6px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(31, 45, 61, 0.1);
  box-shadow: 0 10px 30px 0 rgba(31, 45, 61, 0.1); }

.navbar-expand-sm .navbar-item {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }

.header-container .navbar .navbar-item .nav-item.dropdown .dropdown-menu {
  top: 108%;
  border-radius: 0;
  border: none;
  border-radius: 6px;
  background: #fff;
  margin-top: 0;
  border: 1px solid #e0e6ed;
  z-index: 9999;
  max-width: 13rem;
  padding: 10px;
  top: 195% !important;
  left: -30px; }
  .header-container .navbar .navbar-item .nav-item.dropdown .dropdown-menu.show {
    top: 37px !important; }
  .header-container .navbar .navbar-item .nav-item.dropdown .dropdown-menu:after {
    position: absolute;
    content: '';
    top: -10px;
    margin-left: -7px;
    height: 0;
    width: 0;
    border-left: 9px solid transparent;
    border-right: 9px solid transparent;
    border-bottom: 15px solid #fff;
    left: auto;
    right: 10px;
    border-bottom-color: #fff; }

.navbar .navbar-item .nav-item.dropdown.notification-dropdown .nav-link, .navbar .navbar-item .nav-item.dropdown.message-dropdown .nav-link {
  position: relative; }

.navbar .language-dropdown {
  align-self: center;
  margin-right: 20px; }
  .navbar .language-dropdown .custom-dropdown-icon a.dropdown-toggle {
    position: relative;
    padding: 9px 20px 9px 44px;
    border: none;
    border-radius: 6px;
    transform: none;
    font-size: 11px;
    line-height: 17px;
    min-width: 115px;
    text-align: inherit;
    color: #888ea8;
    box-shadow: none;
    max-height: 50px;
    font-weight: 600;
    background-color: rgba(81, 83, 101, 0.28);
    height: 36px; }
    .navbar .language-dropdown .custom-dropdown-icon a.dropdown-toggle svg {
      position: absolute;
      right: 4px;
      top: 12px;
      color: #888ea8;
      width: 13px;
      height: 13px;
      margin: 0;
      -webkit-transition: -webkit-transform .2s ease-in-out;
      transition: -webkit-transform .2s ease-in-out;
      transition: transform .2s ease-in-out;
      transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out; }
    .navbar .language-dropdown .custom-dropdown-icon a.dropdown-toggle img {
      width: 19px;
      height: 19px;
      vertical-align: text-bottom;
      position: absolute;
      left: 10px;
      top: 8.5px; }
    .navbar .language-dropdown .custom-dropdown-icon a.dropdown-toggle span {
      vertical-align: text-top; }
  .navbar .language-dropdown .custom-dropdown-icon.show a.dropdown-toggle svg {
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg); }
  .navbar .language-dropdown .custom-dropdown-icon .dropdown-menu {
    min-width: 155px;
    padding: 8px 0;
    left: auto !important;
    border: 1px solid #d3d3d3;
    right: -7px; }

.header-container .navbar .navbar-item .nav-item.dropdown.language-dropdown .dropdown-menu {
  min-width: 130px;
  padding: 8px 0;
  top: 148% !important; }
  .header-container .navbar .navbar-item .nav-item.dropdown.language-dropdown .dropdown-menu.show {
    top: 43px !important; }
  .header-container .navbar .navbar-item .nav-item.dropdown.language-dropdown .dropdown-menu:after {
    right: 8px; }

.navbar .language-dropdown .custom-dropdown-icon .dropdown-menu a {
  padding: 8px 15px;
  font-size: 13px;
  font-weight: 500;
  color: #3b3f5c; }

.language-dropdown.dropdown:not(.custom-dropdown-icon):not(.custom-dropdown) .dropdown-menu a.dropdown-item:hover {
  background-color: transparent;
  color: #4361ee; }

.navbar .language-dropdown .custom-dropdown-icon .dropdown-menu img {
  width: 17px;
  height: 17px;
  margin-right: 7px;
  vertical-align: sub; }

.navbar .navbar-item .nav-item.dropdown.message-dropdown {
  margin-left: 20px;
  align-self: center; }
  .navbar .navbar-item .nav-item.dropdown.message-dropdown .nav-link {
    padding: 0 0; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .nav-link:after {
      display: none; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .nav-link svg {
      color: #d3d3d3;
      stroke-width: 1.5px; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .nav-link span.badge {
      position: absolute;
      display: block;
      width: 5px;
      height: 5px;
      border-radius: 50%;
      padding: 0;
      font-size: 10px;
      color: #fff !important;
      background: #e2a03f;
      top: -4px;
      right: 2px; }
  .navbar .navbar-item .nav-item.dropdown.message-dropdown.double-digit .nav-link span.badge {
    top: 11px;
    right: 1px;
    width: 22px;
    height: 22px;
    padding: 3px 3px 0px;
    font-size: 9px; }
  .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu {
    min-width: 13rem;
    right: -15px;
    left: auto;
    padding: 10px !important; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item {
      padding: 8px 7px;
      border: 1px solid #fff; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item.active, .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item:active {
        background-color: transparent; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item:not(:last-child) {
        border-bottom: 1px solid #f1f2f3; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item:focus, .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item:hover {
        background-color: transparent; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item:first-child {
        padding-top: 8px; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu:after {
      right: 17px; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item:last-child {
      padding-bottom: 8px;
      cursor: pointer; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .media {
      margin: 0; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .media .avatar {
        position: relative;
        display: inline-block;
        width: 39px;
        height: 39px;
        font-size: 14px;
        margin-right: 11px;
        font-weight: 500; }
        .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .media .avatar .avatar-title {
          display: flex;
          align-items: center;
          justify-content: center;
          width: 100%;
          height: 100%;
          background-color: #304aca;
          color: #fff;
          font-weight: 600; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .media img {
        width: 40px;
        height: 40px;
        margin-right: 11px; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .media .media-body h5.usr-name {
        font-size: 15px;
        margin-bottom: 0px;
        color: #0e1726;
        font-weight: 500; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .dropdown-item:hover .media-body h5.usr-name {
      color: #445ede; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .media .media-body {
      align-self: center; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu .media .media-body p.msg-title {
        font-size: 10px;
        font-weight: 700;
        color: #888ea8;
        margin-bottom: 0;
        letter-spacing: 0; }

.navbar .navbar-item .nav-item.dropdown.notification-dropdown {
  margin-left: 16px;
  align-self: center; }
  .navbar .navbar-item .nav-item.dropdown.notification-dropdown .nav-link {
    padding: 0 0; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .nav-link:after {
      display: none; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .nav-link svg {
      color: #d3d3d3;
      stroke-width: 1.5px; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .nav-link span.badge {
      position: absolute;
      display: block;
      width: 5px;
      height: 5px;
      border-radius: 50%;
      padding: 0;
      font-size: 10px;
      color: #fff !important;
      background: #2196f3;
      top: -4px;
      right: 2px; }
  .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu {
    min-width: 15rem;
    right: -8px;
    left: auto; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .dropdown-item {
      padding: 0.625rem 1rem;
      cursor: pointer; }
      .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .dropdown-item:focus, .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .dropdown-item:hover {
        background-color: transparent;
        border-radius: 5px; }
      .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .dropdown-item:not(:last-child) {
        border-bottom: 1px solid #f1f2f3; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .media {
      margin: 0; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu svg {
      width: 23px;
      height: 23px;
      font-weight: 600;
      color: #e2a03f;
      fill: rgba(226, 160, 63, 0.270588);
      margin-right: 9px;
      align-self: center; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .media.file-upload svg {
      color: #e7515a;
      fill: rgba(231, 81, 90, 0.239216); }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .media.server-log svg {
      color: #009688;
      fill: rgba(0, 150, 136, 0.368627); }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .media-body {
      display: flex;
      justify-content: space-between; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .data-info {
      display: inline-block;
      white-space: normal; }
      .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .data-info h6 {
        margin-bottom: 0;
        font-weight: 600;
        font-size: 14px;
        margin-right: 8px; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .dropdown-item:hover h6 {
      color: #4361ee; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .data-info p {
      margin-bottom: 0;
      font-size: 13px;
      font-weight: 600;
      color: #888ea8; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .icon-status {
      display: inline-block;
      white-space: normal; }
      .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .icon-status svg {
        margin: 0; }
        .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .icon-status svg.feather-x {
          color: #bfc9d4;
          width: 19px;
          height: 19px;
          cursor: pointer; }
          .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .icon-status svg.feather-x:hover {
            color: #e7515a; }
        .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu .icon-status svg.feather-check {
          color: #fff;
          background: #0d9a5d;
          border-radius: 50%;
          padding: 3px;
          width: 22px;
          height: 22px; }

.navbar .navbar-item .nav-item.search-animated {
  position: relative; }
  .navbar .navbar-item .nav-item.search-animated svg {
    font-weight: 600;
    margin: 0 9.6px;
    cursor: pointer;
    color: #888ea8;
    position: absolute;
    width: 18px;
    height: 18px;
    top: 9px; }

.navbar .navbar-item .nav-item form.form-inline input.search-form-control {
  background-color: rgba(81, 83, 101, 0.28);
  border: none;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  color: #888ea8;
  letter-spacing: 1px;
  padding: 0px 4px 0px 35px;
  height: 36px;
  font-weight: 600;
  border: 1px solid rgba(81, 83, 101, 0.28);
  width: 100%;
  width: 370px; }
  .navbar .navbar-item .nav-item form.form-inline input.search-form-control:focus {
    box-shadow: none; }
  .navbar .navbar-item .nav-item form.form-inline input.search-form-control::-webkit-input-placeholder, .navbar .navbar-item .nav-item form.form-inline input.search-form-control::-ms-input-placeholder, .navbar .navbar-item .nav-item form.form-inline input.search-form-control::-moz-placeholder {
    color: #888ea8;
    letter-spacing: 1px;
    font-size: 13px; }
  .navbar .navbar-item .nav-item form.form-inline input.search-form-control:focus::-webkit-input-placeholder, .navbar .navbar-item .nav-item form.form-inline input.search-form-control:focus::-ms-input-placeholder, .navbar .navbar-item .nav-item form.form-inline input.search-form-control:focus::-moz-placeholder {
    color: #515365; }

/*Message Dropdown*/
/*Notification Dropdown*/
.search-overlay {
  display: none;
  position: fixed;
  width: 100vw;
  height: 100vh;
  background: transparent !important;
  z-index: 814 !important;
  opacity: 0;
  transition: all 0.5s ease-in-out; }
  .search-overlay.show {
    display: block;
    opacity: .1; }

/* User Profile Dropdown*/
.navbar .navbar-item .nav-item.user-profile-dropdown {
  align-self: center;
  border-radius: 8px;
  margin-left: 20px; }
  .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-toggle {
    display: flex;
    justify-content: flex-end;
    padding: 0 20px 0 16px; }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-toggle:after {
      display: none; }
  .navbar .navbar-item .nav-item.user-profile-dropdown a.user .media {
    margin: 0; }
    .navbar .navbar-item .nav-item.user-profile-dropdown a.user .media img {
      width: 28px;
      border-radius: 4px;
      height: 28px;
      margin-left: 8px;
      border: none;
      margin-right: 0; }
  .navbar .navbar-item .nav-item.user-profile-dropdown .nav-link span.badge {
    position: absolute;
    display: block;
    width: 9px;
    height: 9px;
    border-radius: 50%;
    padding: 0;
    font-size: 10px;
    color: #fff !important;
    background: #009688;
    bottom: 8px;
    right: -3px;
    border: 1px solid #888ea8;
    transform: translateY(0); }
  .navbar .navbar-item .nav-item.user-profile-dropdown.show .nav-link span.badge {
    background: #009688 !important; }
  .navbar .navbar-item .nav-item.user-profile-dropdown a.user .media .media-body {
    flex: auto;
    text-align: right; }
    .navbar .navbar-item .nav-item.user-profile-dropdown a.user .media .media-body h6 {
      color: #f1f2f3;
      font-size: 11px;
      font-weight: 600;
      margin-bottom: 3px;
      letter-spacing: 1px; }
      .navbar .navbar-item .nav-item.user-profile-dropdown a.user .media .media-body h6 span {
        color: #888ea8; }
    .navbar .navbar-item .nav-item.user-profile-dropdown a.user .media .media-body p {
      color: #fff;
      font-size: 11px;
      margin-bottom: 0; }
  .navbar .navbar-item .nav-item.user-profile-dropdown .nav-link.user {
    padding: 0 0;
    font-size: 25px; }

.navbar .navbar-item .nav-item.dropdown.user-profile-dropdown .nav-link:after {
  display: none; }

.header-container .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu {
  z-index: 9999;
  max-width: 10rem;
  padding: 10px 10px 0 10px;
  top: 133% !important; }
  .header-container .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu:after {
    border-bottom-color: #fff;
    right: 4px; }

.header-container .navbar .navbar-item .nav-item.dropdown.user-profile-dropdown .dropdown-menu.show {
  top: 46px !important; }

.navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section {
  padding: 13px 10px 10px 10px;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  margin-top: -10px;
  margin-right: -10px;
  margin-left: -10px;
  border-bottom: 1px solid #f1f2f3; }
  .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media {
    margin: 0;
    padding: 0 0 0 5px; }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media.slack svg {
      color: #805dca; }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media.trello svg {
      color: #4361ee; }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media:not(:last-child) {
      margin-bottom: 10px; }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media .media-body {
      align-self: center;
      display: flex;
      justify-content: space-between; }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media svg {
      margin-right: 10px;
      align-self: center;
      width: 20px;
      height: 20px; }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media .media-body h5 {
      font-size: 14px;
      font-weight: 700;
      margin-bottom: 0;
      color: #515365;
      margin-right: 13px;
      align-self: center; }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media .media-body p {
      font-size: 12px;
      margin-bottom: 0;
      color: #fff;
      display: inline-block;
      background: #4361ee;
      padding: 1px 5px;
      border-radius: 5px; }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .user-profile-section .media .media-body svg {
      margin-right: 0;
      color: #1abc9c; }

.navbar .navbar-item .nav-item.user-profile-dropdown .nav-link.user {
  padding: 6px 0;
  font-size: 25px; }

.navbar .navbar-item .nav-item.dropdown.user-profile-dropdown .nav-link:after {
  display: none; }

.navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item {
  padding: 0;
  background: transparent; }
  .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item a {
    display: block;
    color: #515365;
    font-size: 14px;
    font-weight: 500;
    padding: 9px 6px; }
    .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item a:hover {
      color: #4361ee; }
  .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item.active, .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item:active {
    background-color: transparent; }
  .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item:not(:last-child) {
    border-bottom: 1px solid #f1f2f3; }
  .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu .dropdown-item svg {
    width: 18px;
    margin-right: 7px;
    height: 18px;
    stroke-width: 1.8; }

.animated {
  -webkit-animation-duration: 0.5s;
  animation-duration: 0.5s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both; }

@-webkit-keyframes fadeInUp {
  0% {
    margin-top: 10px; }
  100% {
    margin-top: 0; } }

@keyframes fadeInUp {
  0% {
    margin-top: 10px; }
  100% {
    margin-top: 0; } }

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp; }

/*
    Breadcrumb
*/
.layout-top-spacing {
  margin-top: 20px; }

.page-title {
  float: none;
  margin-top: 0;
  margin-bottom: 0;
  align-self: center;
  padding-right: 15px;
  margin-right: 15px; }
  .page-title h3 {
    margin-bottom: 0;
    margin: 0;
    font-size: 26px;
    color: #3b3f5c;
    font-weight: 600;
    letter-spacing: 0; }

.page-header {
  display: flex;
  padding: 16px 0 0 0;
  justify-content: space-between; }
  .page-header .breadcrumb-one {
    align-self: center; }
    .page-header .breadcrumb-one .breadcrumb {
      padding: 0;
      vertical-align: text-bottom;
      margin-bottom: 0;
      background: transparent; }
    .page-header .breadcrumb-one .breadcrumb-item {
      align-self: center;
      position: relative;
      padding: 0px 8px 0px 8px; }
      .page-header .breadcrumb-one .breadcrumb-item:first-child {
        padding: 0px 8px 0px 0; }
      .page-header .breadcrumb-one .breadcrumb-item a {
        color: #888ea8;
        font-size: 13px;
        font-weight: 600; }
        .page-header .breadcrumb-one .breadcrumb-item a:hover {
          color: #4361ee; }
        .page-header .breadcrumb-one .breadcrumb-item a svg {
          width: 20px;
          height: 20px;
          vertical-align: sub; }
      .page-header .breadcrumb-one .breadcrumb-item span {
        vertical-align: text-bottom; }
      .page-header .breadcrumb-one .breadcrumb-item.active {
        font-weight: 600;
        padding: 0px 8px !important; }
      .page-header .breadcrumb-one .breadcrumb-item + .breadcrumb-item::before {
        color: #e0e6ed;
        content: "";
        vertical-align: text-top;
        padding: 0;
        position: absolute;
        left: -2px;
        height: 4px;
        width: 4px;
        background: #bfc9d4;
        border-radius: 50%;
        top: 9px; }
  .page-header .custom-dropdown-icon a.dropdown-toggle {
    position: relative;
    padding: 9px 35px 10px 15px;
    border: 1px solid #e0e6ed;
    border-radius: 6px;
    transform: none;
    font-size: 13px;
    line-height: 17px;
    background-color: #fff;
    letter-spacing: normal;
    min-width: 115px;
    text-align: inherit;
    color: #3b3f5c;
    box-shadow: none;
    font-weight: 600;
    letter-spacing: 0px; }
    .page-header .custom-dropdown-icon a.dropdown-toggle span span {
      color: #888ea8; }
    .page-header .custom-dropdown-icon a.dropdown-toggle svg {
      position: absolute;
      right: 15px;
      top: 11px;
      color: #888ea8;
      width: 13px;
      height: 13px;
      margin: 0;
      -webkit-transition: -webkit-transform .2s ease-in-out;
      transition: -webkit-transform .2s ease-in-out;
      transition: transform .2s ease-in-out;
      transition: transform .2s ease-in-out, -webkit-transform .2s ease-in-out; }
  .page-header .custom-dropdown-icon.show a.dropdown-toggle svg {
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg); }
  .page-header .custom-dropdown-icon .dropdown-menu {
    position: absolute;
    top: 1px !important;
    padding: 8px 0;
    border: none;
    min-width: 155px;
    border: 1px solid #e0e6ed;
    -webkit-box-shadow: 0 10px 30px 0 rgba(31, 45, 61, 0.1);
    box-shadow: 0 10px 30px 0 rgba(31, 45, 61, 0.1); }
    .page-header .custom-dropdown-icon .dropdown-menu a {
      padding: 8px 15px;
      font-size: 12px;
      font-weight: 500;
      color: #888ea8; }
      .page-header .custom-dropdown-icon .dropdown-menu a:hover {
        background-color: transparent;
        color: #515365; }

/*
    ====================
        More Dropdown
    ====================    
*/
/*
    Footer
*/
.footer-wrapper {
  padding: 10px 30px 10px 30px;
  display: inline-block;
  background: transparent;
  font-weight: 600;
  font-size: 12px;
  width: 100%;
  border-top-left-radius: 6px;
  display: flex;
  justify-content: space-between; }
  .footer-wrapper .footer-section p {
    margin-bottom: 0;
    color: #888ea8;
    font-size: 13px;
    letter-spacing: 1px;
    margin-bottom: 0;
    color: #888ea8;
    font-size: 13px;
    letter-spacing: 1px; }
    .footer-wrapper .footer-section p a {
      color: #888ea8; }
  .footer-wrapper .footer-section svg {
    color: #e7515a;
    fill: rgba(231, 81, 90, 0.419608);
    width: 15px;
    height: 15px;
    vertical-align: text-top; }

@media (max-width: 767px) {
  .nav-logo {
    display: none; }
  .navbar .navbar-item .nav-item.search-animated {
    position: initial; }
    .navbar .navbar-item .nav-item.search-animated svg {
      font-weight: 600;
      margin: 0;
      cursor: pointer;
      color: #888ea8;
      position: initial;
      transition: top 200ms;
      top: -25px;
      padding: 7px;
      background-color: rgba(81, 83, 101, 0.28);
      border: none;
      border-radius: 50%;
      width: 34px;
      height: 34px; }
  .navbar .navbar-item .nav-item .form-inline.search {
    opacity: 0;
    transition: opacity 200ms, top 200ms;
    top: -25px; }
    .navbar .navbar-item .nav-item .form-inline.search .search-form-control {
      border: none;
      width: 100%;
      display: none; }
  .navbar .nav-dropdowns {
    margin-left: auto; }
  .navbar .navbar-item .nav-item .form-inline.search.input-focused {
    position: absolute;
    bottom: 0;
    top: 0;
    background: #0e1726;
    height: 100%;
    width: 100%;
    left: 0;
    right: 0;
    z-index: 32;
    margin-top: 0px !important;
    display: flex;
    opacity: 1;
    transition: opacity 200ms, top 200ms; }
  .navbar .navbar-item .nav-item.search-animated.show-search svg {
    margin: 0;
    position: absolute;
    top: 22px;
    left: 15px;
    width: 22px;
    height: 22px;
    color: #888ea8;
    z-index: 40;
    transition: top 200ms;
    background: transparent;
    padding: 0;
    border: none; }
  .navbar .navbar-item .nav-item .form-inline.search.input-focused .search-bar {
    width: 100%; }
  .navbar .navbar-item .nav-item .form-inline.search.input-focused .search-form-control {
    background: transparent;
    display: block;
    padding-left: 46px;
    padding-right: 12px;
    border: none; }
  .navbar .navbar-item .nav-item.dropdown.message-dropdown, .navbar .navbar-item .nav-item.dropdown.notification-dropdown {
    margin-left: 15px; }
  .navbar .navbar-item .nav-item.user-profile-dropdown {
    margin-right: 0; }
  .page-header .custom-dropdown-icon a.dropdown-toggle {
    display: none; } }

@media (min-width: 992px) {
  .theme-brand {
    display: none; }
  /*
  ====================
      Layout Topbar
  ====================
  */
  .navbar .navbar-item .nav-item.dropdown.message-dropdown {
    margin-left: 20px; }
  .navbar .navbar-item .nav-item.dropdown.notification-dropdown {
    margin-left: 20px;
    align-self: center; }
  .navbar .toggle-sidebar, .navbar .sidebarCollapse {
    display: none; }
  .topbar-nav.header {
    padding: 0;
    z-index: 500;
    width: 100%;
    top: 0;
    margin: 0;
    -webkit-box-shadow: 0px 20px 20px rgba(126, 142, 177, 0.12);
    -moz-box-shadow: 0px 20px 20px rgba(126, 142, 177, 0.12);
    box-shadow: 0px 20px 20px rgba(126, 142, 177, 0.12);
    background: #fff;
    min-height: 53px;
    position: fixed;
    top: 64px;
    right: 0;
    left: 0;
    z-index: 1030; }
    .topbar-nav.header #topbar {
      background: transparent;
      padding: 0 32px;
      width: 100%;
      min-height: 51px;
      max-width: 1600px;
      margin: 0 auto; }
    .topbar-nav.header nav#topbar ul.menu-categories {
      display: flex;
      margin-bottom: 0;
      margin-left: 5px; }
      .topbar-nav.header nav#topbar ul.menu-categories li.menu {
        position: relative;
        padding: 11px 0 11px 0; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu:first-child > a > div span {
          vertical-align: text-top; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu > a {
          display: flex;
          height: 100%;
          padding: 10px 0 10px 0;
          margin-right: 44px;
          border-radius: 6px; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu:hover a > div span, .topbar-nav.header nav#topbar ul.menu-categories li.menu:hover a > div svg:not(.feather-chevron-down) {
          color: #4361ee; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu:hover > a svg.feather.feather-chevron-down {
          color: #4361ee; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu > a > div {
          align-self: center;
          margin-right: 6px; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu > a svg.feather.feather-chevron-down {
          color: #888ea8;
          align-self: center; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu a > div svg:not(.feather-chevron-down) {
          width: 19px;
          height: 19px;
          color: #515365;
          vertical-align: text-top;
          margin-right: 5px;
          stroke-width: 1.8px; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu a > div span {
          font-size: 14px;
          font-weight: 400;
          color: #0e1726;
          vertical-align: top; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu > .dropdown-toggle svg.feather-chevron-down {
          align-self: center; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu.active > a svg.feather.feather-chevron-down {
          color: #4361ee; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu.active > a > div svg:not(.feather-chevron-down) {
          color: #4361ee; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu.active > a > div svg.feather.feather-chevron-down {
          color: #e0e6ed; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu.active > a > div span {
          color: #4361ee;
          font-weight: 500; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu:hover .submenu {
          visibility: visible;
          opacity: 1;
          transform: translateY(0%);
          transition-delay: 0s, 0s, 0.3s; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu {
          position: absolute;
          top: 61px;
          background-color: #fff;
          color: #0e1726;
          text-align: left;
          margin-right: auto;
          margin-left: auto;
          width: 200px;
          padding: 15px 0;
          border-radius: 4px;
          box-shadow: 0 1.5rem 4rem rgba(22, 28, 45, 0.15);
          display: inline-block;
          visibility: hidden;
          opacity: 0;
          visibility: hidden;
          opacity: 0;
          transform: translateY(1em);
          transition: all 0.4s ease-in-out 0s, visibility 0s linear 0.4s, z-index 0s linear 0.01s;
          border: 1px solid #e0e6ed;
          border-radius: 6px;
          padding: 6px 0;
          width: 188px; }
          .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li {
            display: block;
            position: relative;
            -webkit-transition: .25s ease-in-out;
            transition: .25s ease-in-out;
            padding: 2px 9px; }
            .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li a {
              display: flex;
              justify-content: space-between;
              color: #888ea8;
              white-space: nowrap;
              align-items: center;
              transition: all 0.2s ease-in-out;
              padding: 4px 24px;
              font-size: 13px;
              font-weight: 600;
              color: #888ea8;
              letter-spacing: 0px;
              line-height: 24px; }
              .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li a svg {
                width: 13px;
                height: 13px; }
            .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li:hover a {
              color: #3b3f5c;
              background: #eaf1ff; }
            .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li.active a {
              color: #61b6cd; }
            .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li ul.sub-submenu li.sub-sub-submenu-list {
              position: relative; }
          .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu .sub-sub-submenu-list .sub-submenu {
            position: absolute;
            top: 0;
            background-color: #fff;
            color: #888ea8;
            text-align: left;
            box-shadow: 0px 20px 20px rgba(126, 142, 177, 0.12);
            border: 1px solid #e0e6ed;
            left: auto;
            right: -200px;
            min-width: 160px;
            width: 200px;
            padding: 12px 0;
            border-radius: 6px; }
          .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu .sub-sub-submenu-list:hover ul.sub-submenu {
            display: block; }
          .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li.sub-sub-submenu-list .sub-submenu li a {
            background: transparent;
            display: flex;
            justify-content: space-between;
            font-weight: 400;
            padding: 4px 24px;
            color: #888ea8;
            white-space: nowrap;
            font-size: 14.5px;
            align-items: center;
            transition: all 0.2s ease-in-out;
            line-height: 27px;
            letter-spacing: 0;
            padding: 4px 24px;
            font-size: 13px;
            font-weight: 600;
            color: #888ea8;
            letter-spacing: 0px;
            line-height: 24px; }
          .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li.sub-sub-submenu-list .sub-submenu li.active a {
            color: #0e1726; }
          .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li a {
            display: flex;
            justify-content: space-between;
            color: #888ea8;
            white-space: nowrap;
            align-items: center;
            transition: all 0.2s ease-in-out;
            padding: 5px 9px;
            font-size: 14px;
            font-weight: 500;
            color: #888ea8;
            letter-spacing: 0px;
            line-height: 18px;
            border-radius: 5px; }
          .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li.sub-sub-submenu-list .sub-submenu li:hover a {
            transition: .200s;
            background: #eaf1ff;
            color: #3b3f5c; }
          .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu .sub-sub-submenu-list .sub-submenu {
            border: 1px solid #e0e6ed;
            border-radius: 6px;
            padding: 6px 0;
            width: 188px;
            right: -184px; }
          .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li.sub-sub-submenu-list .sub-submenu li a {
            display: flex;
            justify-content: space-between;
            color: #888ea8;
            white-space: nowrap;
            align-items: center;
            transition: all 0.2s ease-in-out;
            padding: 5px 9px;
            font-size: 14px;
            font-weight: 500;
            color: #888ea8;
            letter-spacing: 0px;
            line-height: 18px;
            border-radius: 5px; }
    .topbar-nav.header.fixed-top {
      top: 0 !important;
      z-index: 1030;
      border-top-right-radius: 0;
      border-top-left-radius: 0;
      background-color: #0e1726; }
      .topbar-nav.header.fixed-top nav#topbar ul.menu-categories li.menu a > div svg:not(.feather-chevron-down), .topbar-nav.header.fixed-top nav#topbar ul.menu-categories li.menu a > div span, .topbar-nav.header.fixed-top nav#topbar ul.menu-categories li.menu a > div svg.feather.feather-chevron-down {
        color: #fff; }
  .nav-fixed .main-content {
    margin-top: 63px !important;
    transition: none !important; } }

@media (max-width: 991px) {
  .overlay {
    display: none;
    position: fixed;
    width: 100vw;
    height: 100vh;
    background: #3b3f5c !important;
    z-index: 998 !important;
    opacity: 0;
    transition: all 0.5s ease-in-out;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0; }
    .overlay.show {
      display: block;
      opacity: .7; }
  .layout-px-spacing {
    padding: 0 16px !important; }
  .header-container {
    position: fixed;
    left: 0;
    right: 0;
    z-index: 999; }
    .header-container .header {
      max-width: 1600px;
      margin: 0 auto;
      padding: 12px 17px 12px 17px;
      max-height: 64px; }
  #content {
    padding-top: 65px;
    margin-top: 0; }
  .navbar {
    padding: 10px 0 10px 0;
    margin: 0 16px; }
    .navbar .navbar-item .nav-item.user-profile-dropdown a.user .media .media-body, .navbar .nav-logo {
      display: none; }
    .navbar .navbar-item .nav-item.search-animated {
      margin-left: 3px; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu {
      top: 53px;
      min-width: 13rem;
      right: -92px; }
      .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu:after {
        right: 93px; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu {
      right: -52px;
      top: 53px; }
      .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu:after {
        right: 53.5px; }
    .navbar .navbar-item .nav-item.user-profile-dropdown {
      margin-right: 0;
      margin-left: 15px; }
      .navbar .navbar-item .nav-item.user-profile-dropdown .nav-link span.badge {
        bottom: 5px;
        right: -3px; }
      .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu {
        left: -123px !important; }
        .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu:after {
          right: 5px !important; }
  .topbar-nav.header {
    position: fixed;
    top: 0;
    bottom: 0;
    left: -315px;
    z-index: 9999;
    backface-visibility: hidden;
    -webkit-backface-visibility: hidden;
    -webkit-transform: translate3d(0, 0, 0);
    width: 255px;
    background-color: #fff;
    padding: 0;
    display: block;
    height: 100vh !important;
    transition: .600s;
    margin: 0; }
  .main-container.topbar-closed .topbar-nav {
    width: 255px;
    left: 0; }
  /*
      =============
          Top Bar
      =============
  */
  #topbar .theme-brand {
    background-color: #ebeff6;
    padding: 10px 0 10px 0;
    justify-content: center; }
    #topbar .theme-brand li.theme-logo {
      align-self: center; }
      #topbar .theme-brand li.theme-logo img {
        width: 40px;
        height: 40px; }
    #topbar .theme-brand li.theme-text a {
      font-size: 25px !important;
      color: #1b2e4b !important;
      line-height: 2.75rem;
      padding: 0 0.8rem;
      text-transform: initial;
      position: unset;
      font-weight: 600; }
  #topbar ul.menu-categories {
    position: relative;
    padding: 20px 0 20px 0;
    margin: auto;
    width: 100%;
    overflow: auto; }
  .topbar-nav.header nav#topbar {
    height: 100vh !important; }
    .topbar-nav.header nav#topbar ul.menu-categories li.menu {
      position: relative;
      padding: 0;
      margin: 0px 15px 3px 15px; }
      .topbar-nav.header nav#topbar ul.menu-categories li.menu.active > .dropdown-toggle {
        background: #304aca; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu.active > .dropdown-toggle svg.feather-chevron-down {
          color: #fff;
          stroke-width: 2px; }
      .topbar-nav.header nav#topbar ul.menu-categories li.menu > a {
        display: flex;
        justify-content: space-between;
        cursor: pointer;
        font-size: 13px;
        color: #3b3f5c;
        padding: 14px 10px;
        font-weight: 600;
        transition: .600s;
        border-radius: 6px;
        letter-spacing: 0; }
      .topbar-nav.header nav#topbar ul.menu-categories li.menu a > div svg:not(.feather-chevron-down) {
        color: #607d8b;
        margin-right: 6px;
        vertical-align: middle;
        width: 20px;
        height: 20px;
        stroke-width: 1.6; }
      .topbar-nav.header nav#topbar ul.menu-categories li.menu a > div span {
        font-size: 13px;
        font-weight: 600;
        color: #888ea8;
        vertical-align: middle; }
      .topbar-nav.header nav#topbar ul.menu-categories li.menu > .dropdown-toggle svg.feather-chevron-down {
        color: #888ea8;
        width: 15px;
        height: 15px;
        align-self: center; }
      .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li {
        position: relative; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li.active a {
          color: #304aca; }
      .topbar-nav.header nav#topbar ul.menu-categories li.menu.active a[aria-expanded="false"] > div svg:not(.feather-chevron-down), .topbar-nav.header nav#topbar ul.menu-categories li.menu.active a[aria-expanded="true"] > div svg:not(.feather-chevron-down) {
        color: #fff;
        stroke-width: 2px;
        fill: rgba(172, 176, 195, 0.35); }
      .topbar-nav.header nav#topbar ul.menu-categories li.menu a[aria-expanded="true"] > div svg.feather.feather-chevron-down {
        color: #0e1726; }
      .topbar-nav.header nav#topbar ul.menu-categories li.menu.active a[aria-expanded="false"] > div span, .topbar-nav.header nav#topbar ul.menu-categories li.menu.active a[aria-expanded="true"] > div span {
        color: #fff;
        border-radius: 12px;
        font-weight: 600;
        position: relative;
        transition: all .2s ease-in-out; }
      .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li a {
        position: relative;
        display: flex;
        padding: 7px 25px;
        padding: 12px 12px 12px 25px;
        margin-left: 25px;
        font-size: 13px;
        font-weight: 500;
        color: #515365;
        line-height: 18px; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li a:before {
          content: '';
          background-color: #d3d3d3;
          position: absolute;
          height: 3px;
          width: 3px;
          top: 20px;
          left: 15px;
          border-radius: 50%; }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li a[aria-expanded="true"] {
          color: #555555; }
          .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li a[aria-expanded="true"] svg {
            transform: rotate(90deg); }
      .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li.sub-sub-submenu-list a {
        display: flex;
        justify-content: space-between; }
      .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li.sub-sub-submenu-list .sub-submenu a {
        font-weight: 500;
        padding: 10px 12px 10px 48px;
        padding-left: 42px;
        font-size: 12px;
        color: #515365; }
      .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li a svg {
        width: 14px;
        height: 13px;
        align-self: center; }
      .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li.sub-sub-submenu-list .sub-submenu li a:before {
        content: '';
        background-color: #515365;
        position: absolute;
        height: 1px;
        width: 3px;
        left: 26px;
        top: 19px; }
      .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu li ul.sub-submenu li.sub-sub-submenu-list {
        position: relative; } }

@media (max-width: 1199px) and (min-width: 992px) {
  .topbar-nav.header nav#topbar ul.menu-categories li.menu > a {
    padding: 10px 0 10px 0; }
  .topbar-nav.header nav#topbar ul.menu-categories li.menu:not(:last-child) > a {
    margin-right: 26px; }
  .topbar-nav.header nav#topbar ul.menu-categories li.menu:last-child > a {
    margin-right: 0; }
  .topbar-nav.header nav#topbar ul.menu-categories li.menu a > div span {
    font-size: 12.9px;
    vertical-align: text-bottom; }
  .topbar-nav.header nav#topbar ul.menu-categories li.menu a > div svg:not(.feather-chevron-down) {
    width: 17px;
    height: 17px; } }

@media (max-width: 1439px) and (min-width: 992px) {
  .topbar-nav.header nav#topbar ul.menu-categories li.menu:nth-child(1) .submenu .sub-sub-submenu-list:hover ul.sub-submenu, .topbar-nav.header nav#topbar ul.menu-categories li.menu:nth-child(2) .submenu .sub-sub-submenu-list:hover ul.sub-submenu {
    right: -200px; }
  .topbar-nav.header nav#topbar ul.menu-categories li.menu .submenu .sub-sub-submenu-list:hover ul.sub-submenu {
    right: 182px; } }

@media (max-width: 1250px) and (min-width: 992px) {
  .topbar-nav.header nav#topbar ul.menu-categories li.menu:last-child .submenu {
    left: auto;
    right: 0; } }

@media (max-width: 575px) {
  .navbar .language-dropdown {
    margin-right: 0; }
    .navbar .language-dropdown .custom-dropdown-icon a.dropdown-toggle {
      min-width: 57px;
      padding: 9px 20px 9px 37px; }
      .navbar .language-dropdown .custom-dropdown-icon a.dropdown-toggle span {
        display: none; }
  .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu {
    right: -83px !important; }
    .navbar .navbar-item .nav-item.dropdown.message-dropdown .dropdown-menu:after {
      right: 83px !important; }
  .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu {
    right: -44px !important; }
    .navbar .navbar-item .nav-item.dropdown.notification-dropdown .dropdown-menu:after {
      right: 46px !important; }
  .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu {
    left: -131px !important; }
  .navbar .navbar-item .nav-item.user-profile-dropdown a.user .media img {
    margin-left: 0; }
  .footer-wrapper .footer-section.f-section-2 {
    display: none; } }


 /*# sourceMappingURL=bootstrap.min.css.map */
        /*
	===============================
			@Import	Function
	===============================
*/
/*
	===============================
			@Import	Mixins
	===============================
*/
.actions-btn-tooltip.tooltip {
  opacity: 1;
  top: -11px !important; }

.actions-btn-tooltip .arrow:before {
  border-top-color: #3b3f5c; }

.actions-btn-tooltip .tooltip-inner {
  background: #3b3f5c;
  color: #fff;
  font-weight: 700;
  border-radius: 30px;
  box-shadow: 0px 5px 15px 1px rgba(113, 106, 202, 0.2);
  padding: 4px 16px; }

.invoice-container {
  width: 100%; }

.invoice-inbox {
  padding: 0;
  background-color: #fff;
  border: 1px solid #e0e6ed;
  box-shadow: 0 0 40px 0 rgba(94, 92, 154, 0.06);
  border-radius: 6px; }
  .invoice-inbox .inv-number {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 0;
    color: #888ea8; }
  .invoice-inbox .invoice-action svg {
    cursor: pointer;
    font-weight: 600;
    color: #888ea8;
    margin-right: 6px;
    vertical-align: middle;
    fill: rgba(0, 23, 55, 0.08); }
    .invoice-inbox .invoice-action svg:not(:last-child) {
      margin-right: 15px; }
    .invoice-inbox .invoice-action svg:hover {
      color: #4361ee;
      fill: rgba(27, 85, 226, 0.239216); }

/*
===================

     Invoice

===================
*/
/*    Inv head section   */
.invoice .content-section .inv--head-section {
  padding: 36px 35px;
  margin-bottom: 40px;
  padding-bottom: 25px;
  border-bottom: 1px solid #ebedf2; }

.inv--customer-detail-section {
  padding: 36px 35px;
  padding-top: 0; }

.invoice .content-section .inv--head-section h3.in-heading {
  font-size: 18px;
  font-weight: 600;
  color: #0e1726;
  margin: 0;
  margin-left: 12px; }

.invoice .content-section .inv--head-section .company-logo {
  width: 36px;
  height: 36px; }

.invoice .content-section .inv--head-section div.company-info {
  display: flex;
  justify-content: flex-end; }
  .invoice .content-section .inv--head-section div.company-info svg {
    width: 42px;
    height: 42px;
    margin-right: 10px;
    color: #4361ee;
    fill: rgba(27, 85, 226, 0.239216); }

.invoice .content-section .inv--head-section .inv-brand-name {
  font-size: 23px;
  font-weight: 600;
  margin-bottom: 0;
  align-self: center; }

.invoice .content-section .inv--detail-section .inv-to {
  font-weight: 700;
  font-size: 15px;
  margin-bottom: 15px; }

.invoice .content-section .inv--detail-section .inv-customer-name {
  font-weight: 700;
  margin-bottom: 2px;
  font-size: 13px;
  color: #4361ee; }

.invoice .content-section .inv--detail-section .inv-detail-title {
  font-weight: 700;
  margin-bottom: 0;
  font-size: 15px;
  margin-bottom: 15px; }

.invoice .content-section .inv--detail-section .inv-details {
  font-weight: 700;
  margin-bottom: 15px; }

.invoice .content-section .inv--detail-section .inv-street-addr, .invoice .content-section .inv--detail-section .inv-email-address {
  font-weight: 600;
  margin-bottom: 2px;
  font-size: 13px; }

.invoice .content-section .inv--detail-section .inv-list-number {
  margin-bottom: 2px; }
  .invoice .content-section .inv--detail-section .inv-list-number .inv-title {
    font-weight: 400;
    font-size: 20px; }
  .invoice .content-section .inv--detail-section .inv-list-number .inv-number {
    font-weight: 400;
    font-size: 18px;
    color: #4361ee; }

.invoice .content-section .inv--detail-section .inv-created-date, .invoice .content-section .inv--detail-section .inv-due-date {
  margin-bottom: 2px; }
  .invoice .content-section .inv--detail-section .inv-created-date .inv-title, .invoice .content-section .inv--detail-section .inv-due-date .inv-title {
    font-weight: 700;
    font-size: 13px; }
  .invoice .content-section .inv--detail-section .inv-created-date .inv-date, .invoice .content-section .inv--detail-section .inv-due-date .inv-date {
    font-size: 13px;
    font-weight: 600; }

.invoice .content-section .inv--product-table-section {
  padding: 30px 0; }
  .invoice .content-section .inv--product-table-section table {
    margin-bottom: 0; }
  .invoice .content-section .inv--product-table-section thead tr {
    border: none; }
  .invoice .content-section .inv--product-table-section th {
    padding: 9px 22px;
    font-size: 11px !important;
    border: none;
    border-top: 1px solid #e0e6ed;
    border-bottom: 1px solid #e0e6ed;
    color: #515365 !important; }
    .invoice .content-section .inv--product-table-section th:first-child {
      padding-left: 35px; }
    .invoice .content-section .inv--product-table-section th:last-child {
      padding-right: 35px; }
  .invoice .content-section .inv--product-table-section tr td:first-child {
    padding-left: 35px; }
  .invoice .content-section .inv--product-table-section tr td:last-child {
    padding-right: 35px; }
  .invoice .content-section .inv--product-table-section td {
    color: #515365;
    font-weight: 600;
    border: none;
    padding: 10px 25px;
    vertical-align: top !important; }
  .invoice .content-section .inv--product-table-section tbody tr:nth-of-type(even) td {
    background-color: #fafafa; }

.invoice .content-section .inv--payment-info {
  font-size: 13px;
  font-weight: 600; }
  .invoice .content-section .inv--payment-info .inv-title {
    color: #4361ee;
    font-weight: 600;
    margin-bottom: 15px;
    width: 65%;
    margin-left: auto; }
  .invoice .content-section .inv--payment-info p {
    margin-bottom: 0;
    display: flex;
    width: 65%;
    margin-left: auto;
    justify-content: space-between; }
  .invoice .content-section .inv--payment-info span {
    font-weight: 500;
    display: inline-block;
    white-space: nowrap; }
  .invoice .content-section .inv--payment-info .inv-subtitle {
    font-weight: 600;
    font-size: 13px;
    display: inline-block;
    white-space: normal;
    margin-right: 4px; }

.invoice .content-section .inv--total-amounts {
  padding: 0 35px;
  margin-bottom: 25px;
  padding-bottom: 25px;
  border-bottom: 1px solid #ebedf2; }
  .invoice .content-section .inv--total-amounts .grand-total-title h4, .invoice .content-section .inv--total-amounts .grand-total-amount h4 {
    position: relative;
    font-weight: 600;
    font-size: 16px;
    margin-bottom: 0;
    padding: 0;
    color: #0e1726;
    display: inline-block;
    letter-spacing: 1px; }

/*    Inv detail section    */
/*inv-list-number*/
/*inv-created-date*/
/*inv-due-date*/
/*    Inv product table section    */
/*inv--payment-info*/
/*inv--total-amounts*/
/*inv--note*/
.inv--note {
  padding: 0 25px;
  padding-bottom: 25px; }
  .inv--note p {
    margin-bottom: 0;
    font-weight: 600;
    color: #888ea8; }

@media print {
  body * {
    visibility: hidden; }
  #ct {
    visibility: visible; }
    #ct * {
      visibility: visible; }
  .doc-container {
    position: absolute;
    left: 0;
    right: 0;
    top: 0; } }

@page {
  size: auto;
  margin: 0mm; }

/*
===============================
    Invoice Actions Button
===============================
*/
.invoice-actions-btn {
  padding: 25px;
  padding-top: 32px;
  padding-bottom: 32px;
  background-color: #fff;
  border: 1px solid #e0e6ed;
  border-radius: 6px; }
  .invoice-actions-btn label {
    font-size: 14px;
    font-weight: 600;
    color: #515365; }
  .invoice-actions-btn .invoice-action-btn a {
    -webkit-transform: none;
    transform: none; }
    .invoice-actions-btn .invoice-action-btn a.btn-send, .invoice-actions-btn .invoice-action-btn a.btn-print, .invoice-actions-btn .invoice-action-btn a.btn-download {
      width: 100%;
      margin-bottom: 20px; }
    .invoice-actions-btn .invoice-action-btn a.btn-edit {
      width: 100%; }

/* Invoice Actions -> action-btn */
@media (max-width: 1199px) {
  .invoice-actions-btn {
    margin-top: 25px; }
    .invoice-actions-btn .invoice-action-btn a.btn-send, .invoice-actions-btn .invoice-action-btn a.btn-print, .invoice-actions-btn .invoice-action-btn a.btn-download {
      margin-bottom: 0; } }

@media (max-width: 767px) {
  .invoice-actions-btn .invoice-action-btn a.btn-send, .invoice-actions-btn .invoice-action-btn a.btn-print {
    margin-bottom: 20px; } }

@media (max-width: 575px) {
  .invoice .content-section .inv--payment-info .inv-title {
    margin-top: 25px;
    margin-left: 0;
    margin-right: auto;
    margin-bottom: 6px;
    width: auto; }
  .invoice .content-section .inv--payment-info p {
    margin-left: 0;
    margin-right: auto;
    width: auto;
    justify-content: flex-start; }
  .invoice .content-section .inv--payment-info .inv-subtitle {
    min-width: 140px; }
  .invoice-actions-btn .invoice-action-btn a.btn-download {
    margin-bottom: 20px; }
  .invoice .content-section .inv--payment-info span {
    white-space: normal; } }

    </style>
</head>
<body>
    <div class="row invoice  layout-spacing layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <div class="doc-container">

                <div class="row">

                    <div class="col-xl-12">

                        <div class="invoice-container">
                            <div class="invoice-inbox">
                                
                                <div id="ct" class="">
                                    
                                    <div class="invoice-00001">
                                        <div class="content-section">

                                            <div class="inv--head-section inv--detail-section">
                                            
                                                <div class="row">
                                                
                                                    <div class="col-sm-6 col-12 mr-auto">
                                                        <div class="d-flex">
                                                          {{--   <img class="company-logo" src="assets/img/cork-logo.png" alt="company"> --}}
                                                            <h3 class="in-heading align-self-center">Cork Inc.</h3>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6 text-sm-right">
                                                        <p class="inv-list-number"><span class="inv-title">Invoice : </span> <span class="inv-number">#0001</span></p>
                                                    </div>

                                                    <div class="col-sm-6 align-self-center mt-3">
                                                        <p class="inv-street-addr">XYZ Delta Street</p>
                                                        <p class="inv-email-address">info@company.com</p>
                                                        <p class="inv-email-address">(120) 456 789</p>
                                                    </div>
                                                    <div class="col-sm-6 align-self-center mt-3 text-sm-right">
                                                        <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">20 Aug 2020</span></p>
                                                        <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2020</span></p>
                                                    </div>
                                                
                                                </div>
                                                
                                            </div>

                                            <div class="inv--detail-section inv--customer-detail-section">

                                                <div class="row">

                                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                        <p class="inv-to">Invoice To</p>
                                                    </div>

                                                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 inv--payment-info">
                                                        <h6 class=" inv-title">Payment Info:</h6>
                                                    </div>
                                                    
                                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                        <p class="inv-customer-name">Jesse Cory</p>
                                                        <p class="inv-street-addr">405 Mulberry Rd. Mc Grady, NC, 28649</p>
                                                        <p class="inv-email-address">redq@company.com</p>
                                                        <p class="inv-email-address">(128) 666 070</p>
                                                    </div>
                                                    
                                                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 order-sm-0 order-1">
                                                        <div class="inv--payment-info">
                                                            <p><span class=" inv-subtitle">Bank Name:</span> <span>Bank of America</span></p>
                                                            <p><span class=" inv-subtitle">Account Number: </span> <span>1234567890</span></p>
                                                            <p><span class=" inv-subtitle">SWIFT code:</span> <span>VS70134</span></p>
                                                            <p><span class=" inv-subtitle">Country: </span> <span>United States</span></p>

                                                        </div>
                                                    </div>

                                                </div>
                                                
                                            </div>

                                            <div class="inv--product-table-section">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Items</th>
                                                                <th class="text-right" scope="col">Qty</th>
                                                                <th class="text-right" scope="col">Price</th>
                                                                <th class="text-right" scope="col">Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Calendar App Customization</td>
                                                                <td class="text-right">1</td>
                                                                <td class="text-right">$120</td>
                                                                <td class="text-right">$120</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Chat App Customization</td>
                                                                <td class="text-right">1</td>
                                                                <td class="text-right">$230</td>
                                                                <td class="text-right">$230</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Laravel Integration</td>
                                                                <td class="text-right">1</td>
                                                                <td class="text-right">$405</td>
                                                                <td class="text-right">$405</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>Backend UI Design</td>
                                                                <td class="text-right">1</td>
                                                                <td class="text-right">$2500</td>
                                                                <td class="text-right">$2500</td>
                                                            </tr>
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
                                                                    <p class="">Sub Total: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$3155</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Tax Amount: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$700</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class=" discount-rate">Discount : <span class="discount-percentage">5%</span> </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">$10</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7 grand-total-title">
                                                                    <h4 class="">Grand Total : </h4>
                                                                </div>
                                                                <div class="col-sm-4 col-5 grand-total-amount">
                                                                    <h4 class="">$3845</h4>
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

                 


                </div>
                
                
            </div>

        </div>
    </div>
</body>
</html>