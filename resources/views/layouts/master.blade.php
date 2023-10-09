<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>@yield('title')</title>
</head>

<body>
  
    <nav class="navbar navbar-expand bg-dark navbar-dark justify-content-center">
      <a class="navbar-brand" href="#">@yield('navbar-title')</a>
      <ul class="navbar-nav mx-5 my-2">
        @yield('navbar-links')
      </ul>
    </nav>

    @yield('content')
</body>

</html>