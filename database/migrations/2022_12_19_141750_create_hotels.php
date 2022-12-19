<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  public function up()
  {
    Schema::create('hotels', function (Blueprint $table) {
      $table->id();
      $table->foreignId('city_id')->constrained()->onDelete('cascade');
      $table->string('name')->unique();
      $table->integer('rating');
      $table->text('full_address');
      $table->timestamps();
      $table->foreignId('created_by')->constrained('users')->onDelete('cascade');
      $table->foreignId('updated_by')->constrained('users')->onDelete('cascade');
    });
  }

  public function down()
  {
    Schema::dropIfExists('hotels');
  }
};