@extends('base.base')
@section('brandSupplier')

<div class="relative mt-[2.12cm] h-[17.235cm] flex flex-col bg-center bg-no-repeat bg-cover bg-[url('https://technobusiness.id/wp-content/uploads/2018/11/warung-Pintar-4.jpg')] bg-opacity-30">
    <div class="absolute inset-0 flex items-center justify-center text-white text-4xl font-bold bg-black bg-opacity-50">
        <div class="text-center text-white flex flex-col gap-5">
            <h1 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="text-3xl lg:text-5xl font-bold px-4 py-2 mb-2">
                Buka akses bisnis Anda ke lebih dari 500.000 pemilik warung di Indonesia dengan Bizzy Connect
            </h1>
        </div>
    </div>
</div>

<div class="h-auto flex flex-col bg-[#FFEEAD] lg:pl-40 lg:pr-40 pb-20  gap-20">
    <div class="basis-2/4 flex flex-row justify-center items-center">
        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="text-black text-3xl lg:text-5xl font-bold mt-20 text-center">Akses terhadap pasar tidak pernah semudah ini!</p>
    </div>
    <div class="basis-2/4 flex flex-col justify-center items-center gap-10"> 
        <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="relative w-full p-4 h-[5cm] text-center  border border-gray-200 rounded-lg shadow sm:p-8  dark:border-gray-700 bg-cover bg-center bg-no-repeat bg-[url('https://technode.global/wp-content/uploads/2021/07/IMG_0266-uai-1920x1080.jpeg')]">
            <div class="absolute inset-0 border border-gray-200 rounded-lg bg-black bg-opacity-50 flex flex-col items-center justify-center">
                <h5 class="mb-2 text-3xl font-bold text-white">Dashboard Real Time</h5>
                <p class="mb-5 text-base sm:text-lg text-white font-semibold ">Pantau pasar produk Anda dan dapatkan laporan performa bisnis Anda</p>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="relative w-full p-4 h-[5cm] text-center border-gray-200 rounded-lg shadow sm:p-8 dark:border-gray-700 bg-cover bg-center bg-no-repeat bg-[url('https://bisnismuda.id/assets/content/20200805064947000000WarungPintar.jpg')]">
            <div class="absolute inset-0 border border-gray-200 rounded-lg bg-black bg-opacity-50 flex flex-col items-center justify-center">
                <h5 class="mb-2 text-3xl font-bold text-white">Dapatkan lebih banyak titik distribusi secara numerik</h5>
            <p class="mb-5 text-base sm:text-lg text-white font-semibold ">Tingkatkan cakupan jumlah outlet bagi produk Anda tanpa melepaskan kanal distribusi yang sudah ada.</p>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="relative w-full p-4 h-[5cm] text-center border border-gray-200 rounded-lg shadow sm:p-8 dark:border-gray-700 bg-cover bg-center bg-no-repeat bg-[url('https://mix.co.id/wp-content/uploads/2022/02/warung-pintar.jpeg')]">
            <div class="absolute inset-0 border border-gray-200 rounded-lg bg-black bg-opacity-50 flex flex-col items-center justify-center">
                <h5 class="mb-2 text-3xl font-bold text-white">Dapat insight pemasaran</h5>
            <p class="mb-5 text-base sm:text-lg text-white font-semibold ">Dapatkan insight terhadap pasar, peningkatan brand awareness produk Anda, buat promosi yang efektif, dan tingkatkan kesetiaan pengecer</p>
            </div>
        </div>
    </div>
</div>
<div class="relative h-auto flex flex-col bg-[#A02334] lg:pl-40 lg:pr-40 gap-20">
    <div class="flex-col flex justify-center items-center mt-20">
        <p data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="text-white text-3xl lg:text-5xl font-bold text-center">BUAT PROMOSI DAN PANTAU KEBERLANGSUNGANNYA DENGAN IKLAN PINTAR </p>
    </div>
    <div class="flex flex-row items-center justify-center lg:gap-20 mb-20">
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="relative  size-[20cm] shadow-xl rounded-lg bg-center bg-cover bg-no-repeat bg-[url('https://warungpintar.co.id/static/d97f23a017ae14a32b3ac73fc141c46c/a1cb5/IMG_0277-scaled.jpg')]">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center">
                <p class="text-white text-3xl font-bold text-center">Tingkatkan awareness retailer dengan promosi in-app </p>
            </div>
        </div>
        <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="relative  size-[20cm] shadow-xl rounded-lg bg-center bg-cover bg-no-repeat bg-[url('https://warungpintar.co.id/static/152002dcec72295856cb72e5ff9da8ed/a1cb5/IMG_0502-scaled.jpg')]">
            <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center">
                <p class="text-white text-3xl font-bold text-center">Lebih dekat dengan pelanggan Anda dengan promosi offline </p>
            </div>
        </div>
    </div>
</div>

<div class="h-[17.235cm] bg-[#FFAD60] flex flex-col gap-20 lg:pl-52 lg:pr-52">
    <div class="mt-20">
        <p data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="font-semibold text-3xl lg:text-5xl text-center">BERBAGAI MACAM CERITA DARI PARTNER KAMI</p>
    </div>
    @include('includes.carousel')
</div>  

@endsection
