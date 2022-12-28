@extends('layout.user')

@section('title')
  Detail
@endsection

@section('content')
  <div class="row p-3">
   @if (Auth::user()->role_id == 1)
   <div class="col-1">
      <div class="d-flex justify-content-center" >
         <ul class="list-unstyled">
            <li>
               <a href=""><i class="fa-solid fa-pen-to-square fa-4x"></i></a>
            </li>
            <br>
            <li>
               <a href=""><i class="fa-regular fa-trash-can fa-4x"></i></a>
            </li>
         </ul>
      </div>
    </div>
   @endif

    <div class="col-lg-4">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/Hotel1.jpg') }}" class="d-block rounded img-fluid" alt="..." style="min-height: 650px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Hotel2.jpg') }}" class="d-block rounded w-100" alt="..." style="min-height: 650px; object-fit: cover;">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/Hotel1.jpg') }}" class="d-block rounded w-100" alt="..." style="min-height: 6500px; object-fit: cover;">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    @if (Auth::user()->role_id == 1)
    <div class="col-lg-7 p-2">
    @else
    <div class="col-lg-8 p-2">
    @endif
      <div class="row mb-2">
        <div class="col-8">
          <h3 class="mb-2">{{$hotel->name}}</h3>
          <div class="d-flex">
            <a href="#">{{$hotel->rating}}-star hotel</a>
            <ul class="list-unstyled d-flex ms-3">
               @for ($y=1; $y<=$hotel->rating; $y++)
                  <li><i class="bi bi-star-fill text-warning mx-2"></i></li>
               @endfor
            </ul>
          </div>
        </div>
        <div class="col-4 mb-4">
          <h6 class="fw-bold">Rp. {{ number_format($hotel->price, 0, ',', '.') }}</h6>
          @if (Auth::user()->role_id == 2)
            <a href="/booking/{{$hotel->id}}" class="btn btn-primary px-4 rounded-pill">Book Now</a>
          @endif


        </div>
      </div>
      <div class="row mb-2">
        <div class="col-12">
          <p class="lead text-muted mb-3">{{$hotel->description}}
          </p>
        </div>
      </div>
      <div class="row p-2 rounded shadow border border-2">
        <h4 class="border-bottom border-1 text-muted">Facilities</h4>
        <div class="col-8">
          <ul class="list-unstyled">
            <li>
              <i class="bi bi-wifi"></i>
              <span>Free Wifi</span>
            </li>
            <li>
              <i class="bi bi-taxi-front-fill"></i>
              <span>Taxi Driver</span>
            </li>
          </ul>
        </div>
        <div class="col-4" class="d-flex">
          <div>
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <div class="flex-fill">
            <div>Address</div>
            <p>{{$hotel->full_address}}</p>
          </div>

        </div>

      </div>
      <div class="row mt-2 d-flex justify-content-center">



      </div>
    </div>
  </div>
@endsection
