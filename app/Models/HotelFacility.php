<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelFacility extends Model
{
   use HasFactory;

   protected $fillable = [
      'hotel_id',
      'facility_id'
   ];

   public function facility()
   {
      return $this->belongsTo(Facility::class);
   }

   public function hotel()
   {
      return $this->belongsTo(Hotel::class);
   }
}