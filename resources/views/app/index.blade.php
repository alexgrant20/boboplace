@extends('layout.user')

@section('title', 'Booking Page')

@section('content')
  @guest
    <div class="testimonial-section">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="testimonial-slider-wrap text-center">

            <div id="testimonial-nav">
              <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
              <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
            </div>

            <div class="testimonial-slider">

              <div class="item">
                <div class="row justify-content-center">
                  <div class="col-lg-12 mx-auto">
                    <div class="testimonial-block text-center">
                      <img class="w-100" src="{{ asset('images/slider-1.png') }}" alt="">
                    </div>
                  </div>
                </div>
              </div>

              <!-- END item -->
              <div class="item">
                <div class="row justify-content-center">
                  <div class="col-lg-12 mx-auto">
                    <div class="testimonial-block text-center">
                      <img class="w-100" src="{{ asset('images/slider-1.png') }}" alt="">
                    </div>
                  </div>
                </div>
              </div>
              <!-- END item -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="blog-section">
      <div class="row mb-5">
        <div class="col-md-6">
          <h2 class="section-title text-primary display-5 fw-bold">Hotels</h2>
        </div>
        <div class="col-md-6 text-start text-md-end">
          <a href="#" class="more">View All Posts</a>
        </div>
      </div>

      <div class="position-relative">
        <div id="hotel-nav">
          <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
          <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
        </div>
        <div class="hotel-slider" style="height: 350px">
          @foreach ($hotels as $hotel)
            <a href="{{ route('hotel.show', $hotel->id) }}"
              class="card rounded-4 shadow-sm overflow-hidden ms-3 text-decoration-none" style="min-height: 100%">
              <img src="{{ asset(@$hotel->file->first()->path) }}" alt="Image" class="w-100" height="200px">
              <div class="px-2 py-3">
                <h3 class="fs-6">{{ $hotel->name }}</h3>
                <p class="mb-0">{{ $hotel->city->name }}</p>
                <strong class="fs-6">Rp. {{ number_format($hotel->price, 0, ',', '.') }}</strong>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    </div>

    <!-- Start Why Choose Us Section -->
    <div class="why-choose-section">
      <div class="row justify-content-between">
        <div class="col-lg-8">
          <h2 class="section-title">Why Choose Us</h2>
          <p class="fs-5">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate
            velit
            imperdiet
            dolor tempor tristique.</p>

          <div class="row my-5">
            <div class="col-6 col-md-6">
              <div class="feature">
                <img class="mb-3" src="{{ asset('images/medal-solid.svg') }}" alt="Image" class="imf-fluid">
                <h3 class="fs-5">Service You Can Trust</h3>
                <p class="fs-6">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                  vulputate.
                </p>
              </div>
            </div>

            <div class="col-6 col-md-6">
              <div class="feature">
                <img class="mb-3" src="{{ asset('images/refund.svg') }}" alt="Image" class="imf-fluid">
                <h3 class="fs-5">Refundable</h3>
                <p class="fs-6">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                  vulputate.
                </p>
              </div>
            </div>

            <div class="col-6 col-md-6">
              <div class="feature">
                <img class="mb-3" src="{{ asset('images/clock.svg') }}" alt="Image" class="imf-fluid">
                <h3 class="fs-5">24/7 Customer Service</h3>
                <p class="fs-6">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                  vulputate.
                </p>
              </div>
            </div>

            <div class="col-6 col-md-6">
              <div class="feature">
                <img class="mb-3" src="{{ asset('images/shield.svg') }}" alt="Image" class="imf-fluid">
                <h3 class="fs-5">Secure Transaction Guaranteed</h3>
                <p class="fs-6">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                  vulputate.
                </p>
              </div>
            </div>

          </div>
        </div>

        <div class="col-lg-4">
          <div class="img-wrap">
            <img src="{{ asset('images/why-choose.png') }}" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <!-- End Why Choose Us Section -->
  @endguest

  @auth
    @if (Auth::user()->role_id == 1)
      {{-- Admin Index Page --}}

      <div class="d-flex justify-content-between p-5 me-2 ms-2">
        <div class="">
          <p style="font-size: 40px; font-weight: bold; color:#3B5D50;">Hotels</p>
        </div>
        <div class="">
          <img class="pe-1" style="margin-bottom: 5px" src=" {{ asset('images/Addimg.png') }} " alt="">
          <a style="color:#575757;" href="{{ route('hotel.create') }}">Add new hotel</a>
        </div>
      </div>

      <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
        @foreach ($hotels as $hotel)
          <div class="mb-3" style="width: 16rem">
            <a href="{{ route('hotel.show', $hotel->id) }}"
              class="card rounded-4 shadow-sm overflow-hidden text-decoration-none d-flex flex-column"
              style="min-height: 100%">
              <img src="{{ asset(@$hotel->file->first()->path) }}" alt="Image" class="w-100" height="200px">
              <div class="px-2 py-3 d-flex flex-column flex-grow-1">
                <h3 class="fs-6 flex-grow-1">{{ $hotel->name }}</h3>
                <p class="mb-0 mt-auto">{{ $hotel->city->name }}</p>
                <strong class="fs-6">Rp. {{ number_format($hotel->price, 0, ',', '.') }}</strong>
              </div>
            </a>
          </div>
        @endforeach
      </div>
    @else
      <div class="testimonial-section">
        <div class="row justify-content-center">
          <div class="col-lg-12">
            <div class="testimonial-slider-wrap text-center">

              <div id="testimonial-nav">
                <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
                <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
              </div>

              <div class="testimonial-slider">

                <div class="item">
                  <div class="row justify-content-center">
                    <div class="col-lg-12 mx-auto">
                      <div class="testimonial-block text-center">
                        <img class="w-100" src="{{ asset('images/slider-1.png') }}" alt="">
                      </div>
                    </div>
                  </div>
                </div>

                <!-- END item -->
                <div class="item">
                  <div class="row justify-content-center">
                    <div class="col-lg-12 mx-auto">
                      <div class="testimonial-block text-center">
                        <img class="w-100" src="{{ asset('images/slider-1.png') }}" alt="">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END item -->
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="blog-section">
        <div class="row">
          <div class="col-md-9">
            <h2 class="section-title text-primary display-5 fw-bold">Hotels</h2>
          </div>
          <div class="col-md-3 align-self-center">
            <select id="city" class="form-control">
              <option value="">Select City</option>
              @foreach ($cities as $city)
                <option value="{{ $city->name }}" @selected($city->name === $q_city)>{{ $city->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>

      <div class="position-relative">
        <div id="hotel-nav">
          <span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
          <span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
        </div>
        <div class="hotel-slider" style="height: 350px">
          @forelse ($hotels as $hotel)
            <a href="{{ route('hotel.show', $hotel->id) }}"
              class="card rounded-4 shadow-sm overflow-hidden ms-3 text-decoration-none" style="min-height: 100%">
              <img src="{{ asset(@$hotel->file->first()->path) }}" alt="Image" class="w-100" height="200px">
              <div class="px-2 py-3">
                <h3 class="fs-6">{{ $hotel->name }}</h3>
                <p class="mb-0">{{ $hotel->city->name }}</p>
                <strong class="fs-6">Rp. {{ number_format($hotel->price, 0, ',', '.') }}</strong>
              </div>
            </a>
          @empty
            <h3 class="text-danger">NO DATA</h3>
          @endforelse
        </div>
      </div>
      </div>

      <!-- Start Why Choose Us Section -->
      <div class="why-choose-section">
        <div class="row justify-content-between">
          <div class="col-lg-8">
            <h2 class="section-title">Why Choose Us</h2>
            <p class="fs-5">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate
              velit
              imperdiet
              dolor tempor tristique.</p>

            <div class="row my-5">
              <div class="col-6 col-md-6">
                <div class="feature">
                  <img class="mb-3" src="{{ asset('images/medal-solid.svg') }}" alt="Image" class="imf-fluid">
                  <h3 class="fs-5">Service You Can Trust</h3>
                  <p class="fs-6">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                    vulputate.
                  </p>
                </div>
              </div>

              <div class="col-6 col-md-6">
                <div class="feature">
                  <img class="mb-3" src="{{ asset('images/refund.svg') }}" alt="Image" class="imf-fluid">
                  <h3 class="fs-5">Refundable</h3>
                  <p class="fs-6">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                    vulputate.
                  </p>
                </div>
              </div>

              <div class="col-6 col-md-6">
                <div class="feature">
                  <img class="mb-3" src="{{ asset('images/clock.svg') }}" alt="Image" class="imf-fluid">
                  <h3 class="fs-5">24/7 Customer Service</h3>
                  <p class="fs-6">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                    vulputate.
                  </p>
                </div>
              </div>

              <div class="col-6 col-md-6">
                <div class="feature">
                  <img class="mb-3" src="{{ asset('images/shield.svg') }}" alt="Image" class="imf-fluid">
                  <h3 class="fs-5">Secure Transaction Guaranteed</h3>
                  <p class="fs-6">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam
                    vulputate.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="img-wrap">
              <img src="{{ asset('images/why-choose.png') }}" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
      <!-- End Why Choose Us Section -->
    @endif
  @endauth
@endsection

@section('js-foot')
  <script>
    $('#city').change(function(e) {
      const route = "{{ route('home') }}";
      window.location.href = route + '?city=' + e.currentTarget.value;
    });
  </script>
@endsection
