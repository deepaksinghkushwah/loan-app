<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    @notifyCss
   
  </head>

  <body class="max-w-7xl mx-auto mt-3 bg-slate-200 rounded-xl">
    @include('notify::components.notify')
    <header>
      <div class="navbar bg-slate-700 rounded-t-xl text-white">
        <div class="navbar-start">
          <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">

              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
              </svg>

            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
              <li><a>Item 1</a></li>
              <li><a>Item 2</a></li>
            </ul>
          </div>
          <a href="{{ route('home') }}" class="btn btn-ghost text-xl">{{ config("app.name")}}</a>
        </div>
        <div class="navbar-center hidden lg:flex">
          <ul class="menu menu-horizontal px-1">
            <li><a href="{{ route('loan.application.form') }}">Apply For Loan</a></li>
          </ul>
        </div>
        <div class="navbar-end">
          @auth
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit" class="rounded bg-gray-600 text-white px-4 py-2">Logout</button>
            </form>
          @else
            <a href="{{ route('login') }}" class="btn btn-ghost text-white">Login</a>
            <a href="{{ route('register') }}" class="btn btn-ghost text-white">Register</a>
          @endauth

        </div>
      </div>
    </header>
    <div class="px-10 pt-10 pb-10 dark:bg-gray-900 text-white">
      {{ $slot }}
    </div>
     @notifyJs
  </body>

</html>
