@extends('base.base')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body>
    @section('home')
    <div class="mt-[2.12cm] h-[16.5cm] fade bg-yellow-400 dragable">
        <a href="/juraganWarungKelontong" class="relative h-[17.9cm]">
            <img class="object-cover shrink grow h-full w-full" src="https://rm.id/images/berita/med/warung-pintar-salurkan-bansos-ke-250-ribu-penerima_84786.jpeg" alt="">
            <div class="absolute bottom-5 left-0 bg-black bg-opacity-50 text-white p-4 w-full text-center">
                Juragan Warung Kelontong
            </div>
        </a>
        <a href="/juraganGrosir" class="relative h-[17.9cm]">
            <img class="object-cover shrink grow h-full w-full" src="https://techcrunch.com/wp-content/uploads/2018/02/20170830-img_5665.jpg?w=680" alt="">
            <div class="absolute bottom-5 left-0 bg-black bg-opacity-50 text-white p-4 w-full text-center">
                Juragan Grosir
            </div>
        </a>
        <a href="/distributorFMCG" class="relative h-[17.9cm]">
            <img class="object-cover shrink grow h-full w-full" src="https://youngster.id/storage/2018/07/warung-pintar-gopay1.jpg" alt="">
            <div class="absolute bottom-5 left-0 bg-black bg-opacity-50 text-white p-4 w-full text-center">
                Distributor FMCG
            </div>
        </a>
        <a href="/brandSupplier" class="relative h-[17.9cm]">
            <img class="object-cover shrink grow h-full w-full" src="https://technobusiness.id/wp-content/uploads/2018/11/warung-Pintar-4.jpg" alt="">
            <div class="absolute bottom-5 left-0 bg-black bg-opacity-50 text-white p-4 w-full text-center">
                Brand Supplier
            </div>
        </a>
    </div>
    
    <!-- Include jQuery and Slick -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('slick-1.8.1/slick/slick.min.js') }}"></script>
    <script type="text/javascript">
        $('.fade').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            autoplay: true,
            autoplaySpeed: 2000 // Durasi transisi antar slide, 2000ms = 2 detik
        });
    </script>
    @endsection
</body>
</html>
