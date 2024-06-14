<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    {{-- Abstract title --}}
    <title>@yield('title')</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
   

    {{-- Add style particulary--}}
    @yield('styles')
</head>
<body>
    @yield('header')

    {{-- Sidebar --}}
    @yield('sidebar')

    @yield('contents')

    @yield('footers')

   
    {{-- Abstract JS --}}
    @yield('scripts')
</body>
</html>