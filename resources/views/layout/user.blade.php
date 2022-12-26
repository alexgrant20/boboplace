<!doctype html>
<html lang="en">
   <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
<x-layout.head></x-layout.head>

<body>
   <x-layout.navigation></x-layout.navigation>

   <main class="container py-5">
      @yield('content')
   </main>

   <x-layout.footer></x-layout.footer>
</body>

</html>
