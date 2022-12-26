<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('hotel_facilities', function (Blueprint $table) {
      $table->id();
      $table->foreignId('facility_id')->constrained()->onUpdate('cascade');
      $table->foreignId('hotel_id')->constrained()->onUpdate('cascade');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('hotel_facilities');
  }
};