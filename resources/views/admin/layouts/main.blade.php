<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle', 'Admin Backend')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.5/css/dataTables.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <style>
    div.dt-container .dt-search input {
      border: 1px solid black;
    }
    div.dt-container .dt-input {
      border: 1px solid black;
    }
    </style>
    @notifyCss
  </head>

  <body class="max-w-7xl mx-auto mt-3 bg-gray-400 rounded-xl">
  @include('notify::components.notify')
    <header>
      <div class="navbar bg-slate-700 rounded-t-xl">
        <div class="navbar-start">
          <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
              </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
              <li><a href="{{route('admin.loan.index')}}">All Applications</a></li>
              
            </ul>
          </div>
          <a class="btn btn-ghost text-xl">Backend </a>
        </div>
        <div class="navbar-center hidden lg:flex">
          <ul class="menu menu-horizontal px-1">
            <li><a href="{{route('admin.loan.index')}}">All Applications</a></li>
            
          </ul>
        </div>
        <div class="navbar-end">
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <button type="submit" class="rounded bg-gray-600 text-white px-4 py-2">Logout</button>
          </form>

        </div>
      </div>
    </header>
    <main class="max-w-7xl mx-auto px-5 py-3 text-black">
      @yield('content')


    </main>
    <footer class="text-center text-black my-10">
      <hr class="border-black" />
      <div class=" py-10">
        Copyright&copy; {{ date('Y') }}
      </div>
    </footer>
    <script src="//cdn.datatables.net/2.1.5/js/dataTables.min.js"></script>
    @notifyJs
    @yield('footer-js1')
    @yield('footer-js2')
    @yield('footer-js3')
    @yield('footer-js4')
    @yield('footer-js5')
  </body>

</html>
