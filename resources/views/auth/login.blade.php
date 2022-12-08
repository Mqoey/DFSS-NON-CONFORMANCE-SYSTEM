<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> DFSS | Login </title>
    <link rel="icon" href="{{ asset('assets/images/logo/favicon-icon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon-icon.png') }}" type="image/x-icon">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body class="vh-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <div class="text-center mb-3">
                                    <a href="#"><img src="assets/images/logo.png" width="70dp"
                                                     height="70dp" alt=""></a>
                                </div>
                                <h4 class="text-center mb-4">Sign in your account</h4>

                                <x-input-error :messages="$errors->get('email')" class="mt-2"
                                               style="color: red"></x-input-error>
                                <form class="theme-form login-form" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Email</strong></label>
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        <div class="form-group">
                                            <div class="form-check custom-checkbox ms-1">
                                                <input type="checkbox" class="form-check-input"
                                                       id="basic_checkbox_1">
                                                <label class="form-check-label" for="basic_checkbox_1">Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}">Forgot password?</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Sign Me
                                            In
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.min.js') }}"></script>
<script src="{{ asset('assets/js/deznav-init.js') }}"></script>

</body>

</html>
