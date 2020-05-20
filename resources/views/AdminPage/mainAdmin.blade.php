<!DOCTYPE html>
<?php
    $url = "";
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Abstack - Responsive Web App Kit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{$url}}/backend/assets/images/favicon.ico">

         <!-- Bootstrap fileupload css -->
         <link href="{{$url}}/backend/plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />

        <!-- App css -->
        <link href="{{$url}}/backend/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{$url}}/backend/assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{$url}}/backend/assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="{{$url}}/backend/assets/js/modernizr.min.js"></script>
        

    </head>

    <body>

        <!-- Navigation Bar-->
        @include('AdminPage.SubAdmin.menu')
        <!-- End Navigation Bar-->


        @yield('admin-main')
        
        <!-- end wrapper -->


        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        2017 - 2018 © Abstack. - Coderthemes.com
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->


        <!-- jQuery  -->
        <script src="{{$url}}/backend/assets/js/jquery.min.js"></script>
        <script src="{{$url}}/backend/assets/js/popper.min.js"></script>
        <script src="{{$url}}/backend/assets/js/bootstrap.min.js"></script>
        <script src="{{$url}}/backend/assets/js/waves.js"></script>
        <script src="{{$url}}/backend/assets/js/jquery.slimscroll.js"></script>

        <!-- Counter number -->
        <script src="{{$url}}/backend/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="{{$url}}/backend/plugins/counterup/jquery.counterup.min.js"></script>

        <!-- Chart JS -->
        <script src="{{$url}}/backend/plugins/chart.js/chart.bundle.js"></script>

        <!-- init dashboard -->
        <script src="{{$url}}/backend/assets/pages/jquery.dashboard.init.js"></script>


        <!-- App js -->
        <script src="{{$url}}/backend/assets/js/jquery.core.js"></script>
        <script src="{{$url}}/backend/assets/js/jquery.app.js"></script>

        <script src="{{$url}}/backend/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>


        <!-- Required datatable js -->
        <script src="{{$url}}/backend/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{$url}}/backend/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{$url}}/backend/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="{{$url}}/backend/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="{{$url}}/backend/plugins/datatables/jszip.min.js"></script>
        <script src="{{$url}}/backend/plugins/datatables/pdfmake.min.js"></script>
        <script src="{{$url}}/backend/plugins/datatables/vfs_fonts.js"></script>
        <script src="{{$url}}/backend/plugins/datatables/buttons.html5.min.js"></script>
        <script src="{{$url}}/backend/plugins/datatables/buttons.print.min.js"></script>
        <!-- Responsive examples -->
        <script src="{{$url}}/backend/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="{{$url}}/backend/plugins/datatables/responsive.bootstrap4.min.js"></script>




        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();
            } );

        </script>
        @yield('admin-script')
    </body>
</html>