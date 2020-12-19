<!Doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Maker</title>
    @include('assets.css')
</head>
<body>

            @include('layout.top_nav')

      <main>
        @yield('content')
      </main>


      @include('assets.js')
</body>
</html>

