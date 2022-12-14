<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> --}}

  <title>E-Ticket</title>

  <style>
    .float-right {
      float: right;
    }

    .float-left {
      float: left
    }

    .clearfix {
      clear: both;
    }

    .justify-content-between {
      justify-content: space-between !important;
    }

    .inline {
      display: inline;
    }

    .me-1 {
      margin-right: 10px
    }

    .fw-bold {
      font-weight: bold;
    }

    .personal-info-container {
      padding: 10px;
      border: 2px solid black;
    }

    .mt-3 {
      margin-top: 30px;
    }

    .w-100 {
      width: 100% !important;
    }

    .fs-3 {
      font-size: 35px;
    }

    .text-uppercase {
      text-transform: uppercase;
    }
  </style>
</head>

<body>
  <div class="">
    <div class="">
      <h1 class="float-left">BoboPlace</h1>
      <h1 class="float-right">E-Ticket</h1>
    </div>
    <div class="clearfix"></div>
    <div class="mt-3 w-100">
      <div class="float-left me-1">
        <p>Nomor Tiket</p>
        <p class="fw-bold">{{ $transaction['ticket_number'] }}</p>
      </div>
      <div class="float-left me-1">
        <p>Nama</p>
        <p class="fw-bold">{{ $transaction['name'] }}</p>
      </div>
      <div class="float-left me-1">
        <p>Email</p>
        <p class="fw-bold">{{ $transaction['email'] }}</p>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="mt-3">
      <p class="fs-3 text-uppercase fw-bold">{{ $transaction['hotel']['name'] }}</p>
      <p class="fw-bold">Check In</p>
      <p>{{ $transaction['checkin_date'] }}</p>
      <p class="fw-bold">Check Out</p>
      <p>{{ $transaction['checkout_date'] }}</p>
    </div>
  </div>
</body>

</html>
