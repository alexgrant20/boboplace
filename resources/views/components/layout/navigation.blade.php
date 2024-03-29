<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="{{ asset('images/logo.png') }}" alt="" width="70px" style="margin-right: 5px">BoboPlace
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni"
      aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsFurni">
      <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
        <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        @auth
          @if (Auth::user()->role_id == 2)
            <li class="nav-item {{ Route::is('booking.history') ? 'active' : '' }}">
              <a class="nav-link" href="{{ route('booking.history') }}">Booking History</a>
            </li>
          @endif
        @endauth
        <li class="nav-item {{ Route::is('about-us') ? 'active' : '' }}">
          <a class="nav-link" href="{{ route('about-us') }}">About us</a>
        </li>
        @auth
          <li class="nav-item {{ Route::is('profile.update') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('profile.update', Auth::id()) }}">Profile</a>
          </li>
        @endauth
      </ul>

      <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
        @auth
          <form action="{{ route('logout') }}" method="post">
            @csrf
            <li><button type="submit"
                class="btn btn-danger rounded ms-3 py-1 px-2"style="font-size: 14px">Logout</button></li>
          </form>
        @endauth
        @guest
          <li>
            <a class="btn btn-secondary rounded py-1 px-2" href="{{ route('register') }}" style="font-size: 14px">
              Register
            </a>
          </li>
          <li>
            <a class="btn btn-primary rounded py-1 px-2" href="{{ route('login') }}" style="font-size: 14px">
              Login
            </a>
          </li>
        @endguest
      </ul>
    </div>
  </div>

</nav>
