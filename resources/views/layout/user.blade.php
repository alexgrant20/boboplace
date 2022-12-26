<!doctype html>
<html lang="en">

<x-layout.head>

</x-layout.head>

<body>
   <x-layout.navigation></x-layout.navigation>

   <main class="container py-5">
      @yield('content')
   </main>

   <x-layout.footer></x-layout.footer>
</body>

</html>
