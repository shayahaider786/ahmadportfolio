<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ahmad Portfolio</title>
    <link rel="stylesheet" href="{{ asset('frontend/output.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/input.css') }}" />
    <link rel="stylesheet" href="{{asset('frontend/media.css')}}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Ovo&display=swap"
      rel="stylesheet"
    />
  </head>

  <body class="font-Outfit leading-8 dark:bg-darkTheme dark:text-white">
    <div
      class="fixed top-0 right-0 w-11/12 -z-10 translate-y-[-80%] dark:hidden"
    >
      <img src="{{ asset('frontend/assets/images/header-bg-color.png') }}" alt="" class="w-full" />
    </div>

    <nav
      id="navbar"
      class="w-full fixed px-5 lg:px-8 xl:px-[8%] py-4 flex items-center justify-between z-50">
      <p
        class="bg-white bg-opacity-50 backdrop-blur-lg shadow-sm dark:bg-darkTheme dark:shadow-white/20 sr-only"
      >
        Hidden
      </p>
      <a href="{{ route('index') }}" class="text-lg">
        Ahmad Shoukat
      </a>

      <ul
        id="navLink"
  class="hidden md:flex items-center gap-6 lg:gap-8 rounded-full px-12 py-2
         bg-white bg-opacity-50 shadow-sm font-Ovo
         border border-gray-300
         dark:bg-transparent dark:border-white/30 dark:backdrop-blur-lg"
      >
        <li>
          <a
            class="hover:text-gray-500 dark:hover:text-gray-300 transition"
            href="#top"
            >Home</a
          >
        </li>
        <li>
          <a
            class="hover:text-gray-500 dark:hover:text-gray-300 transition"
            href="#about"
            >About me</a
          >
        </li>
        <li>
          <a
            class="hover:text-gray-500 dark:hover:text-gray-300 transition"
            href="#services"
            >Services</a
          >
        </li>
        <li>
          <a
            class="hover:text-gray-500 dark:hover:text-gray-300 transition"
            href="#work"
            >Portfolio</a
          >
        </li>
        <li>
          <a
            class="hover:text-gray-500 dark:hover:text-gray-300 transition"
            href="#contact"
            >Contact me</a
          >
        </li>
      </ul>

      <div class="flex items-center gap-4">
        <button onclick="toggleTheme()">
          <img src="{{ asset('frontend/assets/moon_icon.png') }}" alt="" class="w-5 dark:hidden" />
          <img
            src="{{ asset('frontend/assets/sun_icon.png') }}"
            alt=""
            class="w-5 hidden dark:block"
          />
        </button>

        <a
          href="#contact"
          class="hidden lg:flex items-center gap-3 px-8 py-1.5 border border-gray-300 hover:bg-slate-100/70 dark:hover:bg-darkHover rounded-full ml-4 font-Ovo dark:border-white/30"
        >
          Contact
          <img src="{{ asset('frontend/assets/arrow-icon.png') }}" alt="" class="w-3 dark:hidden" />
          <img
            src="{{ asset('frontend/assets/arrow-icon-dark.png') }}"
            alt=""
            class="w-3 hidden dark:block"
          />
        </a>

        <button class="block md:hidden ml-3" onclick="openMenu()">
          <img src="{{ asset('frontend/assets/menu-black.png') }}" alt="" class="w-6 dark:hidden" />
          <img
            src="{{ asset('frontend/assets/menu-white.png') }}"
            alt=""
            class="w-6 hidden dark:block"
          />
        </button>
      </div>
      <!-- ----- mobile menu ------ -->
      <ul
        id="mobileMenu"
        class="flex md:hidden flex-col gap-4 py-20 px-10 fixed -right-64 top-0 bottom-0 w-64 z-50 h-screen bg-rose-50 transition duration-500 font-Ovo dark:bg-darkHover dark:text-white"
      >
        <div class="absolute right-6 top-6" onclick="closeMenu()">
          <img
            src="{{ asset('frontend/assets/close-black.png') }}"
            alt=""
            class="w-5 cursor-pointer dark:hidden"
          />
          <img
            src="{{ asset('frontend/assets/close-white.png') }}"
            alt=""
            class="w-5 cursor-pointer hidden dark:block"
          />
        </div>

        <li><a href="#top" onclick="closeMenu()">Home</a></li>
        <li><a href="#about" onclick="closeMenu()">About me</a></li>
        <li><a href="#services" onclick="closeMenu()">Services</a></li>
        <li><a href="#work" onclick="closeMenu()">Portfolio</a></li>
        <li><a href="#contact" onclick="closeMenu()">Contact me</a></li>
      </ul>
    </nav>

    @yield('content')

    <!-- Footer -->
    <div class="mt-20">
      <div class="text-center">
        <a href="#!">
          <img
            src="{{ asset('frontend/assets/images/logo.png') }}"
            alt=""
            class="w-36 mx-auto mb-2 dark:hidden"
          />
          <img
            src="{{ asset('frontend/assets/images/logo_dark.png') }}"
            alt=""
            class="w-36 mx-auto mb-2 hidden dark:block"
          />
        </a>
        <div class="w-max flex items-center gap-2 mx-auto">
          <img src="{{ asset('frontend/assets/mail-icon.png') }}" alt="" class="w-5 dark:hidden" />
          <img
            src="{{ asset('frontend/assets/mail-icon-dark.png') }}"
            alt=""
            class="w-5 hidden dark:block"
          />
          <a href="#!">ahmadshoukat7766@gmail.com</a>
        </div>
      </div>
      <div
        class="text-center sm:flex items-center justify-between border-t border-gray-400 mx-[10%] mt-12 py-3"
      >
        <p>
          © 2025
          <a href="" target="_blank">Ahmad Shoukat</a>. All
          rights reserved.
        </p>
        <ul class="flex items-center gap-10 justify-center mt-4 sm:mt-0">
          <li>
            <a target="_blank" href="https://github.com/Developer5050" class="flex items-center gap-2">
            <img src="{{ asset('frontend/assets/github-icon.png') }}" alt="GitHub" class="w-5 dark:hidden" />
            <img src="{{ asset('frontend/assets/github-icon-dark.png') }}" alt="GitHub" class="w-5 hidden dark:block" />
            GitHub
            </a>
          </li>
          <li>
           <a target="_blank" href="https://www.linkedin.com/in/ahmad-shoukat-mern" class="flex items-center gap-2">
           <img src="{{ asset('frontend/assets/linkedin-icon.png') }}" alt="LinkedIn" class="w-5 dark:hidden" />
           <img src="{{ asset('frontend/assets/linkedin-icon-dark.png') }}" alt="LinkedIn" class="w-5 hidden dark:block" />
           LinkedIn
           </a>
          </li>
          <li>
           <a target="_blank" href="https://www.instagram.com/ahahmad6105/" class="flex items-center gap-2">
           <img src="{{ asset('frontend/assets/instagram-icon.png') }}" alt="Instagram" class="w-5 dark:hidden" />
           <img src="{{ asset('frontend/assets/instagram-icon-dark.png') }}" alt="Instagram" class="w-5 hidden dark:block" />
           Instagram
           </a>
          </li>
        </ul>
      </div>
    </div>

    <script src="{{ asset('frontend/script.js') }}"></script>
  </body>
</html>
