<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('./admin/css/materialize.min.css') }}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('./admin/css/main.css') }}">
  <title>U90' Admin</title>
</head>
<body>
  <!--Navbar-->
  @include(' layouts._anav')
  <!--Navbar-->
  
  <!--Content-->
  @yield('content')
  <!--Content-->
  
  <!--footer-->
  @include('layouts._afooter')
  <!--footer-->
  
  <!-- Preloader -->
  <div class="loader preloader-wrapper big active">
      <div class="spinner-layer spinner-blue-only">
          <div class="circle-clipper left">
              <div class="circle"></div>
          </div>
          <div class="gap-patch">
              <div class="circle"></div>
          </div>
          <div class="circle-clipper right">
              <div class="circle"></div>
          </div>
      </div>
  </div>
  <!--Preloader -->
  
</body>
<script src="{{ asset('./admin/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('./admin/js/materialize.min.js')}}"></script>
<script src="{{ asset('./js/vue.js') }}"></script>
<script src="{{ asset('./js/axios.js') }}"></script>
<script src="{{ asset('./admin/js/home.js')}}"></script>
<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
<!--Scripts-->
@yield('scripts')
<!--Scripts-->
</html>