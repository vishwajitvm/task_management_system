<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    
<!-- Mirrored from html.designstream.co.in/pick/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 18:46:34 GMT -->
<head>
        <meta charset="UTF-8">
        <title>Task Board -VM</title>
        <link rel="shortcut icon" href="{{asset('backend/dist/images/favicon.ico')}}" />
        <meta name="viewport" content="width=device-width,initial-scale=1"> 

        <!-- START: Template CSS-->
        <link rel="stylesheet" href="{{asset('backend/dist/vendors/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/dist/vendors/jquery-ui/jquery-ui.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/dist/vendors/jquery-ui/jquery-ui.theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/dist/vendors/simple-line-icons/css/simple-line-icons.css')}}">        
        <link rel="stylesheet" href="{{asset('backend/dist/vendors/flags-icon/css/flag-icon.min.css')}}">         
        <!-- END Template CSS-->

        <!-- START: Page CSS-->
        <link rel="stylesheet"  href="{{asset('backend/dist/vendors/chartjs/Chart.min.css')}}">
        <!-- END: Page CSS-->

        <!-- START: Page CSS-->   
        <link rel="stylesheet" href="{{asset('backend/dist/vendors/morris/morris.css')}}"> 
        <link rel="stylesheet" href="{{asset('backend/dist/vendors/weather-icons/css/pe-icon-set-weather.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('backend/dist/vendors/chartjs/Chart.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('backend/dist/vendors/starrr/starrr.css')}}"> 
        <link rel="stylesheet" href="{{asset('backend/dist/vendors/fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/dist/vendors/ionicons/css/ionicons.min.css')}}"> 
        <link rel="stylesheet" href="{{asset('backend/dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.css')}}">
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="{{asset('backend/dist/css/main.css')}}">
        <!-- END: Custom CSS-->
    </head>
    <!-- END Head-->

    <!-- START: Body-->
    <body id="main-container" class="default">

        <!-- START: Pre Loader-->
        <div class="se-pre-con">
            <div class="loader"></div>
        </div>
        <!-- END: Pre Loader-->

        <!-- START: Header-->
        @include('admin_dashboard.body.header')
        <!-- END: Header-->

        <!-- START: Main Menu-->
        @include('admin_dashboard.body.sidebar')
        <!-- END: Main Menu-->

        <!-- START: Main Content-->
        <main>
            @yield('admin')
        </main>
        <!-- END: Content-->

        <!-- START: Footer-->
        @include('admin_dashboard.body.footer')
        <!-- END: Footer-->


        <!-- START: Back to top-->
        <a href="#" class="scrollup text-center"> 
            <i class="icon-arrow-up"></i>
        </a>
        <!-- END: Back to top-->


        <!-- START: Template JS-->
        <script src="{{asset('backend/dist/vendors/jquery/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/moment/moment.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>    
        <script src="{{asset('backend/dist/vendors/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <!-- END: Template JS-->

        <!-- START: APP JS-->
        <script src="{{asset('backend/dist/js/app.js')}}"></script>
        <!-- END: APP JS-->

        <!-- START: Page Vendor JS-->
        <script src="{{asset('backend/dist/vendors/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/morris/morris.min.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/chartjs/Chart.min.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/starrr/starrr.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/jquery-flot/jquery.canvaswrapper.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/jquery-flot/jquery.colorhelpers.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/jquery-flot/jquery.flot.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/jquery-flot/jquery.flot.saturated.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/jquery-flot/jquery.flot.browser.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/jquery-flot/jquery.flot.drawSeries.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/jquery-flot/jquery.flot.uiConstants.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/jquery-flot/jquery.flot.legend.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/jquery-flot/jquery.flot.pie.js')}}"></script>        
        {{-- <script src="backend/dist/vendors/chartjs/Chart.min.js"></script>   --}}
        <script src="{{asset('backend/dist/vendors/jquery-jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/jquery-jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/jquery-jvectormap/jquery-jvectormap-de-merc.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/jquery-jvectormap/jquery-jvectormap-us-aea.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/apexcharts/apexcharts.min.js')}}"></script>
        <!-- END: Page Vendor JS-->

        <!-- START: Page JS-->
        <script src="{{asset('backend/dist/js/home.script.js')}}"></script>
        <!-- END: Page JS-->

        <!-- START: Page Vendor JS-->
        <script src="{{asset('backend/dist/vendors/datatable/js/jquery.dataTables.min.js')}}"></script> 
        <script src="{{asset('backend/dist/vendors/datatable/js/dataTables.bootstrap4.min.js')}}"></script> 
        <script src="{{asset('backend/dist/vendors/datatable/editor/mindmup-editabletable.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/datatable/editor/numeric-input-example.js')}}"></script>
        <!-- END: Page Vendor JS-->

        <!-- view data editable script-->
        <script src="{{asset('backend/dist/js/datatableedit.script.js')}}"></script>

        <!--form -->
        <script src="{{asset('backend/dist/vendors/jquery/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/moment/moment.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>    
        <script src="{{asset('backend/dist/vendors/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('backend/dist/js/app.js')}}"></script>
        <!--form -->

          <!--sweet alert cdn here-->
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

            <script type="text/javascript">
            $(function() {
                $(document).on('click' , '#delete' ,function(e) {
                e.preventDefault() ;
                var link = $(this).attr("href") ;
                //sweetalert 
                    Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                        )
                    }
                    })
                //sweetalert
                }) ;
            })
            </script>



            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

            <script>
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type','info') }}"
            switch(type){
                case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;

                case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;


                case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;

                case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break; 
            }
            @endif 
            </script>


        
    </body>
    <!-- END: Body-->

</html>
