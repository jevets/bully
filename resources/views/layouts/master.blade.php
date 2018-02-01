<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', config('app.name', 'Laravel'))</title>

  @section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @if (config('bully.styles'))
    <link rel="stylesheet" href="{{ asset('bully/css/bully.css') }}">
    @endif
  @show

  @stack('styles')

</head>
<body>

  @section('body')
    @yield('content')
  @show

  @if (config('bully.scripts'))
    <script src="{{ asset('bully/js/bully.js') }}"></script>
  @endif

  @stack('scripts')

</body>
</html>
