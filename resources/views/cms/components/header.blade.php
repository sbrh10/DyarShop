<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="preconnect" href="{{ url('cms/assets/fontFiles')}}/fonts.gstatic.com/index.html">
    <link href="{{ url('cms/assets/fontFiles')}}/fonts.googleapis.com/css2496c.css?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="{{ url('cms/assets/fontFiles')}}/fonts.googleapis.com/css2ae21.css?family=Montserrat:wght@100;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="{{ url('cms/assets/fontFiles')}}/fonts.googleapis.com/cssc484.css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="{{ url('cms/assets')}}/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ url('cms/assets')}}/plugins/perfectscroll/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ url('cms/assets')}}/plugins/pace/pace.css" rel="stylesheet">
    <link href="{{ url('cms/assets')}}/plugins/highlight/styles/github-gist.css" rel="stylesheet">
    <link href="{{ url('cms/assets')}}/plugins/dropzone/min/dropzone.min.css" rel="stylesheet">
    <link href="{{ url('cms/assets')}}/css/main.min.css" rel="stylesheet">
    <link href="{{ url('cms/assets')}}/css/custom.css" rel="stylesheet">
    <link href="{{ url('cms/assets')}}/plugins/datatables/datatables.min.css" rel="stylesheet">
    <link href="{{ url('cms/assets')}}/plugins/select2/css/select2.min.css" rel="stylesheet">




    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('cms/assets')}}/images/neptune.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('cms/assets')}}/images/neptune.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">