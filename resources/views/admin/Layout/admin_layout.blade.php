<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('admin/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('admin/assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{asset('admin/assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/font-awesome-n.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/font-awesome.min.css')}}">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/jquery.mCustomScrollbar.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
</head>

<body>
</body>
@include('admin.partials.menu')
<div class="pcoded-main-container">
  <div class="pcoded-wrapper">
       
    <div class="pcoded-content">
      
@yield('admin')

</div>
</div>
</div>




<!-- Warning Section Ends -->

    <!-- Required Jquery -->
    <script type="text/javascript" src="{{asset('admin/assets/js/jquery/jquery.min.js')}} "></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/jquery-ui/jquery-ui.min.js ')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/popper.js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/bootstrap/js/bootstrap.min.js ')}}"></script>
    <!-- waves js -->
    <script src="{{asset('admin/assets/pages/waves/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('admin/assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- slimscroll js -->
    <script src="{{asset('admin/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>

    <!-- menu js -->
    <script src="{{asset('admin/assets/js/pcoded.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vertical/vertical-layout.min.js ')}}"></script>

    <script type="text/javascript" src="{{asset('admin/assets/js/script.js ')}}"></script>
</body>

</html>
