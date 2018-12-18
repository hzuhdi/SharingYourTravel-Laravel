<!DOCTYPE html>
<html>
<head>
	<title>SYT Sharing Your Travel!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/animate.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">

    <link rel="stylesheet" href="/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="/css/style.css">

    <!--This one is for summernote -->
    <!-- include libraries(jQuery, bootstrap) -->
    @stack('styles')
    @stack('scripts')
    
    

    
</head>

<body>
@include('sweetalert::alert')
@include('template.header')
    @yield('assets')
	@yield('content')

@include('template.footer')
