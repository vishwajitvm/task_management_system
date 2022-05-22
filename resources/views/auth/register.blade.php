<!DOCTYPE html>
<html lang="en">
    <!-- START: Head-->
    
<!-- Mirrored from html.designstream.co.in/pick/html/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 18:56:06 GMT -->
<head>
        <meta charset="UTF-8">
        <title> {{ env('APP_NAME') }}  </title>
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
                    <form action="{{ route('register') }}" method="POST" class="row row-eq-height lockscreen  mt-5 mb-5">
                        @csrf
                        <div class="lock-image col-12 col-sm-5"></div>
                        <div class="login-form col-12 col-sm-7">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" placeholder="Username" id="name" name="name" :value="old('name')" required autofocus autocomplete="name">
                            </div>

                            <div class="form-group mb-3">
                                <input type="email" class="form-control" placeholder="E-mail" name="email" :value="old('email')" required  />
                            </div>

                            <div class="form-group mb-3">
                                <input type="password" class="form-control" placeholder="password" id="password"  name="password" required autocomplete="new-password">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control" placeholder="Confirm password" id="password_confirmation"  name="password_confirmation" required autocomplete="new-password">
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-jet-label for="terms">
                                        <div class="flex items-center">
                                            <x-jet-checkbox name="terms" id="terms"/>

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-jet-label>
                                </div>
                            @endif

                            <div class="form-group mb-0">
                                <button class="btn btn-primary btn-block" type="submit"> Register </button>
                            </div>
                            <p class="my-2 text-muted">--- Or register with ---</p>
                            <a href="{{ Route('auth.google') }}" class="btn btn-social btn-google text-white mb-2 btn-block">
                                <i class="icon-social-google align-middle"></i>
                            </a>
                            <div class="mt-2">Already have an account? <b><a href="{{ Route('login') }}">Sign In</a></b></div>
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

<!-- Mirrored from html.designstream.co.in/pick/html/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 May 2022 18:56:06 GMT -->
</html>
