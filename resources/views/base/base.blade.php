<head>
  <script src="https://kit.fontawesome.com/28a0207ac2.js" crossorigin="anonymous"></script>
</head>
<!DOCTYPE html>
<html lang="en" id="html" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick-1.8.1/slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('slick-1.8.1/slick/slick-theme.css') }}"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    @vite('resources/css/app.css')
</head>
<body>
      @include('includes.navbar')
      <div class="relative flex flex-col bg-yellow-400 container h-auto">  
        @yield('home')
        @yield('contact')
        @yield('juraganWarungKelontong')
        @yield('juraganGrosir')
        @yield('distributorFMCG')
        @yield('brandSupplier')
      </div>
      @include('includes.footer')
</body>
</html>
<script>
  AOS.init();
</script> 