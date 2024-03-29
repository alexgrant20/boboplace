@extends('layout.user')

@section('title')
  Detail
@endsection

@section('content')
  <div class="row g-5">
    @if (@Auth::user()->role_id == 1)
      <div class="col-1">
        <div class="d-flex justify-content-center">
          <ul class="list-unstyled">
            <li class="d-flex justify-content-center">
              <a href="{{ route('hotel.edit', ['hotel' => $hotel]) }}"><i class="fa-solid fa-pen-to-square fa-3x"></i></a>
            </li>
            <br>
            <li>
              <form action={{ route('hotel.destroy', ['hotel' => $hotel]) }} method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn">
                  <i class="fas fa-trash-can fa-3x"></i>
                </button>
              </form>
            </li>
          </ul>
        </div>
      </div>
    @endif

    <div class="col-lg-4">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
          @foreach ($hotel->file as $file)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}"
              class="active" aria-current="{{ $loop->first ? true : false }}"
              aria-label="Slide {{ $loop->iteration }}"></button>
          @endforeach
        </div>
        <div class="carousel-inner">
          @foreach ($hotel->file as $file)
            <div class="carousel-item  @if ($loop->first) active @endif">
              <img src="{{ asset($file->path) }}" class="d-block rounded img-fluid" alt="..."
                style="min-height: 650px; object-fit: cover;">
            </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    @if (@Auth::user()->role_id == 1)
      <div class="col-lg-7 p-2">
      @else
        <div class="col-lg-8 p-2">
    @endif

    <div class="d-flex align-items-center justify-content-between">
      <div>
        <h3 class="mb-2">{{ $hotel->name }}</h3>
        <div class="d-flex w-100">
          <a href="#">{{ $hotel->rating }}-star hotel</a>
          <ul class="list-unstyled d-flex ms-3">
            @for ($y = 1; $y <= $hotel->rating; $y++)
              <li><i class="bi bi-star-fill text-warning mx-2"></i></li>
            @endfor
          </ul>
        </div>
        <h6 class="fw-bold">Rp. {{ number_format($hotel->price, 0, ',', '.') }}</h6>
      </div>
      <div>
        @if (@Auth::user()->role_id == 2)
          <button data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-primary px-4 rounded-pill">
            Book Now
          </button>
        @endif
        @guest
          <a href="/login" class="btn btn-primary px-4 rounded-pill">Book Now</a>
        @endguest
      </div>
    </div>


    <p class="lead text-muted mb-3" style="text-align: justify">
      {{ $hotel->description }}
    </p>

    <div class="row p-2 rounded shadow border border-2">
      <h4 class="border-bottom border-1 text-muted">Facilities</h4>
      <div class="col-8">
        <ul class="list-unstyled">
          @foreach ($hotel->hotelFacility as $hf)
            <li>
              <i class="{{ $hf->facility->icon }}"></i>
              <span>{{ $hf->facility->name }}</span>
            </li>
          @endforeach
        </ul>
      </div>
      <div class="col-4" class="d-flex">
        <div>
          <i class="bi bi-geo-alt-fill"></i>
        </div>
        <div class="flex-fill">
          <div>Address</div>
          <p>{{ $hotel->full_address }}</p>
        </div>
      </div>
    </div>


    <div class="modal modal-lg fade" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5">Book Now</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="{{ route('booking.store') }}" method="POST" id="bookingForm">
              @csrf
              <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
              <div class="row gx-2 gy-3">
                <div class="col-md-6">
                  <label class="form-label" for="total_children">Total Children</label>
                  <input type="text" name="total_children" id="total_children" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="total_adult">Total Adult</label>
                  <input type="text" name="total_adult" id="total_adult" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="check_in">Check in </label>
                  <input type="text" name="check_in" class="form-control datetimes" id="check_in" />
                </div>
                <div class="col-md-6">
                  <label class="form-label" for="check_out">Check out</label>
                  <input type="text" name="check_out" class="form-control datetimes" id="check_out" />
                </div>
              </div>
              <div class="text-end mt-3">
                <button class="btn btn-primary" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  @endsection


  @section('js-foot')
    {!! JsValidator::formRequest('App\Http\Requests\BookTransactionRequest') !!}
    <script>
      $(function() {
        $('.datetimes').daterangepicker({
          autoUpdateInput: false,
          singleDatePicker: true,
          locale: {
            cancelLabel: 'Clear'
          }
        });

        $('.datetimes').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('MM/DD/YYYY'));
        });

        $('.datetimes').on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
        });
      });
    </script>
  @endsection
