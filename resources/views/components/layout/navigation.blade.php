<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

   <div class="container">
      <a class="navbar-brand" href="/"><img src="/images/logo.png" alt="" width="70px" style="margin-right: 5px">BoboPlace</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
         aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsFurni">
         <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item active">
               <a class="nav-link" href="index.html">Home</a>
            </li>
            <li><a class="nav-link" href="{{url('/booking-history')}}">Booking History</a></li>
            <li><a class="nav-link" href="{{url('/about-us')}}">About us</a></li>
            <li><a class="nav-link" href="{{url('/profile')}}">Profile</a></li>
         </ul>

         <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
            @auth
               <li><a class="nav-link" href="#"><img src="/images/user.svg"></a></li>
               <li><a class="nav-link" href="cart.html"><img src="/images/cart.svg"></a></li>
               <form action="/logout" method="post">
                  <li><button type="submit"
                        class="btn btn-danger rounded ms-3 py-1 px-2"style="font-size: 14px">Logout</button></li>
               </form>
            @endauth
            @guest
               <li><a class="btn btn-secondary rounded py-1 px-2" href="/register" style="font-size: 14px">Register</a>
               </li>
               <li><a class="btn btn-primary rounded py-1 px-2" href="/login" style="font-size: 14px">Login</a></li>
            @endguest
         </ul>
      </div>
   </div>

</nav>
