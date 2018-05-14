<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    {{-- <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('AdminLTE-3.0.0-alpha/plugins/font-awesome/css/font-awesome.min.css')}}">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('AdminLTE-3.0.0-alpha/dist/css/adminlte.min.css')}}">
    
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('AdminLTE-3.0.0-alpha/plugins/iCheck/flat/blue.css')}}">
    
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{asset('AdminLTE-3.0.0-alpha/plugins/morris/morris.css')}}">
    
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('AdminLTE-3.0.0-alpha/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
    
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{asset('AdminLTE-3.0.0-alpha/plugins/datepicker/datepicker3.css')}}">
    
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('AdminLTE-3.0.0-alpha/plugins/daterangepicker/daterangepicker-bs3.css')}}">
    
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('AdminLTE-3.0.0-alpha/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
    
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> --}}

</head>
<body>
    <div id="app">
        <main class="py-4">
            @include('inc.navbar')
                <div class="container">
                    @include('inc.messages')
                    @yield('content')
                </div>
        </main>
    </div>

    {{-- <!-- jQuery -->
    <script src="{{asset('AdminLTE-3.0.0-alpha/plugins/jquery/jquery.min.js')}}"></script>
    
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js')}}"></script>
    
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    
    <!-- Bootstrap 4 -->
    <script src="{{asset('AdminLTE-3.0.0-alpha/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{asset('AdminLTE-3.0.0-alpha/plugins/morris/morris.min.js')}}"></script>
    
    <!-- Sparkline -->
    <script src="{{asset('AdminLTE-3.0.0-alpha/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
    
    <!-- jvectormap -->
    <script src="{{asset('AdminLTE-3.0.0-alpha/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('AdminLTE-3.0.0-alpha/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    
    <!-- jQuery Knob Chart -->
    <script src="{{asset('AdminLTE-3.0.0-alpha/plugins/knob/jquery.knob.js')}}"></script>
    
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js')}}"></script>
    <script src="{{asset('AdminLTE-3.0.0-alpha/plugins/daterangepicker/daterangepicker.js')}}"></script>
    
    <!-- datepicker -->
    <script src="{{asset('AdminLTE-3.0.0-alpha/plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('AdminLTE-3.0.0-alpha/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    
    <!-- Slimscroll -->
    <script src="{{asset('AdminLTE-3.0.0-alpha/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    
    <!-- FastClick -->
    <script src="{{asset('AdminLTE-3.0.0-alpha/plugins/fastclick/fastclick.js')}}"></script>
    
    <!-- AdminLTE App -->
    <script src="{{asset('AdminLTE-3.0.0-alpha/dist/js/adminlte.js')}}"></script>
    
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('AdminLTE-3.0.0-alpha/dist/js/pages/dashboard.js')}}"></script>
    
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('AdminLTE-3.0.0-alpha/dist/js/demo.js')}}"></script> --}}

</body>
</html>
