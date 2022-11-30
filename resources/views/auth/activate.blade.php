<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="admin, dashboard" />
    <meta name="author" content="DexignZone" />
    <meta name="robots" content="index, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="tixia : tixia School Admission Admin  Bootstrap 5 Template" />
    <meta property="og:title" content="tixia : tixia School Admission Admin  Bootstrap 5 Template" />
    <meta property="og:description" content="tixia : tixia School Admission Admin  Bootstrap 5 Template" />
    <meta property="og:image" content="social-image.png" />
    <meta name="format-detection" content="telephone=no">
    <title>DFSS | Not activated </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-5">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text font-weight-bold">400</h1>
                        <h4><i class="fa fa-thumbs-down text-danger"></i> Oops! Your account is not active.</h4>
                        <p class="sub-content">The logged in account is not active, Contact the Administrator for
                            activation</p>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a class="btn btn-primary" href="route('logout')"
                                onclick="event.preventDefault();
                   this.closest('form').submit();"><span>LOGOUT</span></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/deznav-init.js"></script>

</html>
