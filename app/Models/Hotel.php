<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
   use HasFactory;

   protected $fillable = [
      'name',
      'rating',
      'price',
      'full_address',
      'description',
      'city_id'
   ];

   public function files()
   {
      return $this->hasMany(File::class);
   }

   public function city()
   {
      return $this->belongsTo(City::class);
   }
}