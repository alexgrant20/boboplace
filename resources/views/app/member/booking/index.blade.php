@extends('layout.user')

@section('title', 'Booking Page')

@php
  $price = $transaction->hotel->price;
  $tax = $price * 0.1;
  
  $totalPrice = $price + $tax;
@endphp

@section('content')
  <div class="bs-stepper">
    <div class="bs-stepper-header" role="tablist">
      <!-- your steps here -->
      <div class="step" data-target="#book-part">
        <button type="button" class="step-trigger" role="tab" aria-controls="book-part" id="book-part-trigger">
          <span class="bs-stepper-circle">1</span>
          <span class="bs-stepper-label">Book</span>
        </button>
      </div>
      <div class="line"></div>
      <div class="step" data-target="#review-part">
        <button type="button" class="step-trigger" role="tab" aria-controls="review-part" id="review-part-trigger">
          <span class="bs-stepper-circle">2</span>
          <span class="bs-stepper-label">Review</span>
        </button>
      </div>
      <div class="line"></div>
      <div class="step" data-target="#payment-part">
        <button type="button" class="step-trigger" role="tab" aria-controls="payment-part" id="payment-part-trigger">
          <span class="bs-stepper-circle">3</span>
          <span class="bs-stepper-label">Payment</span>
        </button>
      </div>
    </div>
    <div class="bs-stepper-content py-4">
      <!-- your steps content here -->
      <div id="book-part" class="content" role="tabpanel" aria-labelledby="book-part-trigger">
        <h2 class="fs-5 text-primary text-uppercase mb-5">Input your data</h2>
        <form action="" method="POST" id="book-form">
          <div class="row gx-4 gy-2">
            <div class="col-md-8">
              <div class="card mb-3" style="background-color: rgba(255,250,217,255)">
                <div class="card-header text-uppercase">You need to know</div>
                <div class="card-body">
                  <h5 class="card-title">Please read before you book</h5>
                  <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius culpa quia
                    cumque
                    dignissimos consequatur sint tenetur, dolore architecto rem iusto fugit voluptate nobis harum
                    eos nisi
                    cupiditate non voluptatum accusantium id. Distinctio, possimus? Itaque nemo, placeat
                    praesentium, fuga
                    enim accusantium dolorem eaque quasi perferendis quod veniam adipisci, deserunt non dolorum.
                  </p>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body">
                  <div class="mb-2">
                    <label for="name" class="form-label">Person Name</label>
                    <input type="text" value="{{ $transaction->name }}" name="name" id="name"
                      class="form-control form-control-lg">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">Phone Number</label>
                    <input type="text" value="{{ $transaction->phone_number }}" name="phone_number" id="phone_number"
                      class="form-control form-control-lg">
                  </div>
                  <div class="row g-3 mb-2">
                    <div class="col-md">
                      <label for="identity_number" class="form-label">Identity Number</label>
                      <input type="text" value="{{ $transaction->identity_number }}" name="identity_number"
                        id="identity_number" class="form-control form-control-lg">
                    </div>
                    <div class="col-md">
                      <label for="email" class="form-label">Email</label>
                      <input type="text" value="{{ $transaction->email }}" name="email" id="email"
                        class="form-control form-control-lg">
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion" id="book-price-accordion">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="book-heading">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#book-price-summary" aria-controls="book-price-summary">
                      <div class="d-flex align-items-center justify-content-between">
                        <span class="fs-6 text-dark fw-bold me-3">Total Price</span>
                        <span>
                          Rp. {{ number_format($totalPrice, 0, ',', '.') }}
                        </span>
                      </div>
                    </button>
                  </h2>
                  <div id="book-price-summary" class="accordion-collapse collapse" aria-labelledby="book-heading"
                    data-bs-parent="#book-price-accordion">
                    <div class="accordion-body">
                      <div class="d-flex align-items-center justify-content-between mb-4">
                        <span class="fs-6 text-dark fw-bold me-3">Hotel Price</span>
                        <span>Rp. {{ number_format($price, 0, ',', '.') }}</span>
                      </div>
                      <div class="d-flex align-items-center justify-content-between">
                        <span class="fs-6 text-dark fw-bold me-3">Fee</span>
                        <span>
                          Rp. {{ number_format($tax, 0, ',', '.') }}
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-5 text-end">
                <button class="btn btn-success next-submit-form">Submit</button>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center gap-1 mb-3">
                    <i class="bi bi-building fs-4 text-primary"></i>
                    <span class="fs-5" style="font-weight: 500">Hotel Mariguna</span>
                  </div>
                  <div class="d-flex w-100 justify-content-between align-items-center mb-3">
                    <div class="d-flex flex-column">
                      <span class="text-secondary fs-6">
                        Check-in
                      </span>
                      <span class="fw-bold text-dark fs-6">
                        {{ date('d F Y', strtotime($transaction->checkin_date)) }}
                      </span>
                    </div>
                    <div>
                      <i class="fa-solid fa-arrow-right"></i>
                    </div>
                    <div class="d-flex flex-column">
                      <span class="text-secondary fs-6">
                        Check-out
                      </span>
                      <span class="fw-bold text-dark fs-6">
                        {{ date('d F Y', strtotime($transaction->checkout_date)) }}
                      </span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-5">
                      <img class="img-responsive w-100 h-100"
                        src="https://www.ahstatic.com/photos/5451_ho_00_p_1024x768.jpg" alt="">
                    </div>
                    <div class="col-md-7">
                      <div class="d-flex gap-3 mb-3">
                        <div class="d-flex align-items-center gap-2">
                          <i class="fa-solid fa-baby fs-5"></i>
                          <div>
                            {{ $transaction->total_children }}
                          </div>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                          <i class="fa-solid fa-person fs-5"></i>
                          <div>
                            {{ $transaction->total_adult }}
                          </div>
                        </div>
                      </div>
                      <h2 class="fs-6 border-bottom pb-1">Facilities</h2>
                      <div class="d-flex gap-1 align-items-center">
                        <i class="fa-solid fa-wifi text-success"></i>
                        <span>Free Wi-fi</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div id="review-part" class="content" role="tabpanel" aria-labelledby="review-part-trigger">
        <h2 class="fs-5 text-primary text-uppercase mb-5">Review</h2>

        <div class="row gx-4 gy-2">
          <div class="col-md-8">
            <div class="card mb-5">
              <div class="card-header bg-white">
                <h3 class="fs-5 fw-bold mb-0">Check hotel detail</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <img class="img-responsive w-100 h-100 rounded"
                      src="https://www.ahstatic.com/photos/5451_ho_00_p_1024x768.jpg" alt="">
                  </div>
                  <div class="col-md-7">
                    <div class="d-flex align-items-center gap-1 mb-3 border-2 border-bottom pb-3">
                      <i class="fa-solid fa-hotel fs-3 text-primary me-2"></i>
                      <span class="fs-3" style="font-weight: 500">Hotel Mariguna</span>
                    </div>
                    <div>
                      <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="fs-6 fw-bold">
                          Waktu Penginapan
                        </span>
                        <i class="fa-regular fa-clock"></i>
                      </div>
                      <div class="d-flex w-100 justify-content-between align-items-center">
                        <div class="d-flex flex-column">
                          <span class="text-secondary fs-6">
                            Check-in
                          </span>
                          <span class="fw-bold text-dark fs-6">
                            10 Oktober 2020
                          </span>
                        </div>
                        <div>
                          <i class="fa-solid fa-arrow-right"></i>
                        </div>
                        <div class="d-flex flex-column">
                          <span class="text-secondary fs-6">
                            Check-out
                          </span>
                          <span class="fw-bold text-dark fs-6">
                            13 Oktober 2020
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="accordion mb-5" id="privay-policy-accordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="privacy-policy-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#privacyCollapse-1" aria-controls="privacyCollapse-1">
                    <div class="fs-5 fw-bold">
                      Hotel privacy and policy
                    </div>
                  </button>
                </h2>
                <div id="privacyCollapse-1" class="accordion-collapse collapse show"
                  aria-labelledby="privacy-policy-header" data-bs-parent="#privay-policy-accordion">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, dolorum, obcaecati magnam
                    consequuntur cupiditate libero vero adipisci laudantium accusantium totam fuga facere
                    placeat, ipsam voluptatibus nisi doloremque sint saepe pariatur?
                  </div>
                </div>
              </div>
            </div>

            <div class="accordion" id="review-price-accordion">
              <div class="accordion-item">
                <h2 class="accordion-header" id="review-price-heading">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#review-price-summary" aria-controls="review-price-summary">
                    <div class="d-flex align-items-center justify-content-between">
                      <span class="fs-6 text-dark fw-bold me-3">Total Price</span>
                      <span>
                        Rp. {{ number_format($totalPrice, 0, ',', '.') }}
                      </span>
                    </div>
                  </button>
                </h2>
                <div id="review-price-summary" class="accordion-collapse collapse"
                  aria-labelledby="review-price-heading" data-bs-parent="#review-price-accordion">
                  <div class="accordion-body">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      <span class="fs-6 text-dark fw-bold me-3">Hotel Price</span>
                      <span> Rp. {{ number_format($price, 0, ',', '.') }}</span>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                      <span class="fs-6 text-dark fw-bold me-3">Fee</span>
                      <span>
                        Rp. {{ number_format($tax, 0, ',', '.') }}
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-5 text-end">
              <button class="btn btn-success next-submit-form" next-step="true">Submit</button>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-header bg-white">
                <h3 class="fs-5 fw-bold mb-0">Purchaser Identity</h3>
              </div>
              <div class="card-body">
                <div class="mb-3">
                  <div>Full Name</div>
                  <div class="name"></div>
                </div>
                <div class="mb-3">
                  <div>Phone Number</div>
                  <div class="phone_number"></div>
                </div>
                <div class="mb-3">
                  <div>Email</div>
                  <div class="email"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="payment-part" class="content" role="tabpanel" aria-labelledby="payment-part-trigger">
        <h2 class="fs-5 text-primary text-uppercase mb-5">Payment</h2>

        <form method="POST" class="d-flex flex-column" id="payment-form">

          <div class="d-flex gap-2 align-items-center mb-4">
            <input type="radio" id="ovo" name="payment_type" value="ovo">
            <img
              src="https://1.bp.blogspot.com/-Iq0Ztu117_8/XzNYaM4ABdI/AAAAAAAAHA0/MabT7B02ErIzty8g26JvnC6cPeBZtATNgCLcBGAsYHQ/s1000/logo-ovo.png"
              width="200px" alt="" style="aspect-ratio: 2/1">
          </div>

          <div class="d-flex gap-2 align-items-center mb-4">
            <input type="radio" id="dana" name="payment_type" value="dana">
            <img src="https://i.pinimg.com/originals/2b/1f/11/2b1f11dec29fe28b5137b46fffa0b25f.png" width="200px"
              alt="" style="aspect-ratio: 2/1.3;">
          </div>

          <button class="btn btn-success next-submit-form align-self-end">Submit</button>
        </form>

      </div>
    </div>
  </div>

@endsection

@section('js-head')
  <script>
    $(function() {
      $('.daterange').daterangepicker();

      const stepperEl = $('.bs-stepper');
      const stepper = new Stepper(stepperEl[0])

      $('#book-form').on('submit', async function(e) {
        const formPayload = $(this).serialize();

        const response = await $.ajax('{{ route('booking.update', $transaction->id) }}', {
          'method': 'put',
          'data': formPayload,
          'headers': {
            'X-CSRF-TOKEN': "{{ csrf_token() }}",
          }
        })

        if (response.status == 200) {
          $('.name').text(response.name);
          $('.phone_number').text(response.phone_number);
          $('.email').text(response.email);
          stepper.next();
          $(document).scrollTop(0);
        }
      });

      $('#payment-form').on('submit', async function() {
        const formPayload = $(this).serialize();

        const response = await $.ajax('{{ route('booking.finalize', $transaction->id) }}', {
          'method': 'post',
          'data': formPayload,
          'headers': {
            'X-CSRF-TOKEN': "{{ csrf_token() }}",
          }
        })

        if (response.status == 200) {
          window.location.href = "{{ route('booking.print-ticket') }}";
        }
      });


      $('.next-submit-form').on('click', function(e) {
        e.preventDefault();
        const isNextStep = $(this).attr('next-step');
        isNextStep ? stepper.next() : $(this).submit();
        $(document).scrollTop(0);
      })
    });
  </script>
@endsection
