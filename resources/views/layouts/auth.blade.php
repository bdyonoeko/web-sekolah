<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  @include('includes.styles')
  @stack('styles')

</head>
<body>
  
  @include('includes.frontend.navbar')

  @yield('content')

  @include('includes.scripts')
  @stack('scripts')

</body>
</html>