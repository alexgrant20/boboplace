@extends('layout.user')

@section('title', 'Booking History')


@section('content')
   <h2>Booking History</h2>
   @foreach ($bookingTransaction as $tr)
      <div class="bg-white d-flex align-items-center"
         style="border-radius: 15px; margin-bottom: 20px; margin-top: 20px; padding: 30px;">
         <div style="border-radius: 15px;">
            <img class="img-responsive" style="width: 200px" src="{{ asset(@$tr->hotel->file->first()->path) }}"
               alt="">
         </div>
         <div class="w-100" style="margin-left: 20px">
            <div class="d-flex justify-content-between">
               <div class="d-flex align-items-center">
                  <iconify-icon icon="icon-park-outline:hotel" width="40" class="text-primary"></iconify-icon>
                  <h4 class="text-dark" style="margin-left: 10px; margin-top:10px">{{ $tr->hotel->name }}</h4>
               </div>
               <div class="fw-bold text-dark" style="font-size: 20px;">
                  <span>
                     Rp. {{ number_format($tr->hotel->price, 0, ',', '.') }}
                  </span>
               </div>
            </div>
            <div style="margin-bottom: 10px; margin-top: 10px;">Booking date</div>
            <div class="text-center fw-bold text-dark border border-dark"
               style="width: 250px; background-color: #D0D0D0; border-radius: 10px">
               {{ date('d/m/Y', strtotime($tr->checkin_date)) }} -
               {{ date('d/m/Y', strtotime($tr->checkout_date)) }}
            </div>
            <div style="display: flex;justify-content: flex-end;">
               Transaction Date:
               {{ date('d/m/Y', strtotime($tr->transaction_date)) }}
            </div>
         </div>
      </div>
   @endforeach
@endsection
