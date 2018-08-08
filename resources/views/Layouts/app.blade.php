<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <title>Consultécnicos</title>

    <!-- Bootstrap -->
    <link href="{{asset('design/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('design/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('design/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('design/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('design/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('design/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('design/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    
    <!-- bootstrap-datetimepicker -->
    <link href="{{asset('design/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')}}" rel="stylesheet">

    <!-- Datatables -->
    <link href="{{asset('design/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('design/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('design/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('design/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('design/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('design/css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('design/css/main.css')}}" rel="stylesheet">


    <link rel="apple-touch-icon" href="{{asset('design/apple-touch-icon.png')}}">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,400,600" rel="stylesheet">

    <!-- Treetable -->
    <link href="{{asset('design/css/jquery.treetable.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('design/css/jquery.treetable.theme.default.css')}}" rel="stylesheet" type="text/css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('design/css/style.css')}}">

    <!-- Icons -->

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css')}}" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->

    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css')}}"> -->
    

</head>
<body  class="nav-md">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Start Header -->


<!-- top navigation -->
@yield('content')

{{-- <div class="right_col" role="main">
<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="top_tiles">
                <div class="row">
                
                    <div class="animated flipInY col-lg-4 col-lg-offset-2 col-md-offset-2  col-md-4 col-sm-offset-0  col-sm-6 col-xs-offset-0  col-xs-12">
                        <a href="{{route('listaM')}}"><div class="tile-stats">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <div class="count">1700</div>
                            <h3>Correspondencia Enviada</h3>
                            <p>Correspondencia que sale de Consultecnicos para los clientes.</p>
                        </div></a>
                    </div>
                    <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="{{route('listaM')}}"><div class="tile-stats">
                            <div class="icon"><i class="fa fa-envelope"></i></div>
                            <div class="count">3200</div>
                            <h3>Correspondencia Recibida</h3>
                            <p>Correspondencia que envían los clientes para Consultecnicos. </p>
                        </div></a>
                    </div>
                </div>
                <div class="row">
                    <div class="animated flipInY col-lg-4 col-lg-offset-2 col-md-offset-2  col-md-4 col-sm-offset-0  col-sm-6 col-xs-offset-0  col-xs-12">
                        <a href="{{route('listaCl')}}"><div class="tile-stats">
                            <div class="icon"><i class="fa fa-globe"></i></div>
                            <div class="count">5</div>
                            <h3>Clientes</h3>
                            <p>Empresas receptoras de los beneficios que ofrece Consultecnicos. </p>
                        </div></a>
                    </div>
                    <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <a href="{{route('lista')}}"><div class="tile-stats">
                            <div class="icon"><i class="fa fa-edit"></i></div>
                            <div class="count">28</div>
                            <h3>Proyectos</h3>
                            <p>Actividades que Consultecnicos realiza para sus clientes. </p>
                        </div></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> --}}
    </div>
</div>

    

            



    <!-- jQuery -->
    <script src="{{asset('design/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('design/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('design/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('design/vendors/nprogress/nprogress.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('design/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('design/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('design/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('design/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="{{asset('design/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="{{asset('design/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
    <script src="{{asset('design/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
    <script src="{{asset('design/vendors/google-code-prettify/src/prettify.js')}}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{asset('design/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <!-- Switchery -->
    <script src="{{asset('design/vendors/switchery/dist/switchery.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('design/vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- Parsley -->
    <script src="{{asset('design/vendors/parsleyjs/dist/parsley.min.js')}}"></script>
    <!-- Autosize -->
    <script src="{{asset('design/vendors/autosize/dist/autosize.min.js')}}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{asset('design/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>
    <!-- starrr -->
    <script src="{{asset('design/vendors/starrr/dist/starrr.js')}}"></script>

    <!-- DateJS -->
    <script src="{{asset('design/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('design/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('design/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>


    <!-- Datatables -->
    <script src="{{asset('design/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('design/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('design/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('design/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('design/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('design/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('design/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('design/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('design/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('design/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('design/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('design/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    <script src="{{asset('design/vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{asset('design/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{asset('design/vendors/pdfmake/build/vfs_fonts.js')}}"></script>

    <!-- Treetable -->
    <script src="{{asset('design/js/jquery.treetable.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('design/js/custom.js')}}"></script>
    <script src="{{asset('design/js/main.js')}}"></script>


</body>
</html>
