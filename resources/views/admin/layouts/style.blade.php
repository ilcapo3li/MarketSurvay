<head>
    <meta charset="utf-8" />
    <title>
        Delay | Free
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://cdn.bootcss.com/webfont/1.6.16/webfontloader.js"></script>
    <script>
      WebFont.load({
        google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
        active: function() {
            sessionStorage.fonts = true;
        }
      });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->  
    <!--begin::Page Vendors -->
      @yield('CSS')
    <!--end::Page Vendors -->
    <link href="{{asset("assets/vendors/base/vendors.bundle.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{asset("assets/demo/default/base/style.bundle.css")}}" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="{{asset("assets/demo/default/media/img/logo/favicon.ico")}}" />
</head>