<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    
<!-- Mirrored from html.designstream.co.in/pick/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 18:46:34 GMT -->
<head>
        <meta charset="UTF-8">
        <title>Pick Admin</title>
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
        <div id="header-fix" class="header fixed-top">
            <div class="site-width">
                <nav class="navbar navbar-expand-lg  p-0">
                    <div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">  
                        <a href="index.html" class="horizontal-logo text-left">
                            <svg height="20pt" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512" width="20pt" xmlns="http://www.w3.org/2000/svg">
                            <g transform="matrix(.1 0 0 -.1 0 512)" fill="#1e3d73">
                            <path d="m1450 4481-1105-638v-1283-1283l1106-638c1033-597 1139-654 1139-619 0 4-385 674-855 1489-470 814-855 1484-855 1488 0 8 1303 763 1418 822 175 89 413 166 585 190 114 16 299 13 408-5 100-17 231-60 314-102 310-156 569-509 651-887 23-105 23-331 0-432-53-240-177-460-366-651-174-175-277-247-738-512-177-102-322-189-322-193s104-188 231-407l231-400 46 28c26 15 360 207 742 428l695 402v1282 1282l-1105 639c-608 351-1107 638-1110 638s-502-287-1110-638z"/><path d="m2833 3300c-82-12-190-48-282-95-73-36-637-358-648-369-3-3 580-1022 592-1034 5-5 596 338 673 391 100 69 220 197 260 280 82 167 76 324-19 507-95 184-233 291-411 320-70 11-89 11-165 0z"/>
                            </g>
                            </svg> <span class="h4 font-weight-bold align-self-center mb-0 ml-auto">PICK</span>              
                        </a>                   
                    </div>
                    <div class="navbar-header h4 mb-0 text-center h-100 collapse-menu-bar">
                        <a href="#" class="sidebarCollapse" id="collapse"><i class="icon-menu"></i></a>
                    </div>

                    <form class="float-left d-none d-lg-block search-form">
                        <div class="form-group mb-0 position-relative">
                            <input type="text" class="form-control border-0 rounded bg-search pl-5" placeholder="Search anything...">
                            <div class="btn-search position-absolute top-0">
                                <a href="#"><i class="h6 icon-magnifier"></i></a>
                            </div>
                            <a href="#" class="position-absolute close-button mobilesearch d-lg-none" data-toggle="dropdown" aria-expanded="false"><i class="icon-close h5"></i>                               
                            </a>

                        </div>
                    </form>
                    <div class="navbar-right ml-auto h-100">
                        <ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
                            <li class="d-inline-block align-self-center  d-block d-lg-none">
                                <a href="#" class="nav-link mobilesearch" data-toggle="dropdown" aria-expanded="false"><i class="icon-magnifier h4"></i>                               
                                </a>
                            </li>                        

                            <li class="dropdown align-self-center">
                                <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="icon-reload h4"></i>
                                    <span class="badge badge-default"> <span class="ring">
                                        </span><span class="ring-point">
                                        </span> </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right border  py-0">
                                    <li>
                                        <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                            <div class="media">
                                                <img src="{{asset('backend/dist/images/author.jpg')}}" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                                <div class="media-body">
                                                    <p class="mb-0">john</p>
                                                    <span class="text-success">New user registered.</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                            <div class="media">
                                                <img src="{{asset('backend/dist/images/author2.jpg')}}" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                                <div class="media-body">
                                                    <p class="mb-0">Peter</p>
                                                    <span class="text-success">Server #12 overloaded.</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                            <div class="media">
                                                <img src="{{asset('backend/dist/images/author3.jpg')}}" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                                <div class="media-body">
                                                    <p class="mb-0">Bill</p>
                                                    <span class="text-danger">Application error.</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li><a class="dropdown-item text-center py-2" href="#"> See All Tasks <i class="icon-arrow-right pl-2 small"></i></a></li>
                                </ul>

                            </li>
                            <li class="dropdown align-self-center d-inline-block">
                                <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i class="icon-bell h4"></i>
                                    <span class="badge badge-default"> <span class="ring">
                                        </span><span class="ring-point">
                                        </span> </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right border   py-0">
                                    <li>
                                        <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                            <div class="media">
                                                <img src="{{asset('backend/dist/images/author.jpg')}}" alt="" class="d-flex mr-3 img-fluid rounded-circle w-50">
                                                <div class="media-body">
                                                    <p class="mb-0 text-success">john send a message</p>
                                                    12 min ago
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li >
                                        <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                            <div class="media">
                                                <img src="{{asset('backend/dist/images/author2.jpg')}}" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                                <div class="media-body">
                                                    <p class="mb-0 text-danger">Peter send a message</p>
                                                    15 min ago
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li >
                                        <a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0" href="#">
                                            <div class="media">
                                                <img src="{{asset('backend/dist/images/author3.jpg')}}" alt="" class="d-flex mr-3 img-fluid rounded-circle">
                                                <div class="media-body">
                                                    <p class="mb-0 text-warning">Bill send a message</p>
                                                    5 min ago
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li><a class="dropdown-item text-center py-2" href="#"> Read All Message <i class="icon-arrow-right pl-2 small"></i></a></li>
                                </ul>
                            </li>
                            <li class="dropdown user-profile align-self-center d-inline-block">
                                <a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false"> 
                                    <div class="media">                                   
                                        <img src="{{asset('backend/dist/images/author.jpg')}}" alt="" class="d-flex img-fluid rounded-circle" width="29">
                                    </div>
                                </a>

                                <div class="dropdown-menu border dropdown-menu-right p-0">
                                    <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                        <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                    <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                        <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                        <span class="icon-support mr-2 h6  mb-0"></span> Help Center</a>
                                    <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                        <span class="icon-globe mr-2 h6 mb-0"></span> Forum</a>
                                    <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                        <span class="icon-settings mr-2 h6 mb-0"></span> Account Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="#" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                        <span class="icon-logout mr-2 h6  mb-0"></span> Sign Out</a>
                                </div>

                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- END: Header-->

        <!-- START: Main Menu-->
        <div class="sidebar">
            <div class="site-width">
                <!-- START: Menu-->
                <ul id="side-menu" class="sidebar-menu">
                    <li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Dashboard</a>                  
                        <ul>
                            <li class="active"><a href="index.html"><i class="icon-rocket"></i> Dashboard</a></li>
                            <li><a href="index-account.html"><i class="icon-layers"></i> Account</a></li>
                            <li><a href="index-analytic.html"><i class="icon-grid"></i> Analytic</a></li>
                            <li><a href="index-covid.html"><i class="icon-earphones"></i> COVID</a></li>
                            <li><a href="index-crypto.html"><i class="icon-support"></i> Crypto</a></li>
                            <li><a href="index-ecommerce.html"><i class="icon-briefcase"></i> Ecommerce</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><i class="icon-organization mr-1"></i> Layout</a>
                        <ul>
                            <li class="dropdown"><a href="#"><i class="icon-options"></i>Horizontal</a>
                                <ul class="sub-menu">
                                    <li><a href="layout-horizontal.html"><i class="icon-energy"></i> Light</a></li>
                                    <li><a href="layout-horizontal-semidark.html"><i class="icon-disc"></i> Semi Dark</a></li>
                                    <li><a href="layout-horizontal-dark.html"><i class="icon-frame"></i> Dark</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><i class="icon-options-vertical"></i>Vertical</a>
                                <ul class="sub-menu">
                                    <li><a href="layout-vertical.html"><i class="icon-energy"></i> Light</a></li>
                                    <li><a href="layout-vertical-semidark.html"><i class="icon-disc"></i> Semi Dark</a></li>
                                    <li><a href="layout-vertical-dark.html"><i class="icon-frame"></i> Dark</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#"><i class="icon-grid"></i>Compact Menu</a>
                                <ul class="sub-menu">
                                    <li><a href="layout-compact.html"><i class="icon-energy"></i> Light</a></li>
                                    <li><a href="layout-compact-semidark.html"><i class="icon-disc"></i> Semi Dark</a></li>
                                    <li><a href="layout-compact-dark.html"><i class="icon-frame"></i> Dark</a></li>
                                </ul>
                            </li>
                           
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><i class="icon-layers mr-1"></i> Web Apps</a>                  
                        <ul>
                            <li><a href="app-calendar.html"><i class="icon-calendar"></i> Calendar</a></li>
                            <li><a href="app-chat.html"><i class="icon-speech"></i> Chats</a></li>
                            <li><a href="app-to-do.html"><i class="icon-support"></i> Todo</a></li> 
                            <li><a href="app-mail.html"><i class="icon-envelope"></i>Mailapp</a></li>
                            <li><a href="app-filemanager.html"><i class="icon-folder"></i> File Manager</a></li>
                            <li><a href="app-contactlist.html"><i class="icon-people"></i> Contact List</a></li>
                            <li><a href="app-taskboard.html"><i class="icon-event"></i> Task Board</a></li>
                            <li><a href="app-notes.html"><i class="icon-tag"></i> Notes</a></li> 
                            <li><a href="app-invoicelist.html"><i class="icon-book-open"></i> Invoices</a></li>
                        </ul>                   
                    </li>

                    <li class="dropdown"><a href="#"><i class="icon-cursor mr-1"></i> Elements</a>                 
                        <ul>
                            <li class="dropdown"><a href="#"><i class="icon-chart"></i>Charts</a>                                
                                <ul class="sub-menu">                                    
                                    <li><a href="chart-morris.html"><i class="icon-energy"></i> Morris Chart</a></li>
                                    <li><a href="chart-chartist.html"><i class="icon-disc"></i> Chartist js</a></li>
                                    <li><a href="chart-echart.html"><i class="icon-frame"></i> eCharts</a></li>
                                    <li><a href="chart-flot.html"><i class="icon-fire"></i> Flot Chart</a></li>
                                    <li><a href="chart-knob.html"><i class="icon-shuffle"></i> Knob Chart</a></li>
                                    <li class="dropdown"><a href="#" class="d-flex align-items-center"><i class="icon-control-pause"></i> Charts js</a>                                          
                                        <ul class="sub-menu">
                                            <li><a href="chartjs-bar.html"><i class="icon-energy"></i> Bar charts</a></li>
                                            <li><a href="chartjs-line.html"><i class="icon-disc"></i> Line charts</a></li>
                                            <li><a href="chartjs-area.html"><i class="icon-frame"></i> Area charts</a></li>
                                            <li><a href="chartjs-other.html"><i class="icon-fire"></i> Doughnut, Pie, Polar charts</a></li>
                                            <li><a href="chartjs-linear.html"><i class="icon-shuffle"></i> Linear scale</a></li>                                                                        
                                        </ul>                                           
                                    </li>
                                    <li><a href="chart-sparkline.html"><i class="icon-graph"></i> Sparkline Chart</a></li>                            
                                    <li><a href="chart-peity.html"><i class="icon-pie-chart"></i> Peity Chart</a></li>   
                                    <li><a href="chart-google.html"><i class="icon-drawer"></i> Google Charts</a></li>
                                    <li><a href="chart-apex.html"><i class="icon-magnet"></i> Apex Charts</a></li>
                                    <li><a href="chart-c3.html"><i class="icon-hourglass"></i> C3 Charts</a></li>
                                </ul>                               
                            </li> 
                            <li class="dropdown"><a href="#"><i class="icon-film"></i>Form</a>                              
                                <ul class="sub-menu">
                                    <li><a href="form-basic.html"><i class="icon-disc"></i> Basic Form</a></li>
                                    <li><a href="form-layout.html"><i class="icon-cursor-move"></i> Form Layout</a></li>
                                    <li><a href="form-validation.html"><i class="icon-star"></i> Form Validation</a></li>
                                    <li class="dropdown"><a href="#" class="d-flex align-items-center"><i class="icon-film"></i> Form Elements</a>                                          
                                        <ul class="sub-menu">
                                            <li><a href="form-elements-switch.html"><i class="icon-energy"></i> Switch</a></li>
                                            <li><a href="form-elements-checkbox.html"><i class="icon-disc"></i> Checkbox</a></li>
                                            <li><a href="form-elements-radiobutton.html"><i class="icon-frame"></i> Radio</a></li>
                                            <li><a href="form-elements-input.html"><i class="icon-fire"></i> Input</a></li>                                       
                                        </ul>                                           
                                    </li>
                                    <li><a href="form-float-input.html"><i class="icon-symbol-male"></i> Float Input</a></li>
                                    <li><a href="form-wizard.html"><i class="icon-loop"></i> Form Wizards</a></li>
                                    <li><a href="form-upload.html"><i class="icon-pin"></i> Form Uploads</a></li>
                                    <li><a href="form-mask.html"><i class="icon-check"></i> Form Mask</a></li>                            
                                    <li><a href="form-dropzone.html"><i class="icon-present"></i> Form Dropzone</a></li>
                                    <li><a href="form-icheck.html"><i class="icon-briefcase"></i> Icheck Controls</a></li>
                                    <li><a href="form-cropper.html"><i class="icon-hourglass"></i> Image Cropper</a></li>
                                    <li><a href="form-htmleditor.html"><i class="icon-graduation"></i> HTML5 Editor</a></li>
                                    <li><a href="form-typehead.html"><i class="icon-puzzle"></i> Form Typehead</a></li>                            
                                    <li><a href="form-xeditable.html"><i class="icon-cloud-upload"></i> Xeditable</a></li>
                                    <li><a href="form-summernote.html"><i class="icon-ghost"></i> Summernote</a></li>
                                </ul>  
                            </li>
                            <li class="dropdown"><a href="#"><i class="icon-menu"></i>Tables</a>                               
                                <ul class="sub-menu">
                                    <li><a href="table-basic.html"><i class="icon-grid"></i> Table Basic</a></li>
                                    <li><a href="table-layout.html"><i class="icon-layers"></i> Table Layout</a></li>
                                    <li><a href="table-datatable.html"><i class="icon-docs"></i> Datatable</a></li>
                                    <li><a href="table-footable.html"><i class="icon-wallet"></i> Footable</a></li>
                                    <li><a href="table-jsgrid.html"><i class="icon-folder"></i> Jsgrid</a></li>
                                    <li><a href="table-responsive.html"><i class="icon-control-pause"></i> Table Responsive</a></li>                            
                                    <li><a href="table-editable.html"><i class="icon-pencil"></i> Editable Table</a></li>
                                </ul>   
                            </li>
                        </ul>                   
                    </li>
                    <li class="dropdown"><a href="#"><i class="icon-magnet mr-1"></i> UI Component</a>                  
                        <ul>
                            <li class="dropdown"><a href="#"><i class="icon-screen-desktop"></i>UI Elements</a>                              
                                <ul class="sub-menu">
                                    <li><a href="ui-alert.html"><i class="icon-bell"></i> Alerts</a></li>
                                    <li><a href="ui-badges.html"><i class="icon-badge"></i> Badges</a></li>
                                    <li><a href="ui-buttons.html"><i class="icon-control-play"></i> Buttons</a></li>
                                    <li><a href="ui-cards.html"><i class="icon-layers"></i> Cards</a></li>
                                    <li><a href="ui-carousel.html"><i class="icon-picture"></i> Carousel</a></li>                           
                                    <li><a href="ui-collapse.html"><i class="icon-arrow-up"></i> Collapse</a></li>
                                    <li><a href="ui-dropdowns.html"><i class="icon-arrow-down"></i> Dropdowns</a></li>                          
                                    <li><a href="ui-jumbotron.html"><i class="icon-screen-desktop"></i> Jumbotron</a></li>
                                    <li><a href="ui-modals.html"><i class="icon-frame"></i> Modal</a></li> 
                                    <li><a href="ui-pagination.html"><i class="icon-docs"></i> Pagination</a></li>  
                                    <li><a href="ui-popoverandtooltip.html"><i class="icon-pin"></i> Popover &amp; Tooltip</a></li>
                                    <li><a href="ui-progress.html"><i class="icon-graph"></i> Progress</a></li>
                                    <li><a href="ui-scrollspy.html"><i class="icon-shuffle"></i> Scrollspy</a></li>
                                    <li><a href="ui-select2.html"><i class="icon-wallet"></i> Select2</a></li>
                                    <li><a href="ui-sweetalert.html"><i class="icon-fire"></i> Sweet Alert</a></li>
                                    <li><a href="ui-timeline.html"><i class="icon-graduation"></i> Timeline</a></li>
                                    <li><a href="ui-toastr.html"><i class="icon-layers"></i> Toastr</a></li>
                                </ul>                              
                            </li>
                            <li class="dropdown"><a href="#"><i class="icon-badge"></i>Icons</a>                            
                                <ul class="sub-menu">
                                    <li><a href="icon-materialdesign.html"><i class="icon-star"></i> Material Icon</a></li>
                                    <li><a href="icon-font-awesome.html"><i class="icon-screen-tablet"></i> Font-awesome</a></li>
                                    <li><a href="icon-themify.html"><i class="icon-plane"></i> Themify Icon</a></li>
                                    <li><a href="icon-weather.html"><i class="icon-drawer"></i> Weather Icon</a></li>
                                    <li><a href="icon-simple-line.html"><i class="icon-map"></i> Simple Line Icon</a></li>
                                    <li><a href="icon-flag.html"><i class="icon-flag"></i> Flag Icon</a></li>
                                    <li><a href="icon-ionicons.html"><i class="icon-rocket"></i> Ionicons Icon</a></li>
                                    <li><a href="icon-icofont.html"><i class="icon-fire"></i> Icofont Icon</a></li>    
                                    <li><a href="icon-linearicons.html"><i class="icon-list"></i> Linear</a></li>
                                    <li><a href="icon-crypto.html"><i class="icon-diamond"></i> Crypto</a></li>
                                </ul>                                 
                            </li>
                        </ul>                 
                    </li>
                    <li class="dropdown"><a href="#"><i class="icon-doc mr-1"></i> Pages</a>                  
                        <ul>
                            <li class="dropdown"><a href="#"><i class="icon-book-open"></i>Other Pages</a>                               
                                <ul class="sub-menu">
                                    <li><a href="page-lockscreen.html"><i class="icon-lock"></i> Lockscreen</a></li>
                                    <li><a href="page-login.html"><i class="icon-login"></i> login</a></li>
                                    <li><a href="page-register.html"><i class="icon-direction"></i> Register</a></li>
                                    <li><a href="page-404.html"><i class="icon-crop"></i> 404 Page</a></li>
                                    <li><a href="page-404-menu.html"><i class="icon-layers"></i> 404 Page With Menu</a></li>
                                    <li><a href="page-blank.html"><i class="icon-frame"></i> Blank Page</a></li>
                                    <li><a href="page-gallery.html"><i class="icon-layers"></i> Gallery</a></li>
                                    <li><a href="page-pricing.html"><i class="icon-wallet"></i> Pricing</a></li>
                                    <li><a href="page-contact-us.html"><i class="icon-wrench"></i> Contact us</a></li>
                                </ul>                               
                            </li>
                            <li><a href="user-profile.html"><i class="icon-user"></i>Profile Pages</a></li>
                        </ul>                   
                    </li>
                    <li class="dropdown"><a href="#"><i class="icon-support mr-1"></i> Extras</a>                   
                        <ul>
                            <li class="dropdown"><a href="#"><i class="icon-map"></i>Map</a>                               
                                <ul class="sub-menu">
                                    <li><a href="map-google.html"><i class="icon-map"></i> Google Map</a></li>
                                    <li><a href="map-vector.html"><i class="icon-vector"></i> Vector Map</a></li>

                                </ul>                               
                            </li>
                            <li class="dropdown"><a href="#"><i class="icon-pencil"></i>Blog</a>                               
                                <ul class="sub-menu">
                                    <li><a href="blog-list.html"><i class="icon-plus"></i> Blog List</a></li>
                                    <li><a href="blog-single.html"><i class="icon-tag"></i> Blog Post</a></li>                            
                                </ul>                               
                            </li>  
                            <li class="dropdown"><a href="#"><i class="icon-bag"></i>Ecommerce</a>                                 
                                <ul class="sub-menu">
                                    <li><a href="ecommerce-product-list.html"><i class="icon-grid"></i> Products List</a></li>
                                    <li><a href="ecommerce-product-detail.html"><i class="icon-plus"></i> Product Detail</a></li>
                                    <li><a href="ecommerce-cart.html"><i class="icon-badge"></i> Cart</a></li>
                                    <li><a href="ecommerce-checkout.html"><i class="icon-plus"></i> Checkout</a></li>
                                    <li><a href="ecommerce-orders.html"><i class="icon-basket"></i> Orders</a></li>
                                    <li><a href="ecommerce-order-view.html"><i class="icon-equalizer"></i> Order View</a></li>                           

                                </ul>                               
                            </li>
                        </ul>                    
                    </li>
                </ul>
                <!-- END: Menu-->
                <ol class="breadcrumb bg-transparent align-self-center m-0 p-0 ml-auto">
                    <li class="breadcrumb-item"><a href="#">Application</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- END: Main Menu-->

        <!-- START: Main Content-->
        <main>
            <div class="container-fluid site-width">
                <!-- START: Breadcrumbs-->
                <div class="row">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Dashboard</h4> <p>Welcome to liner admin panel</p></div>

                            <ol class="breadcrumb bg-transparent align-self-center m-0 p-0">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- END: Breadcrumbs-->

                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 col-lg-12  mt-3">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="row">
                                    <div class="col-12 col-sm-6 mt-3">
                                        <div class="card bg-primary">
                                            <div class="card-body">
                                                <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                                                    <i class="icon-basket icons card-liner-icon mt-2 text-white"></i>
                                                    <div class='card-liner-content'>
                                                        <h2 class="card-liner-title text-white">2,390</h2>
                                                        <h6 class="card-liner-subtitle text-white">Today's Orders</h6>                                       
                                                    </div>                                
                                                </div>
                                                <div id="apex_primary_chart"></div>                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                                                    <i class="icon-user icons card-liner-icon mt-2"></i>
                                                    <div class='card-liner-content'>
                                                        <h2 class="card-liner-title">9,390</h2>
                                                        <h6 class="card-liner-subtitle">Today's Visitors</h6> 
                                                    </div>                                
                                                </div>
                                                <span class="bg-primary card-liner-absolute-icon text-white card-liner-small-tip">+4.8%</span>
                                                <div id="apex_today_visitors"></div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6  mt-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                                                    <i class="icon-bag icons card-liner-icon mt-2"></i>
                                                    <div class='card-liner-content'>
                                                        <h2 class="card-liner-title">$4,390</h2>
                                                        <h6 class="card-liner-subtitle">Today's Sale</h6> 
                                                    </div>                                
                                                </div>
                                                <div id="apex_today_sale"></div> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 mt-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class='d-flex px-0 px-lg-2 py-2 align-self-center'>
                                                    <span class="card-liner-icon mt-1">$</span>
                                                    <div class='card-liner-content'>
                                                        <h2 class="card-liner-title">$4,390</h2>
                                                        <h6 class="card-liner-subtitle">Total Profit</h6> 
                                                    </div>                                
                                                </div>
                                                <div id="apex_today_profit"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3">
                                <div class="card">                           
                                    <div class="card-content">
                                        <div class="card-body">

                                            <div id="apex_bar_chart" class="height-500"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   

                    <div class="col-12 col-md-6 col-lg-4 mt-3">
                        <div class="card">                            
                            <div class="card-content">
                                <div class="card-body">  
                                    <div class="d-flex"> 
                                        <div class="media-body align-self-center ">
                                            <span class="mb-0 h5 font-w-600">Daily Reports</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                                    
                                        </div>
                                        <div class="ml-auto border-0 outline-badge-warning circle-50"><span class="h5 mb-0">$</span></div>
                                    </div>
                                    <div id="flot-report" class="height-175 w-100 mt-3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mt-3">
                        <div class="card">                            
                            <div class="card-content">
                                <div class="card-body"> 
                                    <div class="d-flex"> 
                                        <div class="media-body align-self-center ">
                                            <span class="mb-0 h5 font-w-600">Stats Reports</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                                    
                                        </div>
                                        <div class="ml-auto border-0 outline-badge-success circle-50"><span class="h5 mb-0">$</span></div>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <div class="border-0 outline-badge-info w-50 p-3 rounded text-center"><span class="h5 mb-0">Income</span><br/>                                        
                                            $78,600
                                        </div>
                                        <div class="border-0 outline-badge-success w-50 p-3 rounded ml-2 text-center"><span class="h5 mb-0">Sales</span><br/>                                        
                                            $1,24,600
                                        </div>
                                    </div>

                                    <div class="d-flex mt-3">
                                        <div class="border-0 outline-badge-dark w-50 p-3 rounded text-center"><span class="h5 mb-0">Users</span><br/>                                        
                                            4,600
                                        </div>
                                        <div class="border-0 outline-badge-danger w-50 p-3 rounded ml-2 text-center"><span class="h5 mb-0">Orders</span><br/>                                        
                                            2,600
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mt-3">
                        <div class="card">                            
                            <div class="card-content">
                                <div class="card-body">  
                                    <div class="height-235">
                                        <canvas id="chartjs-other-pie"></canvas>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12  col-md-6 col-lg-3 mt-3">
                        <div class="card border-bottom-0">                            
                            <div class="card-content border-bottom border-primary border-w-5">
                                <div class="card-body p-4">                                   
                                    <div class="d-flex">                                        
                                        <img src="{{asset('backend/dist/images/author1.jpg')}}" alt="author" width="55" class="rounded-circle  ml-auto">
                                        <div class="media-body align-self-center pl-3">
                                            <span class="mb-0 font-w-600">Jonathan</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3 border-bottom-0">                            
                            <div class="card-content border-bottom border-warning border-w-5">
                                <div class="card-body p-4">
                                    <p class="mb-3 font-w-600">View Order > Confirm Order</p>
                                    <p class="font-w-500 tx-s-12"><i class="icon-calendar"></i> March 14th, 2021</p> 
                                    <p class="font-w-500 tx-s-12">Time estimate: 12 days</p> 
                                    <div class="d-flex">
                                        <div class="my-auto line-h-1">
                                            <span class="badge outline-badge-secondary">Medium</span> 
                                            <span class="badge outline-badge-success ml-2">Tracking</span>                                       
                                        </div>
                                        <img src="{{asset('backend/dist/images/author9.jpg')}}" alt="author" width="30" class="rounded-circle  ml-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-bottom-0 mt-3">                            
                            <div class="card-content border-bottom border-info border-w-5">
                                <div class="card-body p-4">                                   
                                    <div class="d-flex">                                        
                                        <img src="{{asset('backend/dist/images/author9.jpg')}}" alt="author" width="55" class="rounded-circle  ml-auto">
                                        <div class="media-body align-self-center pl-3">
                                            <span class="mb-0 font-w-600">Kelvin</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mt-3">
                        <div class="card overflow-hidden">
                            <div class="card-header d-flex justify-content-between align-items-center">                               
                                <h6 class="card-title">New Users</h6>
                            </div>
                            <div class="card-content">
                                <div class="card-body p-0">
                                    <ul class="list-group list-unstyled">
                                        <li class="p-2 border-bottom zoom">
                                            <div class="media d-flex w-100">
                                                <a href="#"><img src="{{asset('backend/dist/images/author1.jpg')}}" alt="" class="img-fluid ml-0 mt-2  rounded-circle" width="40"></a>
                                                <div class="media-body align-self-center pl-2">
                                                    <span class="mb-0 font-w-600">Jonathan</span><br>
                                                    <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                                    
                                                </div>
                                                <div class="ml-auto my-auto">
                                                    <a href="#"  data-toggle="dropdown">
                                                        <i class="icon-options icons h6 font-weight-bold"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                                            <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                                        <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                                            <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                                        <a href="#" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                                            <span class="icon-trash mr-2 h6  mb-0"></span> Delete</a>
                                                    </div>
                                                </div>
                                            </div> 
                                        </li>
                                        <li class="p-2 border-bottom zoom">
                                            <div class="media d-flex w-100">
                                                <a href="#"><img src="{{asset('backend/dist/images/author2.jpg')}}" alt="" class="img-fluid ml-0 mt-2  rounded-circle" width="40"></a>
                                                <div class="media-body align-self-center pl-2">
                                                    <span class="mb-0 font-w-600">kelvin</span><br>
                                                    <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                                    
                                                </div>
                                                <div class="ml-auto my-auto">
                                                    <a href="#"  data-toggle="dropdown">
                                                        <i class="icon-options icons h6 font-weight-bold"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                                            <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                                        <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                                            <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                                        <a href="#" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                                            <span class="icon-trash mr-2 h6  mb-0"></span> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="p-2 border-bottom zoom">
                                            <div class="media d-flex w-100">
                                                <a href="#"><img src="{{asset('backend/dist/images/author3.jpg')}}" alt="" class="img-fluid ml-0 mt-2 rounded-circle" width="40"></a>
                                                <div class="media-body align-self-center pl-2">
                                                    <span class="mb-0 font-w-600">Peter</span><br>
                                                    <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                                   
                                                </div>
                                                <div class="ml-auto my-auto">
                                                    <a href="#"  data-toggle="dropdown">
                                                        <i class="icon-options icons h6 font-weight-bold"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                                            <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                                        <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                                            <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                                        <a href="#" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                                            <span class="icon-trash mr-2 h6  mb-0"></span> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="p-2 border-bottom zoom">
                                            <div class="media d-flex w-100">
                                                <a href="#"><img src="{{asset('backend/dist/images/author9.jpg')}}" alt="" class="img-fluid ml-0 mt-2 rounded-circle" width="40"></a>
                                                <div class="media-body align-self-center pl-2">
                                                    <span class="mb-0 font-w-600">Ray Sin</span><br>
                                                    <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                                 
                                                </div>
                                                <div class="ml-auto my-auto">
                                                    <a href="#"  data-toggle="dropdown">
                                                        <i class="icon-options icons h6 font-weight-bold"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                                            <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                                        <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                                            <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                                        <a href="#" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                                            <span class="icon-trash mr-2 h6  mb-0"></span> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="p-2 border-bottom zoom">
                                            <div class="media d-flex w-100">
                                                <a href="#"><img src="{{asset('backend/dist/images/author6.jpg')}}" alt="" class="img-fluid ml-0 mt-2 rounded-circle" width="40"></a>
                                                <div class="media-body align-self-center pl-2">
                                                    <span class="mb-0 font-w-600">Abexon Dixon</span><br/>
                                                    <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                              
                                                </div>

                                                <div class="ml-auto mail-tools">
                                                    <a href="#"  data-toggle="dropdown">
                                                        <i class="icon-options icons h6 font-weight-bold"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                                            <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                                        <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                                            <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                                        <a href="#" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                                            <span class="icon-trash mr-2 h6  mb-0"></span> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="p-2 zoom">
                                            <div class="media d-flex w-100">
                                                <a href="#"><img src="{{asset('backend/dist/images/author7.jpg')}}" alt="" class="img-fluid ml-0 mt-2 rounded-circle" width="40"></a>
                                                <div class="media-body align-self-center pl-2">
                                                    <span class="mb-0 font-w-600">Nathan S. Johnson</span><br/>
                                                    <p class="mb-0 font-w-500 tx-s-12">San Francisco, California, USA</p>                                              
                                                </div>

                                                <div class="ml-auto mail-tools">
                                                    <a href="#"  data-toggle="dropdown">
                                                        <i class="icon-options icons h6 font-weight-bold"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                                            <span class="icon-pencil mr-2 h6 mb-0"></span> Edit Profile</a>
                                                        <a href="#" class="dropdown-item px-2 align-self-center d-flex">
                                                            <span class="icon-user mr-2 h6 mb-0"></span> View Profile</a>
                                                        <a href="#" class="dropdown-item px-2 text-danger align-self-center d-flex">
                                                            <span class="icon-trash mr-2 h6  mb-0"></span> Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul> 
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-5 mt-3">
                        <div class="card">
                            <div class="card-header  justify-content-between align-items-center">                               
                                <h6 class="card-title">Visits by Countries</h6> 
                            </div>
                            <div class="card-body table-responsive p-0">                         

                                <table class="table font-w-600 mb-0">
                                    <thead>
                                        <tr>                                           
                                            <th>Country</th>
                                            <th>Visits</th>
                                            <th>Sessions</th>
                                            <th>Page View</th>                                           

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="zoom">                                           
                                            <td>France</td>
                                            <td class="text-success">2,51,520 <i class="ion ion-arrow-graph-up-right"></i></td>
                                            <td class="text-danger">3,23,55,479 <i class="ion ion-arrow-graph-down-right"></i></td>
                                            <td class="text-info">23,27,346</td>

                                        </tr>   
                                        <tr  class="zoom">                                           
                                            <td>United States</td>
                                            <td class="text-success">1,40,000 <i class="ion ion-arrow-graph-up-right"></i></td>
                                            <td class="text-danger">3,23,55,479 <i class="ion ion-arrow-graph-down-right"></i></td>
                                            <td class="text-info">23,27,346</td>                                           
                                        </tr> 
                                        <tr  class="zoom">                                           
                                            <td>China</td>
                                            <td class="text-success">2,70,000 <i class="ion ion-arrow-graph-up-right"></i></td>
                                            <td class="text-danger">3,23,55,479 <i class="ion ion-arrow-graph-down-right"></i></td>
                                            <td class="text-info">23,27,346</td>                                         
                                        </tr> 
                                        <tr  class="zoom">                                           
                                            <td>Spain</td>
                                            <td class="text-success">7,60,000 <i class="ion ion-arrow-graph-up-right"></i></td>
                                            <td class="text-danger">3,23,55,479 <i class="ion ion-arrow-graph-down-right"></i></td>
                                            <td class="text-info">23,27,346</td>                                         
                                        </tr> 
                                        <tr  class="zoom">                                           
                                            <td>Italy</td>
                                            <td class="text-success">6,70,000 <i class="ion ion-arrow-graph-up-right"></i></td>
                                            <td class="text-danger">3,23,55,479 <i class="ion ion-arrow-graph-down-right"></i></td>
                                            <td class="text-info">23,27,346</td>                                          
                                        </tr> 
                                        <tr  class="zoom">                                           
                                            <td>United Kingdom</td>
                                            <td class="text-success">8,40,000 <i class="ion ion-arrow-graph-up-right"></i></td>
                                            <td class="text-danger">3,23,55,479 <i class="ion ion-arrow-graph-down-right"></i></td>
                                            <td class="text-info">23,27,346</td>                                          
                                        </tr> 
                                        <tr  class="zoom">                                           
                                            <td>Malaysia</td>
                                            <td class="text-success">4,90,000 <i class="ion ion-arrow-graph-up-right"></i></td>
                                            <td class="text-danger">3,23,55,479 <i class="ion ion-arrow-graph-down-right"></i></td>
                                            <td class="text-info">23,27,346</td>                                           
                                        </tr> 
                                        <tr  class="zoom">                                           
                                            <td>India</td>
                                            <td class="text-success">12,51,520 <i class="ion ion-arrow-graph-up-right"></i></td>
                                            <td class="text-danger">3,23,55,479 <i class="ion ion-arrow-graph-down-right"></i></td>
                                            <td class="text-info">23,27,346</td>                                           
                                        </tr>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-md-6 col-lg-6 mt-3">
                        <div class="card border">                            
                            <div class="card-content">
                                <div class="card-body p-4">   
                                    <div class="d-md-flex">
                                        <div class="my-auto">
                                            <img src="{{asset('backend/dist/images/wallet.png')}}" alt="author" width="48" class="my-auto">
                                        </div>
                                        <div class="content px-md-3 my-3 my-md-0">                                           
                                            <span class="mb-0 font-w-600 h5">Lorem ipsum dolor sit</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.</p>                                                    

                                        </div>
                                        <div class="my-auto">
                                            <a href="#" class="btn btn-outline-primary font-w-600 my-auto text-nowrap">Get More</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-6 mt-3">
                        <div class="card outline-badge-primary">                            
                            <div class="card-content">
                                <div class="card-body p-4">   
                                    <div class="d-md-flex">
                                        <div class="my-auto">
                                            <img src="{{asset('backend/dist/images/money.png')}}" alt="author"  class="my-auto">
                                        </div>
                                        <div class="content px-md-3 my-3 my-md-0">                                           
                                            <span class="mb-0 font-w-600 h5">Lorem ipsum dolor sit</span><br>
                                            <p class="mb-0 font-w-500 tx-s-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis.</p>                                                    

                                        </div>
                                        <div class="my-auto">
                                            <a href="#" class="btn btn-outline-primary font-w-600 my-auto text-nowrap">Get More</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-12  col-md-6 col-lg-4 mt-3">
                        <div class="card overflow-hidden">
                            <div class="card-header d-flex justify-content-between align-items-center">                               
                                <h6 class="card-title">Todo List</h6>

                            </div>
                            <div class="card-content">
                                <div class="card-body p-0">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <ul class="tasks">
                                                <li class="outline-badge-success border-0 d-flex py-3 px-2 zoom">
                                                    <label class="chkbox d-flex">
                                                        <input type="checkbox" checked="checked">                                                      
                                                        <img src="{{asset('backend/dist/images/author.jpg')}}" alt="author" width="30" height="30" class="rounded-circle"/>
                                                        <img src="{{asset('backend/dist/images/author2.jpg')}}" alt="author" width="30"  height="30" class="rounded-circle"/>
                                                        <span class="mb-0 ml-2 my-auto font-w-600">Aenean ligula porttitor consequat vitae eleifend enim.</span>

                                                        <span class="checkmark mt-1"></span>
                                                    </label>
                                                    <div class="ml-auto d-flex my-auto"><a href="#"><i class="ion ion-edit"></i></a> <a href="#" class="ml-2"><i class="ion ion-trash-a"></i></a></div>
                                                </li>
                                                <li class="outline-badge-warning border-0 d-flex py-3 px-2 zoom">
                                                    <label class="chkbox d-flex">
                                                        <input type="checkbox">                                                      
                                                        <img src="{{asset('backend/dist/images/author2.jpg')}}" alt="author" width="30" height="30" class="rounded-circle "/>
                                                        <img src="{{asset('backend/dist/images/author3.jpg')}}" alt="author" width="30" height="30" class="rounded-circle"/>
                                                        <span class="mb-0 ml-2 my-auto font-w-600">In enim justo, rhoncus ut imperdiet a, venenatis vitae justo.</span>

                                                        <span class="checkmark mt-1"></span>
                                                    </label>
                                                    <div class="ml-auto d-flex my-auto"><a href="#"><i class="ion ion-edit"></i></a> <a href="#" class="ml-2"><i class="ion ion-trash-a"></i></a></div>
                                                </li>

                                                <li class="outline-badge-info border-0 d-flex py-3 px-2 zoom">
                                                    <label class="chkbox d-flex">
                                                        <input type="checkbox">                                                      
                                                        <img src="{{asset('backend/dist/images/author3.jpg')}}" alt="author" width="30" height="30" class="rounded-circle "/>
                                                        <img src="{{asset('backend/dist/images/author7.jpg')}}" alt="author" width="30" height="30" class="rounded-circle"/>
                                                        <span class="mb-0 ml-2 my-auto font-w-600">Cras dapibus vivamus elementum semper nisi.</span>

                                                        <span class="checkmark mt-1"></span>
                                                    </label>
                                                    <div class="ml-auto d-flex my-auto"><a href="#"><i class="ion ion-edit"></i></a> <a href="#" class="ml-2"><i class="ion ion-trash-a"></i></a></div>
                                                </li>
                                                <li class="outline-badge-secondary border-0 d-flex py-3 px-2 zoom">
                                                    <label class="chkbox d-flex">
                                                        <input type="checkbox">                                                      
                                                        <img src="{{asset('backend/dist/images/author6.jpg')}}" alt="author" width="30" height="30" class="rounded-circle "/>
                                                        <img src="{{asset('backend/dist/images/author8.jpg')}}" alt="author" width="30" height="30" class="rounded-circle"/>
                                                        <span class="mb-0 ml-2 my-auto font-w-600">Donec quam felis ultricies nec, pellentesque eu pretium quis.</span>

                                                        <span class="checkmark mt-1"></span>
                                                    </label>
                                                    <div class="ml-auto d-flex my-auto"><a href="#"><i class="ion ion-edit"></i></a> <a href="#" class="ml-2"><i class="ion ion-trash-a"></i></a></div>
                                                </li>
                                                <li class="outline-badge-primary border-0 d-flex py-3 px-2 zoom">
                                                    <label class="chkbox d-flex">
                                                        <input type="checkbox">                                                      
                                                        <img src="{{asset('backend/dist/images/author.jpg')}}" alt="author" width="30" height="30" class="rounded-circle "/>
                                                        <img src="{{asset('backend/dist/images/author8.jpg')}}" alt="author" width="30" height="30" class="rounded-circle"/>
                                                        <span class="mb-0 ml-2 my-auto font-w-600">Donec quam felis ultricies nec, pellentesque eu pretium quis.</span>

                                                        <span class="checkmark mt-1"></span>
                                                    </label>
                                                    <div class="ml-auto d-flex my-auto"><a href="#"><i class="ion ion-edit"></i></a> <a href="#" class="ml-2"><i class="ion ion-trash-a"></i></a></div>
                                                </li>
                                            </ul>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-md-6 col-lg-4 mt-3">
                        <div class="card">                           
                            <div class="card-content">
                                <div class="card-body pt-0">
                                    <div class="row">                                           
                                        <div class="col-12">
                                            <ul class="activities mt-3 mb-2">
                                                <li class="activity py-2 border-left">
                                                    <div class="activity-absolute">
                                                        <div class="absolute-circle dropbox"><i class="fab fa-dropbox"></i></div>
                                                        <img src="{{asset('backend/dist/images/author8.jpg')}}" alt="author" width="50" class="rounded-circle position-absolute ml-35">
                                                    </div>

                                                    <p> <span class="text-primary font-weight-bold">Mark Pearson</span><br>
                                                        <span class="text-muted">60 min ago</span><br><br>
                                                        <b>File added to dropbox.</b></p>
                                                    <div class="d-flex">
                                                        <div>
                                                            <img src="{{asset('backend/dist/images/photoshop.png')}}" alt="photoshop" class="img-responsive">
                                                        </div>
                                                        <p class="ml-2">
                                                            Liner Admin.psd<br>
                                                            <a href="#" class="text-primary small">Download  <i class="fas   mr-2 fa-cloud-download-alt"></i></a>                                                                
                                                        </p>
                                                    </div>                                                         
                                                </li>
                                                <li class="activity py-3 border-left">
                                                    <div class="activity-absolute">
                                                        <div class="absolute-circle galleries"><i class="far fa-images"></i></div>
                                                        <img src="{{asset('backend/dist/images/author6.jpg')}}" alt="author" width="50" class="rounded-circle position-absolute ml-35">
                                                    </div>

                                                    <p> <span class="text-primary font-weight-bold">Sean	Gregory</span><br>
                                                        <span class="text-muted">30 min ago</span><br><br>
                                                        <b>Upload gallery images.</b></p>
                                                    <div class="mt-2">

                                                        <img src="{{asset('backend/dist/images/portfolio1.jpg')}}" alt="photoshop" width="100" class="img-responsive rounded">
                                                        <img src="{{asset('backend/dist/images/portfolio2.jpg')}}" alt="photoshop" width="100" class="img-responsive rounded ml-2">


                                                    </div>                                                         
                                                </li>

                                            </ul> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  col-md-6 col-lg-4 mt-3">
                        <!-- Card -->
                        <div class="card promoting-card">

                            <!-- Card content -->
                            <div class="card-body d-flex flex-row">

                                <!-- Avatar -->
                                <img src="{{asset('backend/dist/images/author1.jpg')}}" class="rounded-circle mr-3" height="50" width="50" alt="avatar">

                                <!-- Content -->
                                <div>

                                    <!-- Title -->
                                    <h6 class="card-title font-weight-bold mb-2">New spicy meals</h6>
                                    <!-- Subtitle -->
                                    <p class="card-text"><i class="far fa-clock pr-2"></i>07/24/2020</p>

                                </div>

                            </div>

                            <!-- Card image -->
                            <div class="view overlay">
                                <img class="card-img-top rounded-0" src="{{asset('backend/dist/images/portfolio13.jpg')}}" alt="Card image cap">

                            </div>

                            <!-- Card content -->
                            <div class="card-body">

                                <div class="collapse-content">


                                    <a class="btn btn-flat font-w-600">Read More</a>
                                    <i class="fas fa-share-alt text-muted float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this post"></i>
                                    <i class="fas fa-heart text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>

                                </div>

                            </div>

                        </div>
                        <!-- Card -->
                    </div>

                </div>
                <!-- END: Card DATA-->                 
            </div>
        </main>
        <!-- END: Content-->
        <!-- START: Footer-->
        <footer class="site-footer">
            2020 &copy; PICK
        </footer>
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
    </body>
    <!-- END: Body-->

<!-- Mirrored from html.designstream.co.in/pick/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 18:47:39 GMT -->
</html>
