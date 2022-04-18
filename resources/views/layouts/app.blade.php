<!DOCTYPE html>
<html lang="en">

<head>
   @include('includes.meta')

   <title>@yield('title')</title>

   {{-- Style --}}
   @stack('prepend-style')
   @include('includes.style')
   @stack('addon-style')
</head>

<body>
   {{-- Navbar --}}
   @include('includes.navbar')

   {{-- Page Contente --}}
   @yield('content')

   {{-- Footer --}}
   @include('includes.footer')

   {{-- Script --}}
   @stack('prepend-script')
   @include('includes.script')
   @stack('addon-script')
</body>

</html>
