<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Breadcrumbs | CORK - Multipurpose Bootstrap Dashboard Template </title>
    @include('layouts.theme.styles')
</head>
<body class="alt-menu sidebar-noneoverflow">

    <!--  BEGIN HEADER 1  -->
    @include('layouts.theme.header1')
    <!--  END HEADER  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN HEADER2  -->
        @include('layouts.theme.header2')
        <!--  END HEADER2  -->      
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            @yield('content')
            @include('layouts.theme.footer')
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    @include('layouts.theme.scripts')


</body>
</html>