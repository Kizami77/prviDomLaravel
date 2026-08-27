
<!DOCTYPE HTML>

  <html>

    <head>

      <title>@yield("nazivStranice")</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"

              integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- css link -->
        @stack('styles')


    </head>

    <body class="bg-warning">

     @include('navigation')

     @yield('sadrzajStranice')

     @include('footer')
    </body>
</html>
