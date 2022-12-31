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
         $table->foreignId('payment_type_id')->nullable()->constrained()->onDelete('cascade');
         $table->dateTime('transaction_date');
         $table->date('checkin_date')->nullable();
         $table->date('checkout_date')->nullable();
         $table->string('name')->nullable();
         $table->string('email')->nullable();
         $table->string('identity_number')->nullable();
         $table->string('phone_number')->nullable();
         $table->integer('total_adult');
         $table->integer('total_children');
         $table->integer('total_price')->nullable();
         $table->timestamps();
      });
   }

   public function down()
   {
      Schema::dropIfExists('transactions');
   }
};
