<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('transactions', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')->constrained()->onDelete('cascade');
      $table->foreignId('hotel_id')->constrained()->onDelete('cascade');
      $table->foreignId('status_id')->constrained()->onDelete('cascade');
      $table->date('transaction_date');
      $table->date('checkin_date');
      $table->date('checkout_date');
      $table->timestamps();
    });
  }

  public function down()
  {
    Schema::dropIfExists('transactions');
  }
};