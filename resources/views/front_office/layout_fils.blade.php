@extends('front_office.layout')

@section('styles')
    @include('front_office.partials.css')
    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- Template Main CSS File -->
    @yield('style')
@endsection


@section('header')
    @include('front_office.partials.header')
@endsection

@section('sidebar')
    @include('front_office.partials.sidebar')
@endsection

@section('footers')

     <a href="# " class="back-to-top d-flex align-items-center justify-content-center "><i
      class="bi bi-arrow-up-short "></i></a>
    @yield('footer')
@endsection
@section('scripts')
  @include('front_office.partials.script')
  <script src="/assets/js/main.js "></script>
 
  @yield('script')
@endsection

