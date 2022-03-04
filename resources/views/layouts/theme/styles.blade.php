<link rel="icon" type="image/x-icon" href="{{asset('theme/assets/img/favicon.ico')}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('theme/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/forms/theme-checkbox-radio.css')}}">
    <link href="{{asset('theme/assets/css/tables/table-basic.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/assets/css/elements/search.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('theme/plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('theme/assets/css/elements/custom-pagination.css')}}" rel="stylesheet" type="text/css" />

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{asset('theme/assets/css/apps/invoice-add.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('theme/plugins/dropify/dropify.min.css')}}">

    <link href="{{asset('theme/plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('theme/plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/css/forms/switches.css')}}">
    <link href="{{asset('theme/assets/css/apps/contacts.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('theme/assets/css/apps/invoice-preview.css')}}" rel="stylesheet" type="text/css" />

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <style>

        /*
            The below code is for DEMO purpose --- Use it if you are using this demo
        */

        .topbar-nav.header nav#topbar ul.menu-categories li.menu.active > a {
            background-color: #61b6cd;
        }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu > a {
            padding: 10px 17px 10px 17px;
            margin-right: 10px;
        }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu.active > a > div span {
            color: #060818;
        }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu.active > a > div svg:not(.feather-chevron-down) {
            color: #060818;
        }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu.active > a svg.feather.feather-chevron-down {
            color: #060818;
        }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu:not(.active):hover > a {
            background: rgb(97 182 205 / 18%);
        }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu:not(.active):hover > a > div span {
            color: #61b6cd;
        }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu:not(.active):hover > a > div svg:not(.feather-chevron-down) {
            color: #61b6cd;
        }
        .topbar-nav.header nav#topbar ul.menu-categories li.menu:not(.active):hover > a svg.feather.feather-chevron-down {
            color: #61b6cd;
        }

        @media (max-width: 1199px) and (min-width: 992px) {
            .topbar-nav.header nav#topbar ul.menu-categories li.menu > a {
                padding: 10px 6px 10px 6px;
            }
            .topbar-nav.header nav#topbar ul.menu-categories li.menu:not(:last-child) > a {
                margin-right: 12px;
            }
        }
        

        /*
            Just for demo purpose ---- Remove it.
        */
        /*<starter kit design>*/

        .widget-one {

        }
        .widget-one h6 {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 0px;
            margin-bottom: 22px;
        }
        .widget-one p {
            font-size: 15px;
            margin-bottom: 0;
        }

        /*</starter kit design>*/

    </style>
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
   @livewireStyles