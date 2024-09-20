@extends('base.base')
@section('contact')
<div class="flex flex-col lg:flex-row">
    {{-- sisi kiri --}}
    <div id="left-box" class="isolate bg-olive-500 px-6 py-24 sm:py-32 lg:px-8 lg:basis-2/4 rounded-xl flex flex-col justify-center items-center mt-32 lg:mb-14 mr-4 lg:mr-4 ml-4 lg:ml-8 shadow-2xl">
        <img src="https://warungpintar.co.id/static/1bb97c989a42f24918be759a79a4b407/de707/promo-slide-00.png" class="object-cover grow shrink scale-125 lg:scale-110" alt="WARUNG PINTAR IMAGE">
    </div>
    {{-- sisi kanan --}}
    <div id="right-box" class="isolate bg-white dark:bg-black px-6 py-24 sm:py-32 lg:px-8 lg:basis-2/4 rounded-xl mt-12 lg:mt-32 mb-14 mr-4 lg:mr-8 ml-4 shadow-2xl transform -translate-x-full transition-transform duration-1000 ease-out">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-black dark:text-white sm:text-4xl">Hubungi Tim Kami</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600 dark:text-gray-400">Kami siap membantu kebutuhan bisnis Anda. Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau memerlukan informasi lebih lanjut.</p>
        </div>
        <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                <label for="first-name" class="block text-sm font-semibold leading-6 text-black dark:text-white">Nama depan</label>
                <div class="mt-2.5">
                    <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-400 dark:bg-gray-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>
                <div>
                <label for="last-name" class="block text-sm font-semibold leading-6 text-black dark:text-white">Nama belakang   </label>
                <div class="mt-2.5">
                    <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-400 dark:bg-gray-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>
                <div class="sm:col-span-2">
                <label for="company" class="block text-sm font-semibold leading-6 text-black dark:text-white">Perusahaan</label>
                <div class="mt-2.5">
                    <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-400 dark:bg-gray-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>
                <div class="sm:col-span-2">
                <label for="email" class="block text-sm font-semibold leading-6 text-black dark:text-white">Email</label>
                <div class="mt-2.5">
                    <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-400 dark:bg-gray-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>
                <div class="sm:col-span-2">
                <label for="phone-number" class="block text-sm font-semibold leading-6 text-black dark:text-white">No telepon</label>
                <div class="relative mt-2.5">
                    <div class="absolute inset-y-0 left-0 flex items-center">
                    <label for="country" class="sr-only">Country</label>
                    <select id="country" name="country" class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 dark:text-gray-200 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                        <option>IDN</option>
                        <option>US</option>
                        <option>CA</option>
                        <option>EU</option>
                    </select>
                    </div>
                    <input type="tel" name="phone-number" id="phone-number" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-400 dark:bg-gray-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>
                <div class="sm:col-span-2">
                <label for="message" class="block text-sm font-semibold leading-6 text-black dark:text-white">Pesan</label>
                <div class="mt-2.5">
                    <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-400 dark:bg-gray-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                </div>
                </div>
            </div>
            <div class="mt-10">
                <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kirim</button>
            </div>
        </form>
    </div>
</div>

<script>
    window.addEventListener('load', function () {
        document.getElementById('right-box').classList.remove('-translate-x-full');
    });
</script>
@endsection
