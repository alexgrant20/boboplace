@extends('layout.user')

@section('title')
  Booking History
@endsection

@section('content')
   <h2>Booking History</h2>
   @foreach ($bookingTransaction as $tr)
      <div style="background-color: white; border-radius: 15px; margin-bottom: 20px; margin-top: 20px; display: flex; padding: 30px; align-items: center">
         <div style="border-radius: 15px;">
            <img class="img-responsive" style="width: 200px"
            src="https://www.ahstatic.com/photos/5451_ho_00_p_1024x768.jpg" alt="">
         </div>
         <div style="width: 100%; margin-left: 20px">
            <div style="display: flex; justify-content: space-between;">
               <div style="display: flex; align-items: center">
                  <iconify-icon icon="icon-park-outline:hotel" width="40" style="color: #3b5d50;"></iconify-icon>
                  <h4 style="color: black; margin-left: 10px; margin-top:10px">{{$tr->hotel->name}}</h4>
               </div>
               <div style="font-weight: bolder; color: black; font-size: 20px;">
                  <span>
                     Rp. {{ number_format($tr->hotel->price, 0, ',', '.') }}
                  </span>
               </div>
            </div>
            <div style="margin-bottom: 10px; margin-top: 10px;">Booking date</div>
            <div style="text-align:center;  font-weight: 600;color:black; width: 250px; background-color: #D0D0D0; border: 1px solid black; border-radius: 10px">{{\Carbon\Carbon::createFromTimestamp(strtotime($tr->checkin_date))->format('d/m/Y')}} - {{\Carbon\Carbon::createFromTimestamp(strtotime($tr->checkout_date))->format('d/m/Y')}}</div>
            <div style="display: flex;justify-content: flex-end;">Transaction Date: {{\Carbon\Carbon::createFromTimestamp(strtotime($tr->transaction_date))->format('d/m/Y')}}</div>
         </div>
      </div>
   @endforeach
@endsection
