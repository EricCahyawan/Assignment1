

  <head>
    <script src="https://kit.fontawesome.com/28a0207ac2.js" crossorigin="anonymous"></script>
  </head>
  <header class="bg-[#eae29f]  dark:bg-[#1E1E2E] fixed container z-10">
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8 " aria-label="Global">
      <div class="flex lg:flex-1 justify-start pl-3">
        <div class="rounded p-1">
          <h1 class="text-black dark:text-white text-3xl font-extrabold">Warung PINTAR</h1>
        </div>
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="/" class="text-sm p-1 font-semibold leading-6 text-black rounded-lg hover:bg-gray-50  dark:text-white 
        dark:hover:bg-gray-900">Halaman utama</a>
        <div class="relative">
          <button type="button" class="flex items-center gap-x-1 text-sm font-semibold leading-6 text-black rounded-lg hover:bg-gray-50 dark:text-white p-1
        dark:hover:bg-gray-900" aria-expanded="false" id="productDropdownButton">
            Produk
            <svg class="h-5 w-5 flex-none text-gray-900 dark:text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>
  
          <div id="productDropdown" class="absolute -left-8 top-full z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-[#eae29f]  dark:bg-[#1E1E2E] shadow-lg ring-1 ring-gray-900/5 hidden">
            <div class="p-4">
              <!-- Dropdown items here -->
              @include('includes.dropdownItems')
            </div>
          </div>
        </div>
        <a href="/contact" class="text-sm p-1 font-semibold leading-6 text-black rounded-lg hover:bg-gray-50 dark:text-white 
        dark:hover:bg-gray-900">Hubungi</a>
      </div>
      {{-- toggle dark mode --}}
      @include('includes.toggleDarkMode')
      <div id="openSideBarContainer" class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open side bar</span>
          <svg id="openSideBar" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
    </nav>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-10"></div>
      {{-- side bar --}}
      <div id="sideBar" class="fixed  inset-y-0 right-0 z-10 w-full overflow-y-auto bg-[#eae29f]  dark:bg-[#1E1E2E] px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <h1 class="font-extrabold text-black dark:text-white">Warung PINTAR</h1>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            {{-- close side bar --}}
            <svg id="closeSideBar" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="/" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-black dark:text-white hover:bg-gray-50 dark:hover:bg-gray-900">Halaman utama</a>
              <a href="#" class="dropdownSideBarContainer relative -mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-black dark:text-white hover:bg-gray-50 dark:hover:bg-gray-900">
                Produk
                <svg class="h-5 w-5 flex-none absolute left-16 bottom-[0.27cm] text-gray-900 dark:text-white" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
              </a>
              <div class="dropdownSideBar hidden">
                @include('includes.dropdownItems')
              </div>
              <a href="/contact" class="-mx-3 block rounded-lg py-2.5 px-3 text-base font-semibold leading-6 text-black dark:text-white hover:bg-gray-50 dark:hover:bg-gray-900">Hubungi</a>
            </div>
            <div class="py-6">
              {{-- toggle dark mode --}}
              @include('includes.toggleDarkModeMobile')
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>



<script>
  // show dropdown
  document.getElementById('productDropdownButton').addEventListener('click', function() {
    var dropdown = document.getElementById('productDropdown');
    dropdown.classList.toggle('hidden');
  });

  // window
  
  // close side bar
  document.getElementById("closeSideBar").addEventListener("click", () => {
    var sideBar = document.getElementById("sideBar");
    sideBar.classList.add("hidden");
    var openSideBarContainer = document.getElementById("openSideBarContainer");
    openSideBarContainer.classList.add("z-20");

  });

  // open side bar
  document.getElementById("openSideBar").addEventListener("click", () => {
    var sideBar = document.getElementById("sideBar");
    sideBar.classList.remove("hidden");
    var openSideBarContainer = document.getElementById("openSideBarContainer");
    openSideBarContainer.classList.remove("z-20");
  });

  // toggle dark mode
  var isOn = false;
  document.querySelector(".power").addEventListener('click', function() {
  var power = document.querySelector(".power");
  if(isOn == false){
    var html = document.getElementById("html");
    html.classList.add("dark");
    isOn = true;
  }
  else{
    var html = document.getElementById("html");
    html.classList.remove("dark");
    isOn = false;
  }
  });

  document.querySelector(".powerMobile").addEventListener('click', function() {
  var power = document.querySelector(".powerMobile");
  if(isOn == false){
    var html = document.getElementById("html");
    html.classList.add("dark");
    isOn = true;
  }
  else{
    var html = document.getElementById("html");
    html.classList.remove("dark");
    isOn = false;
  }
});

var isDropdownSideBarHidden = true;
document.querySelector('.dropdownSideBarContainer').addEventListener('click', () => {
  if(isDropdownSideBarHidden){
    var dropdownSideBar = document.querySelector('.dropdownSideBar');
    dropdownSideBar.classList.remove('hidden');
    isDropdownSideBarHidden = false;
  }
  else{
    var dropdownSideBar = document.querySelector('.dropdownSideBar');
    dropdownSideBar.classList.add('hidden');
    isDropdownSideBarHidden = true;
  }
});




</script>
