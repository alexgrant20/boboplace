<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
   use HasFactory;

   protected $guarded = ['id'];

   public function hotel()
   {
      return $this->belongsTo(Hotel::class)->withTrashed();
   }

   public function status()
   {
      return $this->belongsTo(Status::class);
   }

   public function user()
   {
      return $this->belongsTo(User::class);
   }

   public function paymentType()
   {
      return $this->belongsTo(PaymentType::class);
   }
}
