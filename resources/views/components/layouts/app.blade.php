<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>ໂຮງຊວດຈຳສົມພອນ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description">
        <meta content="Coderthemes" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.ico')}}">

        <!-- App css -->
        <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" type="text/css" id="style-stylesheet">
        <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet">
        <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet">
        <!-- Notification css (Toastr) -->
        <link href="{{asset('backend/assets/libs/toastr/toastr.min.css')}}" rel="stylesheet" type="text/css">

        <link href="{{asset('backend/assets/libs/custombox/custombox.min.css')}}" rel="stylesheet" type="text/css">
        @livewireStyles
    </head>

    <body data-layout="horizontal">

        <!-- Begin page -->
        <div id="wrapper">

            @include('components.layouts.headbar')

            <div class="content-page">
                <div class="content">
                    <div class="container-fluid">

                       {{$slot}}

                    </div>
                </div>
                @include('components.layouts.footer')
            </div>
        </div>
        <!-- END wrapper -->

        @livewireScripts
        <!-- Vendor js -->
        <script src="{{asset('backend/assets/js/vendor.min.js')}}"></script>

        <!-- <script src="{{asset('backend/assets/libs/morris-js/morris.min.js')}}"></script> -->
        <script src="{{asset('backend/assets/libs/raphael/raphael.min.js')}}"></script>

        <!-- <script src="{{asset('backend/assets/js/pages/dashboard.init.js')}}"></script> -->

        <!-- App js -->
        <script src="{{asset('backend/assets/js/app.min.js')}}"></script>
        <!-- Toastr js -->
        <script src="{{asset('backend/assets/libs/toastr/toastr.min.js')}}"></script>
        <script src="{{asset('backend/assets/js/pages/toastr.init.js')}}"></script>

        <!-- Modal -->
        <script src="{{asset('backend/assets/libs/custombox/custombox.min.js')}}"></script>

        <script src="{{asset('backend/assets/libs/bootstrap-filestyle2/bootstrap-filestyle.min.js')}}"></script>
        <!-- Init js-->
        <!-- <script src="{{asset('backend/assets/js/pages/form-advanced.init.js')}}"></script> -->

        <script>
        window.Livewire.on('alert', param => {
            toastr.options.positionClass = 'toast-bottom-right';
            toastr[param['type']](param['message'],param['type']);
        });

        @if(Session::has('success'))
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.success("{{Session::get('success') }}")
        @elseif(Session::has('warning'))
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.warning("{{Session::get('warning')}}")
        @elseif(Session::has('error'))
            toastr.options.positionClass = 'toast-bottom-right';
            toastr.error("{{Session::get('error')}}")
        @endif

    </script>

        @stack('scripts')
    </body>

</html>