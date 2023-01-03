<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Hotel extends Model
{
   use HasFactory, SoftDeletes;

   protected $softDelete = true;
   protected $dates = ['delete_at'];

   protected $fillable = [
      'name',
      'rating',
      'price',
      'full_address',
      'description',
      'city_id'
   ];

   public function file()
   {
      return $this->hasMany(File::class);
   }

   public function city()
   {
      return $this->belongsTo(City::class);
   }

   public function transaction()
   {
      return $this->hasMany(Transaction::class);
   }

   public function hotelFacility()
   {
      return $this->hasMany(HotelFacility::class);
   }
}
