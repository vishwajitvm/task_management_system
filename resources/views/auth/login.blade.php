<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    
<!-- Mirrored from html.designstream.co.in/pick/html/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 18:56:06 GMT -->
<head>
        <meta charset="UTF-8">
        <title> {{ env('APP_NAME') }} </title>
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
        <link rel="stylesheet" href="{{asset('backend/dist/vendors/social-button/bootstrap-social.css')}}"/>   
        <!-- END: Page CSS-->

        <!-- START: Custom CSS-->
        <link rel="stylesheet" href="{{asset('backend/dist/css/main.css')}}">
        <!-- END: Custom CSS-->
    </head>
    <!-- END Head-->

    <!-- START: Body-->
    <body id="main-container" class="default">
        <!-- START: Main Content-->
        <div class="container">
            <div class="row vh-100 justify-content-between align-items-center">
                <div class="col-12">
                    <x-jet-validation-errors class="mb-4" />

                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}" class="row row-eq-height lockscreen  mt-5 mb-5">
                        @csrf
                        <div class="lock-image col-12 col-sm-5"></div>
                        <div class="login-form col-12 col-sm-7">
                            <div class="form-group mb-3">
                                <label for="emailaddress">Email address</label>
                                <input class="form-control"  id="email" type="email" name="email" :value="old('email')" required autofocus  placeholder="Enter your email">
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" id="password" placeholder="Enter your password"  name="password" required autocomplete="current-password">
                            </div>

                            <div class="form-group mb-3 ">
                                <div class="row">
                                    <div class="col-5 custom-control custom-checkbox display-inline">
                                        <input type="checkbox" class="custom-control-input"  id="remember_me" name="remember" >
                                        <label class="custom-control-label" for="remember_me">Remember me</label>
                                    </div>
    
                                    <div class="col-7 flex items-center justify-end ">
                                        @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                {{ __('Forgot your password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            

                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                            </div>
                            <p class="my-2 text-muted">--- Or Login with Google ---</p>
                        
                            <a href="{{ Route('auth.google') }}" class="btn btn-social btn-google text-white mb-2 btn-block">
                                <i class="icon-social-google align-middle"></i>
                            </a>
                            <div class="mt-2">Don't have an account? <b>  <a href="{{ Route('register') }}">Create an Account</a> </b> </div>

                           

                        </div>
                    </form>
                </div>

            </div>
        </div>
        <!-- END: Content-->

        <!-- START: Template JS-->
        <script src="{{asset('backend/dist/vendors/jquery/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/jquery-ui/jquery-ui.min.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/moment/moment.js')}}"></script>
        <script src="{{asset('backend/dist/vendors/bootstrap/js/bootstrap.bundle.min.js')}}"></script>    
        <script src="{{asset('backend/dist/vendors/slimscroll/jquery.slimscroll.min.js')}}"></script>

        <!-- END: Template JS-->  
    </body>
    <!-- END: Body-->

<!-- Mirrored from html.designstream.co.in/pick/html/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 18:56:06 GMT -->
</html>
