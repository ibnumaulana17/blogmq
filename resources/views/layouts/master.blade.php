
<!DOCTYPE html>
<!-- <html lang="en"> -->
<html lang="{{ app()->getLocale() }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MQ Apps</title>

    <!-- <link rel="shortcut icon" href="{{ asset('solutech.png') }}"> -->
    <!-- Bootstrap 3.3.7 -->
    <link href="{{ URL::asset('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('assets/admin/bower_components/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" >
    <!-- Ionicons -->
    <link  href="{{ URL::asset('assets/admin/bower_components/Ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <!-- Theme style -->
    <link href="{{ URL::asset('assets/admin/dist/css/AdminLTE.min.css')}}" rel="stylesheet" >

    <link  href="{{ URL::asset('assets/admin/dist/tema/skin-red-light.min.css')}}" rel="stylesheet">

    <link  href="{{ URL::asset('assets/admin/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet">

    <link href="favicon.ico" rel="icon" type="image/ico">
    

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
   


 
    <!--Andri 16 08 2017 -->
    <!-- jQuery 3 -->
   

    <script src="{{ URL::asset('assets/admin/bower_components/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap 3.3.7 -->
    <script src="{{ URL::asset('assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- SlimScroll -->
    <script src="{{ URL::asset('assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script> 

    <!-- FastClick -->
    <script src="{{ URL::asset('assets/admin/bower_components/fastclick/lib/fastclick.js') }}"></script> 
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('assets/admin/dist/js/adminlte.min.js') }}"></script> 
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.min.js"></script>
   <!--  <script src="{{ URL::asset('assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script> 

    <script src="{{ URL::asset('assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>  -->

    <!-- jQuery Date picker -->
    <script src="{{ URL::asset('assets/jquery-ui.js') }}"></script>

</head>

<body class="hold-transition skin-blue sidebar-mini">


<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="https://madinatulquran.or.id/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>Q</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>MQ</b>APPS</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
     @include('layouts.navbar_header')
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
     @include('layouts.navbar_sidebar')
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <!-- <h1>
        Blank page
        <small>it all starts here</small>
      </h1> -->
      <!-- <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol> -->
    </section>

    <!-- Main content -->
    <section class="content">

      @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2018 Developed By  <a href="https://madinatulquran.or.id/">E-Teams </a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>











    <!-- Jquery validation -->
    <!-- <script src="{{ URL::asset('assets/jquery_validation/dist/jquery.validate.js') }}"></script> 
    <script src="{{ URL::asset('assets/jquery_validation/dist/jquery.validate.min.js') }}"></script>  -->

    <!-- Jquery validation -->
   <!--  <script src="{{ URL::asset('assets/jquery_validation/dist/additional-methods.js') }}"></script>
    <script src="{{ URL::asset('assets/jquery_validation/dist/additional-methods.min.js') }}"></script> -->


    
    <!-- @stack('scripts') -->
        <!-- function untuk Date picker -->
        <script>
                                 
              $( function() {
                $( "#datepicker" ).datepicker(
                    // dateFormat: 'yy-mm-dd';
                    {dateFormat: 'yy-mm-dd',}
                  );
                $( "#datepicker1" ).datepicker(
                    // dateFormat: 'yy-mm-dd';
                    {dateFormat: 'yy-mm-dd',}
                  );

              } );


        </script>


        <!-- function untuk Validasi -->
       <!--  <script>
            $(document).ready(function() {
                $("#fileForm").validate();
            });
        </script> -->



</script>


</body>

</html>
