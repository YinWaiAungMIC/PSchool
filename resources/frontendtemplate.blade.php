<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link href="{{ asset('backendtemplate/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
	@yield('style')
</head>
<body>
	@yield('content')
	<script src="{{ asset('backendtemplate/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('backendtemplate/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('backendtemplate/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  @yield('script')
</body>
</html>